<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Recent Orders | Katalog IDN</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            vertical-align: middle;
        }
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fbf9f8;
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .order-card-hover {
            transition: all 0.2s ease-in-out;
        }
        .order-card-hover:hover {
            border-color: #1b1c1c;
            transform: translateY(-2px);
            box-shadow: 0px 4px 20px rgba(0,0,0,0.04);
        }
        /* Sidebar */
        #sidebar-overlay {
            display: none;
        }
        #sidebar-overlay.active {
            display: block;
        }
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
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface": "#fbf9f8",
                    "on-surface-variant": "#514532",
                    "surface-tint": "#7c5800",
                    "primary-fixed": "#ffdea8",
                    "secondary-fixed": "#e5e2e1",
                    "on-tertiary-container": "#505250",
                    "on-surface": "#1b1c1c",
                    "on-tertiary-fixed-variant": "#454746",
                    "tertiary-fixed-dim": "#c6c7c5",
                    "inverse-primary": "#ffba20",
                    "on-primary": "#ffffff",
                    "inverse-surface": "#303031",
                    "outline-variant": "#d5c4ab",
                    "on-background": "#1b1c1c",
                    "primary-container": "#ffb800",
                    "on-tertiary-fixed": "#1a1c1b",
                    "tertiary-fixed": "#e2e3e1",
                    "on-secondary-container": "#656464",
                    "on-primary-container": "#6b4c00",
                    "background": "#fbf9f8",
                    "surface-container": "#efeded",
                    "on-error": "#ffffff",
                    "outline": "#837560",
                    "on-secondary-fixed": "#1c1b1b",
                    "surface-container-low": "#f5f3f3",
                    "primary": "#7c5800",
                    "tertiary-container": "#c4c5c3",
                    "primary-fixed-dim": "#ffba20",
                    "surface-dim": "#dbdad9",
                    "tertiary": "#5d5f5d",
                    "on-primary-fixed-variant": "#5e4200",
                    "secondary": "#5f5e5e",
                    "error": "#ba1a1a",
                    "surface-variant": "#e4e2e2",
                    "secondary-fixed-dim": "#c8c6c5",
                    "error-container": "#ffdad6",
                    "inverse-on-surface": "#f2f0f0",
                    "on-primary-fixed": "#271900",
                    "surface-bright": "#fbf9f8",
                    "surface-container-high": "#e9e8e7",
                    "secondary-container": "#e5e2e1",
                    "on-secondary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e4e2e2",
                    "on-secondary-fixed-variant": "#474646",
                    "on-tertiary": "#ffffff",
                    "surface-container-lowest": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "stack-md": "24px",
                    "gutter": "24px",
                    "stack-lg": "48px",
                    "container-max": "1280px",
                    "margin-desktop": "40px",
                    "stack-sm": "12px",
                    "base": "8px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "body-sm": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-xl-mobile": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "headline-sm": ["Hanken Grotesk"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "body-md": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
</head>
<body class="bg-surface text-on-surface">

<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- TopNavBar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-3">
    <button class="lg:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="toggleSidebar()">
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
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqFehK32E8ECsDqaTOdcpEk5eTyYOzOkkFIZfegvN97bofp154KRi0Uv_x7MUNAdHbXTXVa_mYtyTnFJAKraURRB54Dr1YaUgc_iESGl1_S9ecNC35fBj9jsRu4UjoHa2sdyU7N9DhV0g_8Q9NKhdl_lO6I52sX3XkM3JWcbGFy8G29eRe6eXZvDjjdTfOKfXC2GVWNGyGP_qLr2TU-dCcZHmVVk_2Ro-gXRoS3OKL1xfM7sqva9Rm" alt="User"/>
</div>
</div>
</nav>

<!-- Sidebar Navigation -->
<aside id="main-sidebar" class="fixed left-0 top-0 h-full w-72 lg:w-64 flex flex-col p-4 z-40 bg-surface-container-lowest border-r border-outline-variant pt-20">
    <button class="lg:hidden absolute top-4 right-4 p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant" onclick="closeSidebar()">
        <span class="material-symbols-outlined">close</span>
    </button>

<div class="flex items-center gap-3 px-2 mb-stack-lg mt-2">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container">person</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">Customer Account</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Verified Customer</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('cust_account') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">dashboard</span> Dashboard
    </a>
<!-- Active State: Orders -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('cust_recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">receipt_long</span> Orders
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('cust_account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('shop') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">storefront</span> Shop
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

<!-- Main Content Area -->
<main class="lg:ml-64 flex-1 pt-20 pb-stack-lg px-4 md:px-margin-desktop min-h-screen">
<div class="max-w-container-max mx-auto py-6">
<div class="flex flex-col sm:flex-row sm:justify-between sm:items-end mb-stack-lg gap-4">
<div>
<nav class="flex gap-2 text-on-surface-variant font-body-sm text-body-sm mb-2">
<span class="hover:underline cursor-pointer">Account</span>
<span>/</span>
<span class="text-on-surface font-semibold">Recent Orders</span>
</nav>
<h1 class="font-headline-xl text-2xl md:text-headline-xl">Order History</h1>
</div>
</div>

<!-- Filters & Search -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 md:gap-gutter mb-stack-md">
<div class="sm:col-span-2 relative">
<span class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant">search</span>
<input class="w-full pl-12 pr-4 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary-container/20 focus:border-on-surface outline-none transition-all" placeholder="Search orders..." type="text"/>
</div>
<div>
<select class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary-container/20 focus:border-on-surface outline-none transition-all">
<option>Last 3 months</option>
<option>Last 6 months</option>
<option>Year 2023</option>
<option>All time</option>
</select>
</div>
<div>
<select class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary-container/20 focus:border-on-surface outline-none transition-all">
<option>All Statuses</option>
<option>Processing</option>
<option>Shipped</option>
<option>Delivered</option>
<option>Cancelled</option>
</select>
</div>
</div>

<!-- Orders List -->
<div class="space-y-4 md:space-y-gutter">
<!-- Order Item 1 -->
<div class="order-card-hover bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-4 md:p-6 flex flex-col gap-4">
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 w-full">
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Order ID</p>
<p class="font-headline-sm text-lg md:text-headline-sm">#LUM-89231</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Date</p>
<p class="font-body-md text-sm md:text-body-md">Oct 24, 2024</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Total</p>
<p class="font-body-md text-sm md:text-body-md font-bold text-primary">$1,240.50</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-primary-container/20 text-on-primary-container rounded-full font-label-md text-[12px]">
<span class="w-2 h-2 rounded-full bg-primary-container"></span>
                                    Shipped
                                </span>
</div>
</div>
<div class="flex gap-3 w-full sm:w-auto">
<button class="flex-1 sm:flex-none px-4 md:px-6 py-2.5 bg-primary-container text-on-primary-container font-label-md text-label-md rounded-lg hover:brightness-90 transition-all active:scale-95">Track Order</button>
<button class="flex-1 sm:flex-none px-4 md:px-6 py-2.5 border-2 border-on-surface text-on-surface font-label-md text-label-md rounded-lg hover:bg-on-surface hover:text-surface transition-all active:scale-95">Details</button>
</div>
</div>

<!-- Order Item 2 -->
<div class="order-card-hover bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-4 md:p-6 flex flex-col gap-4">
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 w-full">
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Order ID</p>
<p class="font-headline-sm text-lg md:text-headline-sm">#LUM-89104</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Date</p>
<p class="font-body-md text-sm md:text-body-md">Oct 18, 2024</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Total</p>
<p class="font-body-md text-sm md:text-body-md font-bold text-primary">$450.00</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-tertiary-container/30 text-on-tertiary-container rounded-full font-label-md text-[12px]">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
                                    Delivered
                                </span>
</div>
</div>
<div class="flex gap-3 w-full sm:w-auto">
<button class="flex-1 sm:flex-none px-4 md:px-6 py-2.5 border-2 border-on-surface text-on-surface font-label-md text-label-md rounded-lg hover:bg-on-surface hover:text-surface transition-all active:scale-95">Details</button>
<button class="flex-1 sm:flex-none px-4 md:px-6 py-2.5 border-2 border-on-surface/20 text-on-surface/40 font-label-md text-label-md rounded-lg cursor-not-allowed">Reorder</button>
</div>
</div>

<!-- Order Item 3 -->
<div class="order-card-hover bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-4 md:p-6 flex flex-col gap-4">
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 w-full">
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Order ID</p>
<p class="font-headline-sm text-lg md:text-headline-sm">#LUM-88992</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Date</p>
<p class="font-body-md text-sm md:text-body-md">Oct 12, 2024</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Total</p>
<p class="font-body-md text-sm md:text-body-md font-bold text-primary">$2,110.25</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-error-container/20 text-error rounded-full font-label-md text-[12px]">
<span class="w-2 h-2 rounded-full bg-error"></span>
                                    Cancelled
                                </span>
</div>
</div>
<div class="flex gap-3 w-full sm:w-auto">
<button class="flex-1 sm:flex-none px-4 md:px-6 py-2.5 border-2 border-on-surface text-on-surface font-label-md text-label-md rounded-lg hover:bg-on-surface hover:text-surface transition-all active:scale-95">Support</button>
</div>
</div>

<!-- Order Item 4 -->
<div class="order-card-hover bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-4 md:p-6 flex flex-col gap-4">
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 w-full">
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Order ID</p>
<p class="font-headline-sm text-lg md:text-headline-sm">#LUM-88840</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Date</p>
<p class="font-body-md text-sm md:text-body-md">Sep 30, 2024</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Total</p>
<p class="font-body-md text-sm md:text-body-md font-bold text-primary">$128.00</p>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-[11px] md:text-label-md mb-1 uppercase tracking-wider">Status</p>
<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-variant text-on-surface-variant rounded-full font-label-md text-[12px]">
<span class="w-2 h-2 rounded-full bg-on-surface-variant"></span>
                                    Processing
                                </span>
</div>
</div>
<div class="flex gap-3 w-full sm:w-auto">
<button class="flex-1 sm:flex-none px-4 md:px-6 py-2.5 border-2 border-on-surface text-on-surface font-label-md text-label-md rounded-lg hover:bg-on-surface hover:text-surface transition-all active:scale-95">Details</button>
</div>
</div>
</div>

<!-- Pagination -->
<div class="mt-stack-lg flex flex-col sm:flex-row justify-between items-center gap-4 py-6 border-t border-outline-variant">
<p class="font-body-sm text-body-sm text-on-surface-variant">Showing 1 to 4 of 28 orders</p>
<div class="flex gap-2">
<button class="p-2 rounded border border-outline-variant hover:bg-surface-variant disabled:opacity-30" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 rounded bg-on-surface text-surface font-bold">1</button>
<button class="w-10 h-10 rounded border border-outline-variant hover:bg-surface-variant">2</button>
<button class="w-10 h-10 rounded border border-outline-variant hover:bg-surface-variant">3</button>
<button class="p-2 rounded border border-outline-variant hover:bg-surface-variant">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>

<!-- Footer -->
<footer class="lg:ml-64 w-full py-stack-lg px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container-high border-t border-outline-variant">
<div class="flex flex-col gap-2">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Katalog IDN</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2026 Katalog IDN. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-6">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Terms of Service</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Shipping Info</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Contact Us</a>
</div>
</footer>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.toggle('open');
        overlay.classList.toggle('active');
    }
    function closeSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
    }

    // Simple micro-interactions for the sidebar items
    document.querySelectorAll('aside nav a').forEach(link => {
        link.addEventListener('mouseenter', () => {
            if(!link.classList.contains('bg-primary-container')) {
                link.style.transform = 'translateX(4px)';
            }
        });
        link.addEventListener('mouseleave', () => {
            link.style.transform = 'translateX(0)';
        });
    });

    // Search bar focus effect
    const searchInputs = document.querySelectorAll('input[type="text"]');
    searchInputs.forEach(searchInput => {
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.style.transform = 'scale(1.01)';
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.style.transform = 'scale(1)';
        });
    });
</script>
</body></html>