<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Account Settings | Katalog IDN</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
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
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .active-nav-line {
            position: relative;
        }
        .active-nav-line::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #ffb800;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(255, 184, 0, 0.15);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
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
</head>
<body class="bg-surface text-on-surface font-body-md selection:bg-primary-container selection:text-on-primary-container">

<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- Top Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-3">
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
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('cust_recent_orders') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">receipt_long</span> Orders
    </a>
<!-- Active State: Settings -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('cust_account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span> Settings
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
<main class="lg:ml-64 pt-20 pb-stack-lg px-4 md:px-margin-desktop min-h-screen">
<div class="max-w-container-max mx-auto py-6">
<!-- Page Header -->
<div class="mb-stack-lg">
<h1 class="font-headline-xl text-2xl md:text-headline-xl text-on-surface mb-2">Account Settings</h1>
<p class="font-body-lg text-body-md md:text-body-lg text-on-surface-variant">Manage your profile, shipping preferences, and account security.</p>
</div>
<!-- Bento Grid Layout for Settings -->
<div class="grid grid-cols-12 gap-4 md:gap-gutter">
<!-- Profile Information Card -->
<section class="col-span-12 lg:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-xl p-4 md:p-stack-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between mb-stack-md border-b border-outline-variant pb-4 gap-3">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">person</span>
<h2 class="font-headline-sm text-headline-sm">Profile Information</h2>
</div>
<button class="bg-primary text-on-primary px-4 md:px-6 py-2 rounded-lg font-label-md text-label-md hover:brightness-90 active:scale-95 transition-all self-start sm:self-auto">Save Changes</button>
</div>
<div class="flex flex-col md:flex-row gap-stack-lg">
<!-- Avatar Column -->
<div class="flex flex-col items-center gap-4">
<div class="relative group">
<div class="w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-surface-container">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJKGosgrQlVuugOrVrXww1UF85b0uzUkGgp6UqijZO44uuQaQYIN0E5htYzIKgorPiDcPFgavj3XVNN5PrpXsIBeT5_6sPpksa9ynRYOpUZXoWgGV1Lnqn5f_24s2fk58WCK8i6534QQQdOy-kEsp6h_YRfSP52DGhR_Rc4lFN5xJeanFxrdA8q0P3NY-ULf_Tk8yVaZjrCzQIyjT5bBqT0PP_eRLcR9EpGSV4BwRQ0BFFe58YxAh1" alt="Avatar"/>
</div>
<button class="absolute bottom-1 right-1 bg-surface border border-outline-variant w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center hover:bg-surface-variant transition-colors shadow-sm">
<span class="material-symbols-outlined text-on-surface-variant">photo_camera</span>
</button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant text-center max-w-[120px]">JPG or PNG. Max size 2MB.</p>
</div>
<!-- Form Column -->
<div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-stack-md">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface">Full Name</label>
<input class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="text" value="Alexander Sterling"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface">Email Address</label>
<input class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="email" value="alexander@acmecorp.com"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface">Phone Number</label>
<input class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="tel" value="+1 (555) 000-0000"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface">Language</label>
<select class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface">
<option>English (US)</option>
<option>Spanish</option>
<option>French</option>
</select>
</div>
<div class="col-span-1 md:col-span-2 flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface">Short Bio</label>
<textarea class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" rows="3">Founder and CEO at Acme Corp. Specialized in eco-friendly manufacturing solutions.</textarea>
</div>
</div>
</div>
</section>
<!-- Security Quick Actions -->
<aside class="col-span-12 lg:col-span-4 flex flex-col gap-4 md:gap-gutter">
<div class="bg-primary-container text-on-primary-container p-4 md:p-stack-md rounded-xl shadow-sm border border-primary/20">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-2xl">verified_user</span>
<h3 class="font-headline-sm text-headline-sm">Security Level: High</h3>
</div>
<p class="font-body-sm text-body-sm mb-4 opacity-90">Your account is well-protected. Last password change was 30 days ago.</p>
<button class="w-full bg-on-primary-container text-on-primary py-3 rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity">Run Security Check</button>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-4 md:p-stack-md">
<h3 class="font-headline-sm text-headline-sm mb-4">Account Status</h3>
<div class="space-y-4">
<div class="flex justify-between items-center">
<span class="font-body-md text-on-surface-variant">Membership</span>
<span class="bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full font-label-md text-[12px]">Premium Plus</span>
</div>
<div class="flex justify-between items-center">
<span class="font-body-md text-on-surface-variant">Next Billing</span>
<span class="font-label-md text-on-surface">Oct 24, 2024</span>
</div>
<div class="pt-2">
<button class="text-primary hover:underline font-label-md text-label-md flex items-center gap-1">
                                    Manage Subscription <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
</aside>
<!-- Address Book Section -->
<section class="col-span-12 bg-surface-container-lowest border border-outline-variant rounded-xl p-4 md:p-stack-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between mb-stack-md gap-3">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">location_on</span>
<h2 class="font-headline-sm text-headline-sm">Address Book</h2>
</div>
<button class="border-2 border-on-surface text-on-surface px-4 md:px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-on-surface hover:text-white transition-all flex items-center gap-2 self-start sm:self-auto">
<span class="material-symbols-outlined">add</span> Add New Address
                    </button>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-gutter">
<!-- Default Address Card -->
<div class="border-2 border-primary rounded-xl p-stack-sm relative bg-primary-fixed/10">
<div class="absolute top-4 right-4 flex gap-2">
<button class="text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
<button class="text-on-surface-variant hover:text-error"><span class="material-symbols-outlined">delete</span></button>
</div>
<div class="bg-primary text-on-primary inline-block px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider mb-3">Default Shipping</div>
<h4 class="font-label-md text-on-surface mb-1">Office Headquarters</h4>
<p class="font-body-sm text-on-surface-variant leading-relaxed">
                                Alexander Sterling<br/>
                                123 Business Avenue, Suite 400<br/>
                                San Francisco, CA 94105<br/>
                                United States
                            </p>
</div>
<!-- Secondary Address Card -->
<div class="border border-outline-variant rounded-xl p-stack-sm relative hover:border-outline transition-colors">
<div class="absolute top-4 right-4 flex gap-2">
<button class="text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
<button class="text-on-surface-variant hover:text-error"><span class="material-symbols-outlined">delete</span></button>
</div>
<div class="invisible h-6 mb-3">Placeholder</div>
<h4 class="font-label-md text-on-surface mb-1">Warehouse East</h4>
<p class="font-body-sm text-on-surface-variant leading-relaxed">
                                Logistics Manager<br/>
                                890 Industrial Way<br/>
                                Brooklyn, NY 11201<br/>
                                United States
                            </p>
<button class="mt-4 text-primary font-label-md text-label-md hover:underline">Set as Default</button>
</div>
<!-- Empty Placeholder -->
<div class="border border-dashed border-outline-variant rounded-xl p-stack-sm flex flex-col items-center justify-center text-on-surface-variant min-h-[160px]">
<span class="material-symbols-outlined text-4xl opacity-20 mb-2">add_location</span>
<p class="font-label-md text-label-md opacity-40">Add another destination</p>
</div>
</div>
</section>
<!-- Security Settings Section -->
<section class="col-span-12 bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
<div class="p-4 md:p-stack-md border-b border-outline-variant">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">shield</span>
<h2 class="font-headline-sm text-headline-sm">Security &amp; Access</h2>
</div>
</div>
<div class="divide-y divide-outline-variant">
<!-- Password Row -->
<div class="p-4 md:p-stack-md flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<h4 class="font-label-md text-on-surface">Account Password</h4>
<p class="font-body-sm text-on-surface-variant">Updated about a month ago. Strong passwords keep your account safe.</p>
</div>
<button class="border border-outline-variant px-4 md:px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-variant transition-all whitespace-nowrap">Change Password</button>
</div>
<!-- 2FA Row -->
<div class="p-4 md:p-stack-md flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<h4 class="font-label-md text-on-surface">Two-Factor Authentication (2FA)</h4>
<p class="font-body-sm text-on-surface-variant">Add an extra layer of security to your account using an authenticator app.</p>
</div>
<div class="flex items-center gap-3">
<span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full font-label-md text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span> Enabled
                                </span>
<button class="text-error font-label-md text-label-md hover:underline">Disable</button>
</div>
</div>
<!-- Active Sessions -->
<div class="p-4 md:p-stack-md flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<h4 class="font-label-md text-on-surface">Active Sessions</h4>
<p class="font-body-sm text-on-surface-variant">You are currently logged in on 3 devices.</p>
</div>
<button class="text-primary font-label-md text-label-md hover:underline">Manage Sessions</button>
</div>
</div>
</section>
<!-- Danger Zone -->
<section class="col-span-12 bg-error-container/10 border border-error/20 rounded-xl p-4 md:p-stack-md">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-error">report_problem</span>
<h2 class="font-headline-sm text-headline-sm text-error">Danger Zone</h2>
</div>
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<p class="font-body-md text-on-surface-variant">Once you delete your account, there is no going back. Please be certain.</p>
<button class="bg-error text-on-error px-4 md:px-6 py-2 rounded-lg font-label-md text-label-md hover:brightness-90 transition-all whitespace-nowrap">Delete Account</button>
</div>
</section>
</div>
</div>
</main>

<!-- Footer -->
<footer class="lg:ml-64 w-auto py-stack-lg px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container-high border-t border-outline-variant">
<div class="flex flex-col gap-2">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Katalog IDN</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2026 Katalog IDN. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-gutter">
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

    // Micro-interaction for form focus
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.querySelector('label')?.classList.add('text-primary');
        });
        input.addEventListener('blur', () => {
            input.parentElement.querySelector('label')?.classList.remove('text-primary');
        });
    });

    console.log("Account Settings Page Initialized");
</script>
</body></html>