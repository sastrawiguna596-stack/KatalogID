<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
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

        $shipping = count($cart) > 0 ? 15000 : 0; // Flat ongkir contoh Rp 15.000
        $total = $subtotal + $shipping;

        return view('product.cart_checkout', compact('cart', 'subtotal', 'shipping', 'total'));
    }

    /**
     * Tambah Produk ke Keranjang (Tanpa langsung pindah halaman)
     */
    public function add(Request $request, $id)
    {
        $product = Product::with(['galleries', 'store'])->findOrFail($id);

        $cart = session()->get('cart', []);
        $quantity = (int) $request->input('quantity', 1);

        $price = $product->harga_diskon ? $product->harga_diskon : $product->harga;
        $fotoPath = $product->galleries->first()?->foto_path ?? '';

        if (isset($cart[$id])) {
            $cart[$id]['jumlah'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'nama_produk' => $product->nama_produk,
                'harga' => $price,
                'foto_path' => $fotoPath,
                'jumlah' => $quantity,
                'berat_gram' => $product->berat_gram ?? 500,
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
}
