<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luminous Commerce | Inventory Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#e4e2e2",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#6b4c00",
                        "secondary-fixed": "#e5e2e1",
                        "on-tertiary-fixed-variant": "#454746",
                        "outline": "#837560",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-secondary-container": "#656464",
                        "background": "#fbf9f8",
                        "on-tertiary-container": "#505250",
                        "tertiary": "#5d5f5d",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#1a1c1b",
                        "primary-container": "#ffb800",
                        "inverse-on-surface": "#f2f0f0",
                        "tertiary-container": "#c4c5c3",
                        "inverse-surface": "#303031",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#474646",
                        "on-error": "#ffffff",
                        "surface-bright": "#fbf9f8",
                        "tertiary-fixed-dim": "#c6c7c5",
                        "surface-container": "#efeded",
                        "surface": "#fbf9f8",
                        "surface-container-high": "#e9e8e7",
                        "on-surface-variant": "#514532",
                        "on-background": "#1b1c1c",
                        "inverse-primary": "#ffba20",
                        "primary": "#7c5800",
                        "on-surface": "#1b1c1c",
                        "on-primary-fixed": "#271900",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e4e2e2",
                        "surface-dim": "#dbdad9",
                        "secondary": "#5f5e5e",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#7c5800",
                        "secondary-container": "#e5e2e1",
                        "tertiary-fixed": "#e2e3e1",
                        "outline-variant": "#d5c4ab",
                        "primary-fixed": "#ffdea8",
                        "primary-fixed-dim": "#ffba20",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-primary-fixed-variant": "#5e4200",
                        "error": "#ba1a1a",
                        "surface-container-low": "#f5f3f3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "8px",
                        "stack-lg": "48px",
                        "gutter": "24px",
                        "stack-md": "24px",
                        "margin-desktop": "40px",
                        "container-max": "1280px",
                        "stack-sm": "12px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-lg": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"]
                    }
                }
            }
        }
    </script>
