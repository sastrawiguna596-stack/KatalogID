<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sales Analytics | Luminous Commerce</title>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary": "#5d5f5d",
                    "primary-fixed-dim": "#ffba20",
                    "surface-dim": "#dbdad9",
                    "surface-container": "#efeded",
                    "error-container": "#ffdad6",
                    "inverse-surface": "#303031",
                    "surface-container-low": "#f5f3f3",
                    "secondary-container": "#e5e2e1",
                    "primary-fixed": "#ffdea8",
                    "background": "#fbf9f8",
                    "secondary": "#5f5e5e",
                    "surface-bright": "#fbf9f8",
                    "on-tertiary-fixed-variant": "#454746",
                    "on-surface-variant": "#514532",
                    "inverse-primary": "#ffba20",
                    "on-primary-container": "#6b4c00",
                    "on-secondary-fixed-variant": "#474646",
                    "on-background": "#1b1c1c",
                    "on-error": "#ffffff",
                    "on-primary-fixed": "#271900",
                    "tertiary-fixed-dim": "#c6c7c5",
                    "surface": "#fbf9f8",
                    "surface-variant": "#e4e2e2",
                    "outline-variant": "#d5c4ab",
                    "primary": "#7c5800",
                    "tertiary-container": "#c4c5c3",
                    "on-tertiary-container": "#505250",
                    "tertiary-fixed": "#e2e3e1",
                    "on-secondary-fixed": "#1c1b1b",
                    "on-primary-fixed-variant": "#5e4200",
                    "on-primary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "on-secondary-container": "#656464",
                    "surface-container-high": "#e9e8e7",
                    "surface-container-highest": "#e4e2e2",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#1b1c1c",
                    "on-error-container": "#93000a",
                    "secondary-fixed-dim": "#c8c6c5",
                    "surface-tint": "#7c5800",
                    "on-tertiary-fixed": "#1a1c1b",
                    "primary-container": "#ffb800",
                    "surface-container-lowest": "#ffffff",
                    "outline": "#837560",
                    "error": "#ba1a1a",
                    "inverse-on-surface": "#f2f0f0",
                    "secondary-fixed": "#e5e2e1"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-lg": "48px",
                    "stack-md": "24px",
                    "stack-sm": "12px",
                    "margin-desktop": "40px",
                    "gutter": "24px",
                    "margin-mobile": "16px",
                    "container-max": "1280px",
                    "base": "8px"
            },
            "fontFamily": {
                    "body-md": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "headline-sm": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "body-sm": ["Plus Jakarta Sans"],
                    "headline-xl-mobile": ["Hanken Grotesk"]
            },
            "fontSize": {
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            background-color: #fbf9f8;
            color: #1b1c1c;
            -webkit-font-smoothing: antialiased;
        }
        .sidebar-transition {
            transition: transform 0.2s ease-in-out;
        }
        .chart-bar {
            transition: height 1s ease-out;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e4e2e2;
            border-radius: 10px;
                   background-color: #F9F9F7;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .nav-active-line {
            position: relative;
        }
        .nav-active-line::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ffb800;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #EDEDED;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        /* Sidebar overlay */
        #sidebar-overlay {
            display: none;
        }
        #sidebar-overlay.active {
            display: block;
        }
        /* Sidebar mobile */
        #main-sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #main-sidebar.open {
            transform: translateX(0);
        }
        @media (min-width: 1024px) {
            #main-sidebar {
                transform: translateX(0) !important;
            }
        }
    </style>
</head>
<body class="font-body-md text-body-md">
<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- Top Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-3">
    <!-- Hamburger button (mobile) -->
    <button id="hamburger-btn" class="lg:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="toggleSidebar()">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <span class="font-headline-md text-headline-md font-bold text-primary">Katalog IDN</span>
</div>
<div class="flex items-center gap-3 md:gap-gutter">
<button class="material-symbols-outlined text-on-surface-variant scale-95 active:scale-90 transition-transform">shopping_cart</button>
<button class="material-symbols-outlined text-on-surface-variant scale-95 active:scale-90 transition-transform">notifications</button>
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline">
<img class="w-full h-full object-cover" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name ?? 'User') . '&background=7c5800&color=ffffff&size=128' }}" alt="{{ Auth::user()->name ?? 'User avatar' }}"/>
</div>
</div>
</nav>

