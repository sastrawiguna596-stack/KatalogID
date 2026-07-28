<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Shop All Products | Luminous Commerce</title>
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
                    "background": "#fbf9f8",
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
                    "full": "9999px"
            },
            "spacing": {
                    "margin-desktop": "40px",
                    "base": "8px",
                    "stack-md": "24px",
                    "gutter": "24px",
                    "stack-sm": "12px",
                    "stack-lg": "48px",
                    "margin-mobile": "16px",
                    "container-max": "1280px"
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
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .product-card:hover .cart-btn {
            transform: translateY(0);
            opacity: 1;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen">
<!-- Top Navigation Bar -->
<header class="w-full top-0 sticky bg-surface border-b border-surface-container-highest z-50">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="flex items-center gap-8">
<a class="font-headline-sm text-headline-sm font-bold text-on-surface" href="#">Luminous Commerce</a>
<nav class="hidden md:flex gap-6 items-center">
<a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1 transition-colors duration-200" href="#">Shop</a>
<a class="font-label-md text-label-md text-secondary hover:text-on-surface transition-colors duration-200" href="#">Collections</a>
<a class="font-label-md text-label-md text-secondary hover:text-on-surface transition-colors duration-200" href="#">About</a>
<a class="font-label-md text-label-md text-secondary hover:text-on-surface transition-colors duration-200" href="#">Support</a>
</nav>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-secondary hover:text-primary transition-colors duration-200">
<span class="material-symbols-outlined">person</span>
</button>
<button class="p-2 text-secondary hover:text-primary transition-colors duration-200 relative">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-0 right-0 bg-primary-container text-on-primary-container text-[10px] font-bold px-1 rounded-full">2</span>
</button>
</div>
</div>
</header>
<main class="max-w-container-max mx-auto px-margin-desktop py-stack-lg flex flex-col md:flex-row gap-gutter">
<!-- Sidebar Filters -->
<aside class="w-full md:w-64 flex-shrink-0 space-y-stack-md">
<div>
<h3 class="font-headline-sm text-headline-sm mb-4 text-on-surface">Categories</h3>
<ul class="space-y-2">
<li>
<button class="flex items-center justify-between w-full p-2 rounded-lg bg-primary-fixed-dim text-on-primary-fixed-variant font-label-md">
<span>All Products</span>
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</li>
<li>
<button class="flex items-center justify-between w-full p-2 rounded-lg hover:bg-surface-container-low text-secondary font-label-md transition-colors">
<span>Home Decor</span>
<span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100">chevron_right</span>
</button>
</li>
<li>
<button class="flex items-center justify-between w-full p-2 rounded-lg hover:bg-surface-container-low text-secondary font-label-md transition-colors">
<span>Fashion</span>
</button>
</li>
<li>
<button class="flex items-center justify-between w-full p-2 rounded-lg hover:bg-surface-container-low text-secondary font-label-md transition-colors">
<span>Electronics</span>
</button>
</li>
<li>
<button class="flex items-center justify-between w-full p-2 rounded-lg hover:bg-surface-container-low text-secondary font-label-md transition-colors">
<span>Kitchenware</span>
</button>
</li>
</ul>
</div>
<div class="h-px bg-surface-container-highest"></div>
<div>
<h3 class="font-headline-sm text-headline-sm mb-4 text-on-surface">Filters</h3>
<!-- Price Range -->
<div class="mb-stack-md">
<span class="font-label-md text-label-md block mb-3 text-secondary uppercase tracking-wider">Price Range</span>
<div class="px-2">
<input class="w-full h-1.5 bg-surface-container-highest rounded-lg appearance-none cursor-pointer accent-primary" max="1000" min="0" type="range"/>
<div class="flex justify-between mt-2 font-body-sm text-body-sm text-secondary">
<span>$0</span>
<span>$1000+</span>
</div>
</div>
</div>
<!-- Ratings -->
<div>
<span class="font-label-md text-label-md block mb-3 text-secondary uppercase tracking-wider">Rating</span>
<div class="space-y-2">
<label class="flex items-center gap-2 cursor-pointer group">
<input class="rounded border-outline-variant text-primary focus:ring-primary-container" type="checkbox"/>
<span class="flex items-center text-body-sm text-secondary group-hover:text-on-surface transition-colors">
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="ml-1 text-secondary"> &amp; up</span>
</span>
</label>
<label class="flex items-center gap-2 cursor-pointer group">
<input class="rounded border-outline-variant text-primary focus:ring-primary-container" type="checkbox"/>
<span class="flex items-center text-body-sm text-secondary group-hover:text-on-surface transition-colors">
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="ml-1 text-secondary"> &amp; up</span>
</span>
</label>
</div>
</div>
</div>
</aside>
<!-- Main Content Area -->
<section class="flex-1 space-y-stack-md">
<!-- Search & Controls -->
<div class="flex flex-col md:flex-row gap-4 items-center justify-between">
<div class="relative w-full md:max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-xl">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface border border-surface-container-highest rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary transition-all" placeholder="Search curated products..." type="text"/>
</div>
<div class="flex items-center gap-3 w-full md:w-auto">
<span class="font-label-md text-label-md text-secondary">Sort by:</span>
<select class="bg-surface border border-surface-container-highest rounded-lg px-4 py-2 text-body-sm text-on-surface focus:ring-primary-container">
<option>Recommended</option>
<option>Newest Arrivals</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>
<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Product Card 1 -->
<div class="group product-card bg-surface-container-lowest border border-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.04)]">
<div class="relative aspect-square overflow-hidden bg-surface-container-low">
<img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110" data-alt="A high-end, minimalist ceramic vase with an organic texture, placed on a clean marble table in a bright, sunlit modern living room. The lighting is soft and airy, emphasizing the premium quality and warm neutral tones of the Luminous Commerce brand. The composition is professional and spacious, suitable for an e-commerce catalog." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOsuglvS9djnL5QE5TKTWIoV7e7mfyTrOgG63_DAmyGCcVx7v5KWlZ7l7oKIVhtSHSqFOuNhxVMtG1_5EggbXbf7Jowuhfzp0AXcD0s_KaBSTCRxyJbzR-1VrGYTVW0Uk_eN0vfePcj_hSz_OmHUJ0e9OAfUwdMD_kc5KfynxKmeYMwq_-HICa6K3DsPLPTuGtLk7vjVUWbZA5Du8FJfv645-ky3gDfIB8bjlWrBuqFU0ozo7kgHcM"/>
<div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
<button class="cart-btn absolute bottom-4 right-4 translate-y-4 opacity-0 bg-primary text-secondary-fixed p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-on-primary-container active:scale-95">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
</button>
</div>
<div class="p-4 space-y-1">
<div class="flex justify-between items-start">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Artisan Vase</h4>
<span class="font-headline-sm text-headline-sm text-primary">$124.00</span>
</div>
<p class="text-body-sm text-secondary">Home Decor • Handcrafted Ceramic</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-body-sm font-semibold text-on-surface">4.8</span>
<span class="text-body-sm text-secondary">(42 reviews)</span>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="group product-card bg-surface-container-lowest border border-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.04)]">
<div class="relative aspect-square overflow-hidden bg-surface-container-low">
<img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110" data-alt="Minimalist wireless over-ear headphones in a sleek matte charcoal finish, displayed on a wooden stand against a crisp white background. The photo uses high-key studio lighting to highlight the clean industrial design and premium materials. The overall aesthetic is professional, modern, and aligned with a premium commerce experience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8iTc55A_0Ovh7_X-rdgn787eSFhbF2Rd8sPw-8x8QpLq0be5yi1ba5JmzVRDbzOgOnqE3_pDu8sDit5YXqGBlG8bbFFyMJVRhI3GwkW80XhS2tJAwbbQkBG_huAz2wVJv0Q1GazEQXZnm0RcTtHWvUvpAIDvGqoDH7mU8WEl-r3SOUP3prbjnKpxTRb3Rp-ZkCzFAJJcafaiC9gGVAceXfec6jidrlRbQ07eX7AHAzbJSq5k56QTt"/>
<button class="cart-btn absolute bottom-4 right-4 translate-y-4 opacity-0 bg-primary text-secondary-fixed p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-on-primary-container active:scale-95">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
</button>
<div class="absolute top-4 left-4 bg-primary-container text-on-primary-container font-label-md text-xs px-2 py-1 rounded">NEW</div>
</div>
<div class="p-4 space-y-1">
<div class="flex justify-between items-start">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Silent Pro Headphones</h4>
<span class="font-headline-sm text-headline-sm text-primary">$349.00</span>
</div>
<p class="text-body-sm text-secondary">Electronics • Noise Cancelling</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-body-sm font-semibold text-on-surface">5.0</span>
<span class="text-body-sm text-secondary">(128 reviews)</span>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="group product-card bg-surface-container-lowest border border-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.04)]">
<div class="relative aspect-square overflow-hidden bg-surface-container-low">
<img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110" data-alt="A collection of professional grade copper kitchenware including a skillet and a pot, arranged artfully on a dark stone countertop. Subtle steam rises in the background to suggest warmth and culinary expertise. The lighting is sophisticated, with amber highlights reflecting off the copper surfaces, evoking a trustworthy and established brand feel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-HoPNadT0bh8mxlhCf6whkSbIrf3I46aYf3vO89CWJJOE6nLzR7mQo4nl_Fkhh67uzfTa-PEl5Uisds4pxXD4K6pfxS-klG0R4QrPC4STdaWhjLe05cSRZtnXmtONKdi7wr6OaDVbR1_zCjkQLh5feeLTiO04eSpbYia_3Lpf18zx820To5kfVngi1DhXqZZWFzWd7cj88Wl07IKiivBDBAFkvWXO0sWM6gxLr3QEXV9tj46thBcR"/>
<button class="cart-btn absolute bottom-4 right-4 translate-y-4 opacity-0 bg-primary text-secondary-fixed p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-on-primary-container active:scale-95">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
</button>
</div>
<div class="p-4 space-y-1">
<div class="flex justify-between items-start">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Copper Cookware Set</h4>
<span class="font-headline-sm text-headline-sm text-primary">$215.00</span>
</div>
<p class="text-body-sm text-secondary">Kitchenware • Professional Series</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-body-sm font-semibold text-on-surface">4.7</span>
<span class="text-body-sm text-secondary">(86 reviews)</span>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="group product-card bg-surface-container-lowest border border-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.04)]">
<div class="relative aspect-square overflow-hidden bg-surface-container-low">
<img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110" data-alt="Minimalist linen throw pillows in earthy tones of sand, terracotta, and charcoal, stacked neatly on a textured beige sofa. The image is captured with soft-focus in the background, emphasizing the organic fabric textures. The color palette is grounded and premium, reflecting the accessibility and reliability of the SME e-commerce platform." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOP6eekKz9lq02h1R0svpcVlenOTYYkSZV_AnEpLL4cQ67mmyINC0z4nXM80eotzJMmqDSWPjSmlR9IOPReVy7Mq0dY3nW8Y6pjgIjQbEEBrn8OdaRQoMSOewT-w63pt6tq-DGvic1HQLdmhWI8Dpnp7dtaP3Iq47XEz23GZGwYqQxidZMvj9MxNMEKPn52JLrpotn2Pgo3SxSCqqF8DsNk8PDtPJl6H1v6E8FXsqrzHq7ES5HLVwK"/>
<button class="cart-btn absolute bottom-4 right-4 translate-y-4 opacity-0 bg-primary text-secondary-fixed p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-on-primary-container active:scale-95">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
</button>
</div>
<div class="p-4 space-y-1">
<div class="flex justify-between items-start">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Linen Pillow Set</h4>
<span class="font-headline-sm text-headline-sm text-primary">$58.00</span>
</div>
<p class="text-body-sm text-secondary">Home Decor • 100% Organic Linen</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-body-sm font-semibold text-on-surface">4.9</span>
<span class="text-body-sm text-secondary">(215 reviews)</span>
</div>
</div>
</div>
<!-- Product Card 5 -->
<div class="group product-card bg-surface-container-lowest border border-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.04)]">
<div class="relative aspect-square overflow-hidden bg-surface-container-low">
<img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110" data-alt="A sleek, modern matte black smart kettle sitting on a minimalist kitchen counter. A thin stream of steam is visible, and the digital temperature display glows softly in amber. The scene is bright and airy with high-key lighting, maintaining the clean, professional visual identity of a premium commerce site." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsuA1KkViUzZ4I-k5_EU7Ojf_d9iJYkBrXCIVUGD8h61a0hjoAqDboxRQ7NfnTyseOLYJplQbqWuA58ZdgO8peo_7JQ8W3Vl6JuABmz1VP0VRgEe_LGLcIkLR6QUqx0yP8sWB-BQApY6cBebUBsNdQKPJQ4bdBBSSN8Jl65iOEUZwO7n3N-j_eWrCMa6iEbg_8KhmjFDR-wq0M3-TPhd58ua4_e1Nxa9U3SWerF8yjA_ll2ZvtDISv"/>
<button class="cart-btn absolute bottom-4 right-4 translate-y-4 opacity-0 bg-primary text-secondary-fixed p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-on-primary-container active:scale-95">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
</button>
</div>
<div class="p-4 space-y-1">
<div class="flex justify-between items-start">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Smart Temp Kettle</h4>
<span class="font-headline-sm text-headline-sm text-primary">$89.00</span>
</div>
<p class="text-body-sm text-secondary">Electronics • Precision Brewing</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-body-sm font-semibold text-on-surface">4.6</span>
<span class="text-body-sm text-secondary">(94 reviews)</span>
</div>
</div>
</div>
<!-- Product Card 6 -->
<div class="group product-card bg-surface-container-lowest border border-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.04)]">
<div class="relative aspect-square overflow-hidden bg-surface-container-low">
<img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110" data-alt="A pair of premium leather loafers in a rich mahogany color, placed on a white pedestal with sharp shadows. The leather has a soft sheen, indicating high quality. The image is minimalist and fashion-focused, using high-contrast studio lighting to create a sense of established luxury and SME reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvqe_tGmOcqlyzdX-_S2FzNbyjmVK0m1XDb_tFLuiItcBzpid0fzoJB8F32_KgB-n-EgMRzh0DaupXsrFERRQqzme6nMWD2ZWF6uj7NhpbdEzWOAb0NTXCv5fZKiZUDo2j_HuRL4qfDeLGiI-hHwehhjFIQw05HsQkZKRgKHhQ5m610woA6pusWCm1NHFTM1pBHyPGtW32gGJ8J9DAzH1_r-CpbIbyNMyESrceY2t3kxjl4g3mkQHG"/>
<button class="cart-btn absolute bottom-4 right-4 translate-y-4 opacity-0 bg-primary text-secondary-fixed p-3 rounded-full shadow-lg transition-all duration-300 hover:bg-on-primary-container active:scale-95">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
</button>
<div class="absolute top-4 left-4 bg-error text-on-error font-label-md text-xs px-2 py-1 rounded">SALE</div>
</div>
<div class="p-4 space-y-1">
<div class="flex justify-between items-start">
<h4 class="font-headline-sm text-headline-sm text-on-surface">Classic Loafers</h4>
<span class="font-headline-sm text-headline-sm text-primary">$180.00</span>
</div>
<p class="text-body-sm text-secondary">Fashion • Italian Leather</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary-container text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-body-sm font-semibold text-on-surface">4.5</span>
<span class="text-body-sm text-secondary">(56 reviews)</span>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="flex justify-center items-center gap-2 pt-stack-lg">
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-surface-container-highest text-secondary hover:text-primary hover:border-primary transition-all">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-secondary-fixed font-semibold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-surface-container-highest text-secondary hover:text-primary transition-all">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-surface-container-highest text-secondary hover:text-primary transition-all">3</button>
<span class="text-secondary px-2">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-surface-container-highest text-secondary hover:text-primary transition-all">12</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg border border-surface-container-highest text-secondary hover:text-primary hover:border-primary transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</section>
</main>
<!-- Floating Action Button (Optional Contextual Enhancement) -->
<button class="fixed bottom-8 right-8 bg-primary-container text-on-primary-container p-4 rounded-full shadow-xl hover:scale-110 active:scale-95 transition-all z-40 md:hidden">
<span class="material-symbols-outlined">filter_list</span>
</button>
<!-- Footer -->
<footer class="w-full bg-surface-container-low mt-stack-lg">
<div class="flex flex-col md:flex-row justify-between items-center px-margin-desktop py-stack-lg max-w-container-max mx-auto gap-gutter">
<div class="space-y-4 text-center md:text-left">
<a class="font-headline-sm text-headline-sm font-bold text-on-surface" href="#">Luminous Commerce</a>
<p class="font-body-sm text-body-sm text-secondary max-w-xs">Empowering small and medium enterprises with high-quality, professional digital commerce solutions.</p>
<p class="font-body-sm text-body-sm text-secondary">© 2024 Luminous Commerce. Empowering SMEs.</p>
</div>
<div class="flex flex-wrap justify-center gap-x-8 gap-y-4">
<a class="font-body-sm text-body-sm text-secondary hover:text-on-surface transition-colors" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-secondary hover:text-on-surface transition-colors" href="#">Terms of Service</a>
<a class="font-body-sm text-body-sm text-secondary hover:text-on-surface transition-colors" href="#">Shipping Info</a>
<a class="font-body-sm text-body-sm text-secondary hover:text-on-surface transition-colors" href="#">Contact Us</a>
</div>
</div>
</footer>
<script>
        // Simple Micro-interaction for Cart Counter
        const cartButtons = document.querySelectorAll('.cart-btn');
        const cartBadge = document.querySelector('header .bg-primary-container');
        
        cartButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                let currentCount = parseInt(cartBadge.innerText);
                cartBadge.innerText = currentCount + 1;
                
                // Animation effect
                btn.classList.add('scale-90');
                setTimeout(() => btn.classList.remove('scale-90'), 150);
                
                cartBadge.classList.add('scale-125');
                setTimeout(() => cartBadge.classList.remove('scale-125'), 300);
            });
        });
    </script>
</body></html>