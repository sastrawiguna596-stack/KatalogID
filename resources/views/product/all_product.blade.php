<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Katalog IDN - Product Catalog</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            background-color: #fbf9f8; color: #1b1c1c; -webkit-font-smoothing: antialiased;
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        .product-card-hover { transition: transform 0.2s ease-out, box-shadow 0.2s ease-out; }
        .product-card-hover:hover { transform: translateY(-4px); box-shadow: 0px 4px 20px rgba(0,0,0,0.04); }
        .sticky-search { position: sticky; top: 64px; z-index: 40; }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #d5c4ab; border-radius: 10px; }
        /* Mobile Nav Drawer */
        #nav-overlay { display: none; }
        #nav-overlay.active { display: block; }
        #mobile-nav-drawer {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #mobile-nav-drawer.open { transform: translateX(0); }
        /* Filter drawer mobile */
        #filter-overlay { display: none; }
        #filter-overlay.active { display: block; }
        #filter-drawer {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #filter-drawer.open { transform: translateX(0); }
    </style>
</head>
<body class="font-body-md text-body-md selection:bg-primary-container selection:text-on-primary-fixed-variant">

<!-- Mobile Nav Overlay -->
<div id="nav-overlay" class="fixed inset-0 bg-black/40 z-40 md:hidden" onclick="closeNavDrawer()"></div>
<!-- Mobile Nav Drawer -->
<div id="mobile-nav-drawer" class="fixed left-0 top-0 h-full w-72 z-50 bg-surface border-r border-outline-variant flex flex-col p-6 md:hidden">
    <div class="flex items-center justify-between mb-8">
        <span class="font-headline-md text-headline-md font-bold text-on-surface">Katalog IDN</span>
        <button onclick="closeNavDrawer()" class="p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <nav class="flex flex-col gap-1">
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-3 text-on-surface-variant hover:bg-surface-variant rounded-lg font-label-md text-label-md transition-all" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined">home</span> Home
        </a>
        <a href="{{ route('shop') }}" class="flex items-center gap-3 px-3 py-3 text-on-primary-container bg-primary-container rounded-lg font-bold font-label-md text-label-md transition-all" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">storefront</span> Shop
        </a>
        <a href="{{ route('cart') }}" class="flex items-center gap-3 px-3 py-3 text-on-surface-variant hover:bg-surface-variant rounded-lg font-label-md text-label-md transition-all" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined">shopping_cart</span> Cart
        </a>
        <a href="{{ route('account') }}" class="flex items-center gap-3 px-3 py-3 text-on-surface-variant hover:bg-surface-variant rounded-lg font-label-md text-label-md transition-all" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined">person</span> Profile
        </a>
    </nav>
    <div class="mt-auto border-t border-outline-variant pt-4">
        @auth
        <form action="{{ route('logout') }}" method="POST" class="w-full">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-3 py-3 text-error hover:bg-error-container rounded-lg font-label-md text-label-md font-bold transition-all">
                <span class="material-symbols-outlined">logout</span> Sign Out
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 w-full py-3 bg-primary text-white rounded-lg font-label-md text-label-md font-bold hover:brightness-110 transition-all">
            <span class="material-symbols-outlined">login</span> Masuk / Daftar
        </a>
        @endauth
    </div>
</div>

