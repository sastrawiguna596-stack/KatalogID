<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Edit Product | Luminous Commerce</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            background-color: #fbf9f8;
            color: #1b1c1c;
        }
        .sidebar-active {
            color: #7c5800 !important;
            font-weight: 700;
            border-bottom: 2px solid #7c5800;
            padding-bottom: 4px;
        }
        .custom-shadow {
            box-shadow: 0px 4px 20px rgba(0,0,0,0.04);
        }
        .modal-shadow {
            box-shadow: 0px 12px 40px rgba(0,0,0,0.08);
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
<body class="font-body-md text-body-md overflow-x-hidden">
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


<!-- Main Content -->
<main class="lg:pl-64 pt-20 px-4 md:px-margin-desktop py-6 min-h-screen">
<div class="max-w-container-max mx-auto">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 text-secondary font-label-md mb-6">
<a class="hover:text-primary" href="{{ route('inventories') }}">Inventory</a>
<span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
<span class="text-on-surface">Edit Product</span>
</nav>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-gutter">
            @csrf
            @method('PUT')
            <!-- Header Action Row -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-gutter mb-stack-lg">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Edit Product: {{ $product->nama_produk }}</h2>
                    <p class="text-secondary font-body-md">Refine your product details and manage its availability.</p>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('inventories') }}" class="px-gutter py-3 border border-outline-variant text-on-surface font-label-md rounded-lg hover:bg-surface-container-high transition-colors">
                        Cancel
                    </a>
                    <button type="submit" class="px-gutter py-3 bg-primary text-on-secondary font-label-md rounded-lg hover:bg-[#704f00] transition-colors shadow-sm font-bold">
                        Update Product
                    </button>
                </div>
            </div>

            <!-- Edit Grid (Bento Style) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <!-- Left Column: Primary Details & Media -->
                <div class="lg:col-span-2 space-y-gutter">
                    <!-- Basic Information Card -->
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Basic Information</h3>
                        <div class="space-y-6">
                            <div>
                                <label class="block font-label-md text-label-md text-secondary mb-2">Product Name</label>
                                <input name="nama_produk" value="{{ $product->nama_produk }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" type="text"/>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-label-md text-label-md text-secondary mb-2">Category</label>
                                    <select name="category_id" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none appearance-none cursor-pointer">
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block font-label-md text-label-md text-secondary mb-2">Berat (Gram)</label>
                                    <input name="berat_gram" value="{{ $product->berat_gram }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" type="number"/>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-secondary mb-2">Description</label>
                                <textarea name="deskripsi_lengkap" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" rows="5">{{ $product->deskripsi_lengkap }}</textarea>
                            </div>
                        </div>
                    </section>

                    <!-- Media Upload -->
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Tambah Foto Produk Baru</h3>
                        <div class="border-2 border-dashed border-outline-variant rounded-xl p-8 text-center flex flex-col items-center justify-center gap-3">
                            <span class="material-symbols-outlined text-4xl text-primary">cloud_upload</span>
                            <input type="file" name="gambar[]" multiple class="block w-full text-sm text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-container file:text-on-primary-container hover:file:bg-[#ffaa00]"/>
                        </div>
                    </section>
                </div>

                <!-- Right Column: Sidebar Settings -->
                <div class="space-y-gutter">
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Harga & Stok</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Harga (Rp) *</label>
                                <input name="harga" value="{{ $product->harga }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Harga Diskon (Rp)</label>
                                <input name="harga_diskon" value="{{ $product->harga_diskon }}" class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Stok *</label>
                                <input name="stok" value="{{ $product->stok }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Badge</label>
                                <input name="badge" value="{{ $product->badge }}" class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="text"/>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </form>
