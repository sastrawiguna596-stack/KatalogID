<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Services\Payment\ZannpayDriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Services\Payment\PaymentService;

class CartController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
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
        $biayaOperasional = $hasItems ? 1000 : 0;
        $total = $subtotal + $biayaOperasional;

        // Ambil metode pembayaran Zannpay (cache 30 menit agar tidak terkena rate limit)
        $isZannpayConfigured = !empty(config('payment.drivers.zannpay.merchant_id'))
                            && !empty(config('payment.drivers.zannpay.secret_key'));
        $zannpayMethods = [];
        if ($isZannpayConfigured) {
            $cacheKey = 'zannpay_payment_methods_' . config('payment.drivers.zannpay.merchant_id');
            $zannpayMethods = Cache::remember($cacheKey, 1800, function () {
                $driver = new ZannpayDriver();
                return $driver->getPaymentMethods();
            });
            if (empty($zannpayMethods)) {
                Cache::forget($cacheKey);
            }
        }

        return view('product.cart_checkout', compact(
            'cart', 'subtotal', 'biayaOperasional', 'total',
            'zannpayMethods', 'isZannpayConfigured'
        ));
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
        $paymentMethod = $request->input('payment_method', 'bank_transfer');

        // Jika opsi COD dipilih
        if ($request->boolean('is_cod') || strtoupper($paymentMethod) === 'COD') {
            $paymentMethod = 'COD';
        }

        // Kelompokkan item berdasarkan store_id
        $itemsByStore = [];
        foreach ($cart as $item) {
            $storeId = $item['store_id'] ?? 1;
            $itemsByStore[$storeId][] = $item;
        }

        $createdOrders = [];

        foreach ($itemsByStore as $storeId => $items) {
            $storeSubtotal = 0;
            foreach ($items as $item) {
                $storeSubtotal += $item['harga'] * $item['jumlah'];
            }

            $biayaOperasional = 1000;
            $totalHarga = $storeSubtotal + $biayaOperasional;

            $order = Order::create([
                'user_id' => $user ? $user->id : 1,
                'store_id' => $storeId,
                'kode_transaksi' => 'TRX-' . strtoupper(Str::random(8)),
                'total_harga' => $totalHarga,
                'status_pembayaran' => 'pending',
                'status_pengiriman' => 'pending',
                'alamat_pengiriman' => $alamat,
                'payment_method' => $paymentMethod,
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

            // Inisialisasi transaksi di Payment Service
            $this->paymentService->createPayment($order, $paymentMethod);
            $createdOrders[] = $order;
        }

        session()->forget('cart');

        $firstOrder = reset($createdOrders);

        if (strtoupper($paymentMethod) === 'COD') {
            return redirect()->route('payment.page', $firstOrder->id)
                ->with('success', 'Pesanan Anda #' . $firstOrder->kode_transaksi . ' berhasil dibuat dengan metode Bayar di Tempat (COD)! Silakan siapkan uang tunai saat penjual mengantarkan pesanan.');
        }

        return redirect()->route('payment.page', $firstOrder->id)
            ->with('success', 'Pesanan berhasil dibuat! Silakan pilih dan selesaikan pembayaran.');
    }
}