<!-- Sidebar Navigation -->
<aside id="main-sidebar" class="fixed left-0 top-0 h-full w-72 lg:w-64 flex flex-col p-4 z-40 bg-surface-container-lowest border-r border-outline-variant pt-20">
    <!-- Close button (mobile only) -->
    <button class="lg:hidden absolute top-4 right-4 p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant" onclick="closeSidebar()">
        <span class="material-symbols-outlined">close</span>
    </button>

<div class="flex items-center gap-3 px-2 mb-stack-lg mt-2">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container">store</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">{{ Auth::user()->store->nama_toko ?? Auth::user()->name . ' Store' }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Verified Seller</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">dashboard</span> Dashboard
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">receipt_long</span> Orders
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('inventories') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">inventory</span> Inventory
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md font-bold" href="{{ route('seller.store') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> My Store
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('sales_analytics') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">analytics</span> Sales Analytic
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('support') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">help_outline</span> Support
    </a>
<form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md font-bold">
        <span class="material-symbols-outlined">logout</span> Sign Out
    </button>
</form>
</div>
</aside>

<!-- Main Content Wrapper -->
<main class="lg:pl-64 pt-20 flex flex-col min-h-screen">
<!-- Canvas -->
<div class="px-4 md:px-margin-desktop py-6 max-w-container-max mx-auto w-full space-y-stack-md">
<!-- Page Header & Filters -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-gutter">
<div class="space-y-1">
<h1 class="font-headline-lg text-headline-lg text-on-background">Analisis Penjualan Toko</h1>
<p class="font-body-md text-secondary">Laporan & statistik kinerja penjualan riil dari database untuk {{ $store->nama_toko ?? 'Toko Anda' }}.</p>
</div>
<div class="flex items-center gap-2 p-1 bg-surface-container-low rounded-lg border border-outline-variant">
<a href="{{ route('sales_analytics', ['range' => '7_days']) }}" class="px-4 py-2 font-label-md text-xs rounded-md transition-all font-bold {{ $range === '7_days' ? 'bg-white shadow-sm text-on-surface' : 'text-secondary hover:bg-white/50' }}">7 Hari Terakhir</a>
<a href="{{ route('sales_analytics', ['range' => '30_days']) }}" class="px-4 py-2 font-label-md text-xs rounded-md transition-all font-bold {{ $range === '30_days' ? 'bg-white shadow-sm text-on-surface' : 'text-secondary hover:bg-white/50' }}">30 Hari Terakhir</a>
<a href="{{ route('sales_analytics', ['range' => 'ytd']) }}" class="px-4 py-2 font-label-md text-xs rounded-md transition-all font-bold {{ $range === 'ytd' ? 'bg-white shadow-sm text-on-surface' : 'text-secondary hover:bg-white/50' }}">Tahun Ini (YTD)</a>
</div>
</div>

<!-- KPI Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Revenue KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Total Pendapatan (Lunas)</span>
<div class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-xl">payments</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-xl md:text-headline-md text-on-surface font-bold">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h3>
<div class="flex items-center gap-1 mt-1">
<span class="text-xs text-tertiary">{{ $paidCount }} pesanan telah lunas</span>
</div>
</div>
</div>

<!-- AOV KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Rata-rata Pesanan (AOV)</span>
<div class="w-10 h-10 bg-secondary-container rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-secondary text-xl">shopping_bag</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-xl md:text-headline-md text-on-surface font-bold">Rp {{ number_format($avgOrderValue, 0, ',', '.') }}</h3>
<div class="flex items-center gap-1 mt-1">
<span class="text-xs text-tertiary">Rata-rata per transaksi lunas</span>
</div>
</div>
</div>

<!-- Total Orders KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Total Pesanan</span>
<div class="w-10 h-10 bg-tertiary-container/30 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-tertiary text-xl">receipt_long</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-xl md:text-headline-md text-on-surface font-bold">{{ number_format($totalOrdersCount) }} <span class="text-sm font-normal text-secondary">Pesanan</span></h3>
<div class="flex items-center gap-1 mt-1">
<span class="text-xs text-emerald-600 font-semibold">{{ $paidCount }} Lunas</span>
<span class="text-xs text-tertiary">• {{ $totalOrdersCount - $paidCount }} Pending/Batal</span>
</div>
</div>
</div>

<!-- Units Sold KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Total Unit Terjual</span>
<div class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-xl">inventory_2</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-xl md:text-headline-md text-on-surface font-bold">{{ number_format($totalUnitsSold) }} <span class="text-sm font-normal text-secondary">Unit</span></h3>
<div class="flex items-center gap-1 mt-1">
<span class="text-xs text-tertiary">Item produk fisik terkirim</span>
</div>
</div>
</div>
</div>

<!-- Main Analytics Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Revenue Overview Chart -->
<div class="lg:col-span-2 bg-white p-6 md:p-8 rounded-xl border border-[#EDEDED] space-y-6">
<div class="flex items-center justify-between">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Grafik Pendapatan Bulanan</h2>
<p class="text-xs text-secondary">Penjualan riil per bulan (Tahun {{ now()->year }})</p>
</div>
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-primary"></div>
<span class="text-xs font-label-md text-secondary uppercase">Tahun {{ now()->year }}</span>
</div>
</div>
<div class="h-64 flex items-end justify-between gap-2 pt-4 relative">
<!-- Chart Bars -->
<div class="flex-grow flex items-end justify-around gap-1.5 h-full pt-6">
@foreach($monthlyChartData as $mItem)
@php
    $barHeight = $maxMonthlySales > 0 ? min(100, max(6, round(($mItem['value'] / $maxMonthlySales) * 100))) : 6;
@endphp
<div class="flex flex-col items-center gap-1.5 w-full group relative" title="{{ $mItem['label'] }}: Rp {{ number_format($mItem['value'], 0, ',', '.') }}">
    <div class="w-full flex items-end justify-center h-full">
        <div class="w-full max-w-[28px] rounded-t-md chart-bar {{ $mItem['value'] > 0 ? 'bg-primary hover:bg-primary-fixed-dim' : 'bg-surface-variant/40' }}" style="height: {{ $barHeight }}%"></div>
    </div>
    <span class="text-[10px] font-label-md text-tertiary font-bold">{{ $mItem['label'] }}</span>
</div>
@endforeach
</div>
</div>
</div>

<!-- Category Breakdown -->
<div class="bg-white p-6 md:p-8 rounded-xl border border-[#EDEDED] flex flex-col justify-between">
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-4 font-bold">Penjualan per Kategori</h2>
@if(count($categorySales) > 0)
<div class="space-y-4 my-auto">
@foreach($categorySales as $cs)
<div>
    <div class="flex justify-between items-center text-xs mb-1 font-semibold">
        <span class="text-on-surface">{{ $cs->nama_kategori }}</span>
        <span class="text-primary font-bold">Rp {{ number_format($cs->total_revenue, 0, ',', '.') }} ({{ $cs->percentage }}%)</span>
    </div>
    <div class="w-full bg-surface-container-low h-2.5 rounded-full overflow-hidden">
        <div class="bg-primary h-full rounded-full" style="width: {{ $cs->percentage }}%"></div>
    </div>
</div>
@endforeach
</div>
@else
<div class="py-12 text-center text-secondary border border-dashed border-outline-variant rounded-xl my-auto">
    <span class="material-symbols-outlined text-4xl mb-2 text-primary opacity-50">donut_small</span>
    <p class="font-bold text-sm text-on-surface">Belum Ada Data Penjualan</p>
    <p class="text-xs text-secondary mt-1">Data kategori akan muncul setelah ada pesanan lunas.</p>
</div>
@endif
</div>
</div>

<!-- Bottom Sections -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-gutter pb-10">
<!-- Top Selling Products -->
<div class="bg-white rounded-xl border border-[#EDEDED] overflow-hidden flex flex-col">
<div class="p-6 border-b border-[#EDEDED] flex justify-between items-center">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Produk Terlaris</h2>
<a href="{{ route('inventories') }}" class="text-primary font-label-md text-xs hover:underline transition-all font-bold">Lihat Inventaris</a>
</div>
<div class="overflow-x-auto flex-1">
@if(count($topProducts) > 0)
<table class="w-full text-left">
<thead class="bg-surface-container-low">
<tr>
<th class="px-6 py-3.5 font-label-md text-xs text-secondary uppercase tracking-wider">Produk</th>
<th class="px-6 py-3.5 font-label-md text-xs text-secondary uppercase tracking-wider text-center">Terjual</th>
<th class="px-6 py-3.5 font-label-md text-xs text-secondary uppercase tracking-wider text-right">Pendapatan</th>
</tr>
</thead>
<tbody class="divide-y divide-[#EDEDED]">
@foreach($topProducts as $tp)
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-3 flex items-center gap-3">
<div class="w-10 h-10 rounded-lg overflow-hidden bg-surface-variant shrink-0 border border-outline-variant/30">
    <img src="{{ $tp->image_url }}" alt="{{ $tp->nama_produk }}" class="w-full h-full object-cover"/>
</div>
<div class="font-body-sm font-bold text-on-surface line-clamp-1">{{ $tp->nama_produk }}</div>
</td>
<td class="px-6 py-3 font-body-sm font-semibold text-secondary text-center">{{ $tp->total_qty }} unit</td>
<td class="px-6 py-3 font-body-sm font-bold text-primary text-right">Rp {{ number_format($tp->total_revenue, 0, ',', '.') }}</td>
</tr>
@endforeach
</tbody>
</table>
@else
<div class="p-8 text-center text-secondary">
    <span class="material-symbols-outlined text-4xl mb-2 text-primary opacity-40">inventory_2</span>
    <p class="font-bold text-sm text-on-surface">Belum Ada Produk Terjual</p>
    <p class="text-xs text-secondary mt-1">Daftar produk terlaris akan muncul di sini setelah transaksi terjadi.</p>
</div>
@endif
</div>
</div>

<!-- Recent Sales Activity -->
<div class="bg-white rounded-xl border border-[#EDEDED] flex flex-col">
<div class="p-6 border-b border-[#EDEDED] flex justify-between items-center">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Aktivitas Transaksi Terbaru</h2>
<a href="{{ route('recent_orders') }}" class="text-primary font-label-md text-xs hover:underline transition-all font-bold">Lihat Semua Pesanan</a>
</div>
<div class="flex-grow overflow-y-auto max-h-[360px] custom-scrollbar p-6">
@if(count($recentOrders) > 0)
<div class="space-y-4">
@foreach($recentOrders as $ro)
<div class="flex items-center justify-between p-3 rounded-xl border border-surface-container-high hover:bg-surface-container-low transition-colors gap-3">
<div class="flex items-center gap-3 min-w-0">
<div class="w-10 h-10 rounded-full {{ $ro->status_pembayaran === 'paid' ? 'bg-emerald-50 text-emerald-600' : 'bg-amber-50 text-amber-600' }} flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-xl">{{ $ro->status_pembayaran === 'paid' ? 'shopping_cart_checkout' : 'pending' }}</span>
</div>
<div class="min-w-0">
<p class="font-body-sm font-bold text-on-surface truncate">Pesanan #ORD-{{ $ro->id }}</p>
<p class="text-xs text-secondary truncate">Oleh: {{ $ro->user->name ?? 'Pelanggan' }} • {{ $ro->created_at ? $ro->created_at->diffForHumans() : '-' }}</p>
</div>
</div>
<div class="text-right flex-shrink-0">
<p class="font-bold text-sm text-primary">Rp {{ number_format($ro->total_harga, 0, ',', '.') }}</p>
<span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold {{ $ro->status_pembayaran === 'paid' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">
    {{ strtoupper($ro->status_pembayaran ?? 'pending') }}
</span>
</div>
</div>
@endforeach
</div>
@else
<div class="py-12 text-center text-secondary border border-dashed border-outline-variant rounded-xl my-auto">
<span class="material-symbols-outlined text-4xl mb-2 text-primary opacity-40">receipt_long</span>
<p class="font-bold text-sm text-on-surface">Belum Ada Transaksi Terbaru</p>
<p class="text-xs text-secondary mt-1">Aktivitas pesanan nyata pelanggan akan muncul di sini secara real-time.</p>
</div>
@endif
</div>
</div>
</div>
</div>
</main>
<!-- FAB (Only on Dashboard/Home relevant screens) -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg hover:shadow-xl hover:scale-105 active:scale-95 transition-all flex items-center justify-center z-50 md:hidden">
<span class="material-symbols-outlined text-[28px]">add</span>
</button>
<script>
        // Simple Interaction: Scale effect on navigation
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                link.classList.add('scale-[0.98]');
                setTimeout(() => link.classList.remove('scale-[0.98]'), 150);
            });
        });

        // Sidebar toggle
        function toggleSidebar() {
            document.getElementById('main-sidebar').classList.toggle('open');
            document.getElementById('sidebar-overlay').classList.toggle('active');
        }
        function closeSidebar() {
            document.getElementById('main-sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('active');
        }

        // Simulating some dynamic chart animation on load
        window.onload = () => {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 200);
            });
        };
    </script>
</body></html>