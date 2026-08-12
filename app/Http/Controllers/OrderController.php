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

    /**
     * Meminta penjemputan (Pickup) dari kurir via Biteship
     */
    public function requestPickup(Request $request, $id, \App\Services\BiteshipService $biteshipService)
    {
        $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();
        $order = Order::with('items.product')->where('store_id', $store->id)->findOrFail($id);

        if (!$order->destination_area_id || !$order->courier_company || !$order->courier_type) {
            return redirect()->back()->with('error', 'Pesanan ini tidak memiliki data logistik yang lengkap.');
        }

        $originAreaId = $store->biteship_area_id ?? 'IDNP1IDNC110IDND261IDZ80111'; // Fallback

        $biteshipItems = [];
        foreach ($order->items as $item) {
            $biteshipItems[] = [
                'name' => $item->product->nama_produk,
                'value' => $item->harga_satuan,
                'weight' => $item->product->berat_gram ?? 500,
                'quantity' => $item->jumlah
            ];
        }

        $payload = [
            'shipper_contact_name' => $store->nama_toko,
            'shipper_contact_phone' => Auth::user()->phone ?? '08123456789',
            'shipper_contact_email' => Auth::user()->email,
            'shipper_organization' => $store->nama_toko,
            'origin_contact_name' => $store->nama_toko,
            'origin_contact_phone' => Auth::user()->phone ?? '08123456789',
            'origin_address' => $store->kota,
            'origin_area_id' => $originAreaId,
            'destination_contact_name' => $order->user->name ?? 'Pembeli',
            'destination_contact_phone' => $order->user->phone ?? '08123456789',
            'destination_contact_email' => $order->user->email ?? 'pembeli@example.com',
            'destination_address' => $order->alamat_pengiriman,
            'destination_area_id' => $order->destination_area_id,
            'courier_company' => $order->courier_company,
            'courier_type' => $order->courier_type,
            'delivery_type' => 'now',
            'order_note' => 'Mohon hati-hati',
            'items' => $biteshipItems
        ];

        $response = $biteshipService->createOrder($payload);

        if (isset($response['error'])) {
            return redirect()->back()->with('error', 'Gagal memanggil kurir: ' . $response['error']);
        }

        // Simpan data dari Biteship
        $order->biteship_order_id = $response['id'] ?? null;
        $order->biteship_tracking_id = $response['courier']['tracking_id'] ?? null;
        $order->nomor_resi = $response['courier']['waybill_id'] ?? null;
        $order->biteship_status = $response['status'] ?? 'placed';
        $order->status_pengiriman = 'processing';
        $order->save();

        return redirect()->back()->with('success', 'Pickup kurir berhasil diminta! Nomor Resi: ' . ($order->nomor_resi ?? 'Sedang diproses'));
    }

    /**
     * Melacak status pengiriman via Biteship (Customer)
     */
    public function trackOrder($id, \App\Services\BiteshipService $biteshipService)
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($id);
        
        if (!$order->biteship_tracking_id) {
            return response()->json(['error' => 'Pesanan ini belum memiliki ID pelacakan.'], 404);
        }

        $trackingData = $biteshipService->trackOrder($order->biteship_tracking_id);
        
        // Auto-update status di DB jika sukses
        if (isset($trackingData['status']) && $trackingData['status'] === 'delivered') {
            $order->biteship_status = 'delivered';
            $order->status_pengiriman = 'delivered';
            $order->save();
        }

        return response()->json($trackingData);
    }
}