<!-- Filter Overlay (mobile) -->
<div id="filter-overlay" class="fixed inset-0 bg-black/40 z-40 md:hidden" onclick="closeFilterDrawer()"></div>
<!-- Filter Drawer (mobile) -->
<div id="filter-drawer" class="fixed left-0 top-0 h-full w-80 z-50 bg-surface border-r border-outline-variant flex flex-col md:hidden overflow-y-auto">
    <div class="flex items-center justify-between p-4 border-b border-outline-variant">
        <h2 class="font-headline-sm text-headline-sm">Filter Katalog</h2>
        <button onclick="closeFilterDrawer()" class="p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <div class="p-4 flex-1 overflow-y-auto">
        <div class="flex items-center justify-between mb-4">
            <a href="{{ route('shop') }}" class="text-body-sm font-body-sm text-primary hover:underline font-bold">Reset Filter</a>
        </div>
        <!-- Category -->
        <div class="mb-6">
            <h3 class="font-label-md text-label-md text-on-surface mb-3">Kategori Produk</h3>
            <div class="flex flex-col gap-2">
                <a href="{{ route('shop', request()->except(['category', 'page'])) }}" class="flex items-center justify-between p-2.5 rounded-xl border border-outline-variant/30 {{ !request('category') ? 'bg-primary text-white font-bold' : 'text-secondary hover:bg-surface-variant' }}">
                    <span>Semua Kategori</span>
                </a>
                @foreach($categories as $cat)
                <a href="{{ route('shop', array_merge(request()->except(['category', 'page']), ['category' => $cat->slug])) }}" class="flex items-center justify-between p-2.5 rounded-xl border border-outline-variant/30 {{ request('category') == $cat->slug ? 'bg-primary text-white font-bold' : 'text-secondary hover:bg-surface-variant' }}">
                    <span>{{ $cat->nama_kategori }}</span>
                </a>
                @endforeach
            </div>
        </div>
        <!-- Lokasi Kota/Kabupaten -->
        <div class="mb-6">
            <h3 class="font-label-md text-label-md text-on-surface mb-3 flex items-center gap-1.5">
                <span class="material-symbols-outlined text-primary text-base">location_on</span>
                <span>Lokasi Toko</span>
            </h3>
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('shop', request()->except(['kota', 'page'])) }}" class="px-3 py-1.5 rounded-full text-xs font-semibold border {{ !request('kota') ? 'bg-primary text-white border-primary font-bold' : 'border-outline-variant text-secondary bg-surface' }}">
                    Semua Lokasi
                </a>
                @if(isset($cities) && count($cities) > 0)
                    @foreach($cities as $c)
                    <a href="{{ route('shop', array_merge(request()->except(['kota', 'page']), ['kota' => $c])) }}" class="px-3 py-1.5 rounded-full text-xs font-semibold border {{ request('kota') == $c ? 'bg-primary text-white border-primary font-bold' : 'border-outline-variant text-secondary bg-surface' }}">
                        {{ $c }}
                    </a>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- Price -->
        <form action="{{ route('shop') }}" method="GET" class="mb-6">
            @foreach(request()->except(['max_price', 'page']) as $k => $v)
                @if(is_array($v))
                    @foreach($v as $subV)
                        <input type="hidden" name="{{ $k }}[]" value="{{ $subV }}">
                    @endforeach
                @else
                    <input type="hidden" name="{{ $k }}" value="{{ $v }}">
                @endif
            @endforeach
            <h3 class="font-label-md text-label-md text-on-surface mb-3">Rentang Harga Maksimal</h3>
            @php
                $currentMaxPriceMob = request('max_price', $maxProductPrice ?? 5000000);
            @endphp
            <div class="flex items-center gap-2 mb-3">
                <div class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-xs font-bold text-secondary">Rp 0</div>
                <div class="w-4 h-[1px] bg-outline-variant"></div>
                <div id="maxPriceDisplay2" class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-xs font-bold text-primary">Rp {{ number_format($currentMaxPriceMob, 0, ',', '.') }}</div>
            </div>
            <input id="priceRange2" name="max_price" onchange="this.form.submit()" oninput="document.getElementById('maxPriceDisplay2').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(this.value)" class="w-full accent-primary h-1 bg-outline-variant rounded-lg appearance-none cursor-pointer" max="{{ $maxProductPrice ?? 5000000 }}" min="10000" step="50000" value="{{ $currentMaxPriceMob }}" type="range"/>
            <button type="submit" class="w-full mt-4 py-2.5 bg-primary text-on-primary rounded-xl font-label-md font-bold text-xs">Terapkan Filter Harga</button>
        </form>
    </div>
    <div class="p-4 border-t border-outline-variant">
        <button onclick="closeFilterDrawer()" class="w-full py-3 bg-surface-container-high text-on-surface rounded-lg font-label-md font-bold">Tutup</button>
    </div>
</div>

