<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.filled {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: theme('colors.surface-variant');
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background-color: theme('colors.outline-variant');
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased min-h-screen flex flex-col md:flex-row" x-data="{ sidebarOpen: false }">

<!-- Mobile Sidebar Overlay -->
<div x-cloak x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-black/50 z-40 md:hidden transition-opacity"></div>

<!-- SideNavBar -->
<nav :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed md:translate-x-0 inset-y-0 left-0 w-64 border-r border-surface-container flex flex-col h-screen p-4 space-y-base bg-surface z-50 transition-transform duration-300 ease-in-out shadow-2xl md:shadow-none">
<!-- Brand/Profile Area -->
<div class="flex items-center gap-4 mb-stack-md px-2">
<div class="w-12 h-12 rounded-full bg-surface-container-high overflow-hidden flex-shrink-0">
<img alt="Luminous Admin Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a corporate system administrator, warmly lit, wearing modern business casual attire against a clean, neutral grey background in a light-mode SME e-commerce context. The image uses a minimalist style with subtle amber highlights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2C4x3_VfHNNL_TQpeUrIMpQQpYKTLCvN2PGgGpW_jZsTyabsnIiK5UB9K5IV_xol6NpQo_0BDEqKiUnAh4NdKOoR-WlQbRCwo-iZYTYrQwxzNpFTJ39SXX5Wr6iZmxttnC_iAEaCOhtEPIM4quvTNUrq4AdVqshp4zJAViQ49ON2GEGVYYrOC2eoGTKv8hdD0gqgyIwUJtm5WFWeXAIx9apRhPHyIE9RjtDujfWlLUJu6kF8FwTk3"/>
</div>
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold truncate">Master Admin</h2>
<p class="font-label-md text-label-md text-on-surface-variant truncate">System Administrator</p>
</div>
</div>
<!-- Navigation Links -->
<div class="flex-1 overflow-y-auto py-2 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="{{ route('admin.dashboard') }}">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="{{ route('admin.stores') }}">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">store</span>
<span class="font-label-md text-label-md">Manajemen Toko</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="{{ route('admin.inventory') }}">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">inventory_2</span>
<span class="font-label-md text-label-md">Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="{{ route('admin.orders') }}">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">shopping_cart</span>
<span class="font-label-md text-label-md">Orders</span>
</a>
<!-- Content Management Section -->
<div class="px-4 py-2 mt-4 mb-2 border-t border-surface-container pt-4">
<h3 class="font-label-md text-label-md text-on-surface-variant tracking-wider uppercase text-xs">Manajemen Konten</h3>
</div>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="{{ route('admin.welcome_settings') }}">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">web</span>
<span class="font-label-md text-label-md">Home Page</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="{{ route('admin.categories') }}">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">category</span>
<span class="font-label-md text-label-md">Kategori</span>
</a>
</div>
<!-- Footer / CTA -->
<div class="mt-auto pt-4 border-t border-surface-container space-y-2">
<button class="w-full py-2 px-4 bg-primary text-on-primary rounded-lg font-label-md text-label-md hover:bg-primary-fixed-dim hover:text-on-primary-fixed transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[18px]">support_agent</span> Support Ticket
            </button>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high transition-colors duration-200 rounded-lg group" href="#">
<span class="material-symbols-outlined text-outline group-hover:text-error transition-colors">logout</span>
<span class="font-label-md text-label-md group-hover:text-error transition-colors">Log Out</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<div class="flex-1 md:ml-64 flex flex-col min-h-screen relative w-full overflow-x-hidden">
<!-- TopAppBar -->
<header class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-4 bg-surface border-b border-surface-container top-0 sticky z-30">
<div class="flex items-center gap-stack-md flex-1">
<button @click="sidebarOpen = true" class="md:hidden text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center">
    <span class="material-symbols-outlined text-[28px]">menu</span>
</button>
<h1 class="font-headline-lg text-headline-sm md:text-headline-lg font-bold text-primary whitespace-nowrap">Katalog IDN</h1>
</div>
<div class="flex items-center gap-stack-md">
<nav class="hidden lg:flex items-center gap-stack-sm">
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors font-label-md text-label-md px-2 py-1" href="{{ route('home') }}">Halaman Depan</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors font-label-md text-label-md px-2 py-1" href="{{ route('shop') }}">Katalog Produk</a>
</nav>
<div class="flex items-center gap-3 md:ml-4 md:border-l border-surface-container md:pl-4">
<a href="{{ route('admin.dashboard') }}" class="text-on-surface-variant hover:text-primary transition-colors w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low" title="Profil Admin">
<span class="material-symbols-outlined">account_circle</span>
</a>
</div>
</div>
</header>
<!-- Page Canvas -->
<main class="flex-1 p-margin-mobile md:p-margin-desktop bg-background max-w-container-max mx-auto w-full pb-12">
    @yield('content')
</main>
<footer class="w-full py-4 px-margin-mobile md:px-margin-desktop bg-surface border-t border-surface-container flex flex-col sm:flex-row justify-between items-center gap-2 text-xs text-secondary">
    <div class="flex items-center gap-2">
        <span class="material-symbols-outlined text-primary text-base">storefront</span>
        <span class="font-bold text-on-surface">Katalog IDN</span>
        <span>© 2026 Master Admin Control Center. All rights reserved.</span>
    </div>
    <div class="flex items-center gap-4">
        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Lihat Halaman Utama</a>
        <a href="{{ route('shop') }}" class="hover:text-primary transition-colors">Lihat Katalog Produk</a>
    </div>
</footer>
</div>
</body>
</html>