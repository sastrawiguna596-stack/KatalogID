<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $store->nama_toko }} - Store | Katalog IDN</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "2xl": "1rem",
                        "full": "9999px"
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
        .product-card {
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body class="font-body-md text-body-md antialiased bg-surface-container-lowest min-h-screen flex flex-col justify-between">

<!-- Mobile Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-xs z-50 lg:hidden hidden transition-opacity" onclick="closeSidebar()"></div>

<!-- Mobile Slide-In Sidebar -->
<aside id="mobile-sidebar" class="fixed left-0 top-0 h-full w-80 max-w-[85vw] bg-white z-50 flex flex-col justify-between p-6 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden shadow-2xl overflow-y-auto">
    <div class="space-y-6">
        <div class="flex items-center justify-between border-b border-surface-container-highest pb-4">
            <a class="font-headline-sm font-bold text-primary flex items-center gap-2" href="{{ route('home') }}">
                <span class="material-symbols-outlined text-2xl">storefront</span>
                <span>Katalog IDN</span>
            </a>
            <button type="button" onclick="closeSidebar()" class="p-2 rounded-lg text-secondary hover:bg-surface-container-low transition-colors" aria-label="Close Menu">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <!-- Store Info Card in Sidebar -->
        <div class="p-4 rounded-xl bg-primary-fixed/20 border border-primary/20 space-y-2">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold flex-shrink-0">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="min-w-0 flex-1">
                    <h4 class="font-bold text-on-surface text-sm truncate">{{ $store->nama_toko }}</h4>
                    <span class="text-xs text-primary font-bold flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">verified</span> Verified Seller
                    </span>
                </div>
            </div>
            <p class="text-xs text-secondary line-clamp-2 leading-relaxed">{{ $store->deskripsi ?? 'Toko Resmi di Katalog IDN' }}</p>
        </div>

        <!-- Search Bar Mobile -->
        <div class="relative">
            <input class="w-full bg-surface-container-low border border-outline-variant rounded-lg pl-10 pr-4 py-2.5 text-body-sm focus:outline-none focus:border-primary" placeholder="Cari di toko..." type="text"/>
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-xl">search</span>
        </div>

        <!-- Navigation Links -->
        <nav class="space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('home') }}" onclick="closeSidebar()">
                <span class="material-symbols-outlined text-primary">home</span> Beranda
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('store_product', ['id' => $store->id, 'view' => 'all']) }}" onclick="closeSidebar()">
                <span class="material-symbols-outlined text-primary">grid_view</span> Semua Produk Toko
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('cart') }}" onclick="closeSidebar()">
                <span class="material-symbols-outlined text-primary">shopping_cart</span> Keranjang Belanja
            </a>
            @auth
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('cust_account') }}" onclick="closeSidebar()">
                    <span class="material-symbols-outlined text-primary">person</span> Akun Saya
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('account') }}" onclick="closeSidebar()">
                    <span class="material-symbols-outlined text-primary">dashboard</span> Dashboard Seller
                </a>
            @else
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('login') }}" onclick="closeSidebar()">
                    <span class="material-symbols-outlined text-primary">login</span> Masuk / Daftar
                </a>
            @endauth
        </nav>
    </div>

    <div class="border-t border-surface-container-highest pt-4 space-y-3">
        @auth
            @if(Auth::id() === $store->user_id)
                <a href="{{ route('add_product') }}" class="w-full flex items-center justify-center gap-2 bg-primary text-white py-3 rounded-lg font-bold text-sm hover:brightness-110 transition-all shadow-sm">
                    <span class="material-symbols-outlined text-lg">add</span> Tambah Produk Baru
                </a>
            @endif
        @endauth
        <p class="text-xs text-center text-secondary">© 2026 Katalog IDN. All rights reserved.</p>
    </div>
</aside>

<!-- Header Navigation -->
@include('layouts.navbar', ['active' => 'store'])

<main class="w-full flex-grow">
    <!-- Store Hero Banner Section - Full Width -->
    <section class="w-full bg-gradient-to-r from-amber-500/10 via-amber-50/50 to-white border-b border-surface-container-highest">
        <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 py-8 md:py-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5">
                <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-primary to-[#a67c00] text-white flex items-center justify-center shadow-lg overflow-hidden border-2 border-white flex-shrink-0">
                    <span class="material-symbols-outlined text-4xl sm:text-5xl">storefront</span>
                </div>
                <div class="space-y-1.5">
                    <div class="flex items-center gap-2 flex-wrap">
                        <h1 class="font-headline-md text-2xl sm:text-3xl text-on-surface font-bold">{{ $store->nama_toko }}</h1>
                        <span class="bg-primary text-on-primary text-xs px-2.5 py-0.5 rounded-full font-bold uppercase tracking-wider flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">verified</span> Official
                        </span>
                    </div>
                    <div class="flex items-center gap-3 text-body-sm text-secondary flex-wrap">
                        <div class="flex items-center gap-1 text-primary font-bold">
                            <span class="material-symbols-outlined text-base" style="font-variation-settings: 'FILL' 1">star</span>
                            <span>4.9 (Seller Terpercaya)</span>
                        </div>
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary/30"></span>
                        <span class="font-semibold text-on-surface">{{ $products->count() }} Produk Aktif</span>
                        @if($store->user->address)
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary/30"></span>
                            <span class="flex items-center gap-1 text-xs text-secondary">
                                <span class="material-symbols-outlined text-sm text-primary">location_on</span>
                                {{ Str::limit($store->user->address, 40) }}
                            </span>
                        @endif
                    </div>
                    <p class="text-body-sm text-secondary max-w-2xl leading-relaxed">{{ $store->deskripsi ?? 'Toko Resmi Pengrajin & UMKM Terpilih di Katalog IDN.' }}</p>
                </div>
            </div>
            
            <div class="flex items-center gap-3 self-start md:self-center">
                @auth
                    @if(Auth::id() === $store->user_id)
                        <a href="{{ route('add_product') }}" class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-bold hover:brightness-110 shadow-md hover:shadow-lg transition-all">
                            <span class="material-symbols-outlined text-xl">add_circle</span>
                            <span>Tambah Produk Baru</span>
                        </a>
                        <a href="{{ route('account_setting') }}" class="inline-flex items-center gap-2 border border-outline-variant bg-white text-on-surface px-4 py-3 rounded-xl font-bold hover:bg-surface-container-low transition-all" title="Pengaturan Toko">
                            <span class="material-symbols-outlined text-xl">settings</span>
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </section>

    <!-- Produk Toko Section - Full Width Grid -->
    <section class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 py-10 space-y-6">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b border-surface-container-highest pb-4">
            <div>
                <h2 class="font-headline-md text-xl sm:text-2xl text-on-surface font-bold flex items-center gap-2">
                    <span>Katalog Produk Toko</span>
                    <span class="bg-primary-container text-on-primary-container text-xs px-3 py-1 rounded-full font-bold">{{ $products->count() }} Items</span>
                </h2>
                <p class="text-xs text-secondary mt-0.5">Jelajahi produk berkualitas tinggi langsung dari {{ $store->nama_toko }}</p>
            </div>
            <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all']) }}" class="inline-flex items-center gap-2 border-2 border-primary text-primary hover:bg-primary hover:text-white px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm transition-all shadow-xs">
                <span>Lihat Semua Produk Toko</span>
                <span class="material-symbols-outlined text-base">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3 sm:gap-4 md:gap-6">
            @forelse($products as $product)
                <div onclick="window.location.href='{{ url('/product') }}/{{ $product->id }}'" class="product-card border border-surface-container-highest rounded-sm bg-white overflow-hidden cursor-pointer flex flex-col justify-between hover:shadow-xl hover:border-primary/30 transition-all duration-300 group">
                    <div class="aspect-square bg-surface-container-low rounded-sm overflow-hidden relative">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ str_starts_with($product->galleries->first()?->foto_path ?? '', 'http') ? $product->galleries->first()?->foto_path : asset($product->galleries->first()?->foto_path ?: 'https://via.placeholder.com/300') }}" alt="{{ $product->nama_produk }}"/>
                        @if($product->badge)
                            <span class="absolute top-2 left-2 sm:top-3 sm:left-3 bg-primary text-on-primary text-[9px] sm:text-[10px] font-bold px-2 py-0.5 sm:py-1 rounded-md shadow-sm">{{ $product->badge }}</span>
                        @endif
                    </div>
                    <div class="p-2.5 sm:p-4 space-y-1.5 sm:space-y-2">
                        <h3 class="text-xs sm:text-sm font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2 min-h-[32px] sm:min-h-[40px] leading-snug">{{ $product->nama_produk }}</h3>
                        <div class="text-xs sm:text-base font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</div>
                        <div class="flex items-center justify-between text-[10px] sm:text-[11px] text-secondary pt-1.5 sm:pt-2 border-t border-surface-container-low">
                            <div class="flex items-center gap-0.5 sm:gap-1">
                                <span class="material-symbols-outlined text-primary text-[12px] sm:text-xs" style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="font-semibold">4.9</span>
                            </div>
                            <span class="text-[10px] sm:text-xs">Stok {{ $product->stok }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-16 text-center text-secondary bg-surface-container-low rounded-2xl border-2 border-dashed border-outline-variant/60">
                    <span class="material-symbols-outlined text-6xl mb-3 text-primary opacity-60">inventory_2</span>
                    <p class="font-bold text-xl text-on-surface">Toko Ini Belum Memiliki Produk</p>
                    <p class="text-sm mt-1 mb-6 text-secondary">Tambahkan produk baru melalui Dashboard Seller untuk mulai berjualan.</p>
                    @auth
                        @if(Auth::id() === $store->user_id)
                            <a href="{{ route('add_product') }}" class="px-6 py-3 bg-primary text-on-primary font-bold rounded-xl hover:brightness-110 shadow-md transition-all inline-flex items-center gap-2">
                                <span class="material-symbols-outlined text-lg">add</span>
                                <span>Tambah Produk Pertama</span>
                            </a>
                        @endif
                    @endauth
                </div>
            @endforelse
        </div>
    </section>

    <!-- Curated Collections Section -->
    <section class="w-full bg-surface-container-low py-10 border-t border-surface-container-highest">
        <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="font-headline-md text-xl sm:text-2xl text-on-surface font-bold">Pilihan Kategori Toko</h2>
                <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all']) }}" class="text-xs sm:text-sm font-bold text-primary hover:underline flex items-center gap-1">
                    <span>Lihat Semua Kategori</span>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                </a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6">
                @if(isset($categories) && count($categories) > 0)
                    @foreach($categories as $cat)
                    <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all', 'category' => $cat->slug]) }}" class="group cursor-pointer bg-white p-4 rounded-2xl border border-surface-container-highest hover:shadow-md hover:border-primary/40 transition-all flex flex-col justify-between">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center font-bold group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">category</span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-on-surface text-sm sm:text-base group-hover:text-primary transition-colors truncate">{{ $cat->nama_kategori }}</h3>
                                <p class="text-[11px] text-secondary">Filter Produk Toko</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @endif
                <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all']) }}" class="group cursor-pointer bg-primary text-on-primary p-4 rounded-2xl border border-primary hover:brightness-110 transition-all flex items-center justify-between shadow-sm">
                    <div>
                        <h3 class="font-bold text-sm sm:text-base">Semua Kategori</h3>
                        <p class="text-[11px] text-on-primary/80">Lihat Katalog Lengkap Toko</p>
                    </div>
                    <span class="material-symbols-outlined text-2xl">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- SME Impact Section -->
    <section class="w-full bg-white py-12 border-t border-surface-container-highest">
        <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-surface-container-low">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">trending_up</span>
                </div>
                <div>
                    <h3 class="font-bold text-on-surface">1,200+ Partners</h3>
                    <p class="text-[12px] text-secondary">UMKM yang bertumbuh bersama kami</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl bg-surface-container-low">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">verified</span>
                </div>
                <div>
                    <h3 class="font-bold text-on-surface">Kualitas Terjamin</h3>
                    <p class="text-[12px] text-secondary">Produk pilihan dengan QC ketat</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl bg-surface-container-low">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
                    <span class="material-symbols-outlined text-2xl">payments</span>
                </div>
                <div>
                    <h3 class="font-bold text-on-surface">Dukungan Ekonomi</h3>
                    <p class="text-[12px] text-secondary">Direct impact untuk UMKM lokal</p>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    }

    function closeSidebar() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeSidebar();
        }
    });

    console.log("Full-Screen Responsive Store Page Initialized");
</script>
</body>
</html>