<!-- TopAppBar -->
@include('layouts.navbar', ['active' => 'shop'])
<main class="max-w-container-max mx-auto px-4 md:px-margin-desktop py-stack-md">
<!-- Breadcrumbs & Sticky Search -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-stack-md">
<nav class="flex items-center text-body-sm font-body-sm text-on-secondary-container">
<a class="hover:text-primary" href="{{ route('home') }}">Home</a>
<span class="material-symbols-outlined text-[16px] mx-2">chevron_right</span>
<span class="text-primary font-semibold">New Arrivals</span>
</nav>
<form action="{{ route('shop') }}" method="GET" class="flex items-center gap-2 w-full md:w-auto">
    @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}"/>
    @endif
    @if(request('kota'))
        <input type="hidden" name="kota" value="{{ request('kota') }}"/>
    @endif
    @if(request('max_price'))
        <input type="hidden" name="max_price" value="{{ request('max_price') }}"/>
    @endif
    <div class="flex-1 sticky-search flex items-center bg-surface-container-lowest border border-outline-variant rounded-full px-3 py-1.5 w-full md:w-[460px] focus-within:ring-2 focus-within:ring-primary/20 focus-within:border-primary transition-all shadow-xs">
        <!-- Search Type Selector (Produk vs Toko) -->
        <select id="searchTypeSelect" name="search_type" class="bg-surface-container-low text-xs font-bold text-on-surface border-none rounded-full px-2.5 py-1.5 mr-2 focus:ring-0 cursor-pointer hover:bg-surface-container-high transition-colors">
            <option value="product" {{ request('search_type', 'product') == 'product' ? 'selected' : '' }}>📦 Cari Produk</option>
            <option value="store" {{ request('search_type') == 'store' ? 'selected' : '' }}>🏪 Cari Toko</option>
        </select>
        <span class="material-symbols-outlined text-on-surface-variant mr-1.5 text-lg">search</span>
        <input id="searchInput" name="search" value="{{ request('search') }}" class="bg-transparent border-none focus:ring-0 w-full text-body-sm font-body-sm text-on-surface placeholder:text-secondary" placeholder="{{ request('search_type') == 'store' ? 'Cari nama toko...' : 'Cari produk atau toko...' }}" type="text"/>
        <button type="submit" class="bg-primary text-white text-xs font-bold px-3.5 py-1.5 rounded-full hover:brightness-110 transition-all ml-1 flex-shrink-0">
            Cari
        </button>
    </div>
    <!-- Mobile filter button -->
    <button type="button" onclick="openFilterDrawer()" class="md:hidden flex items-center gap-1 px-3 py-2 border border-outline-variant rounded-full text-on-surface-variant text-body-sm font-label-md whitespace-nowrap hover:bg-surface-variant">
        <span class="material-symbols-outlined text-base">tune</span> Filter
    </button>
</form>
</div>
<div class="flex flex-col md:flex-row gap-gutter">
<!-- Sidebar Filters (hidden on mobile, visible on md+) -->
<aside class="hidden md:block w-64 flex-shrink-0">
<div class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-6 sticky top-32">
<div class="flex items-center justify-between mb-stack-md">
<h2 class="font-headline-sm text-headline-sm text-on-surface">Filter</h2>
<a href="{{ route('shop') }}" id="clearFiltersBtn" class="text-body-sm font-body-sm text-primary hover:underline font-bold">Reset Filter</a>
</div>
<!-- Category -->
<div class="mb-stack-md">
<h3 class="font-label-md text-label-md text-on-surface mb-3">Kategori Produk</h3>
<div class="flex flex-col gap-2">
<a href="{{ route('shop', request()->except(['category', 'page'])) }}" class="flex items-center gap-3 cursor-pointer group py-1 border-b border-outline-variant/30">
    <span class="font-body-md text-body-md text-secondary group-hover:text-primary {{ !request('category') ? 'font-bold text-primary' : '' }}">Semua Kategori</span>
</a>
@foreach($categories as $cat)
<a href="{{ route('shop', array_merge(request()->except(['category', 'page']), ['category' => $cat->slug])) }}" class="flex items-center gap-3 cursor-pointer group py-1 border-b border-outline-variant/30">
<span class="font-body-md text-body-md text-secondary group-hover:text-primary {{ request('category') == $cat->slug ? 'font-bold text-primary' : '' }}">{{ $cat->nama_kategori }}</span>
</a>
@endforeach
</div>
</div>
<!-- Lokasi Kota/Kabupaten -->
<div class="mb-stack-md">
<h3 class="font-label-md text-label-md text-on-surface mb-3 flex items-center gap-1.5">
    <span class="material-symbols-outlined text-primary text-base">location_on</span>
    <span>Lokasi Toko</span>
