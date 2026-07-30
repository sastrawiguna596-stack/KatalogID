<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ==========================================
// Rute Publik (Dapat diakses siapapun)
// ==========================================
Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/product/{id?}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/store/{id?}', [ProductController::class, 'showStore'])->name('store_product');

// ==========================================
// Rute Autentikasi (Guest / Belum Login)
// ==========================================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// ==========================================
// Rute Terproteksi (Wajib Login / Auth Middleware)
// ==========================================
Route::middleware(['auth'])->group(function () {

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Profile Smart Redirection & Update
    Route::get('/profile', function () {
        $user = Auth::user();
        if ($user->role === 'seller') {
            return redirect()->route('account');
        }
        return redirect()->route('cust_account');
    })->name('profile');

    Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');

    // Address Management
    Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
    Route::put('/addresses/{id}', [AddressController::class, 'update'])->name('addresses.update');
    Route::delete('/addresses/{id}', [AddressController::class, 'destroy'])->name('addresses.destroy');
    Route::post('/addresses/{id}/set-default', [AddressController::class, 'setDefault'])->name('addresses.set_default');

    // Cart & Checkout
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Customer Dashboard
    Route::get('/customer', function () {
        return view('cust_account');
    })->name('cust_account');

    Route::get('/customer/settings', function () {
        return view('account_setting_cust');
    })->name('cust_account_setting');

    Route::get('/customer/orders', function () {
        return view('recent_orders_cust');
    })->name('cust_recent_orders');

    // Seller Dashboard & Management
    Route::get('/account', function () {
        return view('seller.my_account');
    })->name('account');

    Route::get('/account/settings', function () {
        return view('seller.account_setting');
    })->name('account_setting');

    Route::get('/account/order', function () {
        return view('seller.recent_orders');
    })->name('recent_orders');

    Route::get('/account/sales-analytics', function () {
        return view('seller.sales_analytics');
    })->name('sales_analytics');

    Route::get('/account/support', function () {
        return view('seller.support');
    })->name('support');

    Route::get('/inventory', [ProductController::class, 'inventory'])->name('inventories');
    Route::get('/add-product', [ProductController::class, 'create'])->name('add_product');
    Route::post('/add-product', [ProductController::class, 'store'])->name('products.store');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit_product');
    Route::put('/edit-product/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('/seller/store', [ProductController::class, 'showStore'])->name('seller.store');

    Route::get('/inventory-detail/{id?}', function () {
        return view('inventory_detail');
    })->name('inventory_detail');

    // Admin Dashboard
    Route::get('/dashboard-admin', function () {
        return view('dashboard_admin');
    })->name('dashboard_admin');

    Route::get('/dashboard-admin-add', function () {
        return view('dashboard_admin_add');
    })->name('dashboard_admin_add');

    Route::get('/dashboard-admin-edit', function () {
        return view('dashboard_admin_edit');
    })->name('dashboard_admin_edit');
});
