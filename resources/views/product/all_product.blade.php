<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Katalog IDN - Product Catalog</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-container": "#656464",
                    "surface": "#fbf9f8",
                    "surface-bright": "#fbf9f8",
                    "on-secondary": "#ffffff",
                    "on-surface": "#1b1c1c",
                    "error": "#ba1a1a",
                    "inverse-on-surface": "#f2f0f0",
                    "on-secondary-fixed": "#1c1b1b",
                    "on-primary-container": "#6b4c00",
                    "surface-tint": "#7c5800",
                    "tertiary-fixed": "#e2e3e1",
                    "on-error-container": "#93000a",
                    "tertiary-container": "#c4c5c3",
                    "tertiary-fixed-dim": "#c6c7c5",
                    "surface-container-low": "#f5f3f3",
                    "on-primary-fixed": "#271900",
                    "surface-container-lowest": "#ffffff",
                    "primary-fixed": "#ffdea8",
                    "outline-variant": "#d5c4ab",
                    "outline": "#837560",
                    "secondary": "#5f5e5e",
                    "on-surface-variant": "#514532",
                    "secondary-fixed": "#e5e2e1",
                    "on-secondary-fixed-variant": "#474646",
                    "on-primary": "#ffffff",
                    "inverse-primary": "#ffba20",
                    "error-container": "#ffdad6",
                    "secondary-fixed-dim": "#c8c6c5",
                    "tertiary": "#5d5f5d",
                    "surface-dim": "#dbdad9",
                    "inverse-surface": "#303031",
                    "primary": "#7c5800",
                    "secondary-container": "#e5e2e1",
                    "background": "#fbf9f8",
                    "surface-container-highest": "#e4e2e2",
                    "on-tertiary-fixed-variant": "#454746",
                    "on-tertiary-fixed": "#1a1c1b",
                    "on-error": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "surface-container": "#efeded",
                    "on-background": "#1b1c1c",
                    "primary-container": "#ffb800",
                    "on-primary-fixed-variant": "#5e4200",
                    "primary-fixed-dim": "#ffba20",
                    "surface-variant": "#e4e2e2",
                    "on-tertiary-container": "#505250",
                    "surface-container-high": "#e9e8e7"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-md": "24px",
                    "base": "8px",
                    "margin-mobile": "16px",
                    "margin-desktop": "40px",
                    "stack-sm": "12px",
                    "stack-lg": "48px",
                    "gutter": "24px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "body-sm": ["Plus Jakarta Sans"],
                    "headline-sm": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-xl-mobile": ["Hanken Grotesk"],
                    "body-md": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"]
            },
            "fontSize": {
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
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
        <a href="{{ route('login') }}" class="flex items-center gap-3 px-3 py-3 text-error hover:bg-error-container rounded-lg font-label-md text-label-md transition-all">
            <span class="material-symbols-outlined">logout</span> Sign Out
        </a>
    </div>
</div>

<!-- Filter Overlay (mobile) -->
<div id="filter-overlay" class="fixed inset-0 bg-black/40 z-40 md:hidden" onclick="closeFilterDrawer()"></div>
<!-- Filter Drawer (mobile) -->
<div id="filter-drawer" class="fixed left-0 top-0 h-full w-80 z-50 bg-surface border-r border-outline-variant flex flex-col md:hidden overflow-y-auto">
    <div class="flex items-center justify-between p-4 border-b border-outline-variant">
        <h2 class="font-headline-sm text-headline-sm">Filters</h2>
        <button onclick="closeFilterDrawer()" class="p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <div class="p-4 flex-1 overflow-y-auto">
        <div class="flex items-center justify-between mb-4">
            <button id="clearFiltersBtn2" class="text-body-sm font-body-sm text-primary hover:underline">Clear all</button>
        </div>
        <!-- Category -->
        <div class="mb-6">
            <h3 class="font-label-md text-label-md text-on-surface mb-3">Categories</h3>
            <div class="flex flex-col gap-2">
                <label class="flex items-center gap-3 cursor-pointer"><input class="category-checkbox w-5 h-5 rounded border-outline text-primary" type="checkbox" value="Essentials"/><span class="font-body-md">Essentials</span></label>
                <label class="flex items-center gap-3 cursor-pointer"><input class="category-checkbox w-5 h-5 rounded border-outline text-primary" type="checkbox" value="Furniture"/><span class="font-body-md">Furniture</span></label>
                <label class="flex items-center gap-3 cursor-pointer"><input class="category-checkbox w-5 h-5 rounded border-outline text-primary" type="checkbox" value="Lighting"/><span class="font-body-md">Lighting</span></label>
                <label class="flex items-center gap-3 cursor-pointer"><input class="category-checkbox w-5 h-5 rounded border-outline text-primary" type="checkbox" value="Kitchenware"/><span class="font-body-md">Kitchenware</span></label>
            </div>
        </div>
        <!-- Price -->
        <div class="mb-6">
            <h3 class="font-label-md text-label-md text-on-surface mb-3">Price Range</h3>
            <div class="flex items-center gap-2 mb-4">
                <div class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-body-sm">Rp 0</div>
                <div class="w-4 h-[1px] bg-outline-variant"></div>
                <div id="maxPriceDisplay2" class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-body-sm">Rp 500.000</div>
            </div>
            <input id="priceRange2" class="w-full accent-primary h-1 bg-outline-variant rounded-lg appearance-none cursor-pointer" max="500000" min="0" step="5000" value="500000" type="range"/>
        </div>
    </div>
    <div class="p-4 border-t border-outline-variant">
        <button onclick="closeFilterDrawer()" class="w-full py-3 bg-primary text-on-primary rounded-lg font-label-md font-bold">Apply Filters</button>
    </div>
</div>

<!-- TopAppBar -->
<header class="flex justify-between items-center px-4 md:px-margin-desktop w-full h-16 sticky top-0 z-30 bg-surface/80 backdrop-blur-md border-b border-outline-variant">
<div class="flex items-center gap-3">
    <!-- Hamburger (mobile only) -->
    <button class="md:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="openNavDrawer()">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <span class="font-headline-md text-headline-md font-bold text-on-surface">Katalog IDN</span>
</div>
<nav class="hidden md:flex items-center gap-gutter">
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="{{ route('home') }}">Home</a>
<a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1" href="{{ route('shop') }}">Shop</a>
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="{{ route('profile') }}">Profile</a>
</nav>
<div class="flex items-center gap-2">
<a href="{{ route('cart') }}" title="Keranjang Belanja" class="relative">
    <button class="material-symbols-outlined text-primary p-2">shopping_cart</button>
    @if(count(session('cart', [])) > 0)
    <span class="absolute top-0 right-0 bg-primary text-on-primary text-[10px] font-bold w-4 h-4 flex items-center justify-center rounded-full">{{ count(session('cart', [])) }}</span>
    @endif
</a>
@auth
<form action="{{ route('logout') }}" method="POST" class="inline">
    @csrf
    <button type="submit" class="text-error hover:text-red-700 transition-colors p-2 flex items-center justify-center" title="Keluar">
        <span class="material-symbols-outlined">logout</span>
    </button>
</form>
@else
<a href="{{ route('login') }}" class="font-label-md text-sm text-primary font-bold px-3 py-1 border border-primary rounded-lg hover:bg-primary hover:text-on-primary transition-all">Masuk</a>
@endauth
</div>
</header>
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
<h2 class="font-headline-sm text-headline-sm text-on-surface">Filters</h2>
<button id="clearFiltersBtn" class="text-body-sm font-body-sm text-primary hover:underline">Clear all</button>
</div>
<!-- Category -->
<div class="mb-stack-md">
<h3 class="font-label-md text-label-md text-on-surface mb-3">Categories</h3>
<div class="flex flex-col gap-2">
@foreach($categories as $cat)
<a href="{{ route('shop', ['category' => $cat->slug]) }}" class="flex items-center gap-3 cursor-pointer group py-1 border-b border-outline-variant/30">
<span class="font-body-md text-body-md text-secondary group-hover:text-primary {{ request('category') == $cat->slug ? 'font-bold text-primary' : '' }}">{{ $cat->nama_kategori }}</span>
</a>
@endforeach
</div>
</div>
<!-- Price Range -->
<div class="mb-stack-md">
<h3 class="font-label-md text-label-md text-on-surface mb-3">Price Range</h3>
<div class="flex items-center gap-2 mb-4">
<div class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-body-sm">Rp 0</div>
<div class="w-4 h-[1px] bg-outline-variant"></div>
<div id="maxPriceDisplay" class="flex-1 bg-surface border border-outline-variant rounded p-2 text-center text-body-sm">Rp 500.000</div>
</div>
<input id="priceRange" class="w-full accent-primary h-1 bg-outline-variant rounded-lg appearance-none cursor-pointer" max="500000" min="0" step="5000" value="500000" type="range"/>
</div>
<!-- Ratings -->
<div>
<h3 class="font-label-md text-label-md text-on-surface mb-3">Ratings</h3>
<div class="flex flex-col gap-2">
<button class="rating-filter-btn flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-high transition-all group" data-min-rating="4.5">
<div class="flex text-amber-500">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star_half</span>
</div>
<span class="text-body-sm text-secondary group-hover:text-on-surface">4.5 &amp; Up</span>
</button>
<button class="rating-filter-btn flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-high transition-all group" data-min-rating="4.0">
<div class="flex text-amber-500">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
</div>
<span class="text-body-sm text-secondary group-hover:text-on-surface">4.0 &amp; Up</span>
</button>
</div>
</div>
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

<div class="flex items-center justify-between mb-gutter">
<h1 class="font-headline-lg text-headline-lg text-on-surface">Katalog Produk</h1>
<div class="flex items-center gap-2">
<span class="text-body-sm text-secondary">Sort by:</span>
<select id="sortSelect" class="bg-transparent border-none focus:ring-0 font-label-md text-label-md text-on-surface cursor-pointer">
<option value="newest">Newest First</option>
<option value="price-low">Price: Low to High</option>
<option value="price-high">Price: High to Low</option>
<option value="rating">Best Rating</option>
</select>
</div>
</div>

<div id="noProductsMessage" class="hidden text-center py-12 bg-surface-container-lowest border border-dashed border-outline-variant rounded-xl my-4">
<span class="material-symbols-outlined text-4xl text-secondary mb-2">search_off</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Tidak ada produk ditemukan</h3>
<p class="font-body-sm text-body-sm text-secondary mt-1">Coba sesuaikan filter atau kata kunci pencarian Anda.</p>
</div>

<div id="productGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-4 md:gap-6">
@forelse($products as $product)
<div onclick="window.location.href='{{ route('product.detail', $product->id) }}'" class="product-card-item product-card-hover group bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-2.5 sm:p-4 flex flex-col justify-between cursor-pointer transition-all duration-300" data-id="{{ $product->id }}" data-title="{{ $product->nama_produk }}" data-category="{{ $product->category->nama_kategori ?? 'Umum' }}" data-store="{{ strtolower($product->store->nama_toko ?? '') }}" data-price="{{ $product->harga }}" data-rating="4.8">
<div>
    <div class="relative w-full aspect-square bg-[#F5F5F5] rounded-lg overflow-hidden mb-2.5 sm:mb-4">
    @php
        $img = $product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/400';
        $imgUrl = str_starts_with($img, 'http') ? $img : asset($img);
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
    <div class="text-[10px] sm:text-[11px] text-primary font-bold flex items-center gap-1 mb-2">
        <span class="material-symbols-outlined text-xs">store</span>
        <span class="truncate">{{ $product->store->nama_toko ?? 'Toko' }}</span>
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
<!-- Pagination -->
<div class="flex items-center justify-center gap-2 mt-stack-lg">
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-on-primary font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface hover:bg-surface-container-high transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface hover:bg-surface-container-high transition-colors">3</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant text-on-surface hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</section>
</div>
</main>
<!-- Footer -->
<footer class="w-full py-stack-lg px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter bg-surface-container dark:bg-surface-dim border-t border-outline-variant mt-stack-lg">
<div class="flex flex-col gap-4">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Katalog IDN</span>
<p class="font-body-sm text-body-sm text-on-tertiary-fixed-variant max-w-xs">Selamat Datang di Katalog IDN</p>
</div>
<div>
<h5 class="font-label-md text-label-md text-primary mb-4">Produk Terbaru</h5>
<ul class="flex flex-col gap-2">
<li><a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary hover:underline underline-offset-4 transition-all" href="#">Produk 1</a></li>
<li><a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary hover:underline underline-offset-4 transition-all" href="#">Produk 2</a></li>
<li><a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary hover:underline underline-offset-4 transition-all" href="#">Produk 3</a></li>
</ul>
</div>
<div>
<h5 class="font-label-md text-label-md text-primary mb-4">Informasi</h5>
<ul class="flex flex-col gap-2">
<li><a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary hover:underline underline-offset-4 transition-all" href="#">Tentang Kami</a></li>
<li><a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary hover:underline underline-offset-4 transition-all" href="#">Kontak</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h5 class="font-label-md text-label-md text-primary mb-2">Kotak Surat</h5>
<div class="flex gap-2">
<input class="bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-2 w-full focus:ring-2 focus:ring-primary/20" placeholder="Email Anda" type="email"/>
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md hover:brightness-90 active:scale-95 transition-all">Daftar</button>
</div>
<p class="font-body-sm text-body-sm text-on-tertiary-fixed-variant">© 2026 Katalog IDN. Harga Terjangkau, Kualitas Terjamin.</p>
</div>
</footer>

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