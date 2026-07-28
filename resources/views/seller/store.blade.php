<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luminous Commerce | Empowering Your Growth</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-low": "#f5f3f3",
                        "secondary": "#5f5e5e",
                        "primary-container": "#ffb800",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#e2e3e1",
                        "surface-bright": "#fbf9f8",
                        "on-surface": "#1b1c1c",
                        "secondary-fixed": "#e5e2e1",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#454746",
                        "on-error": "#ffffff",
                        "surface-dim": "#dbdad9",
                        "on-surface-variant": "#514532",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#1c1b1b",
                        "surface-container-high": "#e9e8e7",
                        "on-background": "#1b1c1c",
                        "outline-variant": "#d5c4ab",
                        "surface": "#fbf9f8",
                        "inverse-primary": "#ffba20",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e4e2e2",
                        "primary-fixed": "#ffdea8",
                        "on-primary-fixed-variant": "#5e4200",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#656464",
                        "tertiary-fixed-dim": "#c6c7c5",
                        "surface-container-lowest": "#ffffff",
                        "background": "#ffffff",
                        "secondary-fixed-dim": "#c8c6c5",
                        "outline": "#837560",
                        "secondary-container": "#e5e2e1",
                        "primary-fixed-dim": "#ffba20",
                        "on-primary-container": "#271900",
                        "inverse-surface": "#303031",
                        "inverse-on-surface": "#f2f0f0",
                        "tertiary-container": "#c4c5c3",
                        "tertiary": "#5d5f5d",
                        "surface-tint": "#7c5800",
                        "primary": "#7c5800",
                        "on-tertiary-fixed": "#1a1c1b",
                        "on-secondary-fixed-variant": "#474646",
                        "surface-variant": "#e4e2e2",
                        "error": "#ba1a1a",
                        "on-tertiary-container": "#505250",
                        "on-primary-fixed": "#271900",
                        "surface-container": "#f8f8f8"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "40px",
                        "base": "8px",
                        "stack-md": "24px",
                        "gutter": "24px",
                        "stack-sm": "12px",
                        "stack-lg": "48px",
                        "margin-mobile": "16px",
                        "container-max": "1200px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-sm": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Hanken Grotesk"],
                        "headline-lg": ["Hanken Grotesk"],
                        "headline-xl": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                        "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-sm": ["18px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "body-sm": ["13px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-xl-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                }
            }
        }
    </script>
