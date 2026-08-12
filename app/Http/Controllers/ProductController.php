<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductVariant;
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
        $categories = \Illuminate\Support\Facades\Cache::remember('categories_home', 3600, function () {
            return Category::with(['products.galleries'])->get();
        });

        $settings = \Illuminate\Support\Facades\Cache::remember('site_settings', 3600, function () {
            return \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        });

        $featuredIds = isset($settings['featured_product_ids']) ? json_decode($settings['featured_product_ids'], true) : [];
        $newIds = isset($settings['new_product_ids']) ? json_decode($settings['new_product_ids'], true) : [];

        $products = !empty($featuredIds)
            ? Product::with(['category', 'galleries'])->whereIn('id', $featuredIds)->where('status', 'active')->get()
            : Product::with(['category', 'galleries'])->where('status', 'active')->latest()->take(8)->get();

        $newProducts = !empty($newIds)
            ? Product::with(['category', 'galleries'])->whereIn('id', $newIds)->where('status', 'active')->get()
            : Product::with(['category', 'galleries'])->where('status', 'active')->latest()->skip(8)->take(4)->get();

        $reviews = \App\Models\Review::with(['user', 'product'])->latest()->take(5)->get();

        return view('welcome', compact('categories', 'products', 'newProducts', 'settings', 'reviews'));
    }

    /**
     * Halaman Katalog / Shop Semua Produk dengan Filter & Search
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $searchType = $request->input('search_type', 'product');
        $searchTerm = trim($request->input('search', ''));

        // Daftar Kota & Kabupaten di Provinsi Bali (Denpasar, Badung, Gianyar, dll)
        $baliCities = collect([
            'Kota Denpasar',
            'Kabupaten Badung',
            'Kabupaten Gianyar',
            'Kabupaten Tabanan',
            'Kabupaten Buleleng',
            'Kabupaten Karangasem',
            'Kabupaten Klungkung',
            'Kabupaten Bangli',
            'Kabupaten Jembrana',
        ]);

        // Ambil daftar kota dari toko terdaftar
        $dbCities = Store::whereNotNull('kota')->where('kota', '!=', '')->distinct()->pluck('kota');
        $cities = $dbCities->merge($baliCities)->unique()->values();

        $query = Product::with(['category', 'galleries', 'store'])->where('status', 'active');

        $matchedStores = collect();
        if ($searchTerm !== '') {
            $matchedStores = Store::where(function ($q) use ($searchTerm) {
                $q
                    ->where('nama_toko', 'like', '%' . $searchTerm . '%')
                    ->orWhere('deskripsi', 'like', '%' . $searchTerm . '%');
            })->get();

            if ($searchType === 'store') {
                $query->whereHas('store', function ($q) use ($searchTerm) {
                    $q
                        ->where('nama_toko', 'like', '%' . $searchTerm . '%')
                        ->orWhere('deskripsi', 'like', '%' . $searchTerm . '%');
                });
            } else {
                $query->where(function ($q) use ($searchTerm) {
                    $q
                        ->where('nama_produk', 'like', '%' . $searchTerm . '%')
                        ->orWhereHas('store', function ($sq) use ($searchTerm) {
                            $sq
                                ->where('nama_toko', 'like', '%' . $searchTerm . '%')
                                ->orWhere('deskripsi', 'like', '%' . $searchTerm . '%');
                        });
                });
            }
        }

        // Filter berdasarkan Kota / Kabupaten Toko
        if ($request->filled('kota')) {
            $query->whereHas('store', function ($q) use ($request) {
                $q->where('kota', $request->kota);
            });
        }

        // Filter berdasarkan Kategori
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter berdasarkan Rentang Harga Maksimal
        if ($request->filled('max_price')) {
            $query->where('harga', '<=', $request->max_price);
        }

        // Urutan (Sorting)
        if ($request->sort == 'price_low') {
            $query->orderBy('harga', 'asc');
        } elseif ($request->sort == 'price_high') {
            $query->orderBy('harga', 'desc');
        } else {
            $query->latest();
        }

        $maxProductPrice = Product::max('harga') ?? 5000000;
        $products = $query->paginate(17)->withQueryString();

        return view('product.all_product', compact('categories', 'products', 'matchedStores', 'cities', 'maxProductPrice'));
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

            // Proses Simpan Galeri Foto & Varian menggunakan ProductGalleryController & ProductVariantController
            $galleryController = new ProductGalleryController();
            $variantController = new ProductVariantController();

            if ($request->hasFile('gambar')) {
                $galleryController->storeGalleries($product->id, $request->file('gambar'));
            } else {
                $galleryController->storeDefaultGallery($product->id);
            }

            if ($request->has('variants') && is_array($request->variants)) {
                $variantController->storeVariants($product->id, $request->variants, $product->stok);
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
        $product = Product::with(['galleries', 'variants'])->findOrFail($id);
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

        $galleryController = new ProductGalleryController();
        $variantController = new ProductVariantController();

        if ($request->hasFile('gambar')) {
            $galleryController->storeGalleries($product->id, $request->file('gambar'));
        }

        if ($request->has('variants') && is_array($request->variants)) {
            $variantController->updateVariants($product->id, $request->variants, $product->stok);
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
    public function showStore($id = null, Request $request = null)
    {
        $request = $request ?? request();

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

        $categories = Category::all();

        $query = Product::with(['category', 'galleries'])
            ->where('store_id', $store->id);

        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->filled('search')) {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        if ($request->sort == 'price_low') {
            $query->orderBy('harga', 'asc');
        } elseif ($request->sort == 'price_high') {
            $query->orderBy('harga', 'desc');
        } else {
            $query->latest();
        }

        // Jika opsi 'Semua Produk' toko dibuka (view=all)
        if ($request->query('view') === 'all') {
            $products = $query->paginate(12)->withQueryString();
            return view('store_product', compact('store', 'products', 'categories'));
        }

        $products = $query->get();
        return view('seller.store', compact('store', 'products', 'categories'));
    }
}
