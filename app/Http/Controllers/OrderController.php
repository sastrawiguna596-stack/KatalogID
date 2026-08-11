<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Dashboard Akun Customer dengan Data Pesanan Terbaru Nyata
     */
    public function customerDashboard()
    {
        $user = Auth::user();
        $userId = $user ? $user->id : 0;

        $totalOrders = Order::where('user_id', $userId)->count();
        $recentOrder = Order::with(['store', 'items.product'])
            ->where('user_id', $userId)
            ->latest()
            ->first();

        return view('cust_account', compact('user', 'totalOrders', 'recentOrder'));
    }

    /**
     * Dashboard Akun Seller dengan Data Pesanan Terbaru Nyata
     */
    public function sellerDashboard()
    {
        $user = Auth::user();
        $store = $user && $user->store ? $user->store : Store::first();
        $storeId = $store ? $store->id : 1;

        $totalOrders = Order::where('store_id', $storeId)->count();
        $recentOrder = Order::with(['user', 'items.product'])
            ->where('store_id', $storeId)
            ->latest()
            ->first();

        return view('seller.my_account', compact('user', 'store', 'totalOrders', 'recentOrder'));
    }

    /**
     * Menampilkan daftar pesanan nyata untuk Seller
     */
    public function sellerOrders(Request $request)
    {
        $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();
        $storeId = $store ? $store->id : 1;

        $query = Order::with(['user', 'items.product'])
            ->where('store_id', $storeId);

        // Filter Status
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status_pembayaran', $request->status);
        }

        // Filter Search Keyword (Order ID atau Nama Pembeli)
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('id', 'like', '%' . $search . '%')
                  ->orWhereHas('user', function ($uQuery) use ($search) {
                      $uQuery->where('name', 'like', '%' . $search . '%');
                  });
            });
        }

        $orders = $query->latest()->paginate(10)->withQueryString();

        return view('seller.recent_orders', compact('orders', 'store'));
    }

    /**
     * Menampilkan daftar pesanan nyata untuk Customer
     */
    public function customerOrders(Request $request)
    {
        $userId = Auth::id();

        $query = Order::with(['store', 'items.product'])
            ->where('user_id', $userId);

        // Filter Status
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status_pembayaran', $request->status);
        }

        // Filter Search Keyword
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where('id', 'like', '%' . $search . '%');
        }

        $orders = $query->latest()->paginate(10)->withQueryString();

        return view('recent_orders_cust', compact('orders'));
    }

    /**
     * Konfirmasi Pesanan Diterima oleh Customer
     */
    public function confirmReceipt($id)
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($id);
        $order->status_pembayaran = 'paid';
        $order->status = 'selesai';
        $order->save();

        return redirect()->back()->with('success', 'Pesanan #ORD-' . $order->id . ' telah dikonfirmasi selesai! Silakan berikan ulasan & rating produk di bawah.');
    }
}
