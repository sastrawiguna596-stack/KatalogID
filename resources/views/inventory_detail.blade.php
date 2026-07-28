<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Luminous | Product Stock Detail</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    "headline-xl-mobile": ["Hanken Grotesk"],
                    "headline-sm": ["Hanken Grotesk"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "body-md": ["Plus Jakarta Sans"],
                    "body-sm": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #F9F9F7;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1b1c1c;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .chart-container {
            height: 240px;
            position: relative;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .fade-in { animation: fadeIn 0.6s ease-out forwards; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-background">
<!-- Side Navigation Shell -->
<aside class="w-64 h-screen fixed left-0 top-0 bg-surface dark:bg-surface-dim border-r border-surface-container dark:border-outline-variant flex flex-col py-stack-md px-margin-mobile z-50">
<div class="mb-10 px-2">
<h1 class="font-headline-md text-headline-md font-bold text-on-surface dark:text-on-surface-variant">Luminous</h1>
<p class="text-label-md font-label-md text-secondary">Seller Portal</p>
</div>
<nav class="flex-grow space-y-2">
<a class="flex items-center gap-3 px-4 py-3 text-secondary dark:text-secondary-fixed-dim font-label-md hover:text-primary transition-colors duration-200" href="{{ route('account') }}">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-primary font-bold border-b-2 border-primary pb-1 font-label-md" href="{{ route('inventories') }}">
<span class="material-symbols-outlined">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-secondary dark:text-secondary-fixed-dim font-label-md hover:text-primary transition-colors duration-200" href="{{ route('recent_orders') }}">
<span class="material-symbols-outlined">shopping_cart</span>
<span>Orders</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-secondary dark:text-secondary-fixed-dim font-label-md hover:text-primary transition-colors duration-200" href="{{ route('sales_analytics') }}">
<span class="material-symbols-outlined">analytics</span>
<span>Sales Analytics</span>
</a>
<div class="pt-10">
<a class="flex items-center gap-3 px-4 py-3 text-secondary dark:text-secondary-fixed-dim font-label-md hover:text-primary transition-colors duration-200" href="{{ route('account_setting') }}">
<span class="material-symbols-outlined">settings</span>
<span>Settings</span>
</a>
</div>
</nav>
<div class="px-4 py-4 mt-auto border-t border-surface-container">
<a href="{{ route('login') }}" class="flex items-center gap-2 text-error font-label-md hover:underline">
<span class="material-symbols-outlined">logout</span> Sign Out
</a>
</div>
</aside>
<!-- Top Navigation Shell -->
<header class="h-16 fixed top-0 right-0 left-64 bg-surface dark:bg-surface-bright border-b border-surface-container dark:border-outline-variant flex items-center justify-between px-gutter w-full z-40">
<div class="flex items-center gap-4 w-1/2">
<div class="relative w-full max-w-md group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-body-md font-body-md" placeholder="Search inventory..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<button class="relative hover:bg-surface-container-low transition-colors p-2 rounded-full">
<span class="material-symbols-outlined text-secondary">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full"></span>
</button>
<div class="h-8 w-[1px] bg-outline-variant"></div>
<a href="{{ route('account') }}" class="flex items-center gap-2 cursor-pointer group">
<span class="material-symbols-outlined text-secondary group-hover:text-primary transition-colors">account_circle</span>
<span class="text-label-md font-label-md text-on-surface">Store Admin</span>
</a>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 pt-24 px-gutter pb-stack-lg min-h-screen">
<!-- Breadcrumbs & Actions -->
<div class="flex items-center justify-between mb-stack-md fade-in">
<nav class="flex items-center gap-2 text-secondary text-label-md">
<a class="hover:text-primary" href="{{ route('inventories') }}">Inventory</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-on-surface font-bold">Luxe Suede Loafer</span>
</nav>
<div class="flex gap-3">
<a href="{{ route('edit_product', 1) }}" class="flex items-center gap-2 px-4 py-2 bg-primary text-on-secondary rounded font-bold font-label-md hover:bg-[#6b4c00] transition-all active:scale-95 shadow-sm">
<span class="material-symbols-outlined">edit</span> Edit Product
</a>
</div>
</div>
<!-- Product Summary Header -->
<div class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-gutter mb-gutter flex flex-col md:flex-row gap-gutter fade-in" style="animation-delay: 0.1s;">
<div class="w-32 h-32 rounded-lg bg-surface-container overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="A premium close-up of a high-quality suede loafer in a deep charcoal color, set against a clean, off-white minimalist background. The lighting is sophisticated, casting soft shadows that emphasize the texture of the suede. The image follows a high-end e-commerce style, focused on luxury product photography with a bright and airy composition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXMs9oqv4AxZGYWseoLumpDw31w8cCo2SbmCRwtLhABSEiWONbzVWZxi0D1f0Q_zQBNBRMpkvdmakiydgwwGYY35-Pg-BkdOXeTGbSaUKIv34Ds_DF0y1QrLvOLovIiCprrdngqdmqEPbSfuRRETkUBug5BVeL19YfrOTErFy-6EOQx5P8cDZoNVvkXvdFUs0wKZBQoUMJ6RLy-1opa8QKld54uVHKyg7ee5H1TD7YgnhxfqHq2ZZ6"/>
</div>
<div class="flex-grow">
<div class="flex items-start justify-between">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Luxe Suede Loafer</h2>
<p class="text-body-md text-secondary">SKU: LMN-SD-8820 | Category: Footwear</p>
</div>
<div class="flex gap-2">
<span class="px-3 py-1 bg-[#fff8e1] text-primary border border-primary-container rounded-full text-label-md">Current Level: 42 units</span>
<span class="px-3 py-1 bg-error-container text-on-error-container border border-error rounded-full text-label-md">Critical Threshold: 15 units</span>
</div>
</div>
<div class="mt-4 flex gap-8">
<div>
<p class="text-[12px] uppercase tracking-wider text-secondary font-bold">Base Price</p>
<p class="font-headline-sm text-headline-sm">$189.00</p>
</div>
<div>
<p class="text-[12px] uppercase tracking-wider text-secondary font-bold">Total Value</p>
<p class="font-headline-sm text-headline-sm">$7,938.00</p>
</div>
<div>
<p class="text-[12px] uppercase tracking-wider text-secondary font-bold">Last Restock</p>
<p class="font-headline-sm text-headline-sm">Oct 12, 2023</p>
</div>
</div>
</div>
</div>
<!-- Bento Grid Stats & Controls -->
<div class="bento-grid fade-in" style="animation-delay: 0.2s;">
<!-- Inventory Trend Chart -->
<div class="col-span-12 lg:col-span-8 bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-gutter">
<div class="flex items-center justify-between mb-gutter">
<h3 class="font-headline-sm text-headline-sm">Inventory Trend</h3>
<div class="flex items-center gap-2 bg-surface-container-low p-1 rounded-lg">
<button class="px-3 py-1 text-label-md rounded hover:bg-white transition-all shadow-sm">7D</button>
<button class="px-3 py-1 text-label-md bg-white rounded shadow-sm">30D</button>
<button class="px-3 py-1 text-label-md rounded hover:bg-white transition-all shadow-sm">90D</button>
</div>
</div>
<div class="chart-container flex items-end justify-between gap-2 pt-4">
<!-- Simple CSS Graph representation -->
<div class="w-full flex items-end justify-between px-2 h-48 relative">
<!-- Horizontal Grid Lines -->
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-20">
<div class="border-t border-secondary"></div>
<div class="border-t border-secondary"></div>
<div class="border-t border-secondary"></div>
<div class="border-t border-secondary"></div>
</div>
<!-- Bars -->
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 45%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 52%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 48%;"></div>
<div class="w-10 bg-primary hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 85%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 78%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 72%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 65%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 58%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 50%;"></div>
<div class="w-10 bg-primary-container hover:bg-primary transition-colors cursor-pointer rounded-t" style="height: 42%;"></div>
</div>
</div>
<div class="flex justify-between mt-4 px-2 text-label-md text-secondary">
<span>Sept 20</span>
<span>Oct 01</span>
<span>Oct 10</span>
<span>Today</span>
</div>
</div>
<!-- Manual Adjustment Card -->
<div class="col-span-12 lg:col-span-4 bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-gutter flex flex-col justify-between">
<div>
<h3 class="font-headline-sm text-headline-sm mb-2">Adjust Stock</h3>
<p class="text-body-sm text-secondary mb-6">Manually override the current inventory count for this variant.</p>
<div class="space-y-4">
<div>
<label class="block text-label-md font-bold mb-2">Adjustment Type</label>
<select class="w-full border border-[#EDEDED] rounded-lg p-3 text-body-md focus:ring-primary focus:border-primary">
<option>Inventory Correction</option>
<option>Restock Received</option>
<option>Return to Stock</option>
<option>Damaged Goods</option>
</select>
</div>
<div>
<label class="block text-label-md font-bold mb-2">Quantity Change</label>
<div class="flex items-center gap-3">
<button class="w-12 h-12 flex items-center justify-center border-2 border-outline-variant rounded-lg active:scale-95" id="decrement">-</button>
<input class="w-full border border-[#EDEDED] rounded-lg p-3 text-center text-headline-sm focus:ring-primary focus:border-primary" id="stock-input" type="number" value="0"/>
<button class="w-12 h-12 flex items-center justify-center border-2 border-outline-variant rounded-lg active:scale-95" id="increment">+</button>
</div>
</div>
</div>
</div>
<button class="w-full mt-6 py-4 bg-on-background text-white rounded font-bold hover:bg-black transition-all active:scale-98">
                    Update Stock Count
                </button>
</div>
<!-- Low Stock Settings -->
<div class="col-span-12 md:col-span-6 bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-gutter">
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 rounded bg-primary-container flex items-center justify-center">
<span class="material-symbols-outlined text-primary">notifications_active</span>
</div>
<h3 class="font-headline-sm text-headline-sm">Alert Thresholds</h3>
</div>
<div class="space-y-6">
<div class="flex items-center justify-between">
<div>
<p class="text-label-md font-bold">Low Stock Alert</p>
<p class="text-body-sm text-secondary">Notify me when stock drops below this value</p>
</div>
<div class="flex items-center gap-3">
<input class="w-16 border border-[#EDEDED] rounded-lg p-2 text-center text-body-md font-bold" type="number" value="15"/>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
<div class="flex items-center justify-between">
<div>
<p class="text-label-md font-bold">Critical Outage</p>
<p class="text-body-sm text-secondary">Set 'Out of Stock' flag automatically</p>
</div>
<div class="flex items-center gap-3">
<input class="w-16 border border-[#EDEDED] rounded-lg p-2 text-center text-body-md font-bold" type="number" value="2"/>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
</div>
<!-- Historical Movements -->
<div class="col-span-12 md:col-span-6 bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-gutter">
<div class="flex items-center justify-between mb-6">
<h3 class="font-headline-sm text-headline-sm">Recent Activity</h3>
<button class="text-label-md font-bold text-primary hover:underline">View All</button>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between py-2 border-b border-[#F0F0F0] last:border-0">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-error-container flex items-center justify-center">
<span class="material-symbols-outlined text-sm text-on-error-container" style="font-variation-settings: 'wght' 700;">remove</span>
</div>
<div>
<p class="text-label-md font-bold">Sale #ORD-4492</p>
<p class="text-[12px] text-secondary">2 hours ago</p>
</div>
</div>
<span class="text-label-md font-bold">-2 units</span>
</div>
<div class="flex items-center justify-between py-2 border-b border-[#F0F0F0] last:border-0">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-[#e8f5e9] flex items-center justify-center">
<span class="material-symbols-outlined text-sm text-green-700" style="font-variation-settings: 'wght' 700;">add</span>
</div>
<div>
<p class="text-label-md font-bold">Bulk Restock</p>
<p class="text-[12px] text-secondary">Yesterday, 4:15 PM</p>
</div>
</div>
<span class="text-label-md font-bold">+25 units</span>
</div>
<div class="flex items-center justify-between py-2 border-b border-[#F0F0F0] last:border-0">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center">
<span class="material-symbols-outlined text-sm text-secondary" style="font-variation-settings: 'wght' 700;">edit</span>
</div>
<div>
<p class="text-label-md font-bold">Manual Adjustment</p>
<p class="text-[12px] text-secondary">Oct 10, 2023</p>
</div>
</div>
<span class="text-label-md font-bold">-1 units</span>
</div>
</div>
</div>
</div>
</main>
<script>
        // Simple micro-interactions
        document.getElementById('increment').addEventListener('click', () => {
            const input = document.getElementById('stock-input');
            input.value = parseInt(input.value) + 1;
            input.classList.add('scale-105');
            setTimeout(() => input.classList.remove('scale-105'), 100);
        });

        document.getElementById('decrement').addEventListener('click', () => {
            const input = document.getElementById('stock-input');
            input.value = parseInt(input.value) - 1;
            input.classList.add('scale-105');
            setTimeout(() => input.classList.remove('scale-105'), 100);
        });

        // Interactive hover effects for the chart bars
        const bars = document.querySelectorAll('.chart-container .w-10');
        bars.forEach(bar => {
            bar.addEventListener('mouseenter', () => {
                const tooltip = document.createElement('div');
                tooltip.className = 'absolute bg-on-background text-white text-[10px] py-1 px-2 rounded -top-8 left-1/2 -translate-x-1/2 pointer-events-none fade-in';
                tooltip.innerText = `${Math.floor(Math.random() * 50 + 30)} Units`;
                bar.parentElement.appendChild(tooltip);
                bar._tooltip = tooltip;
            });
            bar.addEventListener('mouseleave', () => {
                if (bar._tooltip) {
                    bar._tooltip.remove();
                }
            });
        });
    </script>
</body></html>