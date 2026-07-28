<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Halaman Landing / Utama (Home)
     */
    public function home()
    {
        $categories = Category::all();
        $products = Product::with(['category', 'galleries'])
            ->where('status', 'active')
            ->latest()
            ->take(8)
            ->get();

        return view('welcome', compact('categories', 'products'));
    }

    /**
     * Halaman Katalog / Shop Semua Produk dengan Filter & Search
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        $query = Product::with(['category', 'galleries'])->where('status', 'active');

        // Filter berdasarkan Kategori
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Pencarian Nama Produk
        if ($request->has('search') && $request->search != '') {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        // Urutan (Sorting)
        if ($request->sort == 'price_low') {
            $query->orderBy('harga', 'asc');
        } elseif ($request->sort == 'price_high') {
            $query->orderBy('harga', 'desc');
        } else {
            $query->latest();
        }

        $products = $query->paginate(12)->withQueryString();

        return view('product.all_product', compact('categories', 'products'));
    }

    /**
     * Detail Produk Spesifik
     */
    public function show($id = 1)
    {
        $product = Product::with(['category', 'store', 'galleries', 'variants', 'reviews.user'])
            ->find($id) ?? Product::with(['category', 'store', 'galleries', 'variants', 'reviews.user'])->firstOrFail();

        $relatedProducts = Product::with(['category', 'galleries'])
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('product.product_detail', compact('product', 'relatedProducts'));
    }

    /**
     * Halaman Inventaris Produk Penjual (Seller Inventory)
     */
    public function inventory()
    {
        // Untuk simulasi testing, ambil toko pertama jika belum login
        $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();
        
        $products = Product::with(['category', 'galleries'])
            ->where('store_id', $store ? $store->id : 1)
            ->latest()
            ->get();

        return view('seller.inventory', compact('products'));
    }

    /**
     * Form Tambah Produk Baru
     */
    public function create()
    {
        $categories = Category::all();
        return view('add_new_product', compact('categories'));
    }

    /**
     * Simpan Produk Baru ke Database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'deskripsi_lengkap' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'berat_gram' => 'required|integer|min:1',
            'gambar' => 'nullable|array',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        DB::beginTransaction();
        try {
            $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();

            $product = Product::create([
                'store_id' => $store->id,
                'category_id' => $request->category_id,
                'nama_produk' => $request->nama_produk,
                'slug' => Str::slug($request->nama_produk . '-' . time()),
                'deskripsi_lengkap' => $request->deskripsi_lengkap,
                'harga' => $request->harga,
                'harga_diskon' => $request->harga_diskon ?? null,
                'stok' => $request->stok,
                'berat_gram' => $request->berat_gram,
                'badge' => $request->badge ?? null,
                'status' => 'active'
            ]);

            // Proses Upload Gambar
            if ($request->hasFile('gambar')) {
                foreach ($request->file('gambar') as $index => $file) {
                    $path = $file->store('produk', 'public');
                    ProductGallery::create([
                        'product_id' => $product->id,
                        'foto_path' => 'storage/' . $path,
                        'is_primary' => $index === 0,
                    ]);
                }
            } else {
                // Gambar default jika tidak diupload
                ProductGallery::create([
                    'product_id' => $product->id,
                    'foto_path' => 'https://via.placeholder.com/600x600?text=No+Image',
                    'is_primary' => true
                ]);
            }

            DB::commit();
            return redirect()->route('inventories')->with('success', 'Produk berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
        }
    }

    /**
     * Form Edit Produk
     */
    public function edit($id)
    {
        $product = Product::with(['galleries'])->findOrFail($id);
        $categories = Category::all();
        return view('edit_product', compact('product', 'categories'));
    }

    /**
     * Update Data Produk
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'deskripsi_lengkap' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'berat_gram' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'category_id' => $request->category_id,
            'nama_produk' => $request->nama_produk,
            'slug' => Str::slug($request->nama_produk . '-' . $id),
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'harga' => $request->harga,
            'harga_diskon' => $request->harga_diskon ?? $product->harga_diskon,
            'stok' => $request->stok,
            'berat_gram' => $request->berat_gram,
            'badge' => $request->badge ?? $product->badge,
        ]);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $index => $file) {
                $path = $file->store('produk', 'public');
                ProductGallery::create([
                    'product_id' => $product->id,
                    'foto_path' => 'storage/' . $path,
                    'is_primary' => false,
                ]);
            }
        }

        return redirect()->route('inventories')->with('success', 'Data produk berhasil diperbarui!');
    }

    /**
     * Hapus Produk
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('inventories')->with('success', 'Produk berhasil dihapus!');
    }

    /**
     * Halaman Toko Penjual (My Store & Public Storefront)
     */
    public function showStore($id = null)
    {
        if ($id) {
            $store = Store::with('user')->find($id) ?? Store::first();
        } else {
            $user = Auth::user();
            if (!$user) {
                return redirect()->route('login');
            }
            $store = Store::where('user_id', $user->id)->first();
            if (!$store) {
                $storeName = ($user->name ?? 'Penjual') . ' Store';
                $store = Store::create([
                    'user_id' => $user->id,
                    'nama_toko' => $storeName,
                    'slug' => Str::slug($storeName . '-' . time()),
                    'deskripsi' => 'Toko Resmi ' . $user->name,
                    'is_active' => true,
                ]);
            }
        }

        $products = Product::with(['category', 'galleries'])
            ->where('store_id', $store->id)
            ->latest()
            ->get();

        return view('seller.store', compact('store', 'products'));
    }
}
