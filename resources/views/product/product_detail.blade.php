<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Katalog IDN - Product Detail</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
<style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .filled-icon {
            font-variation-settings: 'FILL' 1;
        }
        /* Custom scrollbar for gallery */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Active state for custom variant selectors */
        .variant-active {
            border-color: #1b1c1c !important;
            box-shadow: 0 0 0 1px #1b1c1c;
        }
        
        .tab-active {
            border-bottom: 2px solid #7c5800;
            color: #7c5800;
        }
    </style>
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
</head>
<body class="bg-surface text-on-surface font-body-md">
<!-- TopAppBar -->
<header class="flex justify-between items-center px-margin-mobile md:px-margin-desktop w-full h-16 sticky top-0 z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant dark:border-outline">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary cursor-pointer">menu</span>
<h1 class="font-headline-md text-headline-md font-bold text-on-surface dark:text-surface-bright">Katalog IDN</h1>
</div>
<nav class="hidden md:flex gap-gutter items-center">
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="{{ route('home') }}">Home</a>
<a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1" href="{{ route('shop') }}">Shop</a>
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors duration-200" href="{{ route('profile') }}">Profile</a>
</nav>
<div class="flex items-center gap-4">
<a href="{{ route('shop') }}"><span class="material-symbols-outlined text-primary cursor-pointer">search</span></a>
<a href="{{ route('cart') }}" class="relative">
    <span class="material-symbols-outlined text-primary cursor-pointer">shopping_cart</span>
    @if(count(session('cart', [])) > 0)
    <span class="absolute -top-2 -right-2 bg-primary text-on-primary text-[10px] font-bold w-4 h-4 flex items-center justify-center rounded-full">{{ count(session('cart', [])) }}</span>
    @endif
</a>
@auth
<form action="{{ route('logout') }}" method="POST" class="inline">
    @csrf
    <button type="submit" class="text-error hover:text-red-700 transition-colors p-1 flex items-center justify-center" title="Keluar">
        <span class="material-symbols-outlined">logout</span>
    </button>
