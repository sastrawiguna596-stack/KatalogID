<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Katalog IDN | Profile Overview</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-tint": "#7c5800",
                    "on-tertiary-container": "#505250",
                    "on-error": "#ffffff",
                    "on-background": "#1b1c1c",
                    "error-container": "#ffdad6",
                    "primary": "#7c5800",
                    "error": "#ba1a1a",
                    "surface": "#fbf9f8",
                    "on-primary-fixed": "#271900",
                    "surface-dim": "#dbdad9",
                    "on-error-container": "#93000a",
                    "on-primary-fixed-variant": "#5e4200",
                    "inverse-on-surface": "#f2f0f0",
                    "primary-fixed-dim": "#ffba20",
                    "tertiary-fixed": "#e2e3e1",
                    "primary-fixed": "#ffdea8",
                    "surface-container": "#efeded",
                    "on-tertiary": "#ffffff",
                    "tertiary-container": "#c4c5c3",
                    "secondary-fixed-dim": "#c8c6c5",
                    "secondary": "#5f5e5e",
                    "surface-container-highest": "#e4e2e2",
                    "on-primary-container": "#6b4c00",
                    "primary-container": "#ffb800",
                    "on-tertiary-fixed": "#1a1c1b",
                    "background": "#fbf9f8",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-low": "#f5f3f3",
                    "on-secondary-container": "#656464",
                    "outline": "#837560",
                    "surface-container-high": "#e9e8e7",
                    "on-secondary-fixed-variant": "#474646",
                    "inverse-surface": "#303031",
                    "secondary-container": "#e5e2e1",
                    "on-primary": "#ffffff",
                    "surface-variant": "#e4e2e2",
                    "surface-bright": "#fbf9f8",
                    "on-secondary-fixed": "#1c1b1b",
                    "inverse-primary": "#ffba20",
                    "tertiary": "#5d5f5d",
                    "tertiary-fixed-dim": "#c6c7c5",
                    "on-tertiary-fixed-variant": "#454746",
                    "on-surface": "#1b1c1c",
                    "secondary-fixed": "#e5e2e1",
                    "outline-variant": "#d5c4ab",
                    "on-surface-variant": "#514532",
                    "on-secondary": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "gutter": "24px",
                    "stack-lg": "48px",
                    "margin-desktop": "40px",
                    "base": "8px",
                    "margin-mobile": "16px",
                    "stack-sm": "12px",
                    "container-max": "1280px",
                    "stack-md": "24px"
            },
            "fontFamily": {
                    "headline-xl": ["Hanken Grotesk"],
                    "body-md": ["Plus Jakarta Sans"],
                    "headline-lg": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-sm": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"]
            },
            "fontSize": {
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
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
<body class="text-on-background">

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
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqFehK32E8ECsDqaTOdcpEk5eTyYOzOkkFIZfegvN97bofp154KRi0Uv_x7MUNAdHbXTXVa_mYtyTnFJAKraURRB54Dr1YaUgc_iESGl1_S9ecNC35fBj9jsRu4UjoHa2sdyU7N9DhV0g_8Q9NKhdl_lO6I52sX3XkM3JWcbGFy8G29eRe6eXZvDjjdTfOKfXC2GVWNGyGP_qLr2TU-dCcZHmVVk_2Ro-gXRoS3OKL1xfM7sqva9Rm" alt="User avatar"/>
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
<span class="material-symbols-outlined text-on-primary-container">person</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">{{ Auth::user()->name }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Verified {{ ucfirst(Auth::user()->role) }}</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('cust_account') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span> Dashboard
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('cust_recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">receipt_long</span> Orders
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('cust_account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('shop') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> Shop
    </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('support') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">help_outline</span> Support
    </a>
<form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md">
        <span class="material-symbols-outlined">logout</span> Sign Out
    </button>
</form>
</div>
</aside>

<!-- Main Content Area -->
<main class="lg:pl-64 pt-20 pb-stack-lg min-h-screen">
<div class="max-w-container-max mx-auto px-4 md:px-margin-desktop py-6">
<!-- Hero Profile Summary -->
<section class="mb-stack-lg">
<div class="relative w-full h-32 md:h-48 rounded-xl overflow-hidden mb-[-3rem] md:mb-[-4rem]">
<div class="absolute inset-0 bg-gradient-to-r from-primary to-primary-fixed-dim opacity-20"></div>
</div>
<div class="relative z-10 px-2 flex flex-col md:flex-row items-start md:items-end gap-4 md:gap-gutter">
<div class="w-24 h-24 md:w-32 md:h-32 rounded-2xl border-4 border-surface-container-lowest overflow-hidden shadow-sm bg-white flex-shrink-0">
<img class="w-full h-full object-cover" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&background=7c5800&color=ffffff&size=128' }}" alt="{{ Auth::user()->name }}"/>
</div>
<div class="flex-1 pb-2 md:pb-4">
<div class="flex flex-wrap items-center gap-2 md:gap-3">
<h2 class="font-headline-xl text-2xl md:text-headline-xl text-on-surface">{{ Auth::user()->name }}</h2>
<span class="px-3 py-1 bg-primary-container text-on-primary-container font-label-md text-label-md rounded-full font-bold">{{ ucfirst(Auth::user()->role) }} Member</span>
</div>
<div class="text-sm md:text-body-md text-on-surface-variant max-w-2xl mt-1 md:mt-2 space-y-1">
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <p><strong>Telepon:</strong> {{ Auth::user()->phone ?? 'Belum diisi' }}</p>
    <p><strong>Alamat:</strong> {{ Auth::user()->address ?? 'Belum diisi' }}</p>
</div>
</div>
<div class="pb-2 md:pb-4 flex gap-3">
<a href="{{ route('cust_account_setting') }}" class="px-4 md:px-6 py-2.5 md:py-3 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:brightness-95 transition-all inline-block font-bold">Edit Profile</a>
</div>
</div>
</section>

<!-- Quick Stats Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-gutter mb-stack-lg">
<div class="bg-white border border-[#EDEDED] p-4 md:p-gutter rounded-xl flex flex-col gap-2 transition-transform hover:-translate-y-1">
<span class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider text-xs md:text-label-md">Total Pesanan Saya</span>
<div class="flex items-baseline gap-2">
<span class="font-headline-lg text-2xl md:text-headline-lg text-on-surface">{{ number_format($totalOrders ?? 0) }}</span>
<span class="text-primary font-bold text-body-sm">Pesanan</span>
</div>
<div class="mt-2 md:mt-4 flex -space-x-2">
<div class="w-7 h-7 md:w-8 md:h-8 rounded-full border-2 border-white bg-surface-container flex items-center justify-center text-[10px] font-bold text-primary">IDN</div>
</div>
</div>
<div class="bg-white border border-[#EDEDED] p-4 md:p-gutter rounded-xl flex flex-col gap-2 transition-transform hover:-translate-y-1">
<span class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider text-xs md:text-label-md">Status Akun</span>
<div class="flex items-baseline gap-2">
<span class="font-headline-lg text-xl md:text-2xl font-bold text-emerald-600">Aktif</span>
</div>
<p class="text-xs text-on-surface-variant mt-auto">Pelanggan Terverifikasi</p>
</div>
<div class="bg-primary text-on-primary p-4 md:p-gutter rounded-xl flex flex-col gap-2 transition-transform hover:-translate-y-1 shadow-md">
<span class="text-on-primary/80 font-label-md text-label-md uppercase tracking-wider text-xs md:text-label-md">Poin Belanja</span>
<div class="flex items-baseline gap-2">
<span class="font-headline-lg text-xl md:text-headline-lg">0 Poin</span>
</div>
<p class="text-xs text-on-primary/70 mt-auto">Katalog IDN Member</p>
</div>
</section>

<!-- Recent Activity & Highlights -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-stack-md">
<!-- Recent Order Summary -->
<div class="lg:col-span-2 space-y-gutter">
<div class="flex justify-between items-center px-2">
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Pesanan Terbaru</h3>
<a class="text-primary font-label-md text-label-md hover:underline font-bold" href="{{ route('cust_recent_orders') }}">Lihat Semua</a>
</div>

@if($recentOrder)
@php
    $firstItem = $recentOrder->items->first();
    $product = $firstItem?->product;
    $img = $product?->galleries->first()?->foto_path ?? 'https://via.placeholder.com/150';
    $imgUrl = str_starts_with($img, 'http') ? $img : asset($img);
@endphp
<div class="bg-white border border-[#EDEDED] rounded-xl overflow-hidden">
<div class="p-4 md:p-6 flex flex-col sm:flex-row gap-4 md:gap-gutter">
<div class="w-24 h-24 sm:w-28 sm:h-28 rounded-lg bg-surface-container overflow-hidden flex-shrink-0 border border-outline-variant/30">
<img class="w-full h-full object-cover" src="{{ $imgUrl }}" alt="{{ $product->nama_produk ?? 'Produk' }}"/>
</div>
<div class="flex-1">
<div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-2">
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $product->nama_produk ?? 'Pesanan Produk' }}</h4>
<p class="text-body-sm text-on-surface-variant text-xs mt-0.5">Pesanan #ORD-{{ $recentOrder->id }} • {{ $recentOrder->created_at ? $recentOrder->created_at->format('d M Y, H:i') : '-' }}</p>
<p class="text-xs text-secondary mt-0.5">Toko: {{ $recentOrder->store->nama_toko ?? 'Toko Resmi' }}</p>
</div>
<span class="self-start px-3 py-1 font-bold rounded-full text-xs whitespace-nowrap {{ $recentOrder->status_pembayaran === 'paid' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">
    {{ strtoupper($recentOrder->status_pembayaran ?? 'pending') }}
</span>
</div>
<div class="mt-4 flex items-center justify-between flex-wrap gap-3">
<div class="flex gap-4">
<div class="text-center">
<p class="text-[10px] uppercase text-on-surface-variant font-bold">Total Item</p>
<p class="font-label-md text-label-md font-bold">{{ $recentOrder->items->sum('jumlah') }} unit</p>
</div>
<div class="text-center">
<p class="text-[10px] uppercase text-on-surface-variant font-bold">Total Tagihan</p>
<p class="font-label-md text-label-md font-bold text-primary">Rp {{ number_format($recentOrder->total_harga, 0, ',', '.') }}</p>
</div>
</div>
<a href="{{ route('cust_recent_orders') }}" class="px-4 py-2 bg-primary-container text-on-primary-container font-label-md text-label-md rounded-lg hover:brightness-95 transition-all text-sm font-bold">Lacak Pesanan</a>
</div>
</div>
</div>
</div>
@else
<div class="bg-white border border-[#EDEDED] rounded-xl p-8 text-center text-secondary">
<span class="material-symbols-outlined text-4xl text-primary opacity-50 mb-2">shopping_bag</span>
<p class="font-bold text-base text-on-surface">Belum Ada Pesanan Terbaru</p>
<p class="text-xs text-secondary mt-1">Anda belum pernah melakukan pemesanan produk di database. Riwayat pesanan terbaru akan muncul di sini secara otomatis.</p>
<a href="{{ route('shop') }}" class="inline-flex items-center gap-1.5 px-4 py-2 mt-4 bg-primary text-on-primary font-bold text-xs rounded-lg hover:brightness-95 transition-all">
<span class="material-symbols-outlined text-sm">storefront</span> Belanja Sekarang
</a>
</div>
@endif
</div>

<!-- Account Highlights Feed -->
<div class="bg-white border border-[#EDEDED] rounded-xl p-4 md:p-6 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-4 md:mb-6 font-bold">Informasi Akun</h4>
<div class="space-y-4 md:space-y-6">
<div class="flex gap-3 md:gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined">verified</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Status Anggota Verifikasi</p>
<p class="text-body-sm text-on-surface-variant text-sm">Akun Anda aktif dan terverifikasi di Katalog IDN.</p>
</div>
</div>
<div class="flex gap-3 md:gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined">loyalty</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Penawaran Spesial</p>
<p class="text-body-sm text-on-surface-variant text-sm">Nikmati kemudahan belanja produk-produk terbaik dari UMKM lokal.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>

<!-- Footer -->
<footer class="lg:pl-64 w-full py-stack-lg px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container-high border-t border-outline-variant">
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-on-surface">Katalog IDN</h1>
<p class="text-body-sm text-on-surface-variant mt-1">© 2026 Katalog IDN. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-8">
<a class="text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Privacy Policy</a>
<a class="text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Terms of Service</a>
<a class="text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Shipping Info</a>
<a class="text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Contact Us</a>
</div>
</footer>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.toggle('open');
        overlay.classList.toggle('active');
    }
    function closeSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
    }

    // Micro-interaction for hover states and basic transitions
    document.querySelectorAll('button, a').forEach(el => {
        el.addEventListener('mouseenter', () => {
            if (el.classList.contains('active:scale-95')) return; 
            el.style.transform = 'translateY(-1px)';
        });
        el.addEventListener('mouseleave', () => {
            el.style.transform = 'translateY(0)';
        });
    });
</script>
</body></html>