</h3>
<div class="flex flex-col gap-1.5 max-h-48 overflow-y-auto pr-1">
    <a href="{{ route('shop', request()->except(['kota', 'page'])) }}" class="flex items-center justify-between px-3 py-1.5 rounded-lg text-xs font-semibold {{ !request('kota') ? 'bg-primary-container text-on-primary-container font-bold' : 'text-secondary hover:bg-surface-container-high transition-colors' }}">
        <span>Semua Lokasi</span>
        @if(!request('kota'))
            <span class="material-symbols-outlined text-sm">check</span>
        @endif
    </a>
    @if(isset($cities) && count($cities) > 0)
        @foreach($cities as $c)
        <a href="{{ route('shop', array_merge(request()->except(['kota', 'page']), ['kota' => $c])) }}" class="flex items-center justify-between px-3 py-1.5 rounded-lg text-xs font-semibold {{ request('kota') == $c ? 'bg-primary-container text-on-primary-container font-bold' : 'text-secondary hover:bg-surface-container-high transition-colors' }}">
            <span>{{ $c }}</span>
            @if(request('kota') == $c)
                <span class="material-symbols-outlined text-sm">check</span>
            @endif
        </a>
        @endforeach
    @endif
</div>
</div>
<!-- Price Range Form -->
<form action="{{ route('shop') }}" method="GET" class="mb-stack-md">
@foreach(request()->except(['max_price', 'page']) as $k => $v)
    @if(is_array($v))
        @foreach($v as $subV)
            <input type="hidden" name="{{ $k }}[]" value="{{ $subV }}">
        @endforeach
    @else
        <input type="hidden" name="{{ $k }}" value="{{ $v }}">
    @endif
@endforeach
<h3 class="font-label-md text-label-md text-on-surface mb-3">Rentang Harga Maksimal</h3>
@php
    $currentMaxPrice = request('max_price', $maxProductPrice ?? 5000000);
@endphp
<div class="flex items-center gap-2 mb-3">
<div class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-xs font-bold text-secondary">Rp 0</div>
<div class="w-4 h-[1px] bg-outline-variant"></div>
<div id="maxPriceDisplay" class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-xs font-bold text-primary">Rp {{ number_format($currentMaxPrice, 0, ',', '.') }}</div>
</div>
<input id="priceRange" name="max_price" onchange="this.form.submit()" oninput="document.getElementById('maxPriceDisplay').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(this.value)" class="w-full accent-primary h-1 bg-outline-variant rounded-lg appearance-none cursor-pointer" max="{{ $maxProductPrice ?? 5000000 }}" min="10000" step="50000" value="{{ $currentMaxPrice }}" type="range"/>
<div class="flex justify-between items-center mt-2">
    <span class="text-[10px] text-secondary font-semibold">Min: Rp 10rb</span>
    <span class="text-[10px] text-secondary font-semibold">Max: Rp {{ number_format($maxProductPrice ?? 5000000, 0, ',', '.') }}</span>
</div>
</form>

</div>
</aside>
<!-- Product Grid -->
<section class="flex-1">
@if(isset($matchedStores) && $matchedStores->count() > 0)
<div class="mb-6 p-5 rounded-2xl bg-amber-500/10 border border-primary/20">
    <div class="flex items-center justify-between mb-3">
        <h3 class="font-bold text-on-surface text-base flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">storefront</span>
            <span>Toko Ditemukan ({{ $matchedStores->count() }})</span>
        </h3>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($matchedStores as $st)
            <a href="{{ route('store_product', $st->id) }}" class="flex items-center gap-3 p-3.5 bg-white rounded-xl border border-surface-container-highest hover:shadow-md hover:border-primary/40 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center font-bold flex-shrink-0 group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="min-w-0 flex-1">
                    <h4 class="font-bold text-on-surface text-sm truncate group-hover:text-primary transition-colors">{{ $st->nama_toko }}</h4>
                    <p class="text-xs text-secondary line-clamp-1">{{ $st->deskripsi ?? 'Toko Resmi Katalog IDN' }}</p>
                </div>
                <span class="material-symbols-outlined text-primary text-lg group-hover:translate-x-1 transition-transform">chevron_right</span>
            </a>
        @endforeach
    </div>
