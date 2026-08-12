<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\BiteshipService;

class CartController extends Controller
{
    protected $biteship;

    public function __construct(BiteshipService $biteship)
    {
        $this->biteship = $biteship;
    }

    /**
     * Tampilkan Halaman Cart & Checkout
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['harga'] * $item['jumlah'];
        }

        $hasItems = count($cart) > 0;
        $shipping = $hasItems ? 15000 : 0; // Flat ongkir contoh Rp 15.000
        $biayaOperasional = $hasItems ? 1000 : 0; // Biaya operasional Rp 1.000
        $total = $subtotal + $shipping + $biayaOperasional;

        return view('product.cart_checkout', compact('cart', 'subtotal', 'shipping', 'biayaOperasional', 'total'));
    }

    /**
     * Tambah Produk ke Keranjang
     */
    public function add(Request $request, $id)
    {
        $product = Product::with(['galleries', 'store', 'variants'])->findOrFail($id);

        $cart = session()->get('cart', []);
        $quantity = (int) $request->input('quantity', 1);

        // $product->harga is the selling price (discounted if on sale, normal if not)
        // $product->harga_diskon is the original strikethrough price before discount (if set)
        $basePrice = (float) $product->harga;
        $hargaAsal = $product->harga_diskon ? (float) $product->harga_diskon : (float) $product->harga;

        $fotoPath = $product->galleries->first()?->foto_path ?? '';

        $variantId = $request->input('variant_id');
        $variantName = $request->input('variant_name');
        $extraPrice = 0;

        if ($variantId) {
            $variant = $product->variants->find($variantId);
            if ($variant) {
                $variantName = $variant->nama_varian;
                $extraPrice = (float) $variant->harga_tambahan;
            }
        }

        $finalPrice = $basePrice + $extraPrice;
        $finalHargaAsal = $hargaAsal + $extraPrice;
        $cartKey = $variantId ? ($id . '_v' . $variantId) : $id;

        if (isset($cart[$cartKey])) {
            $cart[$cartKey]['jumlah'] += $quantity;
        } else {
            $cart[$cartKey] = [
                'id' => $product->id,
                'cart_key' => $cartKey,
                'nama_produk' => $product->nama_produk,
                'variant_id' => $variantId,
                'variant_name' => $variantName,
                'harga' => $finalPrice,             // Discounted selling price
                'harga_asal' => $finalHargaAsal,    // Strikethrough price if discounted
                'foto_path' => $fotoPath,
                'jumlah' => $quantity,
                'berat_gram' => $product->berat_gram ?? 500,
                'store_id' => $product->store_id,
                'store_name' => $product->store->nama_toko ?? 'Toko Resmi',
            ];
        }

        session()->put('cart', $cart);

        // Jika menekan "Beli Sekarang", alihkan ke /cart
        if ($request->input('action') === 'buy_now') {
            return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan. Silakan lanjutkan ke pembayaran.');
        }

        // Jika "Tambah ke Keranjang", tetap di halaman yang sama dan tampilkan notifikasi
        return back()->with('success', '"' . $product->nama_produk . '" berhasil ditambahkan ke keranjang!');
    }

    /**
     * Update Jumlah Barang di Keranjang
     */
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $type = $request->input('type');
            if ($type === 'increase') {
                $cart[$id]['jumlah']++;
            } elseif ($type === 'decrease') {
                $cart[$id]['jumlah']--;
                if ($cart[$id]['jumlah'] <= 0) {
                    unset($cart[$id]);
                }
            } elseif ($request->has('quantity')) {
                $qty = (int) $request->input('quantity');
                if ($qty <= 0) {
                    unset($cart[$id]);
                } else {
                    $cart[$id]['jumlah'] = $qty;
                }
            }

            session()->put('cart', $cart);
        }

        return back()->with('success', 'Keranjang berhasil diperbarui.');
    }

    /**
     * Hapus Item dari Keranjang
     */
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    /**
     * Proses Pembuatan Order / Checkout
     */
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Keranjang belanja Anda kosong.');
        }

        $user = Auth::user();
        $alamat = $request->input('address', 'Jl. Utama No. 123, Denpasar, Bali');

        $destinationAreaId = $request->input('destination_area_id');
        $courierCompany = $request->input('courier_company');
        $courierType = $request->input('courier_type');
        $shippingCost = $request->input('shipping_cost', 0);

        // Kelompokkan item berdasarkan store_id
        $itemsByStore = [];
        foreach ($cart as $item) {
            $storeId = $item['store_id'] ?? 1;
            $itemsByStore[$storeId][] = $item;
        }

        foreach ($itemsByStore as $storeId => $items) {
            $storeSubtotal = 0;
            foreach ($items as $item) {
                $storeSubtotal += $item['harga'] * $item['jumlah'];
            }

            $biayaOperasional = 1000;
            $totalHarga = $storeSubtotal + $shippingCost + $biayaOperasional;

            $order = Order::create([
                'user_id' => $user ? $user->id : 1,
                'store_id' => $storeId,
                'kode_transaksi' => 'TRX-' . strtoupper(Str::random(8)),
                'total_harga' => $totalHarga,
                'status_pembayaran' => 'paid',
                'status_pengiriman' => 'pending',
                'alamat_pengiriman' => $alamat,
                'destination_area_id' => $destinationAreaId,
                'courier_company' => $courierCompany,
                'courier_type' => $courierType,
                'shipping_cost' => $shippingCost,
            ]);

            foreach ($items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'harga_satuan' => $item['harga'], // Diskon / Harga Jual Nyata
                    'jumlah' => $item['jumlah'],
                    'subtotal' => $item['harga'] * $item['jumlah'],
                ]);
            }
        }

        session()->forget('cart');

        return redirect()->route('cust_recent_orders')->with('success', 'Pesanan Anda berhasil dibuat dan dikonfirmasi! Terima kasih telah berbelanja.');
    }

    /**
     * Cari Area pengiriman berdasarkan keyword via Biteship
     */
    public function searchArea(Request $request)
    {
        $query = $request->input('query');
        if (empty($query) || strlen($query) < 3) {
            return response()->json([]);
        }

        $areas = $this->biteship->searchArea($query);
        return response()->json($areas);
    }

    /**
     * Hitung ongkos kirim berdasarkan origin, destination dan items
     */
    public function checkRates(Request $request)
    {
        $destinationAreaId = $request->input('destination_area_id');
        $storeId = $request->input('store_id');
        $couriers = $request->input('couriers', 'jne,sicepat,jnt,anteraja');

        if (!$destinationAreaId || !$storeId) {
            return response()->json(['error' => 'Data origin atau destination tidak lengkap'], 400);
        }

        $store = \App\Models\Store::find($storeId);
        $originAreaId = $store->biteship_area_id ?? 'IDNP1IDNC110IDND261IDZ80111'; // Fallback Denpasar

        // Ambil item dari keranjang untuk store tersebut
        $cart = session()->get('cart', []);
        $itemsForBiteship = [];
        
        foreach ($cart as $item) {
            if ($item['store_id'] == $storeId) {
                $itemsForBiteship[] = [
                    'name' => $item['nama_produk'],
                    'value' => $item['harga'],
                    'weight' => $item['berat_gram'] ?? 500,
                    'quantity' => $item['jumlah']
                ];
            }
        }

        if (empty($itemsForBiteship)) {
            return response()->json(['error' => 'Tidak ada item untuk toko ini di keranjang'], 400);
        }

        $rates = $this->biteship->getRates($originAreaId, $destinationAreaId, $itemsForBiteship, $couriers);
        return response()->json($rates);
    }
}
