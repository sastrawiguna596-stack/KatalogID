<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Customer Support | Katalog IDN</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            background-color: #fbf9f8;
            color: #1b1c1c;
            -webkit-font-smoothing: antialiased;
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d5c4ab;
            border-radius: 10px;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #EDEDED;
        }
        /* Sidebar responsive */
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
</head>
<body class="font-body-md text-body-md">

<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- SideNavBar (Seller Context) -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-3">
    <button class="lg:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="toggleSidebar()">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <span class="font-headline-md text-headline-md font-bold text-primary">Katalog IDN</span>
</div>
<div class="flex items-center gap-3 md:gap-gutter">
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
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('sales_analytics') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">analytics</span> Sales Analytic
    </a>
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 flex flex-col gap-1">
<!-- Active: Support -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('support') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">help_outline</span> Support
    </a>
<form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md font-bold">
        <span class="material-symbols-outlined">logout</span> Sign Out
    </button>
</form>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="lg:ml-64 min-h-screen">
<!-- Page Hero / Breadcrumbs -->
<div class="pt-20 px-4 md:px-margin-desktop bg-gradient-to-b from-primary-fixed/20 to-transparent">
<div class="max-w-container-max mx-auto py-6 md:py-stack-lg">
<div class="flex gap-2 items-center text-on-surface-variant text-body-sm font-label-md mb-4">
<span>Account</span>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-primary">Help &amp; Support</span>
</div>
<h2 class="font-headline-xl text-2xl md:text-headline-xl text-on-surface mb-2">How can we help today?</h2>
<p class="text-body-md md:text-body-lg text-on-surface-variant max-w-2xl">Find quick answers in our FAQ, track your existing support tickets, or start a live conversation with our Katalog IDN specialist team.</p>
</div>
</div>
<!-- Content Grid (Bento Style) -->
<div class="px-4 md:px-margin-desktop pb-stack-lg">
<div class="max-w-container-max mx-auto grid grid-cols-12 gap-4 md:gap-gutter">
<!-- FAQ Categories - Left Column (Bento Tile) -->
<div class="col-span-12 lg:col-span-8 space-y-gutter">
<section class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md">
<div class="flex items-center justify-between mb-stack-md">
<h3 class="font-headline-sm text-headline-sm flex items-center gap-2">
<span class="material-symbols-outlined text-primary">quiz</span>
                                Categorized FAQs
                            </h3>
<a class="text-primary font-label-md hover:underline" href="#">View all topics</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-stack-sm">
<!-- Shipping -->
<div class="p-4 rounded-lg bg-surface hover:bg-primary-fixed/10 border border-transparent hover:border-primary-fixed transition-all cursor-pointer group">
<span class="material-symbols-outlined text-3xl text-primary mb-3">local_shipping</span>
<h4 class="font-headline-sm text-on-surface mb-1">Shipping</h4>
<p class="text-body-sm text-on-surface-variant">Tracking, delivery times, and local courier partners.</p>
</div>
<!-- Payments -->
<div class="p-4 rounded-lg bg-surface hover:bg-primary-fixed/10 border border-transparent hover:border-primary-fixed transition-all cursor-pointer group">
<span class="material-symbols-outlined text-3xl text-primary mb-3">payments</span>
<h4 class="font-headline-sm text-on-surface mb-1">Payments</h4>
<p class="text-body-sm text-on-surface-variant">Invoice issues, payment gateways, and tax receipts.</p>
</div>
<!-- Returns -->
<div class="p-4 rounded-lg bg-surface hover:bg-primary-fixed/10 border border-transparent hover:border-primary-fixed transition-all cursor-pointer group">
<span class="material-symbols-outlined text-3xl text-primary mb-3">assignment_return</span>
<h4 class="font-headline-sm text-on-surface mb-1">Returns</h4>
<p class="text-body-sm text-on-surface-variant">Refund policies, return labels, and item conditions.</p>
</div>
</div>
<!-- FAQ List (Accordion-like) -->
<div class="mt-8 space-y-4">
<details class="group border-b border-outline-variant pb-4">
<summary class="flex justify-between items-center cursor-pointer list-none">
<span class="font-label-md text-on-surface group-hover:text-primary">How do I track my Katalog IDN bulk order?</span>
<span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-3 text-body-sm text-on-surface-variant leading-relaxed">
                                    Once your order is processed, a tracking number will be sent to your registered email address. You can also view real-time status updates under the "Orders" tab in your seller dashboard.
                                </p>
</details>
<details class="group border-b border-outline-variant pb-4">
<summary class="flex justify-between items-center cursor-pointer list-none">
<span class="font-label-md text-on-surface group-hover:text-primary">Can I change my shipping address after purchase?</span>
<span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-3 text-body-sm text-on-surface-variant leading-relaxed">
                                    Address changes are permitted within 2 hours of order placement. After this window, our logistics partners begin processing. Please contact Live Support immediately for urgent changes.
                                </p>
