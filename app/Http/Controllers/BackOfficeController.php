<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        $settings = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        return view('back_office', compact('settings'));
    }

    public function stores()
    {
        $stores = \App\Models\Store::with('user')->paginate(15);
        return view('admin.stores', compact('stores'));
    }

    public function toggleStoreStatus($id)
    {
        $store = \App\Models\Store::findOrFail($id);
        $store->is_active = !$store->is_active;
        $store->save();

        return redirect()->back()->with('success', 'Store status updated successfully.');
    }

    public function welcomeSettings()
    {
        $settings = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        $products = \App\Models\Product::where('status', 'active')
            ->orderBy('total_terjual', 'desc')
            ->get();
        return view('admin.welcome_settings', compact('settings', 'products'));
    }

    public function updateSettings(Request $request)
    {
        // Loop through all inputs (except _token) and update or create settings
        foreach ($request->except('_token') as $key => $value) {
            \App\Models\SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => is_array($value) ? json_encode($value) : $value]
            );
        }

        \Illuminate\Support\Facades\Cache::forget('site_settings');
        \Illuminate\Support\Facades\Cache::forget('featured_products');
        \Illuminate\Support\Facades\Cache::forget('new_products');

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    // --- CATEGORIES ---
    public function categories()
    {
        $categories = \App\Models\Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'icon' => 'nullable|string',
        ]);
        
        \App\Models\Category::create($request->all());
        \Illuminate\Support\Facades\Cache::forget('categories_home');

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'icon' => 'nullable|string',
        ]);
        
        $category = \App\Models\Category::findOrFail($id);
        $category->update($request->all());
        \Illuminate\Support\Facades\Cache::forget('categories_home');

        return redirect()->back()->with('success', 'Kategori berhasil diubah.');
    }

    public function destroyCategory($id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $category->delete();
        \Illuminate\Support\Facades\Cache::forget('categories_home');

        return redirect()->back()->with('success', 'Kategori berhasil dihapus.');
    }

    // --- INVENTORY ---
    public function inventory()
    {
        $products = \App\Models\Product::with('store', 'category')->paginate(20);
        return view('admin.inventory', compact('products'));
    }

    public function destroyProduct($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus dari sistem.');
    }

    // --- ORDERS ---
    public function orders()
    {
        $orders = \App\Models\Order::with('user', 'store')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.orders', compact('orders'));
    }
}
