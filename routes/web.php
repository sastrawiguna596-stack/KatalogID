<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\ProductVariantController;
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

// Google OAuth Login
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

// ==========================================
// Rute Terproteksi (Wajib Login / Auth Middleware)
// ==========================================
Route::middleware(['auth'])->group(function () {

    // Logout (supports both GET link and POST form)
    Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

    // Simpan Ulasan Pembeli
    Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');

    // Profile Smart Redirection & Update
    Route::get('/profile', function () {
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
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
    
    // Biteship API AJAX Routes
    Route::get('/api/biteship/search-area', [CartController::class, 'searchArea'])->name('biteship.search_area');
    Route::post('/api/biteship/check-rates', [CartController::class, 'checkRates'])->name('biteship.check_rates');
    
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('checkout.process');

    // Customer Dashboard
    Route::get('/customer', [OrderController::class, 'customerDashboard'])->name('cust_account');

    Route::get('/customer/settings', function () {
        return view('account_setting_cust');
    })->name('cust_account_setting');

    Route::get('/customer/orders', [OrderController::class, 'customerOrders'])->name('cust_recent_orders');
    Route::post('/customer/orders/{id}/confirm', [OrderController::class, 'confirmReceipt'])->name('order.confirm_receipt');
    Route::get('/customer/orders/{id}/track', [OrderController::class, 'trackOrder'])->name('order.track');

    // Seller Dashboard & Management
    Route::get('/account', [OrderController::class, 'sellerDashboard'])->name('account');

    Route::get('/account/settings', function () {
        return view('seller.account_setting');
    })->name('account_setting');

    Route::get('/account/order', [OrderController::class, 'sellerOrders'])->name('recent_orders');
    Route::post('/account/order/{id}/pickup', [OrderController::class, 'requestPickup'])->name('order.request_pickup');

    Route::get('/account/sales-analytics', [InventoryController::class, 'salesAnalytics'])->name('sales_analytics');

    Route::get('/account/support', function () {
        return view('seller.support');
    })->name('support');

    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventories');
    Route::get('/inventory/export', [InventoryController::class, 'exportCsv'])->name('inventories.export');
    Route::get('/add-product', [ProductController::class, 'create'])->name('add_product');
    Route::post('/add-product', [ProductController::class, 'store'])->name('products.store');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit_product');
    Route::put('/edit-product/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Gallery & Variant Management Routes
    Route::delete('/product-galleries/{id}', [ProductGalleryController::class, 'destroy'])->name('product_galleries.destroy');
    Route::delete('/product-variants/{id}', [ProductVariantController::class, 'destroy'])->name('product_variants.destroy');

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

    // Support Ticket Routes (User)
    Route::post('/support/ticket', [\App\Http\Controllers\SupportTicketController::class, 'store'])->name('support.ticket.store');
    Route::post('/notifications/{id}/read', [\App\Http\Controllers\SupportTicketController::class, 'markAsRead'])->name('notifications.read');
    Route::post('/notifications/read-all', [\App\Http\Controllers\SupportTicketController::class, 'markAllAsRead'])->name('notifications.read_all');

    // Master Admin Back Office Routes
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\BackOfficeController::class, 'index'])->name('admin.dashboard');
        Route::post('/settings', [\App\Http\Controllers\BackOfficeController::class, 'updateSettings'])->name('admin.settings.update');
        
        Route::get('/stores', [\App\Http\Controllers\BackOfficeController::class, 'stores'])->name('admin.stores');
        Route::post('/stores/{id}/toggle-status', [\App\Http\Controllers\BackOfficeController::class, 'toggleStoreStatus'])->name('admin.stores.toggle');
        
        Route::get('/welcome-settings', [\App\Http\Controllers\BackOfficeController::class, 'welcomeSettings'])->name('admin.welcome_settings');

        // Support Tickets / Kotak Surat Admin
        Route::get('/tickets', [\App\Http\Controllers\SupportTicketController::class, 'adminTickets'])->name('admin.tickets');
        Route::post('/tickets/{id}/reply', [\App\Http\Controllers\SupportTicketController::class, 'adminReply'])->name('admin.tickets.reply');

        // Categories
        Route::get('/categories', [\App\Http\Controllers\BackOfficeController::class, 'categories'])->name('admin.categories');
        Route::post('/categories', [\App\Http\Controllers\BackOfficeController::class, 'storeCategory'])->name('admin.categories.store');
        Route::put('/categories/{id}', [\App\Http\Controllers\BackOfficeController::class, 'updateCategory'])->name('admin.categories.update');
        Route::delete('/categories/{id}', [\App\Http\Controllers\BackOfficeController::class, 'destroyCategory'])->name('admin.categories.destroy');

        // Inventory
        Route::get('/inventory', [\App\Http\Controllers\BackOfficeController::class, 'inventory'])->name('admin.inventory');
        Route::delete('/inventory/{id}', [\App\Http\Controllers\BackOfficeController::class, 'destroyProduct'])->name('admin.inventory.destroy');

        // Orders
        Route::get('/orders', [\App\Http\Controllers\BackOfficeController::class, 'orders'])->name('admin.orders');
    });
});