<style>
        body {
            background-color: #F9F9F7;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        .inventory-card-hover:hover {
            box-shadow: 0px 4px 20px rgba(0,0,0,0.04);
            border-color: #7c5800;
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
<body class="bg-background text-on-surface">
<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- Top Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-4">
    <!-- Hamburger button (mobile) -->
    <button id="hamburger-btn" class="lg:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="toggleSidebar()">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <a href="{{ route('home') }}" class="font-headline-md text-headline-md font-bold text-primary hover:opacity-90 transition-opacity">Katalog IDN</a>
</div>

<div class="flex items-center gap-3">
    <!-- Keranjang Belanja -->
    @php
        $cartCount = count(session('cart', []));
    @endphp
    <a href="{{ route('cart') }}" class="relative p-1.5 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-variant/60 transition-all flex items-center justify-center" title="Keranjang Belanja">
        <span class="material-symbols-outlined text-2xl">shopping_cart</span>
        @if($cartCount > 0)
            <span class="absolute -top-1 -right-1 bg-primary text-on-primary font-bold text-[10px] w-5 h-5 rounded-full flex items-center justify-center shadow-xs animate-pulse">
                {{ $cartCount }}
            </span>
        @endif
    </a>

    <!-- Notifikasi -->
    <button type="button" onclick="alert('Belum ada notifikasi baru.')" class="relative p-1.5 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-variant/60 transition-all flex items-center justify-center" title="Notifikasi">
        <span class="material-symbols-outlined text-2xl">notifications</span>
        <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-primary ring-2 ring-surface"></span>
    </button>

    <!-- Avatar Profil -->
    <a href="{{ route('account') }}" class="w-8 h-8 rounded-full overflow-hidden border border-outline hover:ring-2 hover:ring-primary/40 transition-all ml-1" title="Profil Akun Toko">
        <img class="w-full h-full object-cover" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name ?? 'User') . '&background=7c5800&color=ffffff&size=128' }}" alt="{{ Auth::user()->name ?? 'User avatar' }}"/>
    </a>
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
<span class="material-symbols-outlined">dashboard</span> Dashboard Toko
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('home') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">home</span> Halaman Utama
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('shop') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> Katalog Produk
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">receipt_long</span> Orders Toko
</a>
<!-- Active State: Inventory -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('inventories') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">inventory</span> Inventory Produk
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md font-bold" href="{{ route('seller.store') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> Halaman Toko Saya
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('sales_analytics') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">analytics</span> Sell analytics
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

<!-- Main Content Canvas -->
<main class="lg:pl-64 pt-20 min-h-screen px-4 md:px-margin-desktop py-6">
<div class="max-w-container-max mx-auto">
<!-- Page Header & Action -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-y-4 mb-stack-lg">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Inventory Management</h2>
<p class="font-body-md text-secondary">Manage your product catalog, track stock levels, and update pricing.</p>
</div>
<a href="{{ route('add_product') }}" class="flex items-center justify-center gap-x-2 bg-primary-container text-on-primary-container px-6 py-3 rounded-lg font-label-md font-bold hover:brightness-90 active:scale-95 transition-all shadow-sm">
<span class="material-symbols-outlined" data-icon="add">add</span>
                    Add New Product
</a>
</div>
<!-- Dashboard Stats Brief -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-stack-lg">
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Total Produk</p>
<p class="font-headline-md text-on-surface font-bold">{{ number_format($totalProductsCount ?? 0, 0, ',', '.') }}</p>
</div>
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Peringatan Stok Menipis</p>
<p class="font-headline-md text-error font-bold">{{ number_format($lowStockCount ?? 0, 0, ',', '.') }}</p>
</div>
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Stok Habis</p>
<p class="font-headline-md text-on-surface-variant font-bold">{{ number_format($outOfStockCount ?? 0, 0, ',', '.') }}</p>
</div>
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Nilai Total Inventaris</p>
<p class="font-headline-md text-primary font-bold">Rp {{ number_format($totalInventoryValue ?? 0, 0, ',', '.') }}</p>
</div>
</div>
<!-- Filters & Search Bar Section -->
<form action="{{ route('inventories') }}" method="GET" class="bg-surface border border-[#EDEDED] p-stack-sm rounded-xl mb-gutter flex flex-wrap items-center gap-4">
    <!-- Category Filter -->
    <div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg">
        <span class="material-symbols-outlined text-secondary" data-icon="filter_list">filter_list</span>
        <select name="category" onchange="this.form.submit()" class="bg-transparent border-none focus:ring-0 font-label-md text-on-surface-variant text-xs font-bold cursor-pointer">
            <option value="">Semua Kategori</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>{{ $cat->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <!-- Stock Status Filter -->
    <div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg">
        <span class="material-symbols-outlined text-secondary" data-icon="inventory">inventory</span>
        <select name="stock_status" onchange="this.form.submit()" class="bg-transparent border-none focus:ring-0 font-label-md text-on-surface-variant text-xs font-bold cursor-pointer">
            <option value="">Semua Status Stok</option>
            <option value="in_stock" {{ request('stock_status') == 'in_stock' ? 'selected' : '' }}>Stok Tersedia (>=10)</option>
            <option value="low_stock" {{ request('stock_status') == 'low_stock' ? 'selected' : '' }}>Stok Menipis (1-9)</option>
            <option value="out_of_stock" {{ request('stock_status') == 'out_of_stock' ? 'selected' : '' }}>Stok Habis (0)</option>
        </select>
    </div>

    <!-- Sort By Filter -->
    <div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg">
        <span class="material-symbols-outlined text-secondary" data-icon="sort">sort</span>
        <select name="sort" onchange="this.form.submit()" class="bg-transparent border-none focus:ring-0 font-label-md text-on-surface-variant text-xs font-bold cursor-pointer">
            <option value="newest" {{ request('sort', 'newest') == 'newest' ? 'selected' : '' }}>Urutkan: Terbaru</option>
            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Harga: Terendah</option>
            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Harga: Tertinggi</option>
            <option value="stock_low" {{ request('sort') == 'stock_low' ? 'selected' : '' }}>Stok: Paling Sedikit</option>
            <option value="stock_high" {{ request('sort') == 'stock_high' ? 'selected' : '' }}>Stok: Paling Banyak</option>
        </select>
    </div>

    <!-- Search Input -->
    <div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg flex-1 min-w-[200px]">
        <span class="material-symbols-outlined text-secondary">search</span>
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama produk..." class="bg-transparent border-none p-0 focus:ring-0 text-xs w-full text-on-surface"/>
        @if(request()->anyFilled(['category', 'stock_status', 'sort', 'search']))
            <a href="{{ route('inventories') }}" class="text-[10px] bg-secondary/10 hover:bg-secondary/20 text-secondary font-bold px-2 py-1 rounded">Reset</a>
        @endif
    </div>

    <a href="{{ route('inventories.export') }}" class="ml-auto flex items-center gap-x-2 px-4 py-2 bg-emerald-600 text-white hover:bg-emerald-700 font-label-md text-xs font-bold rounded-lg transition-colors shadow-xs">
        <span class="material-symbols-outlined text-sm" data-icon="download">download</span>
        Export CSV
    </a>
</form>

<!-- Inventory Data Table -->
<div class="bg-white border border-[#EDEDED] rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low border-b border-surface-container">
<tr>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider w-20">Foto</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">Detail Produk</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">SKU</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">Kategori</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider w-64">Tingkat Stok</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">Harga</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-[#EDEDED]">
@forelse($products as $product)
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="p-4">
<div class="w-12 h-12 bg-surface-container-high rounded-lg overflow-hidden border border-outline-variant">
@php
    $img = $product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/100';
    $imgUrl = str_starts_with($img, 'http') ? $img : asset($img);
@endphp
<img class="w-full h-full object-cover" src="{{ $imgUrl }}" alt="{{ $product->nama_produk }}"/>
</div>
</td>
<td class="p-4">
<a href="{{ route('product.detail', $product->id) }}" class="font-body-md font-bold text-on-surface hover:text-primary transition-colors">{{ $product->nama_produk }}</a>
<div class="text-[12px] text-secondary">Ditambahkan {{ $product->created_at ? $product->created_at->format('d M Y') : '-' }}</div>
</td>
<td class="p-4 font-body-sm text-secondary font-mono">PRD-00{{ $product->id }}</td>
<td class="p-4">
<span class="px-2.5 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded text-[12px] font-bold">{{ $product->category->nama_kategori ?? 'Umum' }}</span>
</td>
<td class="p-4">
<div class="flex flex-col gap-y-1">
<div class="flex justify-between items-center text-[12px]">
@if($product->stok <= 0)
<span class="text-error font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">cancel</span> Stok Habis
</span>
@elseif($product->stok < 10)
<span class="text-amber-600 font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">warning</span> Stok Menipis
</span>
@else
<span class="text-emerald-600 font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">check_circle</span> Stok Tersedia
</span>
@endif
<span class="font-bold text-on-surface">{{ $product->stok }} pcs</span>
</div>
</div>
</td>
<td class="p-4 font-body-md font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
<td class="p-4 text-right">
<div class="flex justify-end gap-x-2">
<a href="{{ route('edit_product', $product->id) }}" class="p-2 text-secondary hover:text-primary hover:bg-primary-fixed rounded-lg transition-all active:scale-95 inline-flex items-center justify-center" title="Edit">
<span class="material-symbols-outlined">edit</span>
</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" class="inline">
@csrf
@method('DELETE')
<button type="submit" class="p-2 text-secondary hover:text-error hover:bg-error-container rounded-lg transition-all active:scale-95" title="Delete">
<span class="material-symbols-outlined">delete</span>
</button>
</form>
</div>
</td>
</tr>
@empty
<tr>
<td colspan="7" class="p-8 text-center text-secondary">
Belum ada produk di inventaris Anda. <a href="{{ route('add_product') }}" class="text-primary font-bold hover:underline">Tambah Produk Pertama</a>
</td>
</tr>
@endforelse
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="px-6 py-4 border-t border-surface-container bg-surface flex flex-col sm:flex-row items-center justify-between gap-4">
<p class="font-label-md text-xs text-secondary">Menampilkan {{ $products->firstItem() ?? 0 }} hingga {{ $products->lastItem() ?? 0 }} dari {{ $products->total() }} produk</p>
<div>
    {{ $products->links() }}
</div>
</div>
</div>
<!-- Contextual Help / Tips (Asymmetric Component) -->
<div class="mt-stack-lg grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="md:col-span-2 bg-[#F2F0F0] rounded-2xl p-gutter flex items-center gap-x-6 relative overflow-hidden group">
<div class="z-10 relative">
<h4 class="font-headline-sm text-on-surface mb-2">Smart Inventory Tips</h4>
<p class="font-body-md text-on-surface-variant max-w-md">Based on your recent sales, we recommend restocking the <strong>Minimalist Amber Vase</strong> soon. Sales increased by 24% this week.</p>
<button class="mt-4 px-6 py-2 bg-primary text-on-primary rounded-lg font-label-md hover:brightness-110 transition-all">Optimize Stock</button>
</div>
<div class="absolute right-0 top-0 h-full opacity-10 pointer-events-none group-hover:scale-110 transition-transform duration-700">
<span class="material-symbols-outlined text-[120px]" data-icon="auto_awesome">auto_awesome</span>
</div>
</div>
<div class="bg-primary-container p-gutter rounded-2xl flex flex-col justify-between">
<span class="material-symbols-outlined text-on-primary-container text-4xl" data-icon="rocket_launch">rocket_launch</span>
<div>
<h4 class="font-headline-sm text-on-primary-container mb-1">New Feature</h4>
<p class="font-body-sm text-on-primary-container/80">Bulk edit inventory images with our new AI scaling tool.</p>
</div>
<a class="font-label-md text-on-primary-container underline underline-offset-4 mt-2" href="#">Learn more</a>
</div>
</div>
</div>
</main>
<!-- Floating Action for Mobile Experience (Normally hidden on desktop via structure) -->
<button class="md:hidden fixed bottom-6 right-6 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg flex items-center justify-center active:scale-90 transition-transform z-50">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>   
<script>
        // Micro-interaction for table rows
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                // Potential for adding visual flair if needed
            });
        });

        // Search bar focus effect
        const searchInput = document.querySelector('input[type="text"]');
        const searchContainer = searchInput.parentElement;
        if (searchInput) {
            searchInput.addEventListener('focus', () => searchContainer.classList.add('border-primary'));
            searchInput.addEventListener('blur', () => searchContainer.classList.remove('border-primary'));
        }

        // Sidebar toggle
        function toggleSidebar() {
            document.getElementById('main-sidebar').classList.toggle('open');
            document.getElementById('sidebar-overlay').classList.toggle('active');
        }
        function closeSidebar() {
            document.getElementById('main-sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('active');
        }
    </script>
</body></html>