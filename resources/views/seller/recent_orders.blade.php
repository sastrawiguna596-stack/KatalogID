<!DOCTYPE html>

<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pesanan Masuk | Katalog IDN</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            vertical-align: middle;
        }
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fbf9f8;
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        /* Sidebar Mobile Drawer */
        #sidebar-overlay { display: none; }
        #sidebar-overlay.active { display: block; }
        #main-sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #main-sidebar.open { transform: translateX(0); }
        @media (min-width: 1024px) {
            #main-sidebar { transform: translateX(0) !important; }
        }
</style>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface": "#fbf9f8",
                    "on-surface-variant": "#514532",
                    "surface-tint": "#7c5800",
                    "primary-fixed": "#ffdea8",
                    "secondary-fixed": "#e5e2e1",
                    "on-tertiary-container": "#505250",
                    "on-surface": "#1b1c1c",
                    "on-tertiary-fixed-variant": "#454746",
                    "tertiary-fixed-dim": "#c6c7c5",
                    "inverse-primary": "#ffba20",
                    "on-primary": "#ffffff",
                    "inverse-surface": "#303031",
                    "outline-variant": "#d5c4ab",
                    "on-background": "#1b1c1c",
                    "primary-container": "#ffb800",
                    "on-tertiary-fixed": "#1a1c1b",
                    "tertiary-fixed": "#e2e3e1",
                    "on-secondary-container": "#656464",
                    "on-primary-container": "#6b4c00",
                    "background": "#fbf9f8",
                    "surface-container": "#efeded",
                    "on-error": "#ffffff",
                    "outline": "#837560",
                    "on-secondary-fixed": "#1c1b1b",
                    "surface-container-low": "#f5f3f3",
                    "primary": "#7c5800",
                    "tertiary-container": "#c4c5c3",
                    "primary-fixed-dim": "#ffba20",
                    "surface-dim": "#dbdad9",
                    "tertiary": "#5d5f5d",
                    "on-primary-fixed-variant": "#5e4200",
                    "secondary": "#5f5e5e",
                    "error": "#ba1a1a",
                    "surface-variant": "#e4e2e2",
                    "secondary-fixed-dim": "#c8c6c5",
                    "error-container": "#ffdad6",
                    "inverse-on-surface": "#f2f0f0",
                    "on-primary-fixed": "#271900",
                    "surface-bright": "#fbf9f8",
                    "surface-container-high": "#e9e8e7",
                    "secondary-container": "#e5e2e1",
                    "on-secondary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e4e2e2",
                    "on-secondary-fixed-variant": "#474646",
                    "on-tertiary": "#ffffff",
                    "surface-container-lowest": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "stack-md": "24px",
                    "gutter": "24px",
                    "stack-lg": "48px",
                    "container-max": "1280px",
                    "margin-desktop": "40px",
                    "stack-sm": "12px",
                    "base": "8px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "body-sm": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-xl-mobile": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "headline-sm": ["Hanken Grotesk"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "body-md": ["Plus Jakarta Sans"]
            }
          },
        },
      }
</script>
</head>
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col justify-between">

<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- Top Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-4">
    <button id="hamburger-btn" class="lg:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="toggleSidebar()">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <a href="{{ route('home') }}" class="font-headline-md text-headline-md font-bold text-primary hover:opacity-90 transition-opacity">Katalog IDN</a>
</div>