</form>
@else
<a href="{{ route('login') }}" class="font-label-md text-sm text-primary font-bold px-3 py-1 border border-primary rounded-lg hover:bg-primary hover:text-on-primary transition-all">Masuk</a>
@endauth
</div>
</header>
<main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-stack-lg">
<!-- Product Detail Layout: Asymmetric 2-Column -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg items-start">
<!-- Left: Gallery Side -->
<div class="lg:col-span-7 flex flex-col md:flex-row gap-4">
    <!-- Thumbnails -->
    <div class="hidden md:flex md:flex-col gap-4 w-24">
        @if(is_object($product) && $product->galleries->count() > 0)
            @foreach($product->galleries as $gallery)
            <button class="w-24 h-24 border border-outline rounded-lg overflow-hidden ring-2 ring-primary">
                <img class="w-full h-full object-cover" src="{{ str_starts_with($gallery->foto_path, 'http') ? $gallery->foto_path : asset($gallery->foto_path) }}" alt="{{ $product->nama_produk }}" />
            </button>
            @endforeach
        @else
            <button class="w-24 h-24 border border-outline rounded-lg overflow-hidden ring-2 ring-primary">
                <img class="w-full h-full object-cover" src="{{ is_array($product) ? ($product['image'] ?? '') : ($product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/600') }}" alt="Product Image" />
            </button>
        @endif
    </div>
    <!-- Main Featured Image -->
    <div class="flex-1 relative aspect-[4/5] bg-surface-container-lowest border border-[#EDEDED] rounded-xl overflow-hidden shadow-sm">
        @php
            $mainImg = is_array($product) ? ($product['image'] ?? '') : ($product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/600');
            $mainImgUrl = str_starts_with($mainImg, 'http') ? $mainImg : asset($mainImg);
            $badgeText = is_array($product) ? ($product['badge'] ?? '') : $product->badge;
        @endphp
        <img class="w-full h-full object-cover" src="{{ $mainImgUrl }}" alt="{{ is_array($product) ? ($product['title'] ?? '') : $product->nama_produk }}" />
        @if(!empty($badgeText))
        <div class="absolute top-4 left-4 bg-primary-container text-on-primary-container px-3 py-1 rounded-full font-label-md text-label-md">
            {{ $badgeText }}
        </div>
        @endif
    </div>
</div>
<!-- Right: Product Info Side -->
<div class="lg:col-span-5 flex flex-col gap-stack-md sticky top-24">
    <div class="flex flex-col gap-2">
        <nav class="flex gap-2 text-on-secondary-container font-body-sm text-body-sm uppercase tracking-wider">
            <a class="hover:text-primary transition-colors" href="{{ route('shop') }}">Katalog</a>
            <span>/</span>
            <a class="hover:text-primary transition-colors" href="{{ route('shop') }}">{{ is_array($product) ? ($product['category'] ?? '') : ($product->category->nama_kategori ?? 'Umum') }}</a>
        </nav>
        <h2 class="font-headline-xl text-headline-xl text-on-surface">{{ is_array($product) ? ($product['title'] ?? '') : $product->nama_produk }}</h2>
        <div class="flex items-center gap-4">
            <div class="flex text-amber-500">
                <span class="material-symbols-outlined filled-icon">star</span>
                <span class="material-symbols-outlined filled-icon">star</span>
                <span class="material-symbols-outlined filled-icon">star</span>
                <span class="material-symbols-outlined filled-icon">star</span>
                <span class="material-symbols-outlined">star_half</span>
            </div>
            <span class="font-body-sm text-body-sm text-on-secondary-container">4.8 (124 ulasan)</span>
        </div>
    </div>
    <div class="flex items-baseline gap-4">
        <span class="font-headline-lg text-headline-lg text-primary">
            {{ is_array($product) ? ($product['price'] ?? '') : ('Rp ' . number_format($product->harga, 0, ',', '.')) }}
        </span>
        @if(is_object($product) && $product->harga_diskon)
        <span class="font-body-md text-body-md text-secondary line-through">
            Rp {{ number_format($product->harga_diskon, 0, ',', '.') }}
        </span>
        @elseif(is_array($product) && !empty($product['original_price']))
        <span class="font-body-md text-body-md text-secondary line-through">{{ $product['original_price'] }}</span>
        @endif
    </div>
    <p class="font-body-md text-on-surface-variant">
        {{ is_array($product) ? ($product['description'] ?? '') : $product->deskripsi_lengkap }}
    </p>
    <div class="h-px bg-outline-variant w-full"></div>
    <!-- Variant Selector: Options -->
    <div class="flex flex-col gap-stack-sm">
        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Pilihan Varian: <span class="font-bold text-on-surface" id="selected-color">Standard</span></span>
        <div class="flex gap-3">
            <button class="px-4 py-2 border-2 border-primary rounded-lg font-label-md text-label-md bg-primary-container/10 text-primary">Original</button>
            <button class="px-4 py-2 border-2 border-outline-variant rounded-lg font-label-md text-label-md hover:border-outline text-on-surface-variant">Limited Edition</button>
        </div>
    </div>
    <!-- Flash Success Alert -->
    @if(session('success'))
    <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-xl font-bold flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <a href="{{ route('cart') }}" class="underline text-sm hover:text-emerald-900">Lihat Keranjang &rarr;</a>
    </div>
    @endif

    <!-- CTA Actions -->
    <div class="flex flex-col gap-4 pt-4">
        @auth
        <form action="{{ route('cart.add', is_array($product) ? $product['id'] : $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-primary-container text-on-primary-container h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-[#ffaa00] active:scale-[0.98] transition-all font-bold">
                <span class="material-symbols-outlined">shopping_bag</span>
                Tambah ke Keranjang
            </button>
        </form>

        <form action="{{ route('cart.add', is_array($product) ? $product['id'] : $product->id) }}" method="POST">
            @csrf
            <input type="hidden" name="action" value="buy_now">
            <button type="submit" class="w-full bg-transparent border-2 border-on-surface text-on-surface h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-on-surface hover:text-surface transition-all font-bold">
                Beli Sekarang
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="w-full bg-primary-container text-on-primary-container h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-[#ffaa00] active:scale-[0.98] transition-all font-bold">
            <span class="material-symbols-outlined">shopping_bag</span>
            Tambah ke Keranjang
        </a>
        <a href="{{ route('login') }}" class="w-full bg-transparent border-2 border-on-surface text-on-surface h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-on-surface hover:text-surface transition-all font-bold">
            Beli Sekarang
        </a>
        @endauth
    </div>
    <!-- Product Benefits -->
    <div class="grid grid-cols-2 gap-4 mt-4">
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">local_shipping</span>
            <span class="font-body-sm text-body-sm">Gratis Ongkir Seluruh Indonesia</span>
        </div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">verified</span>
            <span class="font-body-sm text-body-sm">Garansi Produk Original</span>
        </div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">eco</span>
            <span class="font-body-sm text-body-sm">Ramah Lingkungan</span>
        </div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">history</span>
            <span class="font-body-sm text-body-sm">Pengembalian 30 Hari</span>
        </div>
    </div>
</div>
</div>
<!-- Detail Tabs Section -->
<section class="mt-stack-lg border-t border-outline-variant pt-stack-lg">
<div class="flex gap-gutter border-b border-outline-variant overflow-x-auto no-scrollbar">
<button class="pb-4 font-label-md text-label-md uppercase tracking-widest tab-active whitespace-nowrap">Deskripsi Produk</button>
<button class="pb-4 font-label-md text-label-md uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors whitespace-nowrap">Spesifikasi</button>
<button class="pb-4 font-label-md text-label-md uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors whitespace-nowrap">Pengiriman &amp; Retur</button>
<button class="pb-4 font-label-md text-label-md uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors whitespace-nowrap">Ulasan ({{ $product['reviews_count'] }})</button>
</div>
<div class="py-stack-md max-w-3xl">
<div class="flex flex-col gap-stack-sm">
<h3 class="font-headline-md text-headline-md">{{ $product['title'] }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
    {{ $product['description'] }}
</p>
<ul class="list-disc pl-5 font-body-md text-body-md text-on-surface-variant flex flex-col gap-2 pt-2">
<li>Bahan kualitas terbaik buatan pengrajin lokal</li>
<li>Tahan lama dan ramah lingkungan</li>
<li>Desain modern cocok untuk penggunaan sehari-hari</li>
<li>Garansi kualitas Katalog IDN</li>
</ul>
</div>
</div>
</section>
</div>
</div>
</section>
<!-- Related Products Section -->
<section class="mt-stack-lg pt-stack-lg">
<div class="flex justify-between items-end mb-stack-md">
<div class="flex flex-col gap-2">
<span class="font-label-md text-label-md uppercase tracking-widest text-primary">Curated for You</span>
<h2 class="font-headline-lg text-headline-lg">You May Also Like</h2>
</div>
<button class="font-label-md text-label-md text-on-surface flex items-center gap-2 hover:translate-x-1 transition-transform">
                    View All
                    <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<!-- Bento-style Suggestion Grid -->
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6">
<!-- Product Card 1 -->
<div class="flex flex-col gap-3 group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden border border-[#EDEDED] relative">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="A studio shot of a minimalist leather wallet in desert tan, matching the aesthetic of the main tote. The wallet is shown partially open on a crisp white surface with sharp shadows, highlighting its slim profile and card slots. The photography style is modern, bright, and high-end e-commerce compliant." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCTjCLeIuUigsN0j-ULh6AGAXqHcg2EbWn_KSfLx3yGCQtwzuaAYiLSTN6OFQJY9NHA2Gudo0CszXrlUnFIBXhLyiNJk6W8jyPaNMDlh1hHVKs6dYjWa83lF7qm-V9X5mCcF-ObnZMPWZ4K0WB9XUXPdBcOxc9Esv8qBazVhOPWRLCqyyIYmwV-lWZIDfXrKzq7D7vFqXq1ULqQBwaK0Df9DSO8vOwDYNTOceYcxaeuZF6lv6dlNsa-')"></div>
<button class="absolute bottom-4 right-4 w-10 h-10 bg-surface rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-primary">shopping_cart</span>
</button>
</div>
<div>
<h4 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Small Leather Goods</h4>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Slimline Card Holder</h3>
<p class="font-body-md text-body-md font-bold text-on-surface">$55.00</p>
</div>
</div>
<!-- Product Card 2 -->
<div class="flex flex-col gap-3 group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden border border-[#EDEDED] relative">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="A professional product image of a premium leather laptop sleeve in midnight black. The sleeve is sleek and minimalist, positioned at a slight angle on a soft grey background. The lighting is cool and sophisticated, showcasing the high-quality stitching and rich texture of the black leather." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDq8savLwlbJ1uP6jC8IWfkGJGaa-vhhKpwB0UrNlQbYmglWCzd3H7gOOhAPbyNLZSfYDxHZUBhkkyQNoA9lq44j4vCwAJhgH4jGeXUOiLgvsx7rhuav_6vwUhYEVeXtQC_V9_SlBWMhLfvRE2keozBosCcUTk1gPD4BuJR2Or8DU7xAHn4OLsE2cRvNukLPysQDw8q-YiuA2H3L8mPFhewaXMlpv-cIKumrdOHgmY2eHrpL-dcvH4_')"></div>
<button class="absolute bottom-4 right-4 w-10 h-10 bg-surface rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-primary">shopping_cart</span>
</button>
</div>
<div>
<h4 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Accessories</h4>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Padded Laptop Sleeve</h3>
<p class="font-body-md text-body-md font-bold text-on-surface">$95.00</p>
</div>
</div>
<!-- Product Card 3 -->
<div class="flex flex-col gap-3 group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden border border-[#EDEDED] relative">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="A luxury leather travel pouch in ebony brown leather, featuring a gold-toned zipper and a minimalist handle. The pouch is displayed in a lifestyle-inspired studio setting with warm lighting and a soft-focus background of travel essentials. The overall mood is aspirational and organized, fitting the brand's premium identity." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBzooYS1e5TFW2T4UzwvrbP0HMIuG0E4Zp_vqTBHoKII7kBE3-T0pFG9ft3Zdp6WpXKtmzG7GgZFVbf8KWkkAbIE0J-_BeJDiiwsKiEEN7Wb5jeQ2Ox89NRtGI9pRBeOEtZAdEKnwudh6OtFNQudNWvxGjZgJj6w6EPF-pHeL4zZn0T8nFoOv_vkfAtf3GTHWiviLKMjKJ-KjKmsRb2oXfRhtLzd8oOpWxa8DesjdykqD0EvjFFMYPy')"></div>
<button class="absolute bottom-4 right-4 w-10 h-10 bg-surface rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-primary">shopping_cart</span>
</button>
</div>
<div>
<h4 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Travel</h4>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Essentials Travel Pouch</h3>
<p class="font-body-md text-body-md font-bold text-on-surface">$120.00</p>
</div>
</div>
<!-- Product Card 4 -->
<div class="flex flex-col gap-3 group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden border border-[#EDEDED] relative">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="A minimalist adjustable leather bag strap in contrasting cream and tan leather with heavy-duty solid brass hardware. The strap is artistically coiled on a neutral background, with lighting that emphasizes the quality of the hardware and the suppleness of the leather. The visual style is clean and focused." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjZnEq313kCuAsKMuElt6fpAWYMqO0fnhISK-HrQo6tD6qYHaHd8zTBhBARhsK60raGXL4D53e4SAs4M1QqsnSTYhXXWETF0RT8A9LeU6wXFTKlzcz3DorYtqZuW3DvoDVoHn_RQWueUUQMbhDLLBDIAyqTZuTqEbY0opfRmgLHZURGzcrhtbqbSsnAkzj0tLibZXw65rQ98sGb3XxDCuRHEGlqC7di2DCwu_x5kVlrdGQOZ9TqpWm')"></div>
<button class="absolute bottom-4 right-4 w-10 h-10 bg-surface rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-primary">shopping_cart</span>
</button>
</div>
<div>
<h4 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Customization</h4>
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Braided Leather Strap</h3>
<p class="font-body-md text-body-md font-bold text-on-surface">$45.00</p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-stack-lg px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter bg-surface-container dark:bg-surface-dim border-t border-outline-variant dark:border-outline">
<div class="flex flex-col gap-4">
<h2 class="font-headline-sm text-headline-sm text-on-surface">Katalog IDN</h2>
<p class="font-body-sm text-body-sm text-on-tertiary-fixed-variant dark:text-on-tertiary-fixed">
                Empowering small businesses with premium quality products and world-class design.
            </p>
</div>
<div class="flex flex-col gap-4">
<h3 class="font-label-md text-label-md uppercase tracking-wider text-on-surface">Customer Care</h3>
<ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-tertiary-fixed-variant dark:text-on-tertiary-fixed">
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Shipping Policy</a></li>
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Returns & Exchanges</a></li>
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Support Center</a></li>
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Contact Us</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h3 class="font-label-md text-label-md uppercase tracking-wider text-on-surface">About</h3>
<ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-tertiary-fixed-variant dark:text-on-tertiary-fixed">
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Our Story</a></li>
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Sustainability</a></li>
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Terms of Service</a></li>
<li><a class="hover:text-primary underline underline-offset-4 transition-all" href="#">Privacy</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h3 class="font-label-md text-label-md uppercase tracking-wider text-on-surface">Newsletter</h3>
<p class="font-body-sm text-body-sm text-on-tertiary-fixed-variant">Join our list for exclusive releases and updates.</p>
<div class="flex">
<input class="bg-surface border border-outline-variant px-4 py-2 w-full rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Email address" type="email"/>
<button class="bg-on-surface text-surface px-4 py-2 rounded-r-lg hover:bg-primary transition-colors">Join</button>
</div>
</div>
<div class="col-span-1 md:col-span-4 border-t border-outline-variant pt-8 text-center">
<p class="font-body-sm text-body-sm text-on-tertiary-fixed-variant">© 2026 Katalog IDN. Harga Terjangkau, Kualitas Terjamin.</p>
</div>
</footer>
<!-- Mobile Bottom NavBar (Visible on mobile only) -->
<script>
        // Simple Interaction logic
        document.querySelectorAll('button[aria-label]').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('button[aria-label]').forEach(b => b.classList.remove('variant-active'));
                btn.classList.add('variant-active');
                const label = btn.getAttribute('aria-label');
                document.getElementById('selected-color').innerText = label;
            });
        });

        // Tab Switching Simulation
        const tabButtons = document.querySelectorAll('button.whitespace-nowrap');
        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                tabButtons.forEach(b => {
                    b.classList.remove('tab-active');
                    b.classList.add('text-on-surface-variant');
                });
                btn.classList.add('tab-active');
                btn.classList.remove('text-on-surface-variant');
            });
        });

        // Add scale effect to CTAs
        const mainCta = document.querySelector('.bg-primary-container');
        mainCta.addEventListener('mousedown', () => mainCta.style.transform = 'scale(0.95)');
        mainCta.addEventListener('mouseup', () => mainCta.style.transform = 'scale(1)');
    </script>
</body></html>