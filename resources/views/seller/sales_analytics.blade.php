<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sales Analytics | Luminous Commerce</title>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary": "#5d5f5d",
                    "primary-fixed-dim": "#ffba20",
                    "surface-dim": "#dbdad9",
                    "surface-container": "#efeded",
                    "error-container": "#ffdad6",
                    "inverse-surface": "#303031",
                    "surface-container-low": "#f5f3f3",
                    "secondary-container": "#e5e2e1",
                    "primary-fixed": "#ffdea8",
                    "background": "#fbf9f8",
                    "secondary": "#5f5e5e",
                    "surface-bright": "#fbf9f8",
                    "on-tertiary-fixed-variant": "#454746",
                    "on-surface-variant": "#514532",
                    "inverse-primary": "#ffba20",
                    "on-primary-container": "#6b4c00",
                    "on-secondary-fixed-variant": "#474646",
                    "on-background": "#1b1c1c",
                    "on-error": "#ffffff",
                    "on-primary-fixed": "#271900",
                    "tertiary-fixed-dim": "#c6c7c5",
                    "surface": "#fbf9f8",
                    "surface-variant": "#e4e2e2",
                    "outline-variant": "#d5c4ab",
                    "primary": "#7c5800",
                    "tertiary-container": "#c4c5c3",
                    "on-tertiary-container": "#505250",
                    "tertiary-fixed": "#e2e3e1",
                    "on-secondary-fixed": "#1c1b1b",
                    "on-primary-fixed-variant": "#5e4200",
                    "on-primary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "on-secondary-container": "#656464",
                    "surface-container-high": "#e9e8e7",
                    "surface-container-highest": "#e4e2e2",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#1b1c1c",
                    "on-error-container": "#93000a",
                    "secondary-fixed-dim": "#c8c6c5",
                    "surface-tint": "#7c5800",
                    "on-tertiary-fixed": "#1a1c1b",
                    "primary-container": "#ffb800",
                    "surface-container-lowest": "#ffffff",
                    "outline": "#837560",
                    "error": "#ba1a1a",
                    "inverse-on-surface": "#f2f0f0",
                    "secondary-fixed": "#e5e2e1"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-lg": "48px",
                    "stack-md": "24px",
                    "stack-sm": "12px",
                    "margin-desktop": "40px",
                    "gutter": "24px",
                    "margin-mobile": "16px",
                    "container-max": "1280px",
                    "base": "8px"
            },
            "fontFamily": {
                    "body-md": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "headline-sm": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "body-sm": ["Plus Jakarta Sans"],
                    "headline-xl-mobile": ["Hanken Grotesk"]
            },
            "fontSize": {
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            background-color: #fbf9f8;
            color: #1b1c1c;
            -webkit-font-smoothing: antialiased;
        }
        .sidebar-transition {
            transition: transform 0.2s ease-in-out;
        }
        .chart-bar {
            transition: height 1s ease-out;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e4e2e2;
            border-radius: 10px;
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
<body class="font-body-md text-body-md">
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
<div class="hidden md:flex items-center bg-surface-container-low rounded-full px-4 py-2 border border-outline-variant">
<span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
<input class="bg-transparent border-none p-0 focus:ring-0 text-body-sm w-48" placeholder="Search account..." type="text"/>
</div>
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
<span class="material-symbols-outlined text-on-primary-container">store</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">{{ Auth::user()->store->nama_toko ?? Auth::user()->name . ' Store' }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Verified Seller</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">dashboard</span> Dashboard
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">receipt_long</span> Orders
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('inventories') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">inventory</span> Inventory
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md font-bold" href="{{ route('seller.store') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> My Store
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('sales_analytics') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">analytics</span> Sales Analytic
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('support') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">help_outline</span> Support
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">logout</span> Sign Out
    </a>
</div>
</aside>

<!-- Main Content Wrapper -->
<main class="lg:pl-64 pt-20 flex flex-col min-h-screen">
<!-- Canvas -->
<div class="px-4 md:px-margin-desktop py-6 max-w-container-max mx-auto w-full space-y-stack-md">
<!-- Page Header & Filters -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-gutter">
<div class="space-y-1">
<h1 class="font-headline-lg text-headline-lg text-on-background">Sales Performance</h1>
<p class="font-body-md text-secondary">A detailed breakdown of your store's commercial health.</p>
</div>
<div class="flex items-center gap-2 p-1 bg-surface-container-low rounded-lg border border-outline-variant">
<button class="px-4 py-2 font-label-md text-label-md rounded-md hover:bg-white hover:shadow-sm transition-all text-secondary">Last 7 Days</button>
<button class="px-4 py-2 font-label-md text-label-md rounded-md bg-white shadow-sm text-on-surface">Last 30 Days</button>
<button class="px-4 py-2 font-label-md text-label-md rounded-md hover:bg-white hover:shadow-sm transition-all text-secondary">Year to Date</button>
<button class="w-10 h-10 flex items-center justify-center rounded-md hover:bg-white transition-all text-secondary">
<span class="material-symbols-outlined">calendar_today</span>
</button>
</div>
</div>
<!-- KPI Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Revenue KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Total Revenue</span>
<div class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-xl">payments</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-headline-md text-on-surface">$124,592.00</h3>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-green-600 text-sm">trending_up</span>
<span class="text-sm font-semibold text-green-600">+12.5%</span>
<span class="text-sm text-tertiary ml-1">vs last mo.</span>
</div>
</div>
</div>
<!-- AOV KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Avg. Order Value</span>
<div class="w-10 h-10 bg-secondary-container rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-secondary text-xl">shopping_bag</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-headline-md text-on-surface">$84.50</h3>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-green-600 text-sm">trending_up</span>
<span class="text-sm font-semibold text-green-600">+2.1%</span>
<span class="text-sm text-tertiary ml-1">vs last mo.</span>
</div>
</div>
</div>
<!-- Conv Rate KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Conversion Rate</span>
<div class="w-10 h-10 bg-tertiary-container/30 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-tertiary text-xl">ads_click</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-headline-md text-on-surface">3.8%</h3>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-red-500 text-sm rotate-180">trending_up</span>
<span class="text-sm font-semibold text-red-500">-0.4%</span>
<span class="text-sm text-tertiary ml-1">vs last mo.</span>
</div>
</div>
</div>
<!-- Growth KPI -->
<div class="bg-white p-6 rounded-xl border border-[#EDEDED] flex flex-col justify-between group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start">
<span class="font-label-md text-label-md text-secondary">Customer Growth</span>
<div class="w-10 h-10 bg-primary-container/20 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-xl">group_add</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-headline-md text-headline-md text-on-surface">1,204</h3>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-green-600 text-sm">trending_up</span>
<span class="text-sm font-semibold text-green-600">+8.7%</span>
<span class="text-sm text-tertiary ml-1">vs last mo.</span>
</div>
</div>
</div>
</div>
<!-- Main Analytics Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Revenue Overview Chart -->
<div class="lg:col-span-2 bg-white p-8 rounded-xl border border-[#EDEDED] space-y-6">
<div class="flex items-center justify-between">
<h2 class="font-headline-sm text-headline-sm text-on-surface">Revenue Overview</h2>
<div class="flex gap-4">
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-primary"></div>
<span class="text-xs font-label-md text-secondary uppercase">2024</span>
</div>
<div class="flex items-center gap-2">
<div class="w-3 h-3 rounded-full bg-surface-variant"></div>
<span class="text-xs font-label-md text-secondary uppercase">2023</span>
</div>
</div>
</div>
<div class="h-64 flex items-end justify-between gap-2 pt-4 relative">
<!-- Y-Axis Labels -->
<div class="absolute -left-2 top-0 bottom-0 flex flex-col justify-between text-[10px] text-secondary/50 font-label-md uppercase">
<span>100k</span>
<span>75k</span>
<span>50k</span>
<span>25k</span>
<span>0</span>
</div>
<!-- Chart Bars -->
<div class="flex-grow flex items-end justify-around gap-1 ml-8">
<!-- Jan -->
<div class="flex flex-col items-center gap-1 w-full group">
<div class="w-full flex items-end gap-1 justify-center h-full">
<div class="bg-surface-variant w-3 rounded-t-sm chart-bar" style="height: 30%"></div>
<div class="bg-primary w-3 rounded-t-sm chart-bar group-hover:bg-primary-fixed-dim" style="height: 45%"></div>
</div>
<span class="text-[10px] font-label-md text-tertiary">JAN</span>
</div>
<!-- Feb -->
<div class="flex flex-col items-center gap-1 w-full group">
<div class="w-full flex items-end gap-1 justify-center h-full">
<div class="bg-surface-variant w-3 rounded-t-sm chart-bar" style="height: 35%"></div>
<div class="bg-primary w-3 rounded-t-sm chart-bar group-hover:bg-primary-fixed-dim" style="height: 40%"></div>
</div>
<span class="text-[10px] font-label-md text-tertiary">FEB</span>
</div>
<!-- Mar -->
<div class="flex flex-col items-center gap-1 w-full group">
<div class="w-full flex items-end gap-1 justify-center h-full">
<div class="bg-surface-variant w-3 rounded-t-sm chart-bar" style="height: 40%"></div>
<div class="bg-primary w-3 rounded-t-sm chart-bar group-hover:bg-primary-fixed-dim" style="height: 60%"></div>
</div>
<span class="text-[10px] font-label-md text-tertiary">MAR</span>
</div>
<!-- Apr -->
<div class="flex flex-col items-center gap-1 w-full group">
<div class="w-full flex items-end gap-1 justify-center h-full">
<div class="bg-surface-variant w-3 rounded-t-sm chart-bar" style="height: 45%"></div>
<div class="bg-primary w-3 rounded-t-sm chart-bar group-hover:bg-primary-fixed-dim" style="height: 75%"></div>
</div>
<span class="text-[10px] font-label-md text-tertiary">APR</span>
</div>
<!-- May -->
<div class="flex flex-col items-center gap-1 w-full group">
<div class="w-full flex items-end gap-1 justify-center h-full">
<div class="bg-surface-variant w-3 rounded-t-sm chart-bar" style="height: 50%"></div>
<div class="bg-primary w-3 rounded-t-sm chart-bar group-hover:bg-primary-fixed-dim" style="height: 85%"></div>
</div>
<span class="text-[10px] font-label-md text-tertiary">MAY</span>
</div>
<!-- Jun -->
<div class="flex flex-col items-center gap-1 w-full group">
<div class="w-full flex items-end gap-1 justify-center h-full">
<div class="bg-surface-variant w-3 rounded-t-sm chart-bar" style="height: 55%"></div>
<div class="bg-primary w-3 rounded-t-sm chart-bar group-hover:bg-primary-fixed-dim" style="height: 95%"></div>
</div>
<span class="text-[10px] font-label-md text-tertiary">JUN</span>
</div>
</div>
</div>
</div>
<!-- Category Breakdown (Donut) -->
<div class="bg-white p-8 rounded-xl border border-[#EDEDED] flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-6">Sales by Category</h2>
<div class="relative flex-grow flex items-center justify-center">
<!-- SVG Donut Chart Mockup -->
<svg class="w-48 h-48 -rotate-90">
<circle cx="96" cy="96" fill="transparent" r="80" stroke="#f5f3f3" stroke-width="12"></circle>
<!-- Segment 1: Electronics (45%) -->
<circle cx="96" cy="96" fill="transparent" r="80" stroke="#7c5800" stroke-dasharray="226.19 276.46" stroke-width="16"></circle>
<!-- Segment 2: Home (30%) -->
<circle cx="96" cy="96" fill="transparent" r="80" stroke="#ffba20" stroke-dasharray="150.8 351.85" stroke-dashoffset="-226.19" stroke-width="16"></circle>
<!-- Segment 3: Apparel (25%) -->
<circle cx="96" cy="96" fill="transparent" r="80" stroke="#5d5f5d" stroke-dasharray="125.66 377.14" stroke-dashoffset="-376.99" stroke-width="16"></circle>
</svg>
<div class="absolute flex flex-col items-center">
<span class="font-label-md text-label-md text-secondary">Total</span>
<span class="font-headline-md text-headline-md font-bold text-on-surface">1,482</span>
</div>
</div>
<div class="mt-8 grid grid-cols-2 gap-4">
<div class="flex items-center gap-2">
<div class="w-2.5 h-2.5 rounded-full bg-primary"></div>
<span class="font-label-md text-label-md text-secondary">Electronics</span>
</div>
<div class="flex items-center gap-2">
<div class="w-2.5 h-2.5 rounded-full bg-primary-fixed-dim"></div>
<span class="font-label-md text-label-md text-secondary">Home &amp; Office</span>
</div>
<div class="flex items-center gap-2">
<div class="w-2.5 h-2.5 rounded-full bg-tertiary"></div>
<span class="font-label-md text-label-md text-secondary">Apparel</span>
</div>
<div class="flex items-center gap-2">
<div class="w-2.5 h-2.5 rounded-full bg-surface-variant"></div>
<span class="font-label-md text-label-md text-secondary">Others</span>
</div>
</div>
</div>
</div>
<!-- Bottom Sections -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-gutter pb-10">
<!-- Top Selling Products -->
<div class="bg-white rounded-xl border border-[#EDEDED] overflow-hidden">
<div class="p-6 border-b border-[#EDEDED] flex justify-between items-center">
<h2 class="font-headline-sm text-headline-sm text-on-surface">Top Selling Products</h2>
<button class="text-primary font-label-md text-label-md hover:underline transition-all">View All</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-low">
<tr>
<th class="px-6 py-4 font-label-md text-label-md text-secondary uppercase tracking-wider">Product</th>
<th class="px-6 py-4 font-label-md text-label-md text-secondary uppercase tracking-wider text-center">Units</th>
<th class="px-6 py-4 font-label-md text-label-md text-secondary uppercase tracking-wider text-right">Revenue</th>
<th class="px-6 py-4 font-label-md text-label-md text-secondary uppercase tracking-wider text-right">Trend</th>
</tr>
</thead>
<tbody class="divide-y divide-[#EDEDED]">
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-4 flex items-center gap-3">
<div class="w-12 h-12 rounded bg-surface-variant shrink-0" data-alt="A clean, minimalist product photography shot of a high-end ergonomic keyboard on a neutral desk setup with soft morning lighting. The aesthetic is modern and professional, reflecting the Luminous Commerce brand's trustworthy and accessible feel." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAJMkXy3nivUdk2AGQrrfBgOe1fI2Y3HBlf46o5HcRz84MX-Dc16Cia_ViBcNprOl2pg2y7Qve5afKmyEe9bIaZ9Y6UYU5xpM5JWxA2t0Dx_Jl9MLVnZOXoj5mfN-KUAPPoXPeHB1Pz2KRDqQUG-ENe5Lo08PAbdmnFoT_CqyQp6jkDSz86ND1eNHDtL6Rpj0YCphG3DIrgo89OIaCzj-FsO0UABn6oM9GJ_R7hQl2iyzo5HXo8ZjPK')"></div>
<div class="font-body-md font-semibold text-on-surface">Pro Mechanical Keyboard</div>
</td>
<td class="px-6 py-4 font-body-md text-secondary text-center">452</td>
<td class="px-6 py-4 font-body-md font-bold text-on-surface text-right">$36,160</td>
<td class="px-6 py-4 text-right">
<span class="material-symbols-outlined text-green-600">trending_up</span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-4 flex items-center gap-3">
<div class="w-12 h-12 rounded bg-surface-variant shrink-0" data-alt="Studio product shot of a sleek, matte black wireless headphone set floating in a neutral, brightly lit space. The lighting is soft and high-key, emphasizing the premium textures of the material. The style is minimalist and clean." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCpXPFU4yVGb-_g1XPKzQdYXjkWa6NEB8enazP-g46zRQzhi36kBsB9fTCVHyd4M6LbcDkwvfvvXd_9SvCrPO_61OFsDv05JagukYKhwLEbNGG6sBfSGJI6gE5TahBXsdNY4JIydR8zuIgtTw51pHTfW0h0Zsld1MoOuEJicrs-G__zR8cyTuhL-PMTfoSIVUpUWy12ink4CHzXGMfogAkctL1hq8txCXyA8NTPsBZrWjgeM1CwRGrQ')"></div>
<div class="font-body-md font-semibold text-on-surface">Acoustic Aura Headphones</div>
</td>
<td class="px-6 py-4 font-body-md text-secondary text-center">318</td>
<td class="px-6 py-4 font-body-md font-bold text-on-surface text-right">$25,440</td>
<td class="px-6 py-4 text-right">
<span class="material-symbols-outlined text-green-600">trending_up</span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="px-6 py-4 flex items-center gap-3">
<div class="w-12 h-12 rounded bg-surface-variant shrink-0" data-alt="A minimalist overhead view of a handcrafted ceramic desk organizer set in earthy tones. The setting is a clean, bright wooden desk with soft natural window light. The mood is calm, organized, and high-quality." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAUI9-pzoZgfljn44zbbkQMkmA7qJum240MLIQ9d63fHn4oQOPMgcC5XeQ848ClWvtiNt747yvwj5rSXjrdsyeMgM4GCTh-ZfjaRsLZhSiYQsdFrmBLnm_4hZMZCQFqLXb8sdyR9aJuJyYCaONm6-BBU_BR28gNKB4dZaQaWuwKpj9Tykqf4JXQW7V8GUJvbWHJpepTzegOoOFaVDEnSS05Y9ruzLRPY0UCw0FkSeS1GPp10cqeQfSb')"></div>
<div class="font-body-md font-semibold text-on-surface">Zen Desk Organizer</div>
</td>
<td class="px-6 py-4 font-body-md text-secondary text-center">290</td>
<td class="px-6 py-4 font-body-md font-bold text-on-surface text-right">$14,500</td>
<td class="px-6 py-4 text-right">
<span class="material-symbols-outlined text-red-500 rotate-180">trending_up</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Recent Sales Activity -->
<div class="bg-white rounded-xl border border-[#EDEDED] flex flex-col">
<div class="p-6 border-b border-[#EDEDED] flex justify-between items-center">
<h2 class="font-headline-sm text-headline-sm text-on-surface">Recent Activity</h2>
<span class="material-symbols-outlined text-secondary cursor-pointer hover:text-on-surface transition-colors">refresh</span>
</div>
<div class="flex-grow overflow-y-auto max-h-[360px] custom-scrollbar p-6">
<div class="space-y-6">
<!-- Activity Item -->
<div class="flex gap-4 group">
<div class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-green-600 text-[20px]">shopping_cart_checkout</span>
</div>
<div class="space-y-1">
<p class="font-body-md text-on-surface leading-tight">New Order <span class="font-bold">#ORD-9023</span> by <span class="text-primary font-semibold">Sarah Jenkins</span></p>
<div class="flex items-center gap-3">
<span class="font-label-md text-[12px] text-tertiary">Just now</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span class="font-label-md text-[12px] text-on-surface-variant font-bold">+$124.99</span>
</div>
</div>
</div>
<div class="flex gap-4 group">
<div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-[20px]">package_2</span>
</div>
<div class="space-y-1">
<p class="font-body-md text-on-surface leading-tight">Product <span class="font-bold">Lumina Lamp</span> restocked (50 units)</p>
<div class="flex items-center gap-3">
<span class="font-label-md text-[12px] text-tertiary">2 hours ago</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span class="font-label-md text-[12px] text-secondary">Inventory Update</span>
</div>
</div>
</div>
<div class="flex gap-4 group">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-secondary text-[20px]">reviews</span>
</div>
<div class="space-y-1">
<p class="font-body-md text-on-surface leading-tight">New 5-star review from <span class="font-bold">Michael R.</span></p>
<p class="text-xs text-secondary italic">"Exceeded my expectations! Fast shipping."</p>
<div class="flex items-center gap-3">
<span class="font-label-md text-[12px] text-tertiary">4 hours ago</span>
</div>
</div>
</div>
<div class="flex gap-4 group">
<div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-red-500 text-[20px]">assignment_return</span>
</div>
<div class="space-y-1">
<p class="font-body-md text-on-surface leading-tight">Refund requested for <span class="font-bold">#ORD-8941</span></p>
<div class="flex items-center gap-3">
<span class="font-label-md text-[12px] text-tertiary">6 hours ago</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span class="font-label-md text-[12px] text-red-500 font-bold">-$45.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- FAB (Only on Dashboard/Home relevant screens) -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg hover:shadow-xl hover:scale-105 active:scale-95 transition-all flex items-center justify-center z-50 md:hidden">
<span class="material-symbols-outlined text-[28px]">add</span>
</button>
<script>
        // Simple Interaction: Scale effect on navigation
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                link.classList.add('scale-[0.98]');
                setTimeout(() => link.classList.remove('scale-[0.98]'), 150);
            });
        });

        // Sidebar toggle
        function toggleSidebar() {
            document.getElementById('main-sidebar').classList.toggle('open');
            document.getElementById('sidebar-overlay').classList.toggle('active');
        }
        function closeSidebar() {
            document.getElementById('main-sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('active');
        }

        // Simulating some dynamic chart animation on load
        window.onload = () => {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 200);
            });
        };
    </script>
</body></html>