<!-- Header Navigation Shortcuts -->
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
<!-- Active State: Orders -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">receipt_long</span> Orders Toko
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('inventories') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">inventory</span> Inventory Produk
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md font-bold" href="{{ route('seller.store') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> Halaman Toko Saya
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('sales_analytics') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">analytics</span> Analisis Penjualan
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Pengaturan Toko
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

<!-- Main Content Area -->
<main class="lg:pl-64 pt-20 pb-stack-lg min-h-screen flex-grow">
<div class="max-w-container-max mx-auto px-4 md:px-margin-desktop py-6">
    
    <!-- Page Title & Breadcrumbs -->
    <div class="mb-stack-md">
        <nav class="flex items-center gap-2 text-xs text-secondary font-medium mb-2">
            <a href="{{ route('account') }}" class="hover:underline">Dashboard Penjual</a>
            <span>/</span>
            <span class="text-on-surface font-bold">Pesanan Masuk</span>
        </nav>
        <h1 class="font-headline-xl text-2xl md:text-headline-xl font-bold text-on-surface">Daftar Pesanan Toko</h1>
        <p class="text-sm text-secondary mt-1">Kelola transaksi masuk dari pembeli dan periksa rincian item pesanan toko Anda.</p>
    </div>

    <!-- Search & Status Filter -->
    <form method="GET" action="{{ route('recent_orders') }}" class="flex flex-col sm:flex-row gap-3 mb-6 items-center justify-between">
        <div class="relative w-full sm:max-w-md">
            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 material-symbols-outlined text-secondary text-lg">search</span>
            <input name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2.5 bg-white border border-outline-variant rounded-xl focus:outline-none focus:border-primary text-sm font-body-sm transition-all" placeholder="Cari ID Pesanan atau nama pembeli..." type="text"/>
        </div>
        <div class="w-full sm:w-56 flex-shrink-0">
            <select name="status" onchange="this.form.submit()" class="w-full px-4 py-2.5 bg-white border border-outline-variant rounded-xl focus:outline-none focus:border-primary text-sm font-bold text-on-surface cursor-pointer">
                <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>Semua Status</option>
                <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Lunas (Paid)</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Menunggu Pembayaran</option>
                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
        </div>
    </form>

    <!-- Orders List (Proportional Cards) -->
    <div class="space-y-5">
        @forelse($orders as $order)
            <div class="bg-white border border-[#EDEDED] rounded-2xl p-4 sm:p-6 space-y-4 hover:shadow-md transition-all duration-300">
                
                <!-- Order Card Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-surface-container-low pb-3.5">
                    <div class="flex items-center gap-2.5 flex-wrap">
                        <div class="flex items-center gap-1.5 font-bold text-on-surface text-sm">
                            <span class="material-symbols-outlined text-primary text-lg">person</span>
                            <span>{{ $order->user->name ?? 'Pembeli' }}</span>
                        </div>
                        <span class="text-outline-variant">•</span>
                        <span class="text-xs text-secondary font-semibold">#ORD-{{ $order->id }}</span>
                        <span class="text-outline-variant">•</span>
                        <span class="text-xs text-secondary">{{ $order->created_at ? $order->created_at->format('d M Y, H:i') : '-' }}</span>
                    </div>
                    <div>
                        @if($order->status_pembayaran === 'paid')
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-xs font-bold">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Lunas (Paid)
                            </span>
                        @elseif($order->status_pembayaran === 'pending')
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-50 text-amber-700 border border-amber-200 rounded-full text-xs font-bold">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span> Menunggu Pembayaran
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-xs font-bold">
                                <span class="w-2 h-2 rounded-full bg-rose-500"></span> {{ ucfirst($order->status_pembayaran ?? 'Dibatalkan') }}
                            </span>
                        @endif
                    </div>
                </div>

                <!-- Order Items Detail List -->
                <div class="space-y-3">
                    @if($order->items && $order->items->count() > 0)
                        @foreach($order->items as $item)
                            @php
                                $product = $item->product;
                                $img = $product?->galleries->first()?->foto_path ?? 'https://via.placeholder.com/150';
                                $imgUrl = str_starts_with($img, 'http') ? $img : asset($img);
                            @endphp
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-xl bg-surface-container-low overflow-hidden border border-outline-variant/30 flex-shrink-0">
                                    <img class="w-full h-full object-cover" src="{{ $imgUrl }}" alt="{{ $product->nama_produk ?? 'Produk' }}"/>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-bold text-sm text-on-surface truncate">{{ $product->nama_produk ?? 'Produk Pesanan' }}</h4>
                                    <p class="text-xs text-secondary mt-0.5">{{ $item->jumlah }} unit x Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <p class="font-bold text-sm text-on-surface">Rp {{ number_format($item->harga * $item->jumlah, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-xs text-secondary italic">Rincian produk tidak tersedia</div>
                    @endif
                </div>

                <!-- Order Footer Summary & Actions -->
                <div class="border-t border-surface-container-low pt-3.5 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                    <div>
                        <span class="text-xs text-secondary block">Total Nilai Pesanan</span>
                        <span class="font-headline-sm text-lg font-bold text-primary">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        @if($order->items->first() && $order->items->first()->product)
                            <a href="{{ route('product.detail', $order->items->first()->product->id) }}" class="flex-1 sm:flex-initial px-4 py-2 border border-outline-variant text-on-surface hover:bg-surface-container-low rounded-xl font-bold text-xs text-center transition-all">
                                Lihat Produk
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        @empty
            <div class="p-12 text-center bg-white rounded-2xl border border-dashed border-outline-variant/80 my-4">
                <span class="material-symbols-outlined text-5xl text-primary opacity-50 mb-3">receipt_long</span>
                <h3 class="font-bold text-lg text-on-surface">Belum Ada Data Pesanan</h3>
                <p class="text-sm text-secondary mt-1 max-w-md mx-auto">Toko Anda saat ini belum memiliki pesanan masuk di database. Pesanan baru dari pelanggan akan muncul di sini secara otomatis.</p>
            </div>
        @endforelse
    </div>

    <!-- Dynamic Pagination -->
    <div class="mt-8">
        {{ $orders->links() }}
    </div>

</div>
</main>

<!-- Footer -->
<footer class="lg:pl-64 w-full py-stack-lg px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container-high border-t border-outline-variant">
<div class="flex flex-col gap-2">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Katalog IDN</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2026 Katalog IDN. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-6">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Terms of Service</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Shipping Info</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Contact Us</a>
</div>
</footer>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        if (sidebar) sidebar.classList.toggle('open');
        if (overlay) overlay.classList.toggle('active');
    }
    function closeSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        if (sidebar) sidebar.classList.remove('open');
        if (overlay) overlay.classList.remove('active');
    }
</script>
</body>
</html>