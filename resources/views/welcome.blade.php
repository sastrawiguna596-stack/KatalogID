<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Katalog IDN | Handcrafted Elegance</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
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

@include('layouts.navbar', ['active' => 'home'])
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
                {{ $settings['hero_title_base'] ?? 'Nikmati' }} <br class="block sm:hidden" />
                <!-- Kata di bawah ini yang akan berganti secara dinamis -->
                <span id="changing-text" class="inline-block text-on-secondary transition-all duration-500 transform opacity-100 translate-y-0">
                    Kehangatan produk lokal
                </span>
            </h1>
            <p class="font-body-lg text-body-lg text-on-secondary mb-stack-md max-w-lg">
                {{ $settings['hero_desc'] ?? 'Tempat menemukan karya atau pun produk yang dijual oleh masyarakat lokal dari anak-anak sampai orang tua, dari karya tangan maupun barang kebutuhan sehari-hari.' }}
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
                <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ $settings['categories_title'] ?? 'Browse Categories' }}</h2>
                <a class="font-label-md text-label-md text-primary hover:underline underline-offset-4" href="{{ route('shop') }}">View
                    All</a>
            </div>
            <div class="flex gap-gutter overflow-x-auto pb-4 no-scrollbar stagger-children">
                @foreach($categories as $cat)
                @php
                    $catImg = null;

                    // 1. Jika icon_path berupa path/URL gambar
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
                    
                    // 2. Ambil gambar dari produk pertama di kategori ini jika tidak ada gambar kategori
                    if (!$catImg && isset($cat->products) && count($cat->products) > 0) {
                        foreach ($cat->products as $p) {
                            if (!empty($p->first_image_url)) {
                                $catImg = $p->first_image_url;
                                break;
                            }
                        }
                    }

                    // 3. Gambar estetis resolusi tinggi jika belum ada foto
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
                <a href="{{ route('shop', ['category' => $cat->slug]) }}" class="flex-shrink-0 group cursor-pointer text-center">
                    <div class="w-36 h-36 md:w-44 md:h-44 rounded-full overflow-hidden mb-base border-2 border-outline-variant group-hover:border-primary transition-all duration-300 flex items-center justify-center bg-surface-container-low mx-auto shadow-xs relative">
                        <img src="{{ $catImg }}" alt="{{ $cat->nama_kategori }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy" />
                        @if(!empty($cat->icon_path) && !str_contains($cat->icon_path, '/'))
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="iconify text-white text-3xl" data-icon="{{ $cat->icon_path }}"></span>
                        </div>
                        @endif
                    </div>
                    <p class="text-center font-label-md text-label-md font-bold text-on-surface group-hover:text-primary transition-colors mt-2">{{ $cat->nama_kategori }}</p>
                </a>
                @endforeach
            </div>
        </section>
    </main>

        <main class="w-full overflow-hidden">
        <!-- Featured Products Grid -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop bg-surface-container-lowest scroll-reveal">
            <div class="flex flex-col items-center text-center mb-stack-lg">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-base">{{ $settings['featured_title'] ?? 'Barang Unggulan' }}</h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">{{ $settings['featured_desc'] ?? 'Produk yang dibuat untuk kegiatan sehari-hari dirumah maupun dliuar rumah.' }}</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 stagger-children">
                @foreach($products as $product)
                <div class="bg-surface rounded-sm border border-[#EDEDED] p-2.5 sm:p-4 product-card-hover group relative flex flex-col justify-between">
                    @if($product->badge)
                    <div class="absolute top-4 left-4 z-10">
                        <span class="px-1.5 sm:px-2 py-0.5 sm:py-1 bg-primary text-on-primary text-[9px] sm:text-[10px] font-bold rounded-sm">{{ $product->badge }}</span>
                    </div>
                    @endif
                    <div>
                        <div class="aspect-square rounded-sm overflow-hidden bg-surface-container-low mb-2.5 sm:mb-4">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $product->first_image_url }}"
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
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">{{ $settings['new_title'] ?? 'Barang Baru' }}</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $settings['new_desc'] ?? 'Barang untuk kehidupan sehari-hari.' }}</p>
                </div>
                <a class="font-label-md text-label-md text-primary hover:underline underline-offset-4" href="{{ route('shop') }}">Shop All
                    New</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                @foreach($newProducts as $product)
                <div class="bg-surface rounded-sm border border-[#EDEDED] p-4 product-card-hover group relative flex flex-col justify-between">
                    <div class="absolute top-6 left-6 z-10">
                        <span class="px-2 py-1 bg-primary-container text-on-primary-container text-[10px] font-bold rounded-sm">BARU</span>
                    </div>
                    <div>
                        <div class="aspect-square rounded-sm overflow-hidden bg-surface-container-low mb-4">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="{{ $product->first_image_url }}"
                                alt="{{ $product->nama_produk }}" />
                        </div>
                        <span class="font-label-md text-[10px] text-primary uppercase tracking-widest mb-1 block">{{ $product->category->nama_kategori ?? 'Kategori' }}</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">
                            <a href="{{ route('product.detail', $product->id) }}" class="hover:text-primary transition-colors block line-clamp-2">{{ $product->nama_produk }}</a>
                        </h3>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <p class="font-body-md text-body-md font-bold text-on-surface">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                        <a href="{{ route('product.detail', $product->id) }}" class="w-8 h-8 rounded-full border border-primary text-primary flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[18px]">add</span>
                        </a>
                    </div>
                </div>
                @endforeach
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
                    <h2 class="font-headline-xl text-headline-xl text-on-surface leading-tight">{{ $settings['mission_title'] ?? 'Supporting Small Businesses and Master Artisans' }}</h2>
                    <div class="font-body-lg text-body-lg text-on-surface-variant">
                        {!! $settings['mission_desc'] ?? 'Katalog IDN adalah platform yang hadir sebagai wadah bagi pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) untuk memperkenalkan serta memasarkan produk unggulan mereka kepada masyarakat luas. Kami percaya bahwa setiap produk lokal memiliki nilai, kualitas, dan potensi untuk berkembang di era digital.<br><br>Melalui Katalog IDN, kami menghubungkan pembeli dengan beragam produk UMKM terpercaya dalam satu platform yang mudah diakses, aman, dan nyaman digunakan. Dengan mendukung UMKM, setiap transaksi bukan hanya memenuhi kebutuhan, tetapi juga berkontribusi pada pertumbuhan ekonomi lokal dan kemajuan usaha Indonesia.<br><br>Misi kami adalah menjadikan produk UMKM lebih mudah ditemukan, lebih dipercaya, dan lebih dikenal oleh seluruh masyarakat Indonesia.' !!}
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
        @if(isset($reviews) && count($reviews) > 0)
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop scroll-reveal">
            <div class="bg-surface-container p-stack-lg rounded-2xl flex flex-col items-center">
                <span class="material-symbols-outlined text-primary text-5xl mb-stack-sm"
                    data-icon="format_quote">format_quote</span>
                <div class="relative w-full max-w-3xl overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-out" id="testimonial-track">
                        @foreach($reviews as $review)
                        <div class="min-w-full text-center px-4">
                            <p class="font-headline-md text-headline-md italic text-on-surface mb-stack-md">"{{ $review->komentar }}"</p>
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-fixed flex items-center justify-center font-bold text-xl mb-2 shadow-xs">
                                    {{ strtoupper(substr($review->user->name ?? 'U', 0, 1)) }}
                                </div>
                                <h4 class="font-label-md text-label-md text-on-surface">{{ $review->user->name ?? 'Pengguna Anonim' }}</h4>
                                <div class="flex text-amber-500 mt-1 mb-1">
                                    @for($s = 1; $s <= 5; $s++)
                                        <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' {{ $s <= $review->rating ? 1 : 0 }};">star</span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                @if(count($reviews) > 1)
                <div class="flex gap-stack-sm mt-stack-md" id="testimonial-dots">
                    @foreach($reviews as $index => $r)
                    <button class="testimonial-dot w-2 h-2 rounded-full {{ $index === 0 ? 'bg-primary' : 'bg-outline-variant hover:bg-primary' }} transition-colors" onclick="goToTestimonial({{ $index }})"></button>
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
                                dot.classList.replace('bg-outline-variant', 'bg-primary');
                                dot.classList.add('bg-primary');
                                dot.classList.remove('bg-outline-variant');
                            } else {
                                dot.classList.replace('bg-primary', 'bg-outline-variant');
                                dot.classList.add('bg-outline-variant');
                                dot.classList.remove('bg-primary');
                            }
                        });
                    }
                }
                
                // Auto rotate every 5 seconds
                if (totalTestimonials > 1) {
                    setInterval(() => {
                        currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
                        updateTestimonialCarousel();
                    }, 5000);
                }
            </script>
        </section>
        @endif

        <script>
            function setRating(rating) {
                document.getElementById('input-rating').value = rating;
                for (let i = 1; i <= 5; i++) {
                    const icon = document.getElementById('star-icon-' + i);
                    if (i <= rating) {
                        icon.style.fontVariationSettings = "'FILL' 1";
                    } else {
                        icon.style.fontVariationSettings = "'FILL' 0";
                    }
                }
            }
        </script>
        <!-- Review Input Area (Original Layout) -->
        <section class="py-stack-lg px-margin-mobile md:px-margin-desktop scroll-reveal">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center border-t border-outline-variant pt-stack-lg">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-base">Bagikan Pengalaman Anda</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Tinggalkan ulasan tentang pengalaman Anda menggunakan platform Katalog IDN.</p>
                    @if(session('success'))
                    <p class="mt-4 font-body-sm text-emerald-600 font-bold">{{ session('success') }}</p>
                    @endif
                </div>
                
                @auth
                <form action="{{ route('reviews.store') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div class="flex items-center gap-1" id="star-rating-picker">
                        @for($i = 1; $i <= 5; $i++)
                        <button type="button" onclick="setRating({{ $i }})" class="text-amber-400 hover:scale-110 transition-transform focus:outline-none" title="{{ $i }} Bintang">
                            <span class="material-symbols-outlined text-3xl" id="star-icon-{{ $i }}" style="font-variation-settings: 'FILL' 1;">star</span>
                        </button>
                        @endfor
                        <input type="hidden" name="rating" id="input-rating" value="5" required>
                    </div>
                    <div class="flex gap-base">
                        <input name="komentar" required
                            class="flex-grow px-4 py-3 rounded-lg border border-outline bg-surface-container-lowest focus:ring-2 focus:ring-primary/20 focus:border-on-surface transition-all outline-none text-body-md"
                            placeholder="Tulis ulasan singkat..." type="text" />
                        <button type="submit"
                            class="px-8 py-3 bg-on-surface text-surface font-label-md text-label-md rounded-lg hover:bg-secondary transition-colors active:scale-95">Kirim</button>
                    </div>
                </form>
                @else
                <div class="flex flex-col items-start justify-center">
                    <p class="font-body-md text-body-md text-on-surface-variant mb-4">Ingin membagikan ulasan atau pengalaman belanja Anda?</p>
                    <a href="{{ route('login') }}" class="px-8 py-3 bg-on-surface text-surface font-label-md text-label-md rounded-lg hover:bg-secondary transition-colors active:scale-95 text-center inline-block w-full md:w-auto">Masuk untuk Menulis Ulasan</a>
                </div>
                @endauth
            </div>

            <script>
                function setRating(rating) {
                    const inputRating = document.getElementById('input-rating');
                    if(inputRating) inputRating.value = rating;

                    for (let i = 1; i <= 5; i++) {
                        const icon = document.getElementById('star-icon-' + i);
                        if (icon) {
                            if (i <= rating) {
                                icon.style.fontVariationSettings = "'FILL' 1";
                            } else {
                                icon.style.fontVariationSettings = "'FILL' 0";
                            }
                        }
                    }
                }
            </script>
        </section>
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



        document.addEventListener("DOMContentLoaded", () => {
    // 1. Tentukan daftar kata/frasa yang ingin diganti
    @php
        $defaultWords = ["Produk lokal berkualitas terbaik", "Belanja aman setiap hari", "Pilihan produk lokal terbaik", "Karya & Produk Asli Indonesia"];
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