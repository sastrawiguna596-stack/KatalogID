<?php

namespace App\Http\Controllers;

use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductGalleryController extends Controller
{
    /**
     * Simpan Galeri Foto Produk dari Upload File
     */
    public function storeGalleries($productId, $files)
    {
        if (empty($files)) return;

        foreach ($files as $index => $file) {
            $path = $file->store('produk', 'public');
            ProductGallery::create([
                'product_id' => $productId,
                'foto_path' => 'storage/' . $path,
                'is_primary' => $index === 0 && !ProductGallery::where('product_id', $productId)->exists(),
            ]);
        }
    }

    /**
     * Simpan Foto Default jika tidak ada upload
     */
    public function storeDefaultGallery($productId)
    {
        ProductGallery::create([
            'product_id' => $productId,
            'foto_path' => 'https://via.placeholder.com/600x600?text=No+Image',
            'is_primary' => true
        ]);
    }

    /**
     * Hapus Foto Galeri
     */
    public function destroy($id)
    {
        $gallery = ProductGallery::findOrFail($id);
        if ($gallery->foto_path && str_starts_with($gallery->foto_path, 'storage/')) {
            $path = str_replace('storage/', '', $gallery->foto_path);
            Storage::disk('public')->delete($path);
        }
        $gallery->delete();

        return back()->with('success', 'Foto galeri berhasil dihapus.');
    }
}
