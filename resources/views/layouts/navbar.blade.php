@php
    $activeTab = $active ?? '';
    $cartCount = count(session('cart', []));
@endphp

<!-- Mobile Nav Overlay -->
<div id="nav-overlay" class="fixed inset-0 bg-black/40 z-40 md:hidden" onclick="closeNavDrawer()"></div>

<!-- Mobile Nav Drawer -->
<div id="mobile-nav-drawer" class="fixed left-0 top-0 h-full w-72 z-50 bg-surface border-r border-outline-variant flex flex-col p-6 md:hidden">
    <div class="flex items-center justify-between mb-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-headline-md text-headline-md font-bold text-primary">
            <div class="w-8 h-8 rounded-lg bg-primary text-white flex items-center justify-center">
                <span class="material-symbols-outlined text-lg">storefront</span>
            </div>
            <span>Katalog IDN</span>
        </a>
        <button type="button" onclick="closeNavDrawer()" class="p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <nav class="flex flex-col gap-1.5 flex-1">
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl font-label-md text-label-md transition-all {{ $activeTab === 'home' ? 'text-on-primary-container bg-primary-container font-bold' : 'text-on-surface-variant hover:bg-surface-variant' }}" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="{{ $activeTab === 'home' ? 'font-variation-settings:\'FILL\' 1' : '' }}">home</span> Home
        </a>
        <a href="{{ route('shop') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl font-label-md text-label-md transition-all {{ $activeTab === 'shop' ? 'text-on-primary-container bg-primary-container font-bold' : 'text-on-surface-variant hover:bg-surface-variant' }}" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="{{ $activeTab === 'shop' ? 'font-variation-settings:\'FILL\' 1' : '' }}">storefront</span> Katalog Produk
        </a>
        <a href="{{ route('cart') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl font-label-md text-label-md transition-all {{ $activeTab === 'cart' ? 'text-on-primary-container bg-primary-container font-bold' : 'text-on-surface-variant hover:bg-surface-variant' }}" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="{{ $activeTab === 'cart' ? 'font-variation-settings:\'FILL\' 1' : '' }}">shopping_cart</span> Keranjang Belanja
            @if($cartCount > 0)
                <span class="ml-auto bg-primary text-white text-xs font-bold px-2 py-0.5 rounded-full">{{ $cartCount }}</span>
            @endif
        </a>
        @if(Auth::check() && Auth::user()->role === 'seller')
        <a href="{{ route('seller.store') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl font-label-md text-label-md transition-all {{ $activeTab === 'store' ? 'text-on-primary-container bg-primary-container font-bold' : 'text-on-surface-variant hover:bg-surface-variant' }}" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="{{ $activeTab === 'store' ? 'font-variation-settings:\'FILL\' 1' : '' }}">store</span> Toko Saya
        </a>
        @endif
        <a href="{{ Auth::check() && Auth::user()->role === 'seller' ? route('account') : route('cust_account') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl font-label-md text-label-md transition-all {{ $activeTab === 'profile' ? 'text-on-primary-container bg-primary-container font-bold' : 'text-on-surface-variant hover:bg-surface-variant' }}" onclick="closeNavDrawer()">
            <span class="material-symbols-outlined" style="{{ $activeTab === 'profile' ? 'font-variation-settings:\'FILL\' 1' : '' }}">person</span> Akun Saya
        </a>
    </nav>

    <div class="border-t border-outline-variant pt-4 mt-auto">
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-3.5 py-3 text-error hover:bg-error-container rounded-xl font-label-md text-label-md font-bold transition-all">
                <span class="material-symbols-outlined">logout</span> Keluar Akun
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 w-full py-3 bg-primary text-white rounded-xl font-label-md text-label-md font-bold hover:brightness-110 transition-all shadow-sm">
            <span class="material-symbols-outlined text-lg">login</span> Masuk / Daftar
        </a>
        @endauth
    </div>
</div>