<style>
        body {
            background-color: #ffffff;
            color: #1b1c1c;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .product-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body class="font-body-md text-body-md antialiased bg-surface-container-lowest">
<!-- Header Navigation - Cleaner, Thinner, Search-focused -->
<header class="w-full top-0 sticky bg-white border-b border-surface-container-highest z-50">
<div class="max-w-container-max mx-auto px-margin-desktop py-3 flex items-center gap-6">
<a class="font-headline-sm text-headline-sm font-bold text-primary flex-shrink-0" href="{{ route('home') }}">Katalog IDN</a>
<div class="hidden lg:flex items-center gap-4 text-label-md">
<a class="text-secondary hover:text-primary transition-colors" href="{{ route('shop') }}">Kategori</a>
</div>
<div class="flex-grow max-w-2xl relative">
<input class="w-full bg-surface-container-low border border-surface-container-highest rounded-lg px-10 py-2 text-body-sm focus:outline-none focus:border-primary-container transition-all" placeholder="Cari di Katalog IDN" type="text"/>
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary">search</span>
</div>
<div class="flex items-center gap-4">
<a href="{{ route('cart') }}" aria-label="Cart" class="material-symbols-outlined text-secondary hover:text-primary transition-colors p-1">shopping_cart</a>
<div class="h-6 w-[1px] bg-surface-container-highest mx-2 hidden sm:block"></div>
<a href="{{ route('login') }}" class="hidden sm:block border border-primary text-primary px-4 py-1.5 rounded-lg font-label-md hover:bg-primary/5 transition-all text-center">Masuk</a>
<a href="{{ route('account') }}" class="hidden sm:block bg-primary text-white px-4 py-1.5 rounded-lg font-label-md hover:brightness-110 transition-all text-center">Dashboard Seller</a>
</div>
</div>
</header>
<main>
<section class="bg-white border-b border-surface-container-highest">
<div class="max-w-container-max mx-auto px-margin-desktop py-6 flex flex-col md:flex-row items-center justify-between gap-6">
<div class="flex items-center gap-4">
<div class="w-16 h-16 rounded-full bg-primary-container/20 flex items-center justify-center text-primary overflow-hidden border border-surface-container-highest">
<span class="material-symbols-outlined text-4xl">storefront</span>
</div>
<div>
<h1 class="font-headline-md text-on-surface font-bold">{{ $store->nama_toko }}</h1>
<div class="flex items-center gap-3 mt-1">
<div class="flex items-center gap-1 text-body-sm text-secondary">
<span class="material-symbols-outlined text-[16px] text-primary" style="font-variation-settings: 'FILL' 1">star</span>
<span>4.9 (Official Seller)</span>
</div>
<div class="w-[1px] h-3 bg-surface-container-highest"></div>
<div class="text-body-sm font-bold text-primary">{{ $products->count() }} Produk Aktif</div>
</div>
<p class="text-body-sm text-secondary mt-1 max-w-xl">{{ $store->deskripsi ?? 'Toko Resmi di Katalog IDN' }}</p>
</div>
</div>
<div class="flex items-center gap-3">
@auth
@if(Auth::id() === $store->user_id)
<a href="{{ route('add_product') }}" class="flex items-center gap-2 bg-primary text-white px-6 py-2 rounded-lg font-label-md hover:brightness-110 transition-all font-bold">
<span class="material-symbols-outlined text-[20px]">add</span>
    Tambah Produk Baru
</a>
@endif
@endauth
</div>
</div>
</section>

<!-- Produk Toko Section -->
<section class="max-w-container-max mx-auto px-margin-desktop py-8">
<div class="flex justify-between items-center mb-6">
<div class="flex items-center gap-3">
<h2 class="font-headline-md text-on-surface font-bold">Katalog Produk Toko</h2>
<span class="bg-primary-container text-on-primary-container text-xs px-2.5 py-1 rounded-full font-bold">{{ $products->count() }} Items</span>
</div>
</div>

<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
    @forelse($products as $product)
    <div onclick="window.location.href='{{ url('/product') }}/{{ $product->id }}'" class="product-card border border-surface-container-highest rounded-xl bg-white overflow-hidden cursor-pointer flex flex-col justify-between hover:shadow-md transition-all">
        <div class="aspect-square bg-surface-container-low overflow-hidden relative">
            <img class="w-full h-full object-cover" src="{{ str_starts_with($product->galleries->first()?->foto_path ?? '', 'http') ? $product->galleries->first()?->foto_path : asset($product->galleries->first()?->foto_path ?: 'https://via.placeholder.com/200') }}" alt="{{ $product->nama_produk }}"/>
            @if($product->badge)
            <span class="absolute top-2 left-2 bg-primary text-on-primary text-[10px] font-bold px-2 py-0.5 rounded">{{ $product->badge }}</span>
            @endif
        </div>
        <div class="p-3 space-y-1">
            <h3 class="text-body-sm font-bold line-clamp-2 min-h-[36px]">{{ $product->nama_produk }}</h3>
            <div class="text-body-md font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</div>
            <div class="flex items-center gap-1 text-[11px] text-secondary">
                <span class="material-symbols-outlined text-primary text-[12px]" style="font-variation-settings: 'FILL' 1">star</span>
                <span>4.9 | Stok {{ $product->stok }}</span>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full py-12 text-center text-secondary bg-surface-container-low rounded-xl">
        <span class="material-symbols-outlined text-5xl mb-2 text-primary">inventory_2</span>
        <p class="font-bold text-lg text-on-surface">Toko Ini Belum Memiliki Produk</p>
        <p class="text-sm mt-1 mb-4">Tambahkan produk baru melalui Dashboard Seller.</p>
        @auth
        @if(Auth::id() === $store->user_id)
        <a href="{{ route('add_product') }}" class="px-6 py-2.5 bg-primary text-on-primary font-bold rounded-lg hover:brightness-110 transition-colors inline-block">+ Tambah Produk</a>
        @endif
        @endauth
    </div>
    @endforelse
</div>
</section>
<!-- Curated Collections - Simplified Cards -->
<section class="py-8 border-t border-surface-container">
<div class="max-w-container-max mx-auto px-margin-desktop">
<h2 class="font-headline-md text-on-surface mb-6">Pilihan Kategori</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="group cursor-pointer">
<div class="aspect-[4/3] rounded-lg overflow-hidden border border-surface-container-highest mb-2">
<img alt="Decor" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBD8oIbLdEJ27VrY6N4RIYehPehrCajSLKuL4nOrFR5Re1te7TCYcSqeL5nM2IHnO0uwHhTU3RpG-5wYab9q4o6q4dBuEXkmO0I9SMxkym3R9AHXLeYFq9-dfAMwrCMk4whExXZ7aYxHVFcS164rrJ50VzULt3aeSpVKqWRGbPS4G_-hPjw04d1OH5EuQ3nmummxik7vYIzUmmCyRdlyvDMMYmKui4aB2uYaEXvgh06kKaJlKd3AUAC"/>
</div>
<p class="text-body-sm font-bold text-center">Handcrafted Decor</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-[4/3] rounded-lg overflow-hidden border border-surface-container-highest mb-2">
<img alt="Kitchen" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzs4LoaaViAat6vXRgB8ql1FD2-wU4dTj_KWdBAB2znRCHywAGJT6V78Uj8utS88mtg9EFs7CqZ553hUFXUz9mT0u30sMFR6GqPBA2mEoVKgOLUgByYKLPoj2mkvrIEE-z5-wKF7IcX9dLD3g-1LbPywaJS0nbWuhm2vv3Yv8Wx6QXgsX5cq3PiWo7fn5Pj0vEt9pM56LHbc8Sa7Qm16pou3Mf4xusrnAUwKM4rMpdsS4jsD1iCk8k"/>
</div>
<p class="text-body-sm font-bold text-center">Essential Kitchenware</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-[4/3] rounded-lg overflow-hidden border border-surface-container-highest mb-2">
<img alt="Office" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCps2VzngqRRv77XdCeicXCGQFux2NJWbOHVl2j7M-Y8L3CQKCA2g-DNJYX8Vk2Sf2ena-_o_lUWqUXz5MvO8tBvfH9SRz7TvNBcrEBz6v7ZItftIknCSxDFDH9zzbCzFbt7Gh_DOlz_eSagaTe4WurY2c0DuUm8c3PqUqvdwoKeEM_i1nKzj2jd_IQq803rYKCepciPz3hPem96_-8HvBgzwNd_2PVvrjRlXhz1YMwMQOEHKFH0mvd"/>
</div>
<p class="text-body-sm font-bold text-center">Modern Office</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-[4/3] rounded-lg overflow-hidden border border-surface-container-highest mb-2 flex items-center justify-center bg-surface-container-low">
<span class="material-symbols-outlined text-4xl text-secondary">grid_view</span>
</div>
<p class="text-body-sm font-bold text-center">Semua Kategori</p>
</div>
</div>
</div>
</section>
<!-- SME Impact - Simplified -->
<section class="py-12 bg-white">
<div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">trending_up</span>
</div>
<div>
<h3 class="font-bold text-on-surface">1,200+ Partners</h3>
<p class="text-[12px] text-secondary">UMKM yang bertumbuh bersama kami</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">verified</span>
</div>
<div>
<h3 class="font-bold text-on-surface">Kualitas Terjamin</h3>
<p class="text-[12px] text-secondary">Produk pilihan dengan QC ketat</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">payments</span>
</div>
<div>
<h3 class="font-bold text-on-surface">Dukungan Ekonomi</h3>
<p class="text-[12px] text-secondary">Direct impact untuk UMKM lokal</p>
</div>
</div>
</div>
</section>
</main>
<!-- Simple Compact Footer -->
<footer class="w-full border-t border-surface-container-highest py-8 bg-white">
<div class="max-w-container-max mx-auto px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-6">
<div class="text-center md:text-left">
<div class="font-headline-sm font-bold text-primary mb-1">Luminous</div>
<p class="text-body-sm text-secondary">© 2024 Luminous Commerce. Empowering SMEs.</p>
</div>
<div class="flex gap-8 text-label-md text-secondary">
<a class="hover:text-primary transition-colors" href="#">Tentang Kami</a>
<a class="hover:text-primary transition-colors" href="#">Bantuan</a>
<a class="hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
</div>
<div class="flex gap-4">
<a class="text-secondary hover:text-primary transition-colors" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
</a>
<a class="text-secondary hover:text-primary transition-colors" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
</a>
</div>
</div>
</footer>
<script>
    // Simple header effect on scroll
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 10) {
            header.classList.add('shadow-sm');
        } else {
            header.classList.remove('shadow-sm');
        }
    });
</script>
</body></html>