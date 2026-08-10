<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Simpan atau Perbarui Varian Produk dari Data Input
     */
    public function storeVariants($productId, array $variantsData, $defaultStock = 10)
    {
        if (empty($variantsData)) return;

        foreach ($variantsData as $v) {
            if (!empty($v['nama'])) {
                ProductVariant::create([
                    'product_id' => $productId,
                    'nama_varian' => $v['nama'],
                    'harga_tambahan' => floatval($v['harga'] ?? 0),
                    'stok_varian' => intval($v['stok'] ?? $defaultStock),
                ]);
            }
        }
    }

    /**
     * Perbarui Seluruh Varian Produk (Hapus lama & Buat Baru)
     */
    public function updateVariants($productId, array $variantsData, $defaultStock = 10)
    {
        ProductVariant::where('product_id', $productId)->delete();
        $this->storeVariants($productId, $variantsData, $defaultStock);
    }

    /**
     * Hapus Varian Spesifik
     */
    public function destroy($id)
    {
        $variant = ProductVariant::findOrFail($id);
        $variant->delete();

        return back()->with('success', 'Varian produk berhasil dihapus.');
    }
}