<header class="sticky top-0 z-40 w-full h-16 bg-surface/90 backdrop-blur-md border-b border-outline-variant transition-all">
    <div class="w-full h-full px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4">
        
        <!-- Left: Brand Logo & Mobile Toggle -->
        <div class="flex items-center gap-3">
            <button type="button" onclick="openNavDrawer()" class="md:hidden p-1.5 rounded-lg text-on-surface hover:bg-surface-variant transition-colors" aria-label="Buka Menu Mobile">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 font-headline-md text-headline-md font-bold text-primary group">
                <div class="w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center font-bold shadow-xs group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-xl">storefront</span>
                </div>
                <span class="text-on-surface font-bold group-hover:text-primary transition-colors">Katalog IDN</span>
            </a>
        </div>

        <!-- Center: Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-6">
            <a href="{{ route('home') }}" class="font-label-md text-label-md font-bold transition-all py-1 {{ $activeTab === 'home' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }}">
                Home
            </a>
            <a href="{{ route('shop') }}" class="font-label-md text-label-md font-bold transition-all py-1 {{ $activeTab === 'shop' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }}">
                Katalog Produk
            </a>
            @if(Auth::check() && Auth::user()->role === 'seller')
            <a href="{{ route('seller.store') }}" class="font-label-md text-label-md font-bold transition-all py-1 {{ $activeTab === 'store' ? 'text-primary border-b-2 border-primary' : 'text-secondary hover:text-primary' }}">
                Toko
            </a>
            @endif
        </nav>

        <!-- Right: Search, Cart & User Action Controls -->
        <div class="flex items-center gap-2">
            
            <!-- Search Button -->
            <a href="{{ route('shop') }}" class="p-1.5 text-secondary hover:text-primary hover:bg-surface-variant rounded-full transition-all" title="Cari Produk">
                <span class="material-symbols-outlined text-[20px]">search</span>
            </a>

            <!-- Cart Icon & Badge -->
            <a href="{{ route('cart') }}" class="relative p-1.5 text-secondary hover:text-primary hover:bg-surface-variant rounded-full transition-all" title="Keranjang Belanja">
                <span class="material-symbols-outlined text-[20px]">shopping_cart</span>
                @if($cartCount > 0)
                    <span class="absolute top-0 right-0 bg-primary text-white text-[9px] font-bold w-3.5 h-3.5 flex items-center justify-center rounded-full shadow-xs">{{ $cartCount }}</span>
                @endif
            </a>

            <!-- Notification Bell Icon -->
            @include('partials.notification_bell')

            <!-- Auth Buttons -->
            @auth
            <div class="flex items-center gap-2 pl-2 ml-1 border-l border-outline-variant">
                <a href="{{ Auth::user()->role === 'seller' ? route('account') : (Auth::user()->role === 'admin' ? route('admin.dashboard') : route('cust_account')) }}" class="flex items-center gap-2 p-1 rounded-full hover:bg-surface-variant transition-colors" title="Dashboard Saya">
                    <div class="w-7 h-7 rounded-full overflow-hidden border border-outline-variant shadow-xs">
                        <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&background=7c5800&color=ffffff&size=128' }}" class="w-full h-full object-cover" alt="{{ Auth::user()->name }}">
                    </div>
                </a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="p-1.5 text-error hover:bg-error-container/40 rounded-full transition-colors" title="Keluar Akun">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                    </button>
                </form>
            </div>
            @else
            <a href="{{ route('login') }}" class="font-label-md text-[11px] font-bold text-primary border-2 border-primary px-3 py-1 rounded-full hover:bg-primary hover:text-white transition-all shadow-xs ml-1">
                Masuk
            </a>
            @endauth
        </div>

    </div>
</header>

<style>
    #nav-overlay {
        display: none;
    }
    #nav-overlay.active {
        display: block;
    }
    #mobile-nav-drawer {
        transform: translateX(-100%);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    #mobile-nav-drawer.open {
        transform: translateX(0);
    }
</style>

<script>
    if (typeof openNavDrawer !== 'function') {
        function openNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if (drawer) drawer.classList.add('open');
            if (overlay) overlay.classList.add('active');
            document.body.classList.add('overflow-hidden');
        }
        function closeNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if (drawer) drawer.classList.remove('open');
            if (overlay) overlay.classList.remove('active');
            document.body.classList.remove('overflow-hidden');
        }
    }
</script>