<button class="w-10 h-10 border border-outline-variant rounded flex items-center justify-center hover:bg-surface-container transition-colors">-</button>
<input class="w-full text-center border-none bg-transparent font-bold" type="number" value="124"/>
<button class="w-10 h-10 border border-outline-variant rounded flex items-center justify-center hover:bg-surface-container transition-colors">+</button>
</div>
</div>
</div>
</section>
<!-- Visibility & Shipping -->
<section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
<h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Logistics</h3>
<div class="space-y-6">
<div class="flex items-center justify-between">
<div>
<p class="font-label-md text-on-surface">Product Visibility</p>
<p class="text-[12px] text-secondary">Visible on storefront</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div>
<label class="block font-label-md text-label-md text-secondary mb-2">Weight (kg)</label>
<input class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background outline-none" type="text" value="0.45"/>
</div>
<div>
<label class="block font-label-md text-label-md text-secondary mb-2">Shipping Type</label>
<div class="space-y-2">
<label class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-colors">
<input checked="" class="text-primary focus:ring-primary" name="shipping" type="radio"/>
<span class="text-body-sm">Standard Shipping</span>
</label>
<label class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-colors">
<input class="text-primary focus:ring-primary" name="shipping" type="radio"/>
<span class="text-body-sm">Express Available</span>
</label>
</div>
</div>
</div>
</section>
<!-- Variations Chip List -->
<section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
<div class="flex items-center justify-between mb-stack-md">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Variants</h3>
<button class="material-symbols-outlined text-primary" data-icon="add_circle">add_circle</button>
</div>
<div class="flex flex-wrap gap-2">
<div class="px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded-full text-sm font-label-md flex items-center gap-2">
                                Medium / Gray <span class="material-symbols-outlined text-[14px] cursor-pointer" data-icon="close">close</span>
</div>
<div class="px-3 py-1 bg-surface-container-high text-secondary rounded-full text-sm font-label-md flex items-center gap-2">
                                Large / Gray <span class="material-symbols-outlined text-[14px] cursor-pointer" data-icon="close">close</span>
</div>
<div class="px-3 py-1 bg-surface-container-high text-secondary rounded-full text-sm font-label-md flex items-center gap-2">
                                Medium / Tan <span class="material-symbols-outlined text-[14px] cursor-pointer" data-icon="close">close</span>
</div>
</div>
</section>
</div>
</div>
<!-- Footer Meta -->
<footer class="mt-stack-lg pt-gutter border-t border-surface-container flex flex-col md:flex-row items-center justify-between gap-4 text-secondary text-sm mb-12">
<p>Last edited by <strong>John Doe</strong> on Oct 12, 2023 • 14:32</p>
<div class="flex items-center gap-6">
<a class="hover:text-on-surface transition-colors" href="#">Audit Log</a>
<a class="hover:text-on-surface transition-colors" href="#">Preview on Storefront</a>
</div>
</footer>
</div>
</main>
<!-- Delete Confirmation Modal -->
<div class="fixed inset-0 z-[100] hidden" id="deleteModal">
<div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="toggleDeleteModal()"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-md bg-surface-container-lowest p-stack-md rounded-xl modal-shadow">
<div class="flex items-center gap-4 text-error mb-4">
<span class="material-symbols-outlined text-3xl" data-icon="warning">warning</span>
<h4 class="font-headline-sm text-headline-sm">Delete Product?</h4>
</div>
<p class="text-secondary mb-stack-md">Are you sure you want to delete <strong class="text-on-surface">"Minimalist Felt Desk Mat"</strong>? This action cannot be undone and the product will be permanently removed from your inventory.</p>
<div class="flex items-center justify-end gap-4">
<button class="px-gutter py-2 text-secondary font-label-md hover:text-on-surface transition-colors" onclick="toggleDeleteModal()">Cancel</button>
<button class="px-gutter py-2 bg-error text-white font-label-md rounded-lg hover:bg-[#93000a] transition-colors active:scale-95">Delete Permanently</button>
</div>
</div>
</div>
<script>
        function toggleDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.toggle('hidden');
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

        // Simple interactive feedback for inputs
        document.querySelectorAll('input, textarea, select').forEach(element => {
            element.addEventListener('focus', () => {
                element.parentElement.classList.add('scale-[1.01]');
                element.parentElement.classList.add('transition-transform');
            });
            element.addEventListener('blur', () => {
                element.parentElement.classList.remove('scale-[1.01]');
            });
        });
    </script>
</body></html>