</details>
<details class="group">
<summary class="flex justify-between items-center cursor-pointer list-none">
<span class="font-label-md text-on-surface group-hover:text-primary">What payment methods do you support for international sellers?</span>
<span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-3 text-body-sm text-on-surface-variant leading-relaxed">
                                    We support all major credit cards, PayPal, and direct SEPA/Wire transfers for high-volume transactions. International sellers may also use digital wallets like Stripe and Payoneer.
                                </p>
</details>
</div>
</section>
<!-- Ticket Form - Asymmetric Layout Section -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<div class="bg-primary text-on-primary rounded-xl p-stack-md flex flex-col justify-between">
<div>
<h3 class="font-headline-md text-headline-md mb-2">Still need help?</h3>
<p class="opacity-90">Our dedicated support team is available 24/7 to help you scale your business smoothly.</p>
</div>
<div class="mt-8">
<div class="flex -space-x-2 mb-4">
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="Close-up of a diverse support team member smiling, wearing professional headset, clean lighting, minimalist background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDosLjLDdpKMjX0DdDjn-BS_vfiML_T7OVclI210xdsd5g1gYZ2d8m00ocnyvruWNJYcIDNNHQUDmCoq3HyMAM5wy9cTlGRyB0_jG5l1ULlM4Q4yH-JCmEzd9lBFYpFzJ3xfgO9Xilr-JhqIMwULi9ssGB_VFxwXNziHjD9UwScNB3sIKya2uBhVAllBHApS0HCFk2bMlfLu_ONE_W_Ff7UWurH0pujJDucNdIlaoI5bVMcIwE-b8zP"/>
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="Close-up of a diverse support team member smiling, wearing professional headset, clean lighting, minimalist background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFi8_ZyEGEwvEE0ySaohJGNdg_bdZrKM_swOdYsrF1Kgx7Onf1SXae3E3VknoH7ypMtkglmbLFfibsPHq6rUH2cHda0nW0P8oYQy7pk3Du0z7FAO9lY2MBmSs61QzbWxA11ycy-Z4x7JnU-a8bZRyBTG31V3bStfbz_iyqvxvJFfg1OEkK9UGW7KDEuy-zM1Ro7HTeEoCckUhHyZ_GEsVbSiJNwmZ6Lwep8ukg3_Ll3T4d7kt3ibx1"/>
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="Close-up of a diverse support team member smiling, wearing professional headset, clean lighting, minimalist background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCm2r8zQYIrgOxoUXjgy2ZN_6ia7XJYlw3sy9uTaQTYFAVD5olY5L6PIiI55UgVb3JTGM0M5fr7MZIGfXhgumNLL671dG8bO0sbMhUlLHJiCbG4lBrPQMG4J-i_YG0gUVT19j7oPJrkmna7V1B9xis7sMicftM1tYZnl8f89xJcCiV-8bAt6kVfOXGg1CJC-wUCrONZejKjuyHB6Mrewwvg3oFaCndF8OM0Pzv3DBMm9I17bSAF6I6J"/>
<div class="w-10 h-10 rounded-full bg-primary-fixed-dim text-on-primary-fixed-variant flex items-center justify-center text-xs font-bold border-2 border-primary">+12</div>
</div>
<p class="font-label-md">With a fast respons</p>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-md">
<h3 class="font-headline-sm text-headline-sm mb-stack-sm">Open a Support Ticket</h3>
<form class="space-y-4">
<div>
<label class="block font-label-md text-on-surface-variant mb-1">Subject</label>
<input class="w-full bg-surface border border-outline-variant rounded-lg p-2 focus:ring-2 focus:ring-primary-container focus:border-primary outline-none" placeholder="Briefly describe the issue" type="text"/>
</div>
<div>
<label class="block font-label-md text-on-surface-variant mb-1">Inquiry Type</label>
<select class="w-full bg-surface border border-outline-variant rounded-lg p-2 focus:ring-2 focus:ring-primary-container focus:border-primary outline-none">
<option>Order Inquiry</option>
<option>Technical Issue</option>
<option>Account Access</option>
<option>Billing/Invoice</option>
</select>
</div>
<div>
<label class="block font-label-md text-on-surface-variant mb-1">Message</label>
<textarea class="w-full bg-surface border border-outline-variant rounded-lg p-2 focus:ring-2 focus:ring-primary-container focus:border-primary outline-none" placeholder="Provide as much detail as possible..." rows="4"></textarea>
</div>
<button class="w-full bg-primary text-on-primary py-3 rounded-lg font-bold hover:brightness-90 active:scale-95 transition-all" type="submit">Submit Ticket</button>
</form>
</div>
</section>
</div>
<!-- Right Sidebar - Contact Options -->
<div class="col-span-12 lg:col-span-4 space-y-gutter">
<!-- Live Channels Card -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
<div class="p-6 bg-surface-container-high">
<h3 class="font-headline-sm text-headline-sm">Connect Directly</h3>
</div>
<div class="p-6 space-y-4">
<!-- Instagram -->
<a href="https://instagram.com" target="_blank" class="w-full flex items-center gap-4 p-4 rounded-xl border border-outline-variant hover:border-primary hover:bg-primary-fixed/5 transition-all text-left group">
<div class="w-12 h-12 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-600 group-hover:scale-110 transition-transform">
<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
</svg>
</div>
<div>
<p class="font-label-md text-on-surface">Instagram Direct</p>
<p class="text-body-sm text-on-surface-variant">DM us @katalog.idn</p>
</div>
<span class="material-symbols-outlined ml-auto text-outline">chevron_right</span>
</a>
<!-- Email Support -->
<button class="w-full flex items-center gap-4 p-4 rounded-xl border border-outline-variant hover:border-primary hover:bg-primary-fixed/5 transition-all text-left group">
<div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center text-secondary group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">mail</span>
</div>
<div>
<p class="font-label-md text-on-surface">Email Support</p>
<p class="text-body-sm text-on-surface-variant">support@katalogidn.com</p>
</div>
<span class="material-symbols-outlined ml-auto text-outline">chevron_right</span>
</button>
<!-- Community -->
<button class="w-full flex items-center gap-4 p-4 rounded-xl border border-outline-variant hover:border-primary hover:bg-primary-fixed/5 transition-all text-left group">
<div class="w-12 h-12 rounded-lg bg-tertiary-container flex items-center justify-center text-tertiary group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-2xl">groups</span>
</div>
<div>
<p class="font-label-md text-on-surface">Seller Community</p>
<p class="text-body-sm text-on-surface-variant">Ask other SME owners</p>
</div>
<span class="material-symbols-outlined ml-auto text-outline">chevron_right</span>
</button>
</div>
</div>
<!-- Helpful Links / Resources -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6">
<h4 class="font-label-md text-on-surface-variant uppercase tracking-widest text-xs mb-4">Quick Resources</h4>
<ul class="space-y-4">
<li>
<a class="flex items-center gap-2 text-on-surface hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-lg">shopping_bag</span>
<span class="text-body-md">Cara Pemesanan</span>
</a>
</li>
<li>
<a class="flex items-center gap-2 text-on-surface hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-lg">local_shipping</span>
<span class="text-body-md">Informasi Pengiriman</span>
</a>
</li>
<li>
<a class="flex items-center gap-2 text-on-surface hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-lg">assignment_return</span>
<span class="text-body-md">Kebijakan Pengembalian</span>
</a>
</li>
</ul>
</div>
<!-- Promotional Banner (Mini) -->
<div class="relative rounded-xl overflow-hidden h-48 group">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="A brightly lit, minimalist workspace with a sleek laptop, a cup of coffee, and a small green plant. Soft golden hour light streams in. The image is clean, high-end, and professional, perfectly capturing the spirit of a successful modern entrepreneur using Lumina SME platform." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhaS74Via158pOkfThyy5v0zQ0ClQWa5DpIkN5kKSpYhOvL1egYw7V1e_hyFVy4-l2xKHucAlQ3MpIZ2qbWUyGES3lXuiHjtjpi8IWH7P0t5jyW-uZXuFITGTMhgU25mATw6XJukYNmaK6npKUHeBgE73RaKL6M6LGu0e_fQ64-rsy001-X5iOcMlG2GRLMEWU8EPWVGYD5k5Ox-qhze0VjvP9J6vNBr1WfzXai7o0T4irLNI9iO-B')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-6 flex flex-col justify-end">
<p class="text-white font-headline-sm mb-1">New: Premium Account</p>
<p class="text-white/80 text-body-sm mb-3">Get priority 1-on-1 support and reduced shipping fees.</p>
<button class="bg-primary-container text-on-primary-container py-1.5 px-4 rounded-lg font-bold text-sm w-fit hover:brightness-110 transition-all">Upgrade Now</button>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="lg:ml-0 w-full py-stack-lg px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container-high border-t border-outline-variant">
<div class="flex flex-col gap-2">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Katalog IDN</span>
<p class="font-body-sm text-body-sm text-on-surface-variant opacity-70">© 2026 Katalog IDN. All rights reserved.</p>
</div>
<div class="flex gap-4 md:gap-stack-md flex-wrap justify-center">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Terms of Service</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Shipping Info</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all" href="#">Contact Us</a>
</div>
</footer>
</main>
<!-- Floating Action Button for Support (Contextual) -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-primary-container text-on-primary-container rounded-full shadow-lg flex items-center justify-center hover:scale-110 active:scale-95 transition-all z-50 group">
<span class="material-symbols-outlined text-2xl group-hover:hidden">support_agent</span>
<span class="hidden group-hover:block material-symbols-outlined text-2xl">chat</span>
<!-- Tooltip -->
<div class="absolute right-16 bg-on-surface text-surface py-2 px-4 rounded-lg text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">
            Need help? Chat now
        </div>
</button>
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

    // Simple search interactivity
    const searchInputs = document.querySelectorAll('input[type="text"]');
    searchInputs.forEach(searchInput => {
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('scale-105');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('scale-105');
        });
    });

    // Form submission prevention for demo
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Ticket submitted successfully! Our team will reach out within 15 minutes.');
    });
</script>
</body></html>