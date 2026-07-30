<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Katalog IDN | Handcrafted Elegance</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
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
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "label-md": ["14px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-xl-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-xl": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        /* ── Scroll Reveal Animations ── */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform, opacity;
        }
        .scroll-reveal.slide-left {
            transform: translateX(-40px);
        }
        .scroll-reveal.slide-right {
            transform: translateX(40px);
        }
        .scroll-reveal.active {
            opacity: 1;
            transform: translate(0, 0);
        }
        /* Stagger delays untuk child cards */
        .stagger-children > * {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .stagger-children.active > *:nth-child(1) { transition-delay: 0.05s; opacity: 1; transform: translateY(0); }
        .stagger-children.active > *:nth-child(2) { transition-delay: 0.12s; opacity: 1; transform: translateY(0); }
        .stagger-children.active > *:nth-child(3) { transition-delay: 0.19s; opacity: 1; transform: translateY(0); }
        .stagger-children.active > *:nth-child(4) { transition-delay: 0.26s; opacity: 1; transform: translateY(0); }
        .stagger-children.active > *:nth-child(5) { transition-delay: 0.33s; opacity: 1; transform: translateY(0); }
        .stagger-children.active > *:nth-child(6) { transition-delay: 0.40s; opacity: 1; transform: translateY(0); }
        /* Mobile Nav Drawer */
        #nav-overlay { display: none; }
        #nav-overlay.active { display: block; }
        #mobile-nav-drawer {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #mobile-nav-drawer.open { transform: translateX(0); }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">

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
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-3 text-on-primary-container bg-primary-container rounded-lg font-bold font-label-md text-label-md transition-all" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">home</span> Home
        </a>
        <a href="{{ route('shop') }}" class="flex items-center gap-3 px-3 py-3 text-on-surface-variant hover:bg-surface-variant rounded-lg font-label-md text-label-md transition-all" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined">storefront</span> Shop
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

    <!-- Top Navigation Shell -->
    <header
        class="flex justify-between items-center px-4 md:px-margin-desktop w-full h-16 sticky top-0 z-30 bg-surface/80 glass-header border-b border-outline-variant">
        <div class="flex items-center gap-3">
            <!-- Hamburger (mobile only) -->
            <button class="md:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="openNavDrawer()">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <span class="font-headline-md text-headline-md font-bold text-on-surface">Katalog IDN</span>
        </div>
        <nav class="hidden md:flex items-center gap-gutter">
            <a class="font-label-md text-label-md text-primary active-nav-line hover:text-primary transition-colors duration-200 flex"   
                href="{{ route('home') }}">Home</a>
            <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200"
                href="{{ route('shop') }}">Shop</a>
            <!-- ── Mega Menu Trigger ── -->
            <div class="mega-menu-wrapper" id="mega-menu-wrapper">
                <button class="mega-menu-trigger font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200"
                    id="mega-menu-btn" aria-haspopup="true" aria-expanded="false" aria-controls="mega-menu-panel">
                    Produk
                    <span class="material-symbols-outlined mega-chevron" aria-hidden="true">expand_more</span>
                </button>

                <!-- ── Mega Menu Panel ── -->
                <!-- ── Mega Menu Panel ── -->
                <div class="mega-menu-panel" id="mega-menu-panel" role="region" aria-label="Category menu">
                    <!-- top accent bar -->
                    <div class="mega-menu-accent"></div>

                    <!-- ── Main body: 3 link columns + 1 featured panel ── -->
                    <div class="mega-menu-inner">

                        <!-- ═══ COLUMN 1: Kategori Produk ═══ -->
                        <div class="mega-col">
                            <p class="mega-col-heading">KATEGORI PRODUK</p>
                            <a href="#" class="mega-link-row" data-index="0">
                                <span class="material-symbols-outlined mega-link-icon">texture</span>
                                <span class="mega-link-text">Tekstil &amp; Batik</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="1">
                                <span class="material-symbols-outlined mega-link-icon">local_cafe</span>
                                <span class="mega-link-text">Keramik &amp; Gerabah</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="2">
                                <span class="material-symbols-outlined mega-link-icon">work</span>
                                <span class="mega-link-text">Kerajinan Kulit</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="3">
                                <span class="material-symbols-outlined mega-link-icon">chair</span>
                                <span class="mega-link-text">Furnitur</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="4">
                                <span class="material-symbols-outlined mega-link-icon">light_mode</span>
                                <span class="mega-link-text">Lampu &amp; Dekorasi</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="5">
                                <span class="material-symbols-outlined mega-link-icon">spa</span>
                                <span class="mega-link-text">Aromaterapi</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="5">
                                <span class="material-symbols-outlined mega-link-icon">sports</span>
                                <span class="mega-link-text">Alat olahraga</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="5">
                                <span class="material-symbols-outlined mega-link-icon">menu</span>
                                <span class="mega-link-text">Lainnya</span>
                            </a>    
                        </div>

                        <!-- ═══ COLUMN 2: Saluran Penjualan ═══ -->
                        <div class="mega-col">
                            <p class="mega-col-heading">METODE PENJUALAN</p>
                            <a href="#" class="mega-link-row" data-index="9">
                                <span class="material-symbols-outlined mega-link-icon">language</span>
                                <span class="mega-link-text">Website Katalog IDN</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="10">
                                <span class="material-symbols-outlined mega-link-icon">chat</span>
                                <span class="mega-link-text font-bold text-green-600">WhatsApp Order</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="11">
                                <span class="material-symbols-outlined mega-link-icon">point_of_sale</span>
                                <span class="mega-link-text">Kasir Digital (POS)</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="13">
                                <span class="material-symbols-outlined mega-link-icon">share</span>
                                <span class="mega-link-text">Promosi Media Sosial</span>
                            </a>

                             <p class="mega-col-heading" style="margin-top:20px">JALANKAN TOKO</p>
                            <a href="#" class="mega-link-row" data-index="6">
                                <span class="material-symbols-outlined mega-link-icon">inventory_2</span>
                                <span class="mega-link-text font-bold text-primary">Manajemen Stok</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="7">
                                <span class="material-symbols-outlined mega-link-icon">local_shipping</span>
                                <span class="mega-link-text">Pengiriman &amp; Kurir</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="8">
                                <span class="material-symbols-outlined mega-link-icon">support_agent</span>
                                <span class="mega-link-text">Hubungi Admin Toko</span>
                            </a>

                        </div>

                        <!-- ═══ COLUMN 3: Promosi & Keuangan ═══ -->
                        <div class="mega-col">
                            <p class="mega-col-heading">PROMOSI &amp; LAPORAN</p>
                            <a href="#" class="mega-link-row" data-index="17">
                                <span class="material-symbols-outlined mega-link-icon">sell</span>
                                <span class="mega-link-text">Kupon &amp; Diskon UMKM</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="18">
                                <span class="material-symbols-outlined mega-link-icon">mark_email_read</span>
                                <span class="mega-link-text">Broadcast Chat Pelanggan</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="19">
                                <span class="material-symbols-outlined mega-link-icon">bar_chart</span>
                                <span class="mega-link-text">Laporan Penjualan</span>
                            </a>

                            <p class="mega-col-heading" style="margin-top:20px">TERIMA PEMBAYARAN</p>
                            <a href="#" class="mega-link-row" data-index="21">
                                <span class="material-symbols-outlined mega-link-icon">qr_code_2</span>
                                <span class="mega-link-text font-bold text-primary">Transfer QRIS / e-Wallet</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="22">
                                <span class="material-symbols-outlined mega-link-icon">account_balance</span>
                                <span class="mega-link-text">Transfer Bank Lokal</span>
                            </a>
                            <a href="#" class="mega-link-row" data-index="23">
                                <span class="material-symbols-outlined mega-link-icon">handshake</span>
                                <span class="mega-link-text">Bayar di Tempat (COD)</span>
                            </a>
                        </div>

                        <!-- ═══ COLUMN 4: Karya Pilihan (Wadah UMKM) ═══ -->
                        <div class="mega-col mega-col--featured">
                            <p class="mega-col-heading mega-col-heading--accent">KARYA LOKAL PILIHAN</p>
                            <div class="mega-featured-card">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUPhyFELQsHWGcI58Ik0I6JfirOT_z2ndkwyVGq86Bf9ScTXIdybxUJmndDtV4d_PHDM0Yi-Z1yWww5h7jGt3jsg7IyKEC-uZ131MxRcPAQuA2BW0RCpR5TajpS1_r7WtsuSvjgRCxWd0Hs_L1vwn4HRckjKAMMY6QFNgDjPtlj45z7I0Mo8IgIdXNpq9EDUCwsHVUgPKLZjAeHCWyGd4PufPzWiXB-xGN7Zt1_1XKJpCsgPTn_C6R"
                                     alt="Tenun Ikat NTT" class="mega-featured-card-img" />
                                <div class="mega-featured-card-body">
                                    <p class="mega-featured-card-title">Tenun Ikat Tradisional</p>
                                    <p class="mega-featured-card-desc">Dibuat langsung oleh pengrajin lokal NTT, mendukung keberlanjutan ekonomi desa.</p>
                                </div>
                            </div>

                            <p class="mega-col-heading mega-col-heading--accent" style="margin-top:16px">PRODUK TERBARU</p>
                            <ul class="mega-whats-new">
                                <li><a href="#">Madu Hutan Asli</a></li>
                                <li><a href="#">Tas Rotan Etnik Bali</a></li>
                                <li><a href="#">Lilin Aromaterapi</a></li>
                                <li><a href="#">Cobek Batu Gunung</a></li>
                            </ul>
                        </div>

                    </div><!-- /.mega-menu-inner -->

                </div><!-- /.mega-menu-panel -->
            </div><!-- /.mega-menu-wrapper -->
            <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200"
                href="{{ route('home') }}#about">About</a>
        </nav>
        <div class="flex items-center gap-stack-md">
            <a href="{{ route('shop') }}" class="material-symbols-outlined text-secondary hover:text-primary transition-colors" title="Cari Produk">
                search
            </a>
            <div class="relative group">
                <a href="{{ route('cart') }}" class="material-symbols-outlined text-secondary group-hover:text-primary transition-colors" title="Keranjang Belanja">
                    shopping_cart
                </a>
                @if(count(session('cart', [])) > 0)
                <span class="absolute -top-2 -right-2 bg-primary text-on-primary text-[10px] font-bold w-4 h-4 flex items-center justify-center rounded-full">{{ count(session('cart', [])) }}</span>
                @endif
            </div>
            @auth
            <a href="{{ route('profile') }}" class="flex items-center gap-1 text-primary font-bold font-label-md hover:underline" title="Profil Saya">
                <span class="material-symbols-outlined">account_circle</span>
                <span class="hidden md:inline">{{ Auth::user()->name }}</span>
            </a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-error hover:text-red-700 transition-colors p-1 flex items-center justify-center" title="Keluar / Logout">
                    <span class="material-symbols-outlined">logout</span>
                </button>
            </form>
            @else
            <a href="{{ route('login') }}" class="flex items-center gap-1 font-label-md text-primary font-bold px-3 py-1.5 border border-primary rounded-lg hover:bg-primary hover:text-on-primary transition-all">
                <span class="material-symbols-outlined text-sm">login</span> Masuk
            </a>
            @endauth
        </div>
    </header>
    <!-- Hero Section – full viewport width, outside the constrained <main> -->
    <section class="relative w-full min-h-[60vh] flex items-center px-margin-mobile md:px-margin-desktop">
        <!-- Background Video Container -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <video autoplay loop muted playsinline class="absolute inset-0 z-10 w-full h-full object-cover">
                <source src="{{ asset('videos/hero-bg.mp4') }}" type="video/mp4">
            </video>
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-surface/40 to-transparent z-20"></div>
        </div>

        <!-- Text Content -->
        <div class="relative z-30 max-w-2xl animate-in fade-in slide-in-from-left-4 duration-1000">
            <span class="inline-block px-4 py-1 bg-primary-container text-on-primary-container font-label-md text-label-md rounded-full mb-stack-sm">
                COLLECTION 2026
            </span>
            <h1 class="font-headline-xl text-headline-xl text-on-secondary mb-stack-sm leading-tight">
                Nikmati <br class="block sm:hidden" />
                <!-- Kata di bawah ini yang akan berganti secara dinamis -->
                <span id="changing-text" class="inline-block text-on-secondary transition-all duration-500 transform opacity-100 translate-y-0">
                    Kehangatan produk lokal
                </span>
            </h1>
            <p class="font-body-lg text-body-lg text-on-secondary mb-stack-md max-w-lg">
                Tempat menemukan karya atau pun produk yang dijual oleh masyarakat lokal dari anak-anak sampai orang tua, dari karya tangan maupun barang kebutuhan sehari-hari.
            </p>
            <div class="flex gap-stack-md">
                <a href="{{ route('shop') }}" class="px-8 py-4 bg-on-secondary text-on-surface font-label-md text-label-md rounded-lg hover:brightness-90 active:scale-95 transition-all inline-block">
                    Shop Collection
                </a>
                <button class="px-8 py-4 border-2 border-primary-fixed-dim text-primary-fixed-dim font-label-md text-label-md rounded-lg hover:bg-secondary/5 active:scale-95 transition-all">
                    Our Story
                </button>
            </div>
        </div>
    </section>

    <main class="max-w-container-max mx-auto overflow-hidden">
        <!-- Category Browser -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop scroll-reveal">
            <div class="flex justify-between items-end mb-stack-md">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Browse Categories</h2>
                <a class="font-label-md text-label-md text-primary hover:underline underline-offset-4" href="{{ route('shop') }}">View
                    All</a>
            </div>
            <div class="flex gap-gutter overflow-x-auto pb-4 no-scrollbar stagger-children">
                @foreach($categories as $cat)
                <a href="{{ route('shop', ['category' => $cat->slug]) }}" class="flex-shrink-0 group cursor-pointer text-center">
                    <div class="w-36 h-36 md:w-44 md:h-44 rounded-full overflow-hidden mb-base border border-outline-variant group-hover:border-primary transition-colors flex items-center justify-center bg-surface-container-low mx-auto">
                        <span class="iconify text-primary text-4xl group-hover:scale-110 transition-transform duration-500" data-icon="{{ $cat->icon_path ?? 'ph:sparkle-bold' }}"></span>
                    </div>
                    <p class="text-center font-label-md text-label-md text-on-surface group-hover:text-primary">{{ $cat->nama_kategori }}</p>
                </a>
                @endforeach
            </div>
        </section>
    </main>

        <main class="w-full overflow-hidden">
        <!-- Featured Products Grid -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop bg-surface-container-lowest scroll-reveal">
            <div class="flex flex-col items-center text-center mb-stack-lg">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-base">Barang Unggulan</h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">Produk yang dibuat untuk kegiatan sehari-hari dirumah maupun dliuar rumah.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 stagger-children">
                @foreach($products as $product)
                <div class="bg-surface rounded-xl border border-[#EDEDED] p-2.5 sm:p-4 product-card-hover group relative flex flex-col justify-between">
                    @if($product->badge)
                    <div class="absolute top-4 left-4 z-10">
                        <span class="px-1.5 sm:px-2 py-0.5 sm:py-1 bg-primary text-on-primary text-[9px] sm:text-[10px] font-bold rounded">{{ $product->badge }}</span>
                    </div>
                    @endif
                    <div>
                        <div class="aspect-square rounded-lg overflow-hidden bg-surface-container-low mb-2.5 sm:mb-4">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/400' }}"
                                alt="{{ $product->nama_produk }}" />
                        </div>
                        <span class="font-label-md text-[9px] sm:text-[10px] text-primary uppercase tracking-widest mb-1 block">{{ $product->category->nama_kategori ?? 'Kategori' }}</span>
                        <a href="{{ route('product.detail', $product->id) }}"
                            class="text-xs sm:text-sm font-bold text-on-surface mb-1 hover:text-primary transition-colors block line-clamp-2 min-h-[32px] sm:min-h-[40px] leading-snug">{{ $product->nama_produk }}</a>
                    </div>
                    <div class="flex justify-between items-center pt-2 border-t border-surface-container-low mt-2">
                        <p class="text-xs sm:text-base font-bold text-on-surface">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                        <a href="{{ route('product.detail', $product->id) }}"
                            class="w-7 h-7 sm:w-8 sm:h-8 rounded-full border border-primary text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all flex-shrink-0">
                            <span class="material-symbols-outlined text-[16px] sm:text-[18px]">add</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- NEW SECTION: New Arrivals -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop scroll-reveal">
            <div class="flex justify-between items-end mb-stack-lg">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Barang Baru</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-2">Barang untuk kehidupan sehari-hari.</p>
                </div>
                <a class="font-label-md text-label-md text-primary hover:underline underline-offset-4" href="{{ route('shop') }}">Shop All
                    New</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- New Product 1 -->
                <div class="bg-surface rounded-xl border border-[#EDEDED] p-4 product-card-hover group relative">
                    <div class="absolute top-6 left-6 z-10">
                        <span
                            class="px-2 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded">BARU</span>
                    </div>
                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container-low mb-4">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Synthetic leather futsal ball made by local workshop"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjoZq2o5SL99Z2cxfGyq2Zd_jIlELi7ExaXvAGeyQe0rXo_4OO0j9q1PAW2ilSexz0SHtRdtZAfm70F6pIEOAstAKwafSigcvLzS4RR5DS3Za0em-9r-sZ7_z9bctnRxo67qunehx7tBXQgi64YNaw_dTLJwJHCziTHXSLjb0n4GhFOjxmuhCWmYKgJ9isxMSpmONm_XJykpG1-vJfjz_qy1oBBI-wkra4_mxOBvKmRcWtCuKRiELT" />
                    </div>
                    <span
                        class="font-label-md text-[10px] text-primary uppercase tracking-widest mb-1 block">Kerajinan tangan</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">Tas Mini Kanvas</h3>
                    <div class="flex justify-between items-center">
                        <p class="font-body-md text-body-md font-bold text-on-surface">Rp. 65.000</p>
                        <button
                            class="w-8 h-8 rounded-full border border-primary text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]" data-icon="add">add</span>
                        </button>
                    </div>
                </div>
                <!-- New Product 2 -->
                <div class="bg-surface rounded-xl border border-[#EDEDED] p-4 product-card-hover group relative">
                    <div class="absolute top-6 left-6 z-10">
                        <span
                            class="px-2 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded">BARU</span>
                    </div>
                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container-low mb-4">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Hand-painted wooden pencil box by students"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6fPuM5P2DGAuNQYpZU4GCxcOrdNkFZAzkSfx4BaFrra9e34Q2CuR2FxY2NZXJTMUijUmMqrHiSJWnJvQs2ERyiPNm_yRUpHkW1ZEbeaE7zCs_c8sMPsblhpY8sfTQYmMtqXwBmaJnonZiPURdLAG4DGTzvZIZT8HhvoSWCeDD7eGc9LhkVOfXQn2k56WnlDdDSO1OWRhlvSus7dNDQJD1J5zW2HKmv7a5aS64xiN8YcgBvRDVOd6U" />
                    </div>
                    <span
                        class="font-label-md text-[10px] text-primary uppercase tracking-widest mb-1 block">Kerajinan tangan</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">Kursi kayu</h3>
                    <div class="flex justify-between items-center">
                        <p class="font-body-md text-body-md font-bold text-on-surface">Rp. 38.000</p>
                        <button
                            class="w-8 h-8 rounded-full border border-primary text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]" data-icon="add">add</span>
                        </button>
                    </div>
                </div>
                <!-- New Product 3 -->
                <div class="bg-surface rounded-xl border border-[#EDEDED] p-4 product-card-hover group relative">
                    <div class="absolute top-6 left-6 z-10">
                        <span
                            class="px-2 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded">BARU</span>
                    </div>
                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container-low mb-4">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Eco-friendly natural fiber skipping rope"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvZ8ivuXL-vy8M8ru6XtmcZOqiDSFHbIF_SO5w15O3RbmGeloxTLekJ-F-sVM22yjwPp6EZKoNfXUThopsh_XU5JUpxSxrfj4U2tMly_gRsdlvwKF8p_reySA3aaX2fKz1G82vJsD2SUCGqtY-qiQoPinlQBRsNGhgEk9P0l8uzV3WAKOnmijbHUz-zP5CR1M1h4EMDBya7gGBKUWZ9DZSTH2EyvrB9uZNbOT3S3nLZZCv5aqN3Xaq" />
                    </div>
                    <span
                        class="font-label-md text-[10px] text-primary uppercase tracking-widest mb-1 block">Aromatherapy</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">Dupa rempah</h3>
                    <div class="flex justify-between items-center">
                        <p class="font-body-md text-body-md font-bold text-on-surface">Rp. 20.000</p>
                        <button
                            class="w-8 h-8 rounded-full border border-primary text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]" data-icon="add">add</span>
                        </button>
                    </div>
                </div>
                <!-- New Product 4 -->
                <div class="bg-surface rounded-xl border border-[#EDEDED] p-4 product-card-hover group relative">
                    <div class="absolute top-6 left-6 z-10">
                        <span
                            class="px-2 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded">BARU</span>
                    </div>
                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container-low mb-4">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Creative stickers and pins set designed by students"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUPhyFELQsHWGcI58Ik0I6JfirOT_z2ndkwyVGq86Bf9ScTXIdybxUJmndDtV4d_PHDM0Yi-Z1yWww5h7jGt3jsg7IyKEC-uZ131MxRcPAQuA2BW0RCpR5TajpS1_r7WtsuSvjgRCxWd0Hs_L1vwn4HRckjKAMMY6QFNgDjPtlj45z7I0Mo8IgIdXNpq9EDUCwsHVUgPKLZjAeHCWyGd4PufPzWiXB-xGN7Zt1_1XKJpCsgPTn_C6R" />
                    </div>
                    <span
                        class="font-label-md text-[10px] text-primary uppercase tracking-widest mb-1 block">Kerajinan tangan</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">Gerabah mini</h3>
                    <div class="flex justify-between items-center">
                        <p class="font-body-md text-body-md font-bold text-on-surface">Rp. 70.000</p>
                        <button
                            class="w-8 h-8 rounded-full border border-primary text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]" data-icon="add">add</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Story -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop bg-surface-container-low scroll-reveal">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
                <div class="rounded-2xl overflow-hidden h-[500px]">
                    <img class="w-full h-full object-cover" data-alt="Close up of artisan hands working with clay"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUPhyFELQsHWGcI58Ik0I6JfirOT_z2ndkwyVGq86Bf9ScTXIdybxUJmndDtV4d_PHDM0Yi-Z1yWww5h7jGt3jsg7IyKEC-uZ131MxRcPAQuA2BW0RCpR5TajpS1_r7WtsuSvjgRCxWd0Hs_L1vwn4HRckjKAMMY6QFNgDjPtlj45z7I0Mo8IgIdXNpq9EDUCwsHVUgPKLZjAeHCWyGd4PufPzWiXB-xGN7Zt1_1XKJpCsgPTn_C6R" />
                </div>
                <div class="flex flex-col gap-stack-md">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest">Our Mission</span>
                    <h2 class="font-headline-xl text-headline-xl text-on-surface leading-tight">Supporting Small
                        Businesses and Master Artisans</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">Katalog IDN adalah platform yang hadir sebagai wadah bagi pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) untuk memperkenalkan serta memasarkan produk unggulan mereka kepada masyarakat luas. Kami percaya bahwa setiap produk lokal memiliki nilai, kualitas, dan potensi untuk berkembang di era digital.<br>    <br>

Melalui Katalog IDN, kami menghubungkan pembeli dengan beragam produk UMKM terpercaya dalam satu platform yang mudah diakses, aman, dan nyaman digunakan. Dengan mendukung UMKM, setiap transaksi bukan hanya memenuhi kebutuhan, tetapi juga berkontribusi pada pertumbuhan ekonomi lokal dan kemajuan usaha Indonesia.<br><br>

Misi kami adalah menjadikan produk UMKM lebih mudah ditemukan, lebih dipercaya, dan lebih dikenal oleh seluruh masyarakat Indonesia.</p>
                    <div>
                        <button
                            class="px-8 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-lg hover:brightness-90 active:scale-95 transition-all">Learn
                            More About Us</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop bg-primary-container/10 scroll-reveal">
            <div class="max-w-3xl mx-auto text-center py-stack-md">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-base">Join the Collective</h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md">Sign up for our newsletter to
                    receive early access to new collections, artisan interviews, and exclusive community events.</p>
                <form class="flex flex-col sm:flex-row gap-base max-w-xl mx-auto">
                    <input
                        class="flex-grow px-4 py-4 rounded-lg border border-outline-variant bg-surface-container-lowest focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none text-body-md"
                        placeholder="Enter your email address" type="email" />
                    <button
                        class="px-8 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-lg hover:brightness-90 active:scale-95 transition-all whitespace-nowrap">Subscribe
                        Now</button>
                </form>
                <p class="font-body-sm text-body-sm text-secondary mt-stack-sm italic">Be part of a community that
                    values quality and conscious living.</p>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop scroll-reveal">
            <div class="bg-surface-container p-stack-lg rounded-2xl flex flex-col items-center">
                <span class="material-symbols-outlined text-primary text-5xl mb-stack-sm"
                    data-icon="format_quote">format_quote</span>
                <div class="relative w-full max-w-3xl overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-out" id="testimonial-track">
                        <div class="min-w-full text-center px-4">
                            <p class="font-headline-md text-headline-md italic text-on-surface mb-stack-md">"The quality
                                of the ceramics I purchased is unparalleled. You can feel the heart and soul put into
                                every piece. Truly a gem for anyone seeking authenticity."</p>
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 rounded-full overflow-hidden mb-2">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A professional portrait of a woman in her 30s with a warm smile, wearing a simple linen shirt. The background is a blurred art studio with soft natural light. Minimalist and clean aesthetic."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4ChATodbNL2h-sMhScaDlocpx1FvZaPjsTl0fiJAqwKjW38CHPLzwex5MuTuMOVFCkGEsT3Sfbe0PTlxnii4vqwYTBpuxy891ku7KR7y-1-_olgzri2lrwUSL_DOQZd-567wFNV3Vd5AFsaMA2tZbXQrAhIj_yub5t9tQawHBai36f5CB3Hd4Vi7A4zyjZQtVW4tI9uHRnpxT-Mr5jotQdFuOCqfHCE02WgMCPTLY1sOCfG-f3GXt" />
                                </div>
                                <h4 class="font-label-md text-label-md text-on-surface">Sarah Mitchell</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant uppercase tracking-tighter">
                                     Interior Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-stack-sm mt-stack-md">
                    <button class="w-2 h-2 rounded-full bg-primary"></button>
                    <button class="w-2 h-2 rounded-full bg-outline-variant hover:bg-primary transition-colors"></button>
                    <button class="w-2 h-2 rounded-full bg-outline-variant hover:bg-primary transition-colors"></button>
                </div>
            </div>
        </section>
        <!-- Newsletter & Footer Area -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop scroll-reveal">
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center border-t border-outline-variant pt-stack-lg">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-base">Join the Collective</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Stay updated on new arrivals, artisan
                        stories, and exclusive previews of upcoming collections.</p>
                </div>
                <form class="flex gap-base">
                    <input
                        class="flex-grow px-4 py-3 rounded-lg border border-outline bg-surface-container-lowest focus:ring-2 focus:ring-primary/20 focus:border-on-surface transition-all outline-none text-body-md"
                        placeholder="Your email address" type="email" />
                    <button
                        class="px-8 py-3 bg-on-surface text-surface font-label-md text-label-md rounded-lg hover:bg-secondary transition-colors active:scale-95">Subscribe</button>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer Shell -->
    <footer
        class="w-full py-stack-lg px-margin-mobile md:px-margin-desktop bg-surface-container grid grid-cols-1 md:grid-cols-4 gap-gutter border-t border-outline-variant">
        <div class="flex flex-col gap-base">
            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Katalog IDN</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs">Connecting conscious consumers with
                world-class local artisans through curated elegance and sustainable practices.</p>
        </div>
        <div class="flex flex-col gap-base">
            <h5 class="font-label-md text-label-md text-on-surface uppercase tracking-widest">Shop</h5>
            <nav class="flex flex-col gap-2">
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">New Arrivals</a>
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Best Sellers</a>
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Gift Cards</a>
            </nav>
        </div>
        <div class="flex flex-col gap-base">
            <h5 class="font-label-md text-label-md text-on-surface uppercase tracking-widest">Company</h5>
            <nav class="flex flex-col gap-2">
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">About Us</a>
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Sustainability</a>
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Contact</a>
            </nav>
        </div>
        <div class="flex flex-col gap-base">
            <h5 class="font-label-md text-label-md text-on-surface uppercase tracking-widest">Legal</h5>
            <nav class="flex flex-col gap-2">
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Shipping Policy</a>
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Terms of Service</a>
                <a class="font-body-sm text-body-sm text-on-tertiary-fixed-variant hover:text-primary transition-colors"
                    href="#">Privacy</a>
            </nav>
        </div>
        <div
            class="md:col-span-4 flex flex-col md:flex-row justify-between items-center border-t border-outline-variant pt-stack-md mt-stack-md gap-stack-md">
            <p class="font-body-sm text-body-sm text-secondary">© 2026 Katalog IDN. Harga Terjangkau, Kualitas Terjamin.</p>
            <div class="flex gap-stack-md">
                <span class="material-symbols-outlined text-secondary hover:text-primary cursor-pointer"
                    data-icon="public">public</span>
                <span class="material-symbols-outlined text-secondary hover:text-primary cursor-pointer"
                    data-icon="shield">shield</span>
                <span class="material-symbols-outlined text-secondary hover:text-primary cursor-pointer"
                    data-icon="payments">payments</span>
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
        /* ── Mega Menu ── */
        (function () {
            const wrapper = document.getElementById('mega-menu-wrapper');
            const btn     = document.getElementById('mega-menu-btn');
            const panel   = document.getElementById('mega-menu-panel');
            if (!wrapper || !btn || !panel) return;

            let closeTimer = null;

            function open() {
                clearTimeout(closeTimer);
                wrapper.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
            }

            function close() {
                wrapper.classList.remove('is-open');
                btn.setAttribute('aria-expanded', 'false');
            }

            function scheduleClose() {
                closeTimer = setTimeout(close, 120);
            }

            /* Hover on wrapper keeps menu open */
            wrapper.addEventListener('mouseenter', open);
            wrapper.addEventListener('mouseleave', scheduleClose);

            /* Click toggle (also works on touch) */
            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                wrapper.classList.contains('is-open') ? close() : open();
            });

            /* Click outside closes */
            document.addEventListener('click', function (e) {
                if (!wrapper.contains(e.target)) close();
            });

            /* Escape key closes */
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') close();
            });
        })();

        // Simple Micro-interaction for Add to Cart
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function (e) {
                if (this.querySelector('[data-icon="add"]')) {
                    const originalIcon = this.innerHTML;
                    this.innerHTML = '<span class="material-symbols-outlined text-[18px]">check</span>';
                    this.classList.add('bg-primary', 'text-on-primary');
                    setTimeout(() => {
                        this.innerHTML = originalIcon;
                        this.classList.remove('bg-primary', 'text-on-primary');
                    }, 2000);
                }
            });
        });

        // Testimonial Scroll (Placeholder Logic)
        let currentTestimonial = 0;
        const track = document.getElementById('testimonial-track');
        const dots = document.querySelectorAll('.rounded-full.bg-outline-variant');

        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % 3;
            // In a real app we'd translate the track
            // track.style.transform = `translateX(-${currentTestimonial * 100}%)`;
        }, 5000);

        document.addEventListener("DOMContentLoaded", () => {
    // 1. Tentukan daftar kata/frasa yang ingin diganti
    const words = ["Produk lokal berkualitas terbaik", "Belanja aman setiap hari", "Pilihan produk lokal terbaik", "Karya & Produk Asli Indonesia"];
    let currentIndex = 0;
    
    const textElement = document.getElementById("changing-text");

    // 2. Fungsi untuk mengganti teks dengan efek animasi
    setInterval(() => {
        // Efek Keluar: Teks memudar (fade out) dan sedikit bergeser ke atas
        textElement.classList.remove("opacity-100", "translate-y-0");
        textElement.classList.add("opacity-0", "-translate-y-2");

        // Tunggu transisi keluar selesai (500ms sesuai durasi Tailwind duration-500)
        setTimeout(() => {
            // Ganti ke kata berikutnya di dalam array
            currentIndex = (currentIndex + 1) % words.length;
            textElement.textContent = words[currentIndex];

            // Efek Masuk: Teks muncul kembali (fade in) dari bawah ke posisi semula
            textElement.classList.remove("opacity-0", "-translate-y-2");
            textElement.classList.add("opacity-100", "translate-y-0");
        }, 500); 

    }, 3500); // Teks akan berganti setiap 3.5 detik

    // 3. Scroll Reveal Animation using IntersectionObserver
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Setelah aktif, stop observing supaya tidak reset
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -60px 0px'
    });

    // Observe semua elemen scroll-reveal dan stagger-children
    document.querySelectorAll('.scroll-reveal, .stagger-children').forEach(el => {
        revealObserver.observe(el);
    });
});
    </script>
</body>

</html>