</div>
@endif

<div class="flex items-center justify-between mb-gutter flex-wrap gap-3">
<h1 class="font-headline-lg text-headline-lg text-on-surface">Katalog Produk</h1>
<form id="sortForm" action="{{ route('shop') }}" method="GET" class="flex items-center gap-2">
    @foreach(request()->except(['sort', 'page']) as $k => $v)
        @if(is_array($v))
            @foreach($v as $subV)
                <input type="hidden" name="{{ $k }}[]" value="{{ $subV }}">
            @endforeach
        @else
            <input type="hidden" name="{{ $k }}" value="{{ $v }}">
        @endif
    @endforeach
    <span class="text-body-sm font-bold text-secondary">Urutkan:</span>
    <select name="sort" id="sortSelect" onchange="this.form.submit()" class="bg-surface-container-low border border-outline-variant rounded-xl px-3 py-1.5 font-label-md text-xs font-bold text-on-surface cursor-pointer focus:ring-primary focus:border-primary">
        <option value="newest" {{ request('sort', 'newest') == 'newest' ? 'selected' : '' }}>Terbaru</option>
        <option value="price_low" {{ (request('sort') == 'price_low' || request('sort') == 'price-low') ? 'selected' : '' }}>Harga: Terendah ke Tertinggi</option>
        <option value="price_high" {{ (request('sort') == 'price_high' || request('sort') == 'price-high') ? 'selected' : '' }}>Harga: Tertinggi ke Terendah</option>
        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
    </select>
</form>
</div>

<div id="noProductsMessage" class="hidden text-center py-12 bg-surface-container-lowest border border-dashed border-outline-variant rounded-xl my-4">
<span class="material-symbols-outlined text-4xl text-secondary mb-2">search_off</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Tidak ada produk ditemukan</h3>
<p class="font-body-sm text-body-sm text-secondary mt-1">Coba sesuaikan filter atau kata kunci pencarian Anda.</p>
</div>

<div id="productGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-4 md:gap-6">
@forelse($products as $product)
<div onclick="window.location.href='{{ route('product.detail', $product->id) }}'" class="product-card-item product-card-hover group bg-surface-container-lowest border border-[#EDEDED] rounded-sm p-2.5 sm:p-4 flex flex-col justify-between cursor-pointer transition-all duration-300" data-id="{{ $product->id }}" data-title="{{ $product->nama_produk }}" data-category="{{ $product->category->nama_kategori ?? 'Umum' }}" data-store="{{ strtolower($product->store->nama_toko ?? '') }}" data-price="{{ $product->harga }}" data-rating="4.8">
<div>
    <div class="relative w-full aspect-square bg-[#F5F5F5] rounded-sm overflow-hidden mb-2.5 sm:mb-4">
    @php
        $imgUrl = $product->first_image_url;
    @endphp
    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="{{ $product->nama_produk }}" src="{{ $imgUrl }}"/>
    @if($product->badge)
    <span class="absolute top-1.5 right-1.5 sm:top-2 sm:right-2 bg-primary-container text-on-primary-container font-label-md text-[9px] sm:text-[10px] font-bold px-1.5 sm:px-2 py-0.5 sm:py-1 rounded-full uppercase">{{ $product->badge }}</span>
    @endif
    </div>
    <div class="flex items-center justify-between mb-1 text-[10px] sm:text-xs">
    <span class="text-secondary truncate max-w-[90px] sm:max-w-none">{{ $product->category->nama_kategori ?? 'Umum' }}</span>
    <div class="flex items-center gap-0.5 text-amber-500 flex-shrink-0">
    <span class="material-symbols-outlined text-[13px] sm:text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
    <span class="font-semibold text-on-surface text-[10px] sm:text-xs">4.8</span>
    </div>
    </div>
    <h4 class="text-xs sm:text-sm font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2 min-h-[32px] sm:min-h-[40px] leading-snug mb-1">{{ $product->nama_produk }}</h4>
    <div class="text-[10px] sm:text-[11px] text-primary font-bold flex items-center justify-between gap-1 mb-2">
        <div class="flex items-center gap-1 min-w-0">
            <span class="material-symbols-outlined text-xs">store</span>
            <span class="truncate">{{ $product->store->nama_toko ?? 'Toko' }}</span>
        </div>
        @if(!empty($product->store->kota))
        <span class="text-[9px] sm:text-[10px] text-secondary font-medium flex items-center gap-0.5 flex-shrink-0" title="Lokasi Toko">
            <span class="material-symbols-outlined text-[11px]">location_on</span>
            <span class="truncate max-w-[70px] sm:max-w-[90px]">{{ $product->store->kota }}</span>
        </span>
        @endif
    </div>
