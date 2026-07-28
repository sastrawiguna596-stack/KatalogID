<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luminous Commerce | Inventory Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#e4e2e2",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#6b4c00",
                        "secondary-fixed": "#e5e2e1",
                        "on-tertiary-fixed-variant": "#454746",
                        "outline": "#837560",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-secondary-container": "#656464",
                        "background": "#fbf9f8",
                        "on-tertiary-container": "#505250",
                        "tertiary": "#5d5f5d",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#1a1c1b",
                        "primary-container": "#ffb800",
                        "inverse-on-surface": "#f2f0f0",
                        "tertiary-container": "#c4c5c3",
                        "inverse-surface": "#303031",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#474646",
                        "on-error": "#ffffff",
                        "surface-bright": "#fbf9f8",
                        "tertiary-fixed-dim": "#c6c7c5",
                        "surface-container": "#efeded",
                        "surface": "#fbf9f8",
                        "surface-container-high": "#e9e8e7",
                        "on-surface-variant": "#514532",
                        "on-background": "#1b1c1c",
                        "inverse-primary": "#ffba20",
                        "primary": "#7c5800",
                        "on-surface": "#1b1c1c",
                        "on-primary-fixed": "#271900",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e4e2e2",
                        "surface-dim": "#dbdad9",
                        "secondary": "#5f5e5e",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#7c5800",
                        "secondary-container": "#e5e2e1",
                        "tertiary-fixed": "#e2e3e1",
                        "outline-variant": "#d5c4ab",
                        "primary-fixed": "#ffdea8",
                        "primary-fixed-dim": "#ffba20",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-primary-fixed-variant": "#5e4200",
                        "error": "#ba1a1a",
                        "surface-container-low": "#f5f3f3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "8px",
                        "stack-lg": "48px",
                        "gutter": "24px",
                        "stack-md": "24px",
                        "margin-desktop": "40px",
                        "container-max": "1280px",
                        "stack-sm": "12px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-lg": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"]
                    }
                }
            }
        }
    </script>
