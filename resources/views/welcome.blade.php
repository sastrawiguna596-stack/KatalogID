<!DOCTYPE html>
<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $settings['site_title'] ?? 'Katalog IDN - Wadah Pemberdayaan & Produk UMKM Lokal Indonesia' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@300..900&family=Plus+Jakarta+Sans:wght@300..900&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        body {
            animation: pageFadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        /* ── Scroll Reveal Animations ── */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform, opacity;
        }
        .scroll-reveal.active {
            opacity: 1;
            transform: translate(0, 0);
        }
        /* Stagger delays untuk child cards */
        .stagger-children > * {
            opacity: 0;
            transform: translateY(16px);
            transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .stagger-children.active > * {
            opacity: 1;
            transform: translateY(0);
        }
        .stagger-children.active > *:nth-child(1) { transition-delay: 0.04s; }
        .stagger-children.active > *:nth-child(2) { transition-delay: 0.08s; }
        .stagger-children.active > *:nth-child(3) { transition-delay: 0.12s; }
        .stagger-children.active > *:nth-child(4) { transition-delay: 0.16s; }
        .stagger-children.active > *:nth-child(5) { transition-delay: 0.20s; }
        .stagger-children.active > *:nth-child(6) { transition-delay: 0.24s; }
        .stagger-children.active > *:nth-child(7) { transition-delay: 0.28s; }
        .stagger-children.active > *:nth-child(8) { transition-delay: 0.32s; }

        /* Custom Scrollbar for Carousel */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

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

<body class="bg-surface text-on-surface font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed min-h-screen flex flex-col justify-between">

    <!-- Top Navigation -->
    @include('layouts.navbar', ['active' => 'home'])

    <main class="w-full flex-grow">

        <!-- ======================================================== -->
        <!-- 1. HERO SECTION DENGAN VIDEO BACKGROUND & KONTRAST TINGGI-->
        <!-- ======================================================== -->
        <section class="relative w-full min-h-[65vh] md:min-h-[75vh] flex items-center px-margin-mobile md:px-margin-desktop py-12 md:py-16 overflow-hidden">
            <!-- Background Video Container -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <video autoplay loop muted playsinline class="absolute inset-0 z-10 w-full h-full object-cover">
                    <source src="{{ asset('videos/hero-bg.webm') }}" type="video/webm">
                </video>
                <!-- Soft Translucent Overlay (Cerah & Alami Seperti Semula) -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/35 via-black/15 to-transparent z-20"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-surface/30 to-transparent z-20"></div>
            </div>

            <!-- Hero Text Content -->
            <div class="relative z-30 max-w-2xl text-white">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-amber-500/20 backdrop-blur-md border border-amber-400/30 text-amber-300 font-label-md text-xs font-bold rounded-full mb-stack-sm uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    Koleksi Pilihan UMKM 2026
                </span>
                
                <h1 class="font-headline-xl text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white font-extrabold mb-stack-sm leading-[1.15] drop-shadow-[0_2px_8px_rgba(0,0,0,0.7)]">
                    {{ $settings['hero_title_base'] ?? 'Nikmati Kehangatan' }} <br />
                    <span id="changing-text" class="text-amber-400 inline-block transition-all duration-500 transform opacity-100 translate-y-0">
                        Produk Lokal Indonesia
                    </span>
                </h1>
                
                <p class="font-body-lg text-sm sm:text-base md:text-lg text-white/95 mb-stack-md max-w-xl leading-relaxed drop-shadow-[0_1px_4px_rgba(0,0,0,0.6)]">
                    {{ $settings['hero_desc'] ?? 'Wadah kurasi karya tangan dan produk unggulan masyarakat lokal dari berbagai penjuru Nusantara. Dari kerajinan autentik hingga kebutuhan sehari-hari berkualitas tinggi.' }}
                </p>

                <div class="flex flex-wrap items-center gap-3.5">
                    <a href="{{ route('shop') }}" 
                        class="px-7 py-3.5 bg-primary hover:bg-[#684900] text-white font-bold rounded-xl active:scale-95 transition-all inline-flex items-center gap-2.5 shadow-lg shadow-black/25">
                        <span class="material-symbols-outlined text-xl">storefront</span>
                        <span>Jelajahi Katalog Produk</span>
                    </a>
                    
                    <a href="#tentang-kami" 
                        class="px-6 py-3.5 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white font-bold rounded-xl active:scale-95 transition-all inline-flex items-center gap-2">
                        <span class="material-symbols-outlined text-xl">info</span>
                        <span>Tentang Kami</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- 2. VALUE PROPOSITION BAR (4 PILAR KEUNGGULAN)             -->
        <!-- ======================================================== -->
        <section class="border-b border-outline-variant/30 bg-surface-container-lowest py-6 px-margin-mobile md:px-margin-desktop shadow-xs">
            <div class="max-w-container-max mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-amber-500/10 text-primary flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl">verified</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-on-surface">100% Produk UMKM Asli</h4>
                        <p class="text-[11px] sm:text-xs text-secondary mt-0.5">Karya autentik terkurasi</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-emerald-500/10 text-emerald-700 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl">local_shipping</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-on-surface">Pengiriman Seluruh RI</h4>
                        <p class="text-[11px] sm:text-xs text-secondary mt-0.5">Multi-kurir terintegrasi</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-blue-500/10 text-blue-700 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl">security</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-on-surface">Transaksi Aman &amp; Cepat</h4>
                        <p class="text-[11px] sm:text-xs text-secondary mt-0.5">QRIS, Bank, &amp; COD</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-purple-500/10 text-purple-700 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs sm:text-sm text-on-surface">Dukung Pengrajin Lokal</h4>
                        <p class="text-[11px] sm:text-xs text-secondary mt-0.5">Berdayakan ekonomi daerah</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======================================================== -->
        <!-- 3. JELAJAHI KATEGORI PILIHAN                             -->
        <!-- ======================================================== -->
        <section class="py-10 md:py-14 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto scroll-reveal">
            <div class="flex justify-between items-end mb-6 sm:mb-8">
                <div>
                    <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-1">Eksplorasi</span>
                    <h2 class="font-headline-lg text-xl sm:text-2xl md:text-3xl font-extrabold text-on-surface">
                        {{ $settings['categories_title'] ?? 'Jelajahi Kategori Pilihan' }}
                    </h2>
                </div>
                <a class="font-label-md text-xs sm:text-sm font-bold text-primary hover:underline underline-offset-4 flex items-center gap-1 group" 
                    href="{{ route('shop') }}">
                    <span>Lihat Semua</span>
                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>

            <div class="flex gap-4 sm:gap-6 overflow-x-auto pb-4 no-scrollbar stagger-children">
                @foreach($categories as $cat)
                @php
                    $catImg = null;
                    if (!empty($cat->icon_path)) {
                        $path = trim($cat->icon_path);
                        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                            $catImg = $path;
                        } elseif (str_starts_with($path, 'storage/')) {
                            $catImg = asset($path);
                        } elseif (str_contains($path, '/') || str_contains($path, '.')) {
                            $catImg = asset('storage/' . ltrim($path, '/'));
                        }
                    }
                    
                    if (!$catImg && isset($cat->products) && count($cat->products) > 0) {
                        foreach ($cat->products as $p) {
                            if (!empty($p->first_image_url)) {
                                $catImg = $p->first_image_url;
                                break;
                            }
                        }
                    }

                    if (!$catImg) {
                        $fallbackImgs = [
                            'kebutuhan-harian' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=400&q=80',
                            'peralatan-dapur'  => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=400&q=80',
                            'lampu-pencahayaan'=> 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=400&q=80',
                            'mebel-furnitur'   => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80',
                            'dekorasi-rumah'   => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=400&q=80',
                            'pakaian-aksesoris'=> 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=400&q=80',
                        ];
                        $catImg = $fallbackImgs[$cat->slug] ?? 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=400&q=80';
                    }
                @endphp
                <a href="{{ route('shop', ['category' => $cat->slug]) }}" class="flex-shrink-0 group cursor-pointer text-center w-28 sm:w-36 md:w-40">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full overflow-hidden mb-2.5 border-2 border-outline-variant/40 group-hover:border-primary group-hover:shadow-md transition-all duration-300 flex items-center justify-center bg-surface-container-low mx-auto shadow-2xs relative">
                        <img src="{{ $catImg }}" alt="{{ $cat->nama_kategori }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy" />
                        @if(!empty($cat->icon_path) && !str_contains($cat->icon_path, '/'))
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="iconify text-white text-3xl" data-icon="{{ $cat->icon_path }}"></span>
                        </div>
                        @endif
                    </div>
                    <p class="text-center font-bold text-xs sm:text-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2 px-1 leading-snug">
                        {{ $cat->nama_kategori }}
                    </p>
                </a>
                @endforeach
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- 4. PRODUK UNGGULAN (FEATURED PRODUCTS)                   -->
        <!-- ======================================================== -->
        <section class="py-12 md:py-16 px-margin-mobile md:px-margin-desktop bg-surface-container-lowest border-y border-outline-variant/20 scroll-reveal">
            <div class="max-w-container-max mx-auto">
                <div class="flex flex-col items-center text-center mb-8 md:mb-12">
                    <span class="text-xs font-bold text-primary uppercase tracking-widest mb-1.5">Rekomendasi Terbaik</span>
                    <h2 class="font-headline-lg text-2xl sm:text-3xl font-extrabold text-on-surface mb-2">
                        {{ $settings['featured_title'] ?? 'Barang Unggulan UMKM' }}
                    </h2>
                    <p class="font-body-md text-xs sm:text-sm md:text-base text-secondary max-w-xl">
                        {{ $settings['featured_desc'] ?? 'Produk pilihan berkualitas tinggi hasil karya pengrajin daerah untuk kebutuhan sehari-hari maupun dekorasi elegan.' }}
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3.5 sm:gap-5 md:gap-6 stagger-children">
                    @foreach($products as $product)
                    <div onclick="window.location.href='{{ route('product.detail', $product->id) }}'" 
                        class="bg-surface rounded-2xl border border-outline-variant/30 hover:border-primary/40 p-3 sm:p-4.5 group relative flex flex-col justify-between cursor-pointer shadow-2xs hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        
                        @if($product->badge)
                        <div class="absolute top-4 left-4 z-10">
                            <span class="px-2.5 py-1 bg-primary text-white text-[10px] font-extrabold rounded-lg shadow-xs uppercase tracking-wider">
                                {{ $product->badge }}
                            </span>
                        </div>
                        @endif

                        <div>
                            <div class="aspect-square rounded-xl overflow-hidden bg-surface-container-low mb-3 sm:mb-4 relative">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="{{ $product->first_image_url }}"
                                    alt="{{ $product->nama_produk }}" loading="lazy" />
                            </div>

                            <span class="text-[10px] sm:text-xs text-primary font-bold uppercase tracking-wider block mb-1">
                                {{ $product->category->nama_kategori ?? 'Kategori' }}
                            </span>

                            <a href="{{ route('product.detail', $product->id) }}"
                                class="text-xs sm:text-sm font-bold text-on-surface mb-1.5 hover:text-primary transition-colors block line-clamp-2 min-h-[34px] sm:min-h-[40px] leading-snug">
                                {{ $product->nama_produk }}
                            </a>
                        </div>

                        <div class="pt-2.5 border-t border-outline-variant/20 mt-2">
                            <div class="flex justify-between items-center">
                                <p class="text-xs sm:text-base font-extrabold text-primary">
                                    Rp {{ number_format($product->harga, 0, ',', '.') }}
                                </p>
                                <span class="text-[10px] sm:text-xs text-secondary font-medium whitespace-nowrap bg-surface-container px-2 py-0.5 rounded-md">
                                    {{ $product->total_sold }} Terjual
                                </span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

                <div class="text-center mt-8 sm:mt-12">
                    <a href="{{ route('shop') }}" 
                        class="px-8 py-3.5 bg-surface-container-lowest border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold rounded-xl active:scale-95 transition-all inline-flex items-center gap-2 shadow-xs text-sm">
                        <span>Lihat Semua Produk Unggulan</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- 5. KOLEKSI BARANG BARU (NEW ARRIVALS)                    -->
        <!-- ======================================================== -->
        <section class="py-12 md:py-16 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto scroll-reveal">
            <div class="flex justify-between items-end mb-8 md:mb-10">
                <div>
                    <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-1">Koleksi Terkini</span>
                    <h2 class="font-headline-lg text-xl sm:text-2xl md:text-3xl font-extrabold text-on-surface">
                        {{ $settings['new_title'] ?? 'Barang & Karya Terbaru' }}
                    </h2>
                    <p class="font-body-md text-xs sm:text-sm text-secondary mt-1">
                        {{ $settings['new_desc'] ?? 'Produk rilisan terbaru dari mitra pengrajin lokal Nusantara.' }}
                    </p>
                </div>
                <a class="font-label-md text-xs sm:text-sm font-bold text-primary hover:underline underline-offset-4 flex items-center gap-1 group" 
                    href="{{ route('shop') }}">
                    <span>Lihat Semua</span>
                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3.5 sm:gap-5 md:gap-6 stagger-children">
                @foreach($newProducts as $product)
                <div onclick="window.location.href='{{ route('product.detail', $product->id) }}'" 
                    class="bg-surface rounded-2xl border border-outline-variant/30 hover:border-primary/40 p-3 sm:p-4.5 group relative flex flex-col justify-between cursor-pointer shadow-2xs hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    
                    <div class="absolute top-4 left-4 z-10">
                        <span class="px-2.5 py-1 bg-emerald-600 text-white text-[10px] font-extrabold rounded-lg shadow-xs uppercase tracking-wider">
                            BARU
                        </span>
                    </div>

                    <div>
                        <div class="aspect-square rounded-xl overflow-hidden bg-surface-container-low mb-3 sm:mb-4">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $product->first_image_url }}"
                                alt="{{ $product->nama_produk }}" loading="lazy" />
                        </div>

                        <span class="text-[10px] sm:text-xs text-primary font-bold uppercase tracking-wider block mb-1">
                            {{ $product->category->nama_kategori ?? 'Kategori' }}
                        </span>

                        <h3 class="font-bold text-xs sm:text-sm text-on-surface mb-1.5 leading-snug line-clamp-2 min-h-[34px] sm:min-h-[40px]">
                            <a href="{{ route('product.detail', $product->id) }}" class="hover:text-primary transition-colors block">
                                {{ $product->nama_produk }}
                            </a>
                        </h3>
                    </div>

                    <div class="pt-2.5 border-t border-outline-variant/20 mt-2">
                        <div class="flex justify-between items-center">
                            <p class="text-xs sm:text-base font-extrabold text-primary">
                                Rp {{ number_format($product->harga, 0, ',', '.') }}
                            </p>
                            <span class="text-[10px] sm:text-xs text-secondary font-medium whitespace-nowrap bg-surface-container px-2 py-0.5 rounded-md">
                                {{ $product->total_sold }} Terjual
                            </span>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- 6. TENTANG KAMI & MISI PEMBERDAYAAN UMKM                 -->
        <!-- ======================================================== -->
        <section id="tentang-kami" class="py-12 md:py-20 px-margin-mobile md:px-margin-desktop bg-surface-container-low border-t border-outline-variant/20 scroll-reveal">
            <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div class="rounded-3xl overflow-hidden h-[340px] md:h-[480px] shadow-lg border border-outline-variant/30">
                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" 
                        alt="Pengrajin lokal Indonesia sedang berkarya"
                        src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=900&q=80" />
                </div>
                
                <div class="flex flex-col gap-4">
                    <span class="inline-flex items-center gap-1.5 text-xs font-extrabold text-primary uppercase tracking-widest">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Misi &amp; Komitmen Kami
                    </span>
                    
                    <h2 class="font-headline-xl text-2xl sm:text-3xl md:text-4xl font-extrabold text-on-surface leading-tight">
                        {{ $settings['mission_title'] ?? 'Mendukung Kreativitas & Kemandirian Pengrajin Lokal' }}
                    </h2>
                    
                    <div class="text-secondary text-sm sm:text-base leading-relaxed space-y-3">
                        <p>
                            <strong>Katalog IDN</strong> hadir sebagai wadah digital bagi para pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) untuk memperkenalkan karya terbaik mereka ke seluruh Indonesia.
                        </p>
                        <p>
                            Kami percaya setiap produk lokal memiliki cerita, dedikasi, dan keindahan yang layak diapresiasi. Setiap transaksi yang Anda lakukan bukan sekadar berbelanja, melainkan langkah nyata dalam menggerakkan roda perekonomian para perajin dan komunitas lokal.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 pt-2">
                        <a href="{{ route('shop') }}" 
                            class="px-6 sm:px-7 py-3 bg-on-surface text-surface hover:bg-secondary font-bold rounded-xl active:scale-95 transition-all inline-flex items-center gap-2 text-sm shadow-xs">
                            <span>Mulai Belanja Produk Lokal</span>
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                        <a href="{{ route('login') }}" 
                            class="px-6 sm:px-7 py-3 bg-primary hover:bg-[#684900] text-white font-bold rounded-xl active:scale-95 transition-all inline-flex items-center gap-2 text-sm shadow-xs">
                            <span class="material-symbols-outlined text-base">storefront</span>
                            <span>Mulai Buka Toko Gratis</span>
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================================================== -->
        <!-- 8. ULASAN & TESTIMONI PELANGGAN                          -->
        <!-- ======================================================== -->
        @if(isset($reviews) && count($reviews) > 0)
        <section class="py-12 md:py-16 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto scroll-reveal">
            <div class="bg-surface-container-low border border-outline-variant/30 p-6 sm:p-10 rounded-3xl flex flex-col items-center shadow-xs">
                <span class="material-symbols-outlined text-primary text-5xl mb-3">format_quote</span>
                
                <h3 class="text-xs font-bold text-primary uppercase tracking-widest mb-4">Kata Pelanggan Kami</h3>

                <div class="relative w-full max-w-3xl overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-out" id="testimonial-track">
                        @foreach($reviews as $review)
                        <div class="min-w-full text-center px-4">
                            <p class="font-headline-md text-lg sm:text-xl md:text-2xl italic text-on-surface mb-6 font-medium leading-relaxed">
                                "{{ $review->komentar }}"
                            </p>
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg mb-2 shadow-xs">
                                    {{ strtoupper(substr($review->user->name ?? 'U', 0, 1)) }}
                                </div>
                                <h4 class="font-bold text-sm text-on-surface">{{ $review->user->name ?? 'Pelanggan Terverifikasi' }}</h4>
                                <div class="flex text-amber-500 mt-1">
                                    @for($s = 1; $s <= 5; $s++)
                                        <span class="material-symbols-outlined text-base" style="font-variation-settings: 'FILL' {{ $s <= $review->rating ? 1 : 0 }};">star</span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                @if(count($reviews) > 1)
                <div class="flex gap-2 mt-6" id="testimonial-dots">
                    @foreach($reviews as $index => $r)
                    <button type="button" class="testimonial-dot w-2.5 h-2.5 rounded-full {{ $index === 0 ? 'bg-primary' : 'bg-outline-variant hover:bg-primary' }} transition-colors" onclick="goToTestimonial({{ $index }})" aria-label="Testimoni {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                @endif
            </div>

            <script>
                let currentTestimonial = 0;
                const totalTestimonials = {{ count($reviews) }};
                
                function goToTestimonial(index) {
                    currentTestimonial = index;
                    updateTestimonialCarousel();
                }
                
                function updateTestimonialCarousel() {
                    const track = document.getElementById('testimonial-track');
                    const dots = document.querySelectorAll('.testimonial-dot');
                    
                    if (track && dots.length > 0) {
                        track.style.transform = `translateX(-${currentTestimonial * 100}%)`;
                        dots.forEach((dot, idx) => {
                            if (idx === currentTestimonial) {
                                dot.classList.add('bg-primary');
                                dot.classList.remove('bg-outline-variant');
                            } else {
                                dot.classList.remove('bg-primary');
                                dot.classList.add('bg-outline-variant');
                            }
                        });
                    }
                }
                
                if (totalTestimonials > 1) {
                    setInterval(() => {
                        currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
                        updateTestimonialCarousel();
                    }, 5000);
                }
            </script>
        </section>
        @endif

        <!-- ======================================================== -->
        <!-- 9. FORM BAGIKAN PENGALAMAN / REVIEW                      -->
        <!-- ======================================================== -->
        <section class="py-10 md:py-14 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto border-t border-outline-variant/30 scroll-reveal">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-1">Ulasan Pengguna</span>
                    <h2 class="font-headline-lg text-xl sm:text-2xl font-extrabold text-on-surface mb-2">
                        Bagikan Pengalaman Anda
                    </h2>
                    <p class="text-xs sm:text-sm text-secondary leading-relaxed">
                        Pengalaman Anda sangat berarti untuk membantu pelaku UMKM berkembang dan memberikan layanan terbaik bagi seluruh pembeli.
                    </p>
                    @if(session('success'))
                    <p class="mt-4 font-body-sm text-emerald-600 font-bold flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">check_circle</span>
                        {{ session('success') }}
                    </p>
                    @endif
                </div>
                
                @auth
                <form action="{{ route('reviews.store') }}" method="POST" class="flex flex-col gap-3.5 bg-surface-container-lowest border border-outline-variant/30 p-5 rounded-2xl shadow-xs">
                    @csrf
                    <div class="flex items-center gap-1.5" id="star-rating-picker">
                        @for($i = 1; $i <= 5; $i++)
                        <button type="button" onclick="setRating({{ $i }})" class="text-amber-400 hover:scale-110 transition-transform focus:outline-none" title="{{ $i }} Bintang">
                            <span class="material-symbols-outlined text-2xl sm:text-3xl" id="star-icon-{{ $i }}" style="font-variation-settings: 'FILL' 1;">star</span>
                        </button>
                        @endfor
                        <input type="hidden" name="rating" id="input-rating" value="5" required>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-2.5">
                        <input name="komentar" required
                            class="flex-grow px-4 py-2.5 rounded-xl border border-outline-variant/50 bg-surface-container-lowest focus:ring-2 focus:ring-primary/20 text-xs sm:text-sm transition-all"
                            placeholder="Tulis ulasan singkat pengalaman belanja Anda..." type="text" />
                        <button type="submit"
                            class="px-6 py-2.5 bg-primary text-white font-bold text-xs sm:text-sm rounded-xl hover:bg-[#684900] active:scale-95 transition-all">
                            Kirim Ulasan
                        </button>
                    </div>
                </form>
                @else
                <div class="p-6 bg-surface-container-lowest border border-outline-variant/30 rounded-2xl flex flex-col items-start gap-3 shadow-xs">
                    <p class="text-xs sm:text-sm text-secondary">
                        Ingin membagikan ulasan atau pengalaman belanja produk lokal Anda?
                    </p>
                    <a href="{{ route('login') }}" 
                        class="px-6 py-2.5 bg-primary text-white font-bold text-xs sm:text-sm rounded-xl hover:bg-[#684900] active:scale-95 transition-all inline-flex items-center gap-1.5 shadow-xs">
                        <span class="material-symbols-outlined text-base">login</span>
                        <span>Masuk untuk Menulis Ulasan</span>
                    </a>
                </div>
                @endauth
            </div>
        </section>

    </main>

    <!-- Footer Component -->
    @include('layouts.footer')

    <!-- ======================================================== -->
    <!-- JAVASCRIPT: DRAWER, SCROLL REVEAL, & TICKER TEXT         -->
    <!-- ======================================================== -->
    <script>
        // Mobile nav drawer
        function openNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if (drawer) drawer.classList.add('open');
            if (overlay) overlay.classList.add('active');
        }
        function closeNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if (drawer) drawer.classList.remove('open');
            if (overlay) overlay.classList.remove('active');
        }

        // Rating picker logic
        function setRating(rating) {
            const inputRating = document.getElementById('input-rating');
            if (inputRating) inputRating.value = rating;

            for (let i = 1; i <= 5; i++) {
                const icon = document.getElementById('star-icon-' + i);
                if (icon) {
                    icon.style.fontVariationSettings = (i <= rating) ? "'FILL' 1" : "'FILL' 0";
                }
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            // 1. Dynamic Hero Ticker Text
            @php
                $defaultWords = [
                    "Produk Lokal Berkualitas",
                    "Karya Pengrajin Nusantara",
                    "Belanja Aman & Terpercaya",
                    "Pemberdayaan UMKM Daerah"
                ];
                $wordsArray = $defaultWords;
                if (!empty($settings['hero_words'])) {
                    $rawWords = $settings['hero_words'];
                    $decoded = json_decode($rawWords, true);
                    if (is_array($decoded) && !empty($decoded)) {
                        $wordsArray = array_values($decoded);
                    } else {
                        $items = array_filter(array_map('trim', explode(',', $rawWords)));
                        if (!empty($items)) {
                            $wordsArray = array_values($items);
                        }
                    }
                }
            @endphp
            const words = @json($wordsArray);
            let currentIndex = 0;
            const textElement = document.getElementById("changing-text");

            if (textElement && words.length > 1) {
                setInterval(() => {
                    textElement.classList.remove("opacity-100", "translate-y-0");
                    textElement.classList.add("opacity-0", "-translate-y-2");

                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % words.length;
                        textElement.textContent = words[currentIndex];

                        textElement.classList.remove("opacity-0", "-translate-y-2");
                        textElement.classList.add("opacity-100", "translate-y-0");
                    }, 400); 

                }, 3500);
            }

            // 2. High-Performance Scroll Reveal (NO BLANK SPACES)
            // Menggunakan rootMargin 300px agar konten aktif jauh sebelum masuk viewport
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.01,
                rootMargin: '0px 0px 300px 0px'
            });

            // Langsung aktifkan elemen yang sudah terlihat saat halaman dibuka
            document.querySelectorAll('.scroll-reveal, .stagger-children').forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight + 250) {
                    el.classList.add('active');
                } else {
                    revealObserver.observe(el);
                }
            });
        });
    </script>
</body>

</html>