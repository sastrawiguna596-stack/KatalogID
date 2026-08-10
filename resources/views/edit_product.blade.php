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
<form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md font-bold">
        <span class="material-symbols-outlined">logout</span> Sign Out
    </button>
</form>
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

            <!-- Edit Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <!-- Left Column: Primary Details & Media -->
                <div class="lg:col-span-2 space-y-gutter">
                    <!-- Basic Information Card -->
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Informasi Dasar Produk</h3>
                        <div class="space-y-6">
                            <div>
                                <label class="block font-label-md text-label-md text-secondary mb-2">Nama Produk *</label>
                                <input name="nama_produk" value="{{ $product->nama_produk }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" type="text"/>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-label-md text-label-md text-secondary mb-2">Kategori *</label>
                                    <select name="category_id" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none appearance-none cursor-pointer">
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block font-label-md text-label-md text-secondary mb-2">Berat (Gram) *</label>
                                    <input name="berat_gram" value="{{ $product->berat_gram }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" type="number"/>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-secondary mb-2">Deskripsi Lengkap *</label>
                                <textarea name="deskripsi_lengkap" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" rows="5">{{ $product->deskripsi_lengkap }}</textarea>
                            </div>
                        </div>
                    </section>

                    <!-- Galeri Foto Saat Ini & Upload Baru -->
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-4 text-on-surface">Galeri Foto Produk</h3>
                        
                        <!-- List Foto Tersimpan -->
                        @if($product->galleries->count() > 0)
                        <p class="text-xs text-secondary mb-3">Foto tersimpan (klik 'Hapus' untuk menghapus foto):</p>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
                            @foreach($product->galleries as $gallery)
                            <div class="relative group aspect-square rounded-xl overflow-hidden border border-outline-variant bg-surface-container-low">
                                <img class="w-full h-full object-cover" src="{{ str_starts_with($gallery->foto_path, 'http') ? $gallery->foto_path : asset($gallery->foto_path) }}" alt="{{ $product->nama_produk }}"/>
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <button type="button" onclick="event.preventDefault(); document.getElementById('delete-photo-{{ $gallery->id }}').submit();" class="px-3 py-1.5 bg-error text-white font-bold text-xs rounded-lg shadow-md hover:bg-red-700 transition-all flex items-center gap-1">
                                        <span class="material-symbols-outlined text-xs">delete</span> Hapus
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <div class="border-2 border-dashed border-outline-variant rounded-xl p-6 text-center flex flex-col items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-3xl text-primary">cloud_upload</span>
                            <p class="font-label-md text-on-surface text-sm">Tambah Foto Galeri Baru (Dapat pilih beberapa foto)</p>
                            <input type="file" name="gambar[]" multiple class="block w-full text-xs text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-primary-container file:text-on-primary-container hover:file:bg-[#ffaa00]"/>
                        </div>
                    </section>

                    <!-- Kelola Varian Produk -->
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Varian / Jenis Produk</h3>
                                <p class="text-xs text-secondary mt-0.5">Kelola opsi varian seperti Warna, Ukuran, atau Jenis produk beserta harga tambahan & stoknya.</p>
                            </div>
                            <button type="button" onclick="addVariantRow()" class="text-xs bg-primary/10 text-primary font-bold px-3 py-2 rounded-lg hover:bg-primary/20 transition-all flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">add</span> Tambah Varian
                            </button>
                        </div>
                        <div id="variant-rows" class="space-y-3">
                            @forelse($product->variants as $vIndex => $variant)
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 variant-row bg-surface-container-low/50 p-3 rounded-xl border border-outline-variant/50">
                                <div class="flex-1">
                                    <label class="block text-[10px] text-secondary font-bold mb-1">Nama Varian</label>
                                    <input name="variants[{{ $vIndex }}][nama]" value="{{ $variant->nama_varian }}" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="Nama Varian (misal: Merah / Size L)"/>
                                </div>
                                <div class="w-full sm:w-36">
                                    <label class="block text-[10px] text-secondary font-bold mb-1">Harga Tambahan (Rp)</label>
                                    <input name="variants[{{ $vIndex }}][harga]" value="{{ (int)$variant->harga_tambahan }}" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="0"/>
                                </div>
                                <div class="w-full sm:w-28">
                                    <label class="block text-[10px] text-secondary font-bold mb-1">Stok Varian</label>
                                    <input name="variants[{{ $vIndex }}][stok]" value="{{ $variant->stok_varian }}" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="20"/>
                                </div>
                                <div class="self-end sm:self-center pt-2 sm:pt-4">
                                    <button type="button" onclick="this.closest('.variant-row').remove()" class="text-error p-2 hover:bg-error-container/20 rounded-lg flex items-center gap-1 text-xs font-bold" title="Hapus Varian Ini">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                        <span class="sm:hidden">Hapus</span>
                                    </button>
                                </div>
                            </div>
                            @empty
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 variant-row bg-surface-container-low/50 p-3 rounded-xl border border-outline-variant/50">
                                <div class="flex-1">
                                    <label class="block text-[10px] text-secondary font-bold mb-1">Nama Varian</label>
                                    <input name="variants[0][nama]" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="Nama Varian (misal: Standard / Original)"/>
                                </div>
                                <div class="w-full sm:w-36">
                                    <label class="block text-[10px] text-secondary font-bold mb-1">Harga Tambahan (Rp)</label>
                                    <input name="variants[0][harga]" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="0"/>
                                </div>
                                <div class="w-full sm:w-28">
                                    <label class="block text-[10px] text-secondary font-bold mb-1">Stok Varian</label>
                                    <input name="variants[0][stok]" value="{{ $product->stok }}" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="20"/>
                                </div>
                                <div class="self-end sm:self-center pt-2 sm:pt-4">
                                    <button type="button" onclick="this.closest('.variant-row').remove()" class="text-error p-2 hover:bg-error-container/20 rounded-lg flex items-center gap-1 text-xs font-bold">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                    </button>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </section>
                </div>

                <!-- Right Column: Sidebar Settings -->
                <div class="space-y-gutter">
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Harga & Stok Utuh</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Harga Utama (Rp) *</label>
                                <input name="harga" value="{{ $product->harga }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none font-bold text-primary" type="number"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Harga Sebelum Diskon (Rp)</label>
                                <input name="harga_diskon" value="{{ $product->harga_diskon }}" class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Stok Total Produk *</label>
                                <input name="stok" value="{{ $product->stok }}" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Badge (Opsional)</label>
                                <input name="badge" value="{{ $product->badge }}" class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="NEW / SALE / BEST SELLER"/>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </form>

        <!-- Hidden Forms for Photo Deletion -->
        @if($product->galleries->count() > 0)
            @foreach($product->galleries as $gallery)
            <form id="delete-photo-{{ $gallery->id }}" action="{{ route('product_galleries.destroy', $gallery->id) }}" method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
            @endforeach
        @endif
    </div>