</div>
<div class="pt-2 border-t border-surface-container-low flex items-center justify-between">
<div class="flex flex-col">
<span class="text-xs sm:text-base font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
@if($product->harga_diskon)
<span class="text-[10px] sm:text-xs text-on-secondary-container line-through">Rp {{ number_format($product->harga_diskon, 0, ',', '.') }}</span>
@endif
</div>
<button class="material-symbols-outlined p-1 sm:p-2 text-secondary hover:text-primary transition-colors text-lg sm:text-2xl">add_shopping_cart</button>
</div>
</div>
@empty
<div class="col-span-full text-center py-12 bg-surface-container-lowest border border-dashed border-outline-variant rounded-xl my-4">
<span class="material-symbols-outlined text-4xl text-secondary mb-2">search_off</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Belum ada produk</h3>
<p class="font-body-sm text-body-sm text-secondary mt-1">Produk akan muncul setelah ditambahkan ke katalog.</p>
</div>
@endforelse
</div>

<div class="mt-8 flex justify-center">
{{ $products->links() }}
</div>

</section>
</div>
</main>
@include('layouts.footer')

<script>
    // Mobile nav drawer
    function openNavDrawer() {
        document.getElementById('mobile-nav-drawer').classList.add('open');
        document.getElementById('nav-overlay').classList.add('active');
    }
    function closeNavDrawer() {
        document.getElementById('mobile-nav-drawer').classList.remove('open');
        document.getElementById('nav-overlay').classList.remove('active');
    }
    // Mobile filter drawer
    function openFilterDrawer() {
        document.getElementById('filter-drawer').classList.add('open');
        document.getElementById('filter-overlay').classList.add('active');
    }
    function closeFilterDrawer() {
        document.getElementById('filter-drawer').classList.remove('open');
        document.getElementById('filter-overlay').classList.remove('active');
    }

        // Micro-interactions for sticky behavior and animations
        document.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (header) {
                if (window.scrollY > 20) {
                    header.classList.add('shadow-sm');
                } else {
                    header.classList.remove('shadow-sm');
                }
            }
        });

        // Add to cart feedback simulation
        const cartBtns = document.querySelectorAll('button .material-symbols-outlined');
        cartBtns.forEach(btn => {
            if (btn.innerText === 'add_shopping_cart') {
                btn.parentElement.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const originalIcon = btn.innerText;
                    btn.innerText = 'check_circle';
                    btn.classList.add('text-primary');
                    setTimeout(() => {
                        btn.innerText = originalIcon;
                        btn.classList.remove('text-primary');
                    }, 1500);
                });
            }
        });

        // Sorting & Filtering Logic
        document.addEventListener('DOMContentLoaded', () => {
            const sortSelect = document.getElementById('sortSelect');
            const searchInput = document.getElementById('searchInput');
            const searchTypeSelect = document.getElementById('searchTypeSelect');
            const priceRange = document.getElementById('priceRange');
            const maxPriceDisplay = document.getElementById('maxPriceDisplay');
            const clearFiltersBtn = document.getElementById('clearFiltersBtn');
            const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
            const ratingFilterBtns = document.querySelectorAll('.rating-filter-btn');
            const productGrid = document.getElementById('productGrid');
            const noProductsMessage = document.getElementById('noProductsMessage');
            
            if (!productGrid) return;
            const productCards = Array.from(document.querySelectorAll('.product-card-item'));

            let selectedMinRating = 0;

            function formatRupiah(number) {
                return 'Rp ' + new Intl.NumberFormat('id-ID').format(number);
            }

            function applyFiltersAndSort() {
                const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
                const searchType = searchTypeSelect ? searchTypeSelect.value : 'product';
                const maxPrice = priceRange ? parseFloat(priceRange.value) : 500000;
                
                // Update price range text
                if (maxPriceDisplay) {
                    maxPriceDisplay.textContent = formatRupiah(maxPrice);
                }

                // Get selected categories
                const checkedCategories = Array.from(categoryCheckboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                let visibleCards = [];

                productCards.forEach(card => {
                    const title = (card.dataset.title || '').toLowerCase();
                    const category = card.dataset.category || '';
                    const store = (card.dataset.store || '').toLowerCase();
                    const price = parseFloat(card.dataset.price || '0');
                    const rating = parseFloat(card.dataset.rating || '0');

                    let matchesSearch = true;
                    if (query) {
                        if (searchType === 'store') {
                            matchesSearch = store.includes(query);
                        } else {
                            matchesSearch = title.includes(query) || category.toLowerCase().includes(query) || store.includes(query);
                        }
                    }

                    const matchesCategory = checkedCategories.length === 0 || checkedCategories.includes(category);
                    const matchesPrice = price <= maxPrice;
                    const matchesRating = rating >= selectedMinRating;

                    if (matchesSearch && matchesCategory && matchesPrice && matchesRating) {
                        card.style.display = 'flex';
                        visibleCards.push(card);
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Sort visible cards
                const sortValue = sortSelect ? sortSelect.value : 'newest';

                visibleCards.sort((a, b) => {
                    const priceA = parseFloat(a.dataset.price || '0');
                    const priceB = parseFloat(b.dataset.price || '0');
                    const ratingA = parseFloat(a.dataset.rating || '0');
                    const ratingB = parseFloat(b.dataset.rating || '0');
                    const idA = parseInt(a.dataset.id || '0');
                    const idB = parseInt(b.dataset.id || '0');

                    if (sortValue === 'price-low') {
                        return priceA - priceB;
                    } else if (sortValue === 'price-high') {
                        return priceB - priceA;
                    } else if (sortValue === 'rating') {
                        return ratingB - ratingA;
                    } else {
                        // newest
                        return idA - idB;
                    }
                });

                // Re-append sorted cards
                visibleCards.forEach(card => productGrid.appendChild(card));

                // Empty state handler
                if (noProductsMessage) {
                    noProductsMessage.style.display = visibleCards.length === 0 ? 'block' : 'none';
                }
            }

            // Event Listeners
            if (sortSelect) sortSelect.addEventListener('change', applyFiltersAndSort);
            if (searchInput) searchInput.addEventListener('input', applyFiltersAndSort);
            if (searchTypeSelect) searchTypeSelect.addEventListener('change', applyFiltersAndSort);
            if (priceRange) priceRange.addEventListener('input', applyFiltersAndSort);
            
            categoryCheckboxes.forEach(cb => cb.addEventListener('change', applyFiltersAndSort));

            ratingFilterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const ratingVal = parseFloat(btn.dataset.minRating || '0');
                    if (selectedMinRating === ratingVal) {
                        selectedMinRating = 0;
                        btn.classList.remove('ring-2', 'ring-primary', 'bg-primary-container/20');
                    } else {
                        selectedMinRating = ratingVal;
                        ratingFilterBtns.forEach(b => b.classList.remove('ring-2', 'ring-primary', 'bg-primary-container/20'));
                        btn.classList.add('ring-2', 'ring-primary', 'bg-primary-container/20');
                    }
                    applyFiltersAndSort();
                });
            });

            if (clearFiltersBtn) {
                clearFiltersBtn.addEventListener('click', () => {
                    if (searchInput) searchInput.value = '';
                    if (priceRange) priceRange.value = 500000;
                    categoryCheckboxes.forEach(cb => cb.checked = false);
                    selectedMinRating = 0;
                    ratingFilterBtns.forEach(b => b.classList.remove('ring-2', 'ring-primary', 'bg-primary-container/20'));
                    if (sortSelect) sortSelect.value = 'newest';
                    applyFiltersAndSort();
                });
            }

            // Click handler for product detail navigation
            document.querySelectorAll('.product-card-item').forEach(card => {
                card.addEventListener('click', (e) => {
                    if (e.target.closest('button')) return;
                    const id = card.dataset.id || '1';
                    window.location.href = '{{ url("/product") }}/' + id;
                });
            });

            // Execute initial sorting
            applyFiltersAndSort();
        });
    </script>
</body></html>