<style>
        body {
            background-color: #F9F9F7;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        .inventory-card-hover:hover {
            box-shadow: 0px 4px 20px rgba(0,0,0,0.04);
            border-color: #7c5800;
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
<body class="bg-background text-on-surface">
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
<input class="bg-transparent border-none p-0 focus:ring-0 text-body-sm w-48" placeholder="Search inventory..." type="text"/>
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
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">Acme Corp</h3>
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
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('inventories') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">inventory</span> Inventory
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('sales_analytics') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">analytics</span> Sell analytics
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('support') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">help_outline</span> Support
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md" href="{{ route('login') }}">
<span class="material-symbols-outlined">logout</span> Sign Out
    </a>
</div>
</aside>

<!-- Main Content Canvas -->
<main class="lg:pl-64 pt-20 min-h-screen px-4 md:px-margin-desktop py-6">
<div class="max-w-container-max mx-auto">
<!-- Page Header & Action -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-y-4 mb-stack-lg">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Inventory Management</h2>
<p class="font-body-md text-secondary">Manage your product catalog, track stock levels, and update pricing.</p>
</div>
<a href="{{ route('add_product') }}" class="flex items-center justify-center gap-x-2 bg-primary-container text-on-primary-container px-6 py-3 rounded-lg font-label-md font-bold hover:brightness-90 active:scale-95 transition-all shadow-sm">
<span class="material-symbols-outlined" data-icon="add">add</span>
                    Add New Product
</a>
</div>
<!-- Dashboard Stats Brief -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-stack-lg">
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Total Products</p>
<p class="font-headline-md text-on-surface">1,284</p>
</div>
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Low Stock Alerts</p>
<p class="font-headline-md text-error">12</p>
</div>
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Out of Stock</p>
<p class="font-headline-md text-on-surface-variant">3</p>
</div>
<div class="bg-surface border border-[#EDEDED] p-gutter rounded-xl">
<p class="font-label-md text-secondary mb-2">Inventory Value</p>
<p class="font-headline-md text-on-surface">$45,200.00</p>
</div>
</div>
<!-- Filters & Search Bar Section -->
<div class="bg-surface border border-[#EDEDED] p-stack-sm rounded-xl mb-gutter flex flex-wrap items-center gap-4">
<div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg">
<span class="material-symbols-outlined text-secondary" data-icon="filter_list">filter_list</span>
<select class="bg-transparent border-none focus:ring-0 font-label-md text-on-surface-variant cursor-pointer">
<option>All Categories</option>
<option>Electronics</option>
<option>Home Decor</option>
<option>Fashion</option>
<option>Wellness</option>
</select>
</div>
<div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg">
<span class="material-symbols-outlined text-secondary" data-icon="inventory">inventory</span>
<select class="bg-transparent border-none focus:ring-0 font-label-md text-on-surface-variant cursor-pointer">
<option>Stock Status</option>
<option>In Stock</option>
<option>Low Stock</option>
<option>Out of Stock</option>
</select>
</div>
<div class="flex items-center gap-x-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg">
<span class="material-symbols-outlined text-secondary" data-icon="sort">sort</span>
<select class="bg-transparent border-none focus:ring-0 font-label-md text-on-surface-variant cursor-pointer">
<option>Sort by: Newest</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
<option>Stock: Low to High</option>
</select>
</div>
<button class="ml-auto flex items-center gap-x-2 px-4 py-2 text-secondary hover:text-on-surface font-label-md transition-colors">
<span class="material-symbols-outlined" data-icon="download">download</span>
                    Export CSV
                </button>
</div>
<!-- Inventory Data Table -->
<div class="bg-white border border-[#EDEDED] rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low border-b border-surface-container">
<tr>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider w-20">Image</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">Product Details</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">SKU</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">Category</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider w-64">Stock Level</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider">Price</th>
<th class="p-4 font-label-md text-secondary uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#EDEDED]">
<!-- Item 1: Low Stock Example -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="p-4">
<div class="w-12 h-12 bg-surface-container-high rounded-lg overflow-hidden border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="A sleek, minimalist ceramic vase in a soft matte amber finish." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2n5xgeeQXtKveTBdYKg796I3IOHtPPIBAJ_ZMaCGMa2s61gGrRBAJVl-jd9GQy3RpnQEyayx7URLj_M-hZFR-k4-HMSS2iA_yu4wxpga6fTDM6X0-edBy-lX9dQFiUV_sw7LiB4FEe7Wuh0nhuQ_uQZZDizZL1kHPk1hDMXyJGd40oHS5-J7cqf3VoC8SyGI8YGHCOaUTXMGild7-upuFVGsmGTqRDBIVpDcAAWf_6j5atS9PFKkn"/>
</div>
</td>
<td class="p-4">
<a href="{{ route('inventory_detail', 1) }}" class="font-body-md font-bold text-on-surface hover:text-primary transition-colors">Minimalist Amber Vase</a>
<div class="text-[12px] text-secondary">Added Oct 12, 2023</div>
</td>
<td class="p-4 font-body-sm text-secondary">LUM-VS-001</td>
<td class="p-4">
<span class="px-2 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded text-[12px] font-bold">Home Decor</span>
</td>
<td class="p-4">
<div class="flex flex-col gap-y-1">
<div class="flex justify-between items-center text-[12px]">
<span class="text-error font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="warning">warning</span> Low Stock
                                            </span>
<span class="font-bold">8 / 50</span>
</div>
<div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-error transition-all duration-500" style="width: 16%"></div>
</div>
</div>
</td>
<td class="p-4 font-body-md font-bold">$45.00</td>
<td class="p-4 text-right">
<div class="flex justify-end gap-x-2">
<a href="{{ route('edit_product', 1) }}" class="p-2 text-secondary hover:text-primary hover:bg-primary-fixed rounded-lg transition-all active:scale-95 inline-flex items-center justify-center" title="Edit">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</a>
<button class="p-2 text-secondary hover:text-error hover:bg-error-container rounded-lg transition-all active:scale-95" title="Delete">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Item 2: Healthy Stock -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="p-4">
<div class="w-12 h-12 bg-surface-container-high rounded-lg overflow-hidden border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="A pair of high-fidelity wireless headphones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRCo1aJArT3U2USbES-RWH_Gq-78RbOC7MbtsKwAv5Ik1qzDaSi3ZuPffmoEfYd7ZesmKuURRjkLwz1ZPsSMJqSr0uV285daFAtmOcAX3QbiM75x3rbl0ss1zuUT9Rp7cyzGHP3TQt09lS-m8J7zfCAtUoSWdm8HKvSCKKfdI6Uvx_V0mdw3ZUGFKVu0UzdYTsGUhJje_ZiGPq8jQfenDLJiKR_wDcr5jBQztAVFGV5O5pmDti2jP4"/>
</div>
</td>
<td class="p-4">
<a href="{{ route('inventory_detail', 2) }}" class="font-body-md font-bold text-on-surface hover:text-primary transition-colors">Luminous Pro Audio</a>
<div class="text-[12px] text-secondary">Added Sep 24, 2023</div>
</td>
<td class="p-4 font-body-sm text-secondary">LUM-AUD-88</td>
<td class="p-4">
<span class="px-2 py-1 bg-surface-container-high text-on-secondary-container rounded text-[12px] font-bold">Electronics</span>
</td>
<td class="p-4">
<div class="flex flex-col gap-y-1">
<div class="flex justify-between items-center text-[12px]">
<span class="text-on-surface-variant font-medium">Healthy Stock</span>
<span class="font-bold">142 / 200</span>
</div>
<div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-primary-container transition-all duration-500" style="width: 71%"></div>
</div>
</div>
</td>
<td class="p-4 font-body-md font-bold">$189.99</td>
<td class="p-4 text-right">
<div class="flex justify-end gap-x-2">
<a href="{{ route('edit_product', 2) }}" class="p-2 text-secondary hover:text-primary hover:bg-primary-fixed rounded-lg transition-all active:scale-95 inline-flex items-center justify-center" title="Edit">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</a>
<button class="p-2 text-secondary hover:text-error hover:bg-error-container rounded-lg transition-all active:scale-95" title="Delete">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Item 3: Wellness Product -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="p-4">
<div class="w-12 h-12 bg-surface-container-high rounded-lg overflow-hidden border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="Luxury essential oil diffuser bottle." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0w8Cr0j8iZf0ROoJllDLo4rRsK-_RlMZVVNERCi5n3wSSY3I2Uef6ZwvGTjXfwHLvcrRQ8qbpkTLDBJ386qAEQXDG4oTXbuYqYA5H5v9VqlM7nVePA3jyzHIpwWbbllN6UdnDRB0Mxw7ZRkd8ZihKanj2EIbovM4MujsKPEU7uWmzuIT4H-4yXooZCPupexHjcW-FuQYm-21MNY85dFJ3Vq9JwhTN0lbkTU-uYUDA-2NevQh4hNAj"/>
</div>
</td>
<td class="p-4">
<a href="{{ route('inventory_detail', 3) }}" class="font-body-md font-bold text-on-surface hover:text-primary transition-colors">Zen Mist Diffuser</a>
<div class="text-[12px] text-secondary">Added Nov 02, 2023</div>
</td>
<td class="p-4 font-body-sm text-secondary">LUM-WLS-24</td>
<td class="p-4">
<span class="px-2 py-1 bg-surface-container-high text-on-secondary-container rounded text-[12px] font-bold">Wellness</span>
</td>
<td class="p-4">
<div class="flex flex-col gap-y-1">
<div class="flex justify-between items-center text-[12px]">
<span class="text-on-surface-variant font-medium">Healthy Stock</span>
<span class="font-bold">45 / 100</span>
</div>
<div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-primary-container transition-all duration-500" style="width: 45%"></div>
</div>
</div>
</td>
<td class="p-4 font-body-md font-bold">$34.50</td>
<td class="p-4 text-right">
<div class="flex justify-end gap-x-2">
<a href="{{ route('edit_product', 3) }}" class="p-2 text-secondary hover:text-primary hover:bg-primary-fixed rounded-lg transition-all active:scale-95 inline-flex items-center justify-center" title="Edit">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</a>
<button class="p-2 text-secondary hover:text-error hover:bg-error-container rounded-lg transition-all active:scale-95" title="Delete">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Item 4: Out of Stock -->
<tr class="hover:bg-surface-container-lowest transition-colors group bg-error-container/5">
<td class="p-4">
<div class="w-12 h-12 bg-surface-container-high rounded-lg overflow-hidden border border-outline-variant grayscale">
<img class="w-full h-full object-cover" data-alt="A minimalist cotton t-shirt." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBiQ1RjLwYnyQqSF3dXjWOduHWithi8f00rzP4Fftd6MOe9yulwLT2nDUlBN5EqqiU8twbKkMopkbiEKFpThpD3yzvbQeNhZ7oO_BFXxbmBE-4RfEuAiOApJrBPI2IJMafgmNo8P1Y5Rk4GIxUh3srkDP1P3HyuMMxkPm0-Y6iYd9YZp9M-MJ49mFc9XoJyG8PnBdW458Qd1sS9YwOnhtfncR_dloNkn_gyuHEPXR15Epyeff6AFe2f"/>
</div>
</td>
<td class="p-4">
<a href="{{ route('inventory_detail', 4) }}" class="font-body-md font-bold text-on-surface hover:text-primary transition-colors">Organic Cotton Tee</a>
<div class="text-[12px] text-secondary">Added Aug 15, 2023</div>
</td>
<td class="p-4 font-body-sm text-secondary">LUM-FSH-09</td>
<td class="p-4">
<span class="px-2 py-1 bg-surface-container-high text-on-secondary-container rounded text-[12px] font-bold">Fashion</span>
</td>
<td class="p-4">
<div class="flex flex-col gap-y-1">
<div class="flex justify-between items-center text-[12px]">
<span class="text-error font-bold">Out of Stock</span>
<span class="font-bold">0 / 150</span>
</div>
<div class="w-full h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-error transition-all duration-500" style="width: 0%"></div>
</div>
</div>
</td>
<td class="p-4 font-body-md font-bold">$28.00</td>
<td class="p-4 text-right">
<div class="flex justify-end gap-x-2">
<a href="{{ route('edit_product', 4) }}" class="p-2 text-secondary hover:text-primary hover:bg-primary-fixed rounded-lg transition-all active:scale-95 inline-flex items-center justify-center" title="Edit">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</a>
<button class="p-2 text-secondary hover:text-error hover:bg-error-container rounded-lg transition-all active:scale-95" title="Delete">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="px-6 py-4 border-t border-surface-container bg-surface flex items-center justify-between">
<p class="font-label-md text-secondary">Showing 1 to 4 of 1,284 results</p>
<div class="flex gap-x-2">
<button class="px-4 py-2 border border-outline-variant rounded-lg font-label-md text-on-surface hover:bg-surface-container-low transition-colors disabled:opacity-50" disabled="">
                            Previous
                        </button>
<button class="px-4 py-2 bg-on-surface text-surface rounded-lg font-label-md hover:opacity-90 active:scale-95 transition-all">
                            Next
                        </button>
</div>
</div>
</div>
<!-- Contextual Help / Tips (Asymmetric Component) -->
<div class="mt-stack-lg grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="md:col-span-2 bg-[#F2F0F0] rounded-2xl p-gutter flex items-center gap-x-6 relative overflow-hidden group">
<div class="z-10 relative">
<h4 class="font-headline-sm text-on-surface mb-2">Smart Inventory Tips</h4>
<p class="font-body-md text-on-surface-variant max-w-md">Based on your recent sales, we recommend restocking the <strong>Minimalist Amber Vase</strong> soon. Sales increased by 24% this week.</p>
<button class="mt-4 px-6 py-2 bg-primary text-on-primary rounded-lg font-label-md hover:brightness-110 transition-all">Optimize Stock</button>
</div>
<div class="absolute right-0 top-0 h-full opacity-10 pointer-events-none group-hover:scale-110 transition-transform duration-700">
<span class="material-symbols-outlined text-[120px]" data-icon="auto_awesome">auto_awesome</span>
</div>
</div>
<div class="bg-primary-container p-gutter rounded-2xl flex flex-col justify-between">
<span class="material-symbols-outlined text-on-primary-container text-4xl" data-icon="rocket_launch">rocket_launch</span>
<div>
<h4 class="font-headline-sm text-on-primary-container mb-1">New Feature</h4>
<p class="font-body-sm text-on-primary-container/80">Bulk edit inventory images with our new AI scaling tool.</p>
</div>
<a class="font-label-md text-on-primary-container underline underline-offset-4 mt-2" href="#">Learn more</a>
</div>
</div>
</div>
</main>
<!-- Floating Action for Mobile Experience (Normally hidden on desktop via structure) -->
<button class="md:hidden fixed bottom-6 right-6 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg flex items-center justify-center active:scale-90 transition-transform z-50">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>   
<script>
        // Micro-interaction for table rows
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                // Potential for adding visual flair if needed
            });
        });

        // Search bar focus effect
        const searchInput = document.querySelector('input[type="text"]');
        const searchContainer = searchInput.parentElement;
        if (searchInput) {
            searchInput.addEventListener('focus', () => searchContainer.classList.add('border-primary'));
            searchInput.addEventListener('blur', () => searchContainer.classList.remove('border-primary'));
        }

        // Sidebar toggle
        function toggleSidebar() {
            document.getElementById('main-sidebar').classList.toggle('open');
            document.getElementById('sidebar-overlay').classList.toggle('active');
        }
        function closeSidebar() {
            document.getElementById('main-sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('active');
        }
    </script>
</body></html>