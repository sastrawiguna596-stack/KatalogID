<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Semua Produk - {{ $store->nama_toko ?? 'Toko' }} | Katalog IDN</title>
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
                        "on-primary-container": "#6b4c00",
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
                        "surface-container": "#efeded"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .product-card {
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0,0,0,0.06);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col justify-between">

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
            <button type="button" onclick="closeSidebar()" class="p-2 rounded-lg text-secondary hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <!-- Store Info Card -->
        @if(isset($store))
            <div class="p-4 rounded-xl bg-primary-fixed/20 border border-primary/20 space-y-2">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold flex-shrink-0">
                        <span class="material-symbols-outlined">store</span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h4 class="font-bold text-on-surface text-sm truncate">{{ $store->nama_toko }}</h4>
                        <span class="text-xs text-primary font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">verified</span> Official Seller
                        </span>
                    </div>
                </div>
            </div>
        @endif

        <!-- Navigation Links -->
        <nav class="space-y-1">
            @if(isset($store))
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('store_product', $store->id) }}" onclick="closeSidebar()">
                    <span class="material-symbols-outlined text-primary">arrow_back</span> Beranda Toko
                </a>
            @endif
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface bg-primary/10 text-primary font-bold transition-all" href="#" onclick="closeSidebar()">
                <span class="material-symbols-outlined text-primary">grid_view</span> Semua Produk Toko
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('cart') }}" onclick="closeSidebar()">
                <span class="material-symbols-outlined text-primary">shopping_cart</span> Keranjang Belanja
            </a>
            @auth
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('cust_account') }}" onclick="closeSidebar()">
                    <span class="material-symbols-outlined text-primary">person</span> Akun Saya
                </a>
            @else
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface hover:bg-surface-container-low font-semibold transition-all" href="{{ route('login') }}" onclick="closeSidebar()">
                    <span class="material-symbols-outlined text-primary">login</span> Masuk / Daftar
                </a>
            @endauth
        </nav>

        <!-- Categories List in Mobile Sidebar -->
        <div class="space-y-2 border-t border-surface-container-highest pt-4">
            <h4 class="font-bold text-xs uppercase tracking-wider text-secondary px-2">Kategori Produk Toko</h4>
            <div class="space-y-1">
                <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all']) }}" class="block px-3 py-2 rounded-lg text-sm {{ !request('category') ? 'font-bold text-primary bg-primary/10' : 'text-secondary hover:bg-surface-container-low' }}">
                    Semua Kategori
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all', 'category' => $cat->slug]) }}" class="block px-3 py-2 rounded-lg text-sm {{ request('category') == $cat->slug ? 'font-bold text-primary bg-primary/10' : 'text-secondary hover:bg-surface-container-low' }}">
                        {{ $cat->nama_kategori }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="border-t border-surface-container-highest pt-4">
        <p class="text-xs text-center text-secondary">© 2026 Katalog IDN. All rights reserved.</p>
    </div>
</aside>

<!-- Top Navigation Bar -->
<header class="w-full top-0 sticky bg-white/95 backdrop-blur-md border-b border-surface-container-highest z-40 transition-all">
    <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 py-3.5 flex items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <button type="button" onclick="toggleSidebar()" class="lg:hidden p-2 rounded-lg text-on-surface hover:bg-surface-container-low transition-colors" aria-label="Open Menu">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
            <a class="font-headline-sm text-headline-sm font-bold text-primary flex items-center gap-2" href="{{ route('home') }}">
                <span class="material-symbols-outlined text-primary text-2xl">storefront</span>
                <span>Katalog IDN</span>
            </a>
            <nav class="hidden lg:flex gap-6 items-center ml-4">
                <a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1" href="#">Semua Produk Toko</a>
                @if(isset($store))
                    <a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors font-semibold" href="{{ route('store_product', $store->id) }}">Beranda Toko</a>
                @endif
            </nav>
        </div>
        <div class="flex items-center gap-3">
            @if(isset($store))
                <a href="{{ route('store_product', $store->id) }}" class="hidden sm:inline-flex items-center gap-1.5 border border-primary text-primary px-4 py-2 rounded-lg font-label-md font-bold hover:bg-primary/5 transition-all">
                    <span class="material-symbols-outlined text-lg">arrow_back</span>
                    <span>Kembali ke Beranda Toko</span>
                </a>
            @endif
            <a href="{{ route('cart') }}" class="p-2 text-secondary hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-2xl">shopping_cart</span>
            </a>
        </div>
    </div>
</header>

<main class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 py-8 flex-grow">
    
    <!-- Header Title Banner with Option to Return to Store Frontpage -->
    <div class="mb-8 p-6 sm:p-8 rounded-2xl bg-gradient-to-r from-amber-500/10 via-amber-50/40 to-white border border-outline-variant/40 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div>
            <div class="flex items-center gap-2 mb-2 flex-wrap">
                <span class="bg-primary text-on-primary text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Store Product View</span>
                <span class="text-xs text-secondary font-bold">| {{ $store->nama_toko ?? 'Toko Resmi' }}</span>
            </div>
            <h1 class="font-headline-md text-2xl sm:text-3xl font-bold text-on-surface">Daftar Semua Produk: {{ $store->nama_toko ?? 'Toko' }}</h1>
            <p class="text-body-sm text-secondary mt-1">Menampilkan seluruh katalog produk aktif dari {{ $store->nama_toko ?? 'Toko' }}</p>
        </div>
        @if(isset($store))
            <a href="{{ route('store_product', $store->id) }}" class="inline-flex items-center gap-2 bg-primary text-white px-5 py-3 rounded-xl text-xs sm:text-sm font-bold shadow-md hover:brightness-110 transition-all flex-shrink-0">
                <span class="material-symbols-outlined text-base">storefront</span>
                <span>Tampilan Awal Toko</span>
            </a>
        @endif
    </div>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar Filters (Desktop) -->
        <aside class="w-full lg:w-64 flex-shrink-0 space-y-6">
            <div class="bg-white p-5 rounded-2xl border border-surface-container-highest shadow-xs">
                <h3 class="font-headline-sm text-lg font-bold mb-4 text-on-surface border-b border-surface-container-low pb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">category</span> Kategori Produk
                </h3>
                <ul class="space-y-1.5">
                    <li>
                        <a href="{{ route('store_product', array_merge(['id' => $store->id, 'view' => 'all'], request()->except('category', 'page'))) }}" class="flex items-center justify-between w-full px-3 py-2 rounded-xl {{ !request('category') ? 'bg-primary text-white font-bold' : 'hover:bg-surface-container-low text-secondary font-medium' }} transition-colors text-sm">
                            <span>Semua Kategori</span>
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </a>
                    </li>
                    @foreach($categories as $cat)
                        <li>
                            <a href="{{ route('store_product', array_merge(['id' => $store->id, 'view' => 'all'], request()->except('category', 'page'), ['category' => $cat->slug])) }}" class="flex items-center justify-between w-full px-3 py-2 rounded-xl {{ request('category') == $cat->slug ? 'bg-primary text-white font-bold' : 'hover:bg-surface-container-low text-secondary font-medium' }} transition-colors text-sm">
                                <span>{{ $cat->nama_kategori }}</span>
                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>

        <!-- Main Content Area -->
        <section class="flex-1 space-y-6">
            <!-- Search & Controls -->
            <form action="{{ route('store_product', $store->id) }}" method="GET" class="bg-white p-4 rounded-2xl border border-surface-container-highest shadow-xs flex flex-col sm:flex-row gap-4 items-center justify-between">
                <input type="hidden" name="view" value="all"/>
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}"/>
                @endif

                <div class="relative w-full sm:max-w-md">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-xl">search</span>
                    <input name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low border border-outline-variant rounded-xl text-body-sm focus:outline-none focus:border-primary transition-all" placeholder="Cari produk di {{ $store->nama_toko }}..." type="text"/>
                </div>

                <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                    <span class="text-xs font-bold text-secondary uppercase tracking-wider whitespace-nowrap">Urutkan:</span>
                    <select name="sort" onchange="this.form.submit()" class="bg-surface-container-low border border-outline-variant rounded-xl px-4 py-2 text-xs font-bold text-on-surface focus:ring-primary focus:border-primary">
                        <option value="" {{ !request('sort') ? 'selected' : '' }}>Terbaru</option>
                        <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Harga: Terendah</option>
                        <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Harga: Tertinggi</option>
                    </select>
                </div>
            </form>

            <!-- Product Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
                @forelse($products as $product)
                    <div onclick="window.location.href='{{ url('/product') }}/{{ $product->id }}'" class="group product-card bg-white border border-surface-container-highest rounded-2xl overflow-hidden cursor-pointer flex flex-col justify-between transition-all duration-300">
                        <div class="relative aspect-square overflow-hidden bg-surface-container-low">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" src="{{ str_starts_with($product->galleries->first()?->foto_path ?? '', 'http') ? $product->galleries->first()?->foto_path : asset($product->galleries->first()?->foto_path ?: 'https://via.placeholder.com/300') }}" alt="{{ $product->nama_produk }}"/>
                            @if($product->badge)
                                <div class="absolute top-3 left-3 bg-primary text-on-primary font-bold text-[10px] px-2.5 py-1 rounded-md shadow-sm">{{ $product->badge }}</div>
                            @endif
                        </div>
                        <div class="p-4 space-y-2">
                            <h4 class="font-bold text-body-sm text-on-surface group-hover:text-primary transition-colors line-clamp-2 min-h-[38px] leading-snug">{{ $product->nama_produk }}</h4>
                            <div class="text-base font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</div>
                            <div class="flex items-center justify-between text-[11px] text-secondary pt-2 border-t border-surface-container-low">
                                <span class="font-semibold text-on-surface truncate max-w-[120px]">{{ $store->nama_toko }}</span>
                                <div class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-primary text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="font-bold text-on-surface">4.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-16 text-center text-secondary bg-white rounded-2xl border-2 border-dashed border-outline-variant/60">
                        <span class="material-symbols-outlined text-6xl mb-3 text-primary opacity-50">search_off</span>
                        <p class="font-bold text-xl text-on-surface">Produk Toko Tidak Ditemukan</p>
                        <p class="text-sm mt-1 text-secondary">Toko ini belum memiliki produk yang sesuai dengan filter.</p>
                        <a href="{{ route('store_product', ['id' => $store->id, 'view' => 'all']) }}" class="mt-4 px-6 py-2.5 bg-primary text-white font-bold rounded-xl text-xs inline-block hover:brightness-110">Reset Filter</a>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="pt-6">
                {{ $products->links() }}
            </div>
        </section>
    </div>
</main>

<!-- Footer -->
<footer class="w-full bg-white border-t border-surface-container-highest py-10 mt-12">
    <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="space-y-1 text-center md:text-left">
            <a class="font-headline-sm font-bold text-primary flex items-center justify-center md:justify-start gap-1.5" href="{{ route('home') }}">
                <span class="material-symbols-outlined text-xl">storefront</span>
                <span>Katalog IDN</span>
            </a>
            <p class="text-body-sm text-secondary">© 2026 Katalog IDN. Platform E-Commerce UMKM Indonesia.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6 text-label-md text-secondary font-semibold">
            @if(isset($store))
                <a class="hover:text-primary transition-colors" href="{{ route('store_product', $store->id) }}">Beranda Toko</a>
            @endif
            <a class="hover:text-primary transition-colors" href="{{ route('home') }}">Beranda Utama</a>
            <a class="hover:text-primary transition-colors" href="{{ route('cart') }}">Keranjang</a>
        </div>
    </div>
</footer>

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
        if (e.key === 'Escape') closeSidebar();
    });
</script>
</body>
</html>