<script>
        let variantCounter = {{ $product->variants->count() > 0 ? $product->variants->count() + 10 : 10 }};
        function addVariantRow() {
            const container = document.getElementById('variant-rows');
            if (!container) return;
            const div = document.createElement('div');
            div.className = 'flex flex-col sm:flex-row items-stretch sm:items-center gap-3 variant-row bg-surface-container-low/50 p-3 rounded-xl border border-outline-variant/50';
            div.innerHTML = `
                <div class="flex-1">
                    <label class="block text-[10px] text-secondary font-bold mb-1">Nama Varian</label>
                    <input name="variants[${variantCounter}][nama]" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="Nama Varian (misal: Merah / Size L)"/>
                </div>
                <div class="w-full sm:w-36">
                    <label class="block text-[10px] text-secondary font-bold mb-1">Harga Tambahan (Rp)</label>
                    <input name="variants[${variantCounter}][harga]" value="0" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="0"/>
                </div>
                <div class="w-full sm:w-28">
                    <label class="block text-[10px] text-secondary font-bold mb-1">Stok Varian</label>
                    <input name="variants[${variantCounter}][stok]" value="{{ $product->stok }}" class="w-full bg-white border border-outline-variant rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="20"/>
                </div>
                <div class="self-end sm:self-center pt-2 sm:pt-4">
                    <button type="button" onclick="this.closest('.variant-row').remove()" class="text-error p-2 hover:bg-error-container/20 rounded-lg flex items-center gap-1 text-xs font-bold">
                        <span class="material-symbols-outlined text-sm">delete</span>
                    </button>
                </div>
            `;
            container.appendChild(div);
            variantCounter++;
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