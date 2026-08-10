<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    /**
     * Halaman Inventaris Seller dengan Filter & Sorting
     */
    public function index(Request $request)
    {
        $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();
        $storeId = $store ? $store->id : 1;

        $categories = Category::all();

        $query = Product::with(['category', 'galleries'])
            ->where('store_id', $storeId);

        // Search Keyword
        if ($request->filled('search')) {
            $searchTerm = trim($request->search);
            $query->where('nama_produk', 'like', '%' . $searchTerm . '%');
        }

        // Filter Kategori
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Filter Status Stok
        if ($request->filled('stock_status')) {
            $status = $request->stock_status;
            if ($status === 'in_stock') {
                $query->where('stok', '>=', 10);
            } elseif ($status === 'low_stock') {
                $query->whereBetween('stok', [1, 9]);
            } elseif ($status === 'out_of_stock') {
                $query->where('stok', '<=', 0);
            }
        }

        // Sorting
        $sort = $request->input('sort', 'newest');
        if ($sort === 'price_low') {
            $query->orderBy('harga', 'asc');
        } elseif ($sort === 'price_high') {
            $query->orderBy('harga', 'desc');
        } elseif ($sort === 'stock_low') {
            $query->orderBy('stok', 'asc');
        } elseif ($sort === 'stock_high') {
            $query->orderBy('stok', 'desc');
        } elseif ($sort === 'oldest') {
            $query->oldest();
        } else {
            $query->latest();
        }

        // Ringkasan Statistik Inventaris
        $allStoreProducts = Product::where('store_id', $storeId)->get();
        $totalProductsCount = $allStoreProducts->count();
        $lowStockCount = $allStoreProducts->whereBetween('stok', [1, 9])->count();
        $outOfStockCount = $allStoreProducts->where('stok', '<=', 0)->count();
        $totalInventoryValue = $allStoreProducts->sum(function ($p) {
            return $p->harga * $p->stok;
        });

        $products = $query->paginate(10)->withQueryString();

        return view('seller.inventory', compact(
            'store',
            'products',
            'categories',
            'totalProductsCount',
            'lowStockCount',
            'outOfStockCount',
            'totalInventoryValue'
        ));
    }

    /**
     * Export Data Inventaris ke CSV
     */
    public function exportCsv(Request $request)
    {
        $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();
        $storeId = $store ? $store->id : 1;

        $products = Product::with(['category'])->where('store_id', $storeId)->get();

        $filename = "inventory_" . date('Ymd_His') . ".csv";
        $handle = fopen('php://memory', 'w+');
        fputcsv($handle, ['ID Produk', 'Nama Produk', 'Kategori', 'Stok', 'Harga (Rp)', 'Tanggal Dibuat']);

        foreach ($products as $p) {
            fputcsv($handle, [
                'PRD-00' . $p->id,
                $p->nama_produk,
                $p->category->nama_kategori ?? 'Umum',
                $p->stok,
                $p->harga,
                $p->created_at ? $p->created_at->format('Y-m-d H:i:s') : '-'
            ]);
        }

        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);

        return response($content, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }

    /**
     * Halaman Analitik Penjualan Nyata dari Database untuk Seller
     */
    public function salesAnalytics(Request $request)
    {
        $store = Auth::check() && Auth::user()->store ? Auth::user()->store : Store::first();
        $storeId = $store ? $store->id : 1;

        // Filter rentang waktu (7_days, 30_days, ytd, all)
        $range = $request->input('range', '30_days');

        $queryOrders = Order::where('store_id', $storeId);

        if ($range === '7_days') {
            $queryOrders->where('created_at', '>=', now()->subDays(7));
        } elseif ($range === '30_days') {
            $queryOrders->where('created_at', '>=', now()->subDays(30));
        } elseif ($range === 'ytd') {
            $queryOrders->whereYear('created_at', now()->year);
        }

        $allOrders = (clone $queryOrders)->get();
        $paidOrders = (clone $queryOrders)->where('status_pembayaran', 'paid')->get();

        // 1. Total Revenue Nyata (Order Lunas)
        $totalRevenue = $paidOrders->sum('total_harga');

        // 2. Jumlah Transaksi Lunas & Rata-rata Nilai Pesanan (AOV)
        $paidCount = $paidOrders->count();
        $totalOrdersCount = $allOrders->count();
        $avgOrderValue = $paidCount > 0 ? ($totalRevenue / $paidCount) : 0;

        // 3. Total Unit Produk Terjual Nyata
        $totalUnitsSold = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->where('orders.store_id', $storeId)
            ->where('orders.status_pembayaran', 'paid')
            ->sum('order_items.jumlah');

        // 4. Perhitungan Penjualan Bulanan (Grafik Real)
        $monthlySalesRaw = DB::table('orders')
            ->where('store_id', $storeId)
            ->where('status_pembayaran', 'paid')
            ->whereYear('created_at', now()->year)
            ->select(DB::raw('MONTH(created_at) as m'), DB::raw('SUM(total_harga) as total'))
            ->groupBy('m')
            ->pluck('total', 'm')
            ->toArray();

        $monthsLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        $monthlyChartData = [];
        $maxMonthlySales = 1;
        foreach (range(1, 12) as $mNum) {
            $val = floatval($monthlySalesRaw[$mNum] ?? 0);
            if ($val > $maxMonthlySales) {
                $maxMonthlySales = $val;
            }
            $monthlyChartData[] = [
                'label' => $monthsLabels[$mNum - 1],
                'value' => $val,
            ];
        }

        // 5. Penjualan Berdasarkan Kategori Produk
        $categorySales = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('orders.store_id', $storeId)
            ->where('orders.status_pembayaran', 'paid')
            ->select('categories.nama_kategori', DB::raw('SUM(order_items.subtotal) as total_revenue'), DB::raw('SUM(order_items.jumlah) as total_qty'))
            ->groupBy('categories.id', 'categories.nama_kategori')
            ->get();

        $totalCatRevenue = $categorySales->sum('total_revenue') ?: 1;
        foreach ($categorySales as $cs) {
            $cs->percentage = round(($cs->total_revenue / $totalCatRevenue) * 100, 1);
        }

        // 6. Produk Terlaris Nyata (Top Selling Products)
        $topProducts = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->where('orders.store_id', $storeId)
            ->where('orders.status_pembayaran', 'paid')
            ->select(
                'products.id',
                'products.nama_produk',
                'products.harga',
                DB::raw('SUM(order_items.jumlah) as total_qty'),
                DB::raw('SUM(order_items.subtotal) as total_revenue')
            )
            ->groupBy('products.id', 'products.nama_produk', 'products.harga')
            ->orderBy('total_qty', 'desc')
            ->take(5)
            ->get();

        foreach ($topProducts as $tp) {
            $pModel = Product::with('galleries')->find($tp->id);
            $img = $pModel?->galleries->first()?->foto_path ?? 'https://via.placeholder.com/150';
            $tp->image_url = str_starts_with($img, 'http') ? $img : asset($img);
        }

        // 7. Aktivitas Transaksi Terbaru (Recent Activity Nyata)
        $recentOrders = Order::with(['user', 'items.product'])
            ->where('store_id', $storeId)
            ->latest()
            ->take(6)
            ->get();

        return view('seller.sales_analytics', compact(
            'store',
            'range',
            'totalRevenue',
            'totalOrdersCount',
            'paidCount',
            'avgOrderValue',
            'totalUnitsSold',
            'monthlyChartData',
            'maxMonthlySales',
            'categorySales',
            'topProducts',
            'recentOrders'
        ));
    }
}
