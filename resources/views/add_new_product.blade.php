<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Add New Product | Katalog IDN</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
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
                    "surface-dim": "#dbdad9"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-md": "24px",
                    "base": "8px",
                    "margin-mobile": "16px",
                    "margin-desktop": "40px",
                    "stack-sm": "12px",
                    "stack-lg": "48px",
                    "gutter": "24px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "body-sm": ["Plus Jakarta Sans"],
                    "headline-sm": ["Hanken Grotesk"],
                    "headline-lg": ["Hanken Grotesk"],
                    "label-md": ["Hanken Grotesk"],
                    "headline-xl-mobile": ["Hanken Grotesk"],
                    "body-md": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "headline-xl": ["Hanken Grotesk"],
                    "headline-lg-mobile": ["Hanken Grotesk"],
                    "headline-md": ["Hanken Grotesk"]
            },
            "fontSize": {
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            background-color: #fbf9f8;
            font-family: 'Plus Jakarta Sans', sans-serif;
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
<body class="font-body-md text-body-md overflow-x-hidden bg-background">
<!-- Sidebar -->
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
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="text-on-surface">Add Product</span>
        </nav>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-gutter">
            @csrf
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-gutter mb-stack-lg">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Create New Product</h2>
                    <p class="text-secondary font-body-md">Fill out the details below to add a new product to your catalog.</p>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('inventories') }}" class="px-gutter py-3 border border-outline-variant text-on-surface font-label-md rounded-lg hover:bg-surface-container-high transition-colors">
                        Cancel
                    </a>
                    <button type="submit" class="px-gutter py-3 bg-primary text-on-secondary font-label-md rounded-lg hover:bg-[#704f00] transition-colors shadow-sm font-bold">
                        Save Product
                    </button>
                </div>
            </div>

            @if(session('error'))
            <div class="p-4 bg-error-container text-on-error-container rounded-lg font-body-md">
                {{ session('error') }}
            </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                <div class="lg:col-span-2 space-y-gutter">
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Basic Information</h3>
                        <div class="space-y-6">
                            <div>
                                <label class="block font-label-md text-label-md text-secondary mb-2">Nama Produk *</label>
                                <input name="nama_produk" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" type="text" placeholder="e.g. Vas Terakota Handcrafted"/>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-label-md text-label-md text-secondary mb-2">Kategori *</label>
                                    <select name="category_id" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none appearance-none cursor-pointer">
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block font-label-md text-label-md text-secondary mb-2">Berat (Gram) *</label>
                                    <input name="berat_gram" value="500" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" type="number" placeholder="500"/>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-secondary mb-2">Deskripsi Lengkap *</label>
                                <textarea name="deskripsi_lengkap" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 focus:border-on-background transition-all outline-none" rows="5" placeholder="Deskripsi lengkap tentang produk..."></textarea>
                            </div>
                        </div>
                    </section>

                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Upload Galeri Foto Produk</h3>
                        <div class="border-2 border-dashed border-outline-variant rounded-xl p-8 text-center flex flex-col items-center justify-center gap-3">
                            <span class="material-symbols-outlined text-4xl text-primary">cloud_upload</span>
                            <p class="font-label-md text-on-surface">Pilih file gambar untuk produk ini (Bisa pilih lebih dari satu foto)</p>
                            <input type="file" name="gambar[]" multiple class="block w-full text-sm text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-container file:text-on-primary-container hover:file:bg-[#ffaa00]"/>
                            <p class="text-body-sm text-secondary">PNG, JPG, WEBP hingga 2MB per file. Foto pertama akan menjadi foto utama.</p>
                        </div>
                    </section>

                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Varian / Jenis Produk</h3>
                                <p class="text-xs text-secondary mt-0.5">Tambahkan opsi varian seperti Warna, Ukuran, atau Tipe produk beserta harga tambahannya (opsional).</p>
                            </div>
                            <button type="button" onclick="addVariantRow()" class="text-xs bg-primary/10 text-primary font-bold px-3 py-2 rounded-lg hover:bg-primary/20 transition-all flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">add</span> Tambah Varian
                            </button>
                        </div>
                        <div id="variant-rows" class="space-y-3">
                            <div class="flex items-center gap-3 variant-row">
                                <input name="variants[0][nama]" class="flex-1 bg-transparent border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="Nama Varian (misal: Merah / Size L / Wooden)"/>
                                <input name="variants[0][harga]" class="w-36 bg-transparent border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="Harga Tambahan Rp (0)"/>
                                <input name="variants[0][stok]" class="w-28 bg-transparent border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="Stok (20)"/>
                                <button type="button" onclick="this.parentElement.remove()" class="text-error p-1.5 hover:bg-error-container/20 rounded-lg">
                                    <span class="material-symbols-outlined text-sm">delete</span>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="space-y-gutter">
                    <section class="bg-surface-container-lowest p-gutter rounded-xl border border-[#EDEDED]">
                        <h3 class="font-headline-sm text-headline-sm mb-stack-md text-on-surface">Harga & Stok</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Harga (Rp) *</label>
                                <input name="harga" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="50000"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Harga Sebelum Diskon (Rp)</label>
                                <input name="harga_diskon" class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="60000"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Jumlah Stok *</label>
                                <input name="stok" value="25" required class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="25"/>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2">Badge (Opsional)</label>
                                <input name="badge" class="w-full bg-transparent border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="NEW / SALE / BEST SELLER"/>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </form>
    </div>
<script>
        let variantIndex = 1;
        function addVariantRow() {
            const container = document.getElementById('variant-rows');
            if (!container) return;
            const div = document.createElement('div');
            div.className = 'flex items-center gap-3 variant-row';
            div.innerHTML = `
                <input name="variants[${variantIndex}][nama]" class="flex-1 bg-transparent border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="text" placeholder="Nama Varian (misal: Merah / Size L / Wooden)"/>
                <input name="variants[${variantIndex}][harga]" class="w-36 bg-transparent border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="Harga Tambahan Rp (0)"/>
                <input name="variants[${variantIndex}][stok]" class="w-28 bg-transparent border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none" type="number" placeholder="Stok (20)"/>
                <button type="button" onclick="this.parentElement.remove()" class="text-error p-1.5 hover:bg-error-container/20 rounded-lg">
                    <span class="material-symbols-outlined text-sm">delete</span>
                </button>
            `;
            container.appendChild(div);
            variantIndex++;
        }

        function toggleSidebar() {
            document.getElementById('main-sidebar').classList.toggle('open');
            document.getElementById('sidebar-overlay').classList.toggle('active');
        }
        function closeSidebar() {
            document.getElementById('main-sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('active');
        }
    </script>
</body>
</html>
