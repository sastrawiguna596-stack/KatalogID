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
<!-- Leaflet CSS & JS (OpenStreetMap) -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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
<!-- Active State: Settings -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span> Settings
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
<p class="font-body-lg text-body-md md:text-body-lg text-on-surface-variant">Kelola profil, informasi toko, dan keamanan akun penjual Anda.</p>

@if(session('success'))
<div class="mt-4 p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-xl font-bold">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="mt-4 p-4 bg-rose-100 border border-rose-300 text-rose-800 rounded-xl font-bold space-y-1">
    @foreach($errors->all() as $error)
        <p>• {{ $error }}</p>
    @endforeach
</div>
@endif
</div>

<!-- Bento Grid Layout for Settings -->
<div class="grid grid-cols-12 gap-4 md:gap-gutter">
<!-- Profile Information Card -->
<section class="col-span-12 lg:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-xl p-4 md:p-stack-md">
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-stack-md border-b border-outline-variant pb-4 gap-3">
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-3xl">person</span>
            <h2 class="font-headline-sm text-headline-sm font-bold">Profile & Store Information</h2>
        </div>
        <button type="submit" class="bg-primary text-on-primary px-4 md:px-6 py-2 rounded-lg font-label-md text-label-md hover:brightness-90 active:scale-95 transition-all self-start sm:self-auto font-bold">Save Changes</button>
    </div>
    <div class="flex flex-col md:flex-row gap-stack-lg">
        <!-- Avatar Column -->
        <div class="flex flex-col items-center gap-4">
            <div class="relative group cursor-pointer" onclick="document.getElementById('avatar-input').click()">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-surface-container bg-surface-container">
                    <img id="avatar-preview" class="w-full h-full object-cover" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&background=7c5800&color=ffffff&size=128' }}" alt="Avatar"/>
                </div>
                <div class="absolute bottom-1 right-1 bg-surface border border-outline-variant w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center hover:bg-surface-variant transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-on-surface-variant">photo_camera</span>
                </div>
            </div>
            <input type="file" name="avatar" id="avatar-input" class="hidden" accept="image/*" onchange="previewAvatar(this)">
            <p class="font-body-sm text-body-sm text-on-surface-variant text-center max-w-[140px]">Klik foto untuk ubah avatar. Maks 2MB.</p>
        </div>
        <!-- Form Column -->
        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-stack-md">
            <div class="flex flex-col gap-2">
                <label class="font-label-md text-label-md text-on-surface font-bold">Full Name</label>
                <input name="name" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="text" value="{{ old('name', Auth::user()->name) }}" required/>
            </div>
            <div class="flex flex-col gap-2">
                <label class="font-label-md text-label-md text-on-surface font-bold">Email Address</label>
                <input name="email" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="email" value="{{ old('email', Auth::user()->email) }}" required/>
            </div>
            <div class="flex flex-col gap-2">
                <label class="font-label-md text-label-md text-on-surface font-bold">Phone Number</label>
                <input name="phone" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="tel" value="{{ old('phone', Auth::user()->phone) }}"/>
            </div>
            <div class="flex flex-col gap-2">
                <label class="font-label-md text-label-md text-on-surface font-bold">Nama Toko (Store Name)</label>
                <input name="nama_toko" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" type="text" value="{{ old('nama_toko', Auth::user()->store->nama_toko ?? '') }}"/>
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col gap-2">
                <label class="font-label-md text-label-md text-on-surface font-bold">Alamat (Address)</label>
                <textarea name="address" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" rows="2">{{ old('address', Auth::user()->address) }}</textarea>
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col gap-2">
                <label class="font-label-md text-label-md text-on-surface font-bold">Deskripsi Toko</label>
                <textarea name="deskripsi_toko" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" rows="3">{{ old('deskripsi_toko', Auth::user()->store->deskripsi ?? '') }}</textarea>
            </div>
        </div>
    </div>
</form>
</section>

<!-- Security Quick Actions -->
<aside class="col-span-12 lg:col-span-4 flex flex-col gap-4 md:gap-gutter">
<div class="bg-primary-container text-on-primary-container p-4 md:p-stack-md rounded-xl shadow-sm border border-primary/20">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-2xl">verified_user</span>
<h3 class="font-headline-sm text-headline-sm font-bold">Status Keamanan: Tinggi</h3>
</div>
<p class="font-body-sm text-body-sm mb-4 opacity-90">Akun penjual Anda terlindungi dengan baik dalam sistem Katalag IDN.</p>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-4 md:p-stack-md">
<h3 class="font-headline-sm text-headline-sm mb-4 font-bold">Informasi Akun</h3>
<div class="space-y-4">
<div class="flex justify-between items-center">
<span class="font-body-md text-on-surface-variant">Role Akun</span>
<span class="bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full font-label-md text-[12px] font-bold">Verified Seller</span>
</div>
<div class="flex justify-between items-center">
<span class="font-body-md text-on-surface-variant">Toko Terdaftar</span>
<span class="font-label-md text-on-surface font-bold">{{ Auth::user()->store->nama_toko ?? '-' }}</span>
</div>
</div>
</div>
</aside>

<!-- Store Address Book Section -->
<section class="col-span-12 bg-surface-container-lowest border border-outline-variant rounded-xl p-4 md:p-stack-md">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-stack-md gap-3">
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-3xl">storefront</span>
            <div>
                <h2 class="font-headline-sm text-headline-sm font-bold">Alamat Toko (Store Address Book)</h2>
                <p class="text-xs text-on-surface-variant">Kelola daftar alamat pengambilan & pengiriman untuk toko Anda</p>
            </div>
        </div>
        <button type="button" onclick="openAddModal()" class="border-2 border-on-surface text-on-surface px-4 md:px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-on-surface hover:text-white transition-all flex items-center gap-2 self-start sm:self-auto font-bold">
            <span class="material-symbols-outlined">add_location_alt</span> Tambah Alamat Toko Baru
        </button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-gutter">
        @forelse(Auth::user()->addresses as $addr)
            <div class="{{ $addr->is_default ? 'border-2 border-primary bg-primary-fixed/10' : 'border border-outline-variant hover:border-outline' }} rounded-xl p-stack-sm relative transition-colors flex flex-col justify-between min-h-[180px]">
                <div>
                    <div class="absolute top-4 right-4 flex gap-2">
                        <button type="button" onclick="openEditModal({{ json_encode($addr) }})" class="text-on-surface-variant hover:text-primary transition-colors" title="Edit Alamat Toko">
                            <span class="material-symbols-outlined">edit</span>
                        </button>
                        <form action="{{ route('addresses.destroy', $addr->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus alamat toko ini?');" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-on-surface-variant hover:text-error transition-colors" title="Hapus Alamat Toko">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </form>
                    </div>

                    @if($addr->is_default)
                        <div class="bg-primary text-on-primary inline-block px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider mb-3">Alamat Utama Toko</div>
                    @else
                        <div class="invisible h-6 mb-3">Placeholder</div>
                    @endif

                    <h4 class="font-label-md text-on-surface mb-1 font-bold">{{ $addr->label }}</h4>
                    <p class="font-body-sm text-on-surface-variant leading-relaxed">
                        <strong class="text-on-surface">{{ $addr->receiver_name }}</strong> ({{ $addr->phone }})<br/>
                        {{ $addr->address }}<br/>
                        @if($addr->city || $addr->postal_code)
                            {{ $addr->city }}{{ $addr->city && $addr->postal_code ? ', ' : '' }}{{ $addr->postal_code }}
                        @endif
                    </p>
                </div>

                <div>
                    @if(!$addr->is_default)
                        <form action="{{ route('addresses.set_default', $addr->id) }}" method="POST" class="mt-4">
                            @csrf
                            <button type="submit" class="text-primary font-label-md text-label-md hover:underline font-bold">Set sebagai Alamat Utama Toko</button>
                        </form>
                    @endif
                </div>
            </div>
        @empty
            <div onclick="openAddModal()" class="col-span-full border-2 border-dashed border-outline-variant rounded-xl p-8 flex flex-col items-center justify-center text-on-surface-variant min-h-[180px] cursor-pointer hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-5xl opacity-40 mb-2 text-primary">add_location</span>
                <p class="font-label-md text-label-md font-bold">Belum Ada Alamat Toko Tersimpan</p>
                <p class="text-xs text-secondary mb-3 text-center">Tambahkan alamat lokasi fisik atau gudang toko Anda untuk keperluan pengiriman barang.</p>
                <span class="px-4 py-2 bg-primary text-on-primary font-bold rounded-lg text-xs hover:brightness-90 transition-all">+ Tambah Alamat Toko Baru</span>
            </div>
        @endforelse

        @if(Auth::user()->addresses->count() > 0)
            <div onclick="openAddModal()" class="border border-dashed border-outline-variant rounded-xl p-stack-sm flex flex-col items-center justify-center text-on-surface-variant min-h-[180px] cursor-pointer hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-4xl opacity-30 mb-2 text-primary">add_location</span>
                <p class="font-label-md text-label-md opacity-60">Tambah Alamat Toko Lainnya</p>
            </div>
        @endif
    </div>
</section>

<!-- Security Settings Section -->
<section class="col-span-12 bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
<div class="p-4 md:p-stack-md border-b border-outline-variant">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">shield</span>
<h2 class="font-headline-sm text-headline-sm font-bold">Keamanan & Ubah Password</h2>
</div>
</div>
<form action="{{ route('profile.update') }}" method="POST" class="p-4 md:p-stack-md space-y-4">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col gap-2">
            <label class="font-label-md text-label-md text-on-surface font-bold">Password Saat Ini</label>
            <input name="current_password" type="password" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" placeholder="Masukkan password lama"/>
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-label-md text-label-md text-on-surface font-bold">Password Baru</label>
            <input name="new_password" type="password" class="border border-outline-variant rounded-lg px-4 py-3 bg-surface-container-low font-body-md focus:border-on-surface" placeholder="Minimal 6 karakter"/>
        </div>
    </div>
    <button type="submit" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md hover:brightness-90 transition-all font-bold">Ubah Password</button>
</form>
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

<!-- Modal Add Address Toko -->
<div id="add-address-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4 overflow-y-auto">
    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl w-full max-w-xl shadow-2xl overflow-hidden transform transition-all my-8">
        <div class="flex justify-between items-center px-6 py-4 border-b border-outline-variant bg-surface-container-low">
            <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">add_location_alt</span>
                Tambah Alamat Toko Baru
            </h3>
            <button type="button" onclick="closeAddModal()" class="text-on-surface-variant hover:text-on-surface">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form action="{{ route('addresses.store') }}" method="POST" class="p-6 space-y-4 max-h-[80vh] overflow-y-auto">
            @csrf
            <input type="hidden" id="add_latitude" name="latitude"/>
            <input type="hidden" id="add_longitude" name="longitude"/>

            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Pilih Lokasi Toko di Peta (OpenStreetMap)</label>
                <div class="relative">
                    <div id="add-map" class="w-full h-56 rounded-lg border border-outline-variant z-10"></div>
                    <div id="add-map-loader" class="absolute inset-0 bg-white/70 backdrop-blur-xs flex items-center justify-center z-20 hidden">
                        <span class="font-label-md text-primary font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined animate-spin">sync</span> Mengambil alamat dari peta...
                        </span>
                    </div>
                </div>
                <p class="text-[12px] text-on-surface-variant mt-1.5 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm text-primary">location_on</span>
                    Klik pada peta atau geser pin marker untuk mengisi alamat toko, kota, & kode pos secara otomatis.
                </p>
            </div>

            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Label Alamat Toko *</label>
                <input type="text" name="label" required placeholder="Contoh: Gudang Utama, Toko Cabang Bandung, Rumah Seller" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Nama Pengirim / Penanggung Jawab *</label>
                    <input type="text" name="receiver_name" required value="{{ old('receiver_name', Auth::user()->store->nama_toko ?? Auth::user()->name) }}" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">No. HP / Telepon Toko *</label>
                    <input type="tel" name="phone" required value="{{ old('phone', Auth::user()->phone) }}" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Alamat Lengkap Toko *</label>
                <textarea id="add_address" name="address" required rows="3" placeholder="Nama jalan, RT/RW, kelurahan, kecamatan" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"></textarea>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Kota / Kabupaten</label>
                    <input type="text" id="add_city" name="city" placeholder="Contoh: Bandung" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Kode Pos</label>
                    <input type="text" id="add_postal_code" name="postal_code" placeholder="Contoh: 40123" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
            </div>
            <div class="flex items-center gap-2 pt-2">
                <input type="checkbox" name="is_default" id="add_is_default" value="1" class="rounded border-outline-variant text-primary focus:ring-primary h-4 w-4"/>
                <label for="add_is_default" class="text-body-sm text-on-surface font-semibold cursor-pointer">Jadikan sebagai alamat utama toko (Default Shipping Origin)</label>
            </div>
            <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant">
                <button type="button" onclick="closeAddModal()" class="px-5 py-2.5 border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-variant font-semibold">Batal</button>
                <button type="submit" class="px-5 py-2.5 bg-primary text-on-primary font-bold rounded-lg font-label-md text-label-md hover:brightness-90">Simpan Alamat Toko</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Address Toko -->
<div id="edit-address-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4 overflow-y-auto">
    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl w-full max-w-xl shadow-2xl overflow-hidden transform transition-all my-8">
        <div class="flex justify-between items-center px-6 py-4 border-b border-outline-variant bg-surface-container-low">
            <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">edit_location</span>
                Edit Alamat Toko
            </h3>
            <button type="button" onclick="closeEditModal()" class="text-on-surface-variant hover:text-on-surface">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form id="edit-address-form" action="" method="POST" class="p-6 space-y-4 max-h-[80vh] overflow-y-auto">
            @csrf
            @method('PUT')
            <input type="hidden" id="edit_latitude" name="latitude"/>
            <input type="hidden" id="edit_longitude" name="longitude"/>

            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Pilih Lokasi Toko di Peta (OpenStreetMap)</label>
                <div class="relative">
                    <div id="edit-map" class="w-full h-56 rounded-lg border border-outline-variant z-10"></div>
                    <div id="edit-map-loader" class="absolute inset-0 bg-white/70 backdrop-blur-xs flex items-center justify-center z-20 hidden">
                        <span class="font-label-md text-primary font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined animate-spin">sync</span> Mengambil alamat dari peta...
                        </span>
                    </div>
                </div>
                <p class="text-[12px] text-on-surface-variant mt-1.5 flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm text-primary">location_on</span>
                    Klik pada peta atau geser pin marker untuk memperbarui alamat toko.
                </p>
            </div>

            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Label Alamat Toko *</label>
                <input type="text" id="edit_label" name="label" required class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Nama Pengirim / Penanggung Jawab *</label>
                    <input type="text" id="edit_receiver_name" name="receiver_name" required class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">No. HP / Telepon Toko *</label>
                    <input type="tel" id="edit_phone" name="phone" required class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
            </div>
            <div>
                <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Alamat Lengkap Toko *</label>
                <textarea id="edit_address" name="address" required rows="3" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"></textarea>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Kota / Kabupaten</label>
                    <input type="text" id="edit_city" name="city" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-bold">Kode Pos</label>
                    <input type="text" id="edit_postal_code" name="postal_code" class="w-full border border-outline-variant rounded-lg px-4 py-2.5 bg-surface-container-low font-body-md focus:border-on-surface"/>
                </div>
            </div>
            <div class="flex items-center gap-2 pt-2">
                <input type="checkbox" name="is_default" id="edit_is_default" value="1" class="rounded border-outline-variant text-primary focus:ring-primary h-4 w-4"/>
                <label for="edit_is_default" class="text-body-sm text-on-surface font-semibold cursor-pointer">Jadikan sebagai alamat utama toko (Default Shipping Origin)</label>
            </div>
            <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant">
                <button type="button" onclick="closeEditModal()" class="px-5 py-2.5 border border-outline-variant rounded-lg font-label-md text-label-md hover:bg-surface-variant font-semibold">Batal</button>
                <button type="submit" class="px-5 py-2.5 bg-primary text-on-primary font-bold rounded-lg font-label-md text-label-md hover:brightness-90">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<script>
    let addMap = null, addMarker = null;
    let editMap = null, editMarker = null;
    const defaultCenter = [-6.200000, 106.816666]; // Default Jakarta / Indonesia

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

    // Geocoding Helper: Reverse Geocode Lat/Lng to Address using OSM Nominatim API
    async function reverseGeocode(lat, lng, addressElemId, cityElemId, postalCodeElemId, loaderElemId) {
        if (loaderElemId) {
            const loader = document.getElementById(loaderElemId);
            if (loader) loader.classList.remove('hidden');
        }
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&addressdetails=1`);
            const data = await response.json();
            if (data && data.address) {
                const addr = data.address;
                const road = addr.road || addr.street || addr.pedestrian || '';
                const suburb = addr.suburb || addr.village || addr.neighbourhood || addr.city_district || '';
                const district = addr.county || addr.state_district || '';
                
                let fullAddr = [road, suburb, district].filter(Boolean).join(', ');
                if (!fullAddr && data.display_name) {
                    fullAddr = data.display_name;
                }
                
                if (fullAddr) {
                    document.getElementById(addressElemId).value = fullAddr;
                }

                const city = addr.city || addr.town || addr.municipality || addr.city_district || addr.regency || '';
                if (city) {
                    document.getElementById(cityElemId).value = city;
                }

                const postcode = addr.postcode || '';
                if (postcode) {
                    document.getElementById(postalCodeElemId).value = postcode;
                }
            }
        } catch (error) {
            console.error("Geocoding failed:", error);
        } finally {
            if (loaderElemId) {
                const loader = document.getElementById(loaderElemId);
                if (loader) loader.classList.add('hidden');
            }
        }
    }

    function initAddMap() {
        if (addMap) return;
        addMap = L.map('add-map').setView(defaultCenter, 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(addMap);

        addMarker = L.marker(defaultCenter, { draggable: true }).addTo(addMap);

        function onLocationSelect(lat, lng) {
            addMarker.setLatLng([lat, lng]);
            document.getElementById('add_latitude').value = lat;
            document.getElementById('add_longitude').value = lng;
            reverseGeocode(lat, lng, 'add_address', 'add_city', 'add_postal_code', 'add-map-loader');
        }

        addMap.on('click', function(e) {
            onLocationSelect(e.latlng.lat, e.latlng.lng);
        });

        addMarker.on('dragend', function(e) {
            const pos = e.target.getLatLng();
            onLocationSelect(pos.lat, pos.lng);
        });

        // Try getting user's current location if available
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((pos) => {
                const userLat = pos.coords.latitude;
                const userLng = pos.coords.longitude;
                addMap.setView([userLat, userLng], 15);
                onLocationSelect(userLat, userLng);
            }, () => {});
        }
    }

    function initEditMap(lat, lng) {
        const center = (lat && lng) ? [lat, lng] : defaultCenter;
        if (!editMap) {
            editMap = L.map('edit-map').setView(center, 14);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(editMap);

            editMarker = L.marker(center, { draggable: true }).addTo(editMap);

            function onEditLocationSelect(newLat, newLng) {
                editMarker.setLatLng([newLat, newLng]);
                document.getElementById('edit_latitude').value = newLat;
                document.getElementById('edit_longitude').value = newLng;
                reverseGeocode(newLat, newLng, 'edit_address', 'edit_city', 'edit_postal_code', 'edit-map-loader');
            }

            editMap.on('click', function(e) {
                onEditLocationSelect(e.latlng.lat, e.latlng.lng);
            });

            editMarker.on('dragend', function(e) {
                const pos = e.target.getLatLng();
                onEditLocationSelect(pos.lat, pos.lng);
            });
        } else {
            editMap.setView(center, 14);
            editMarker.setLatLng(center);
        }
    }

    function openAddModal() {
        document.getElementById('add-address-modal').classList.remove('hidden');
        setTimeout(() => {
            initAddMap();
            if (addMap) addMap.invalidateSize();
        }, 200);
    }

    function closeAddModal() {
        document.getElementById('add-address-modal').classList.add('hidden');
    }

    function openEditModal(addr) {
        const form = document.getElementById('edit-address-form');
        form.action = '/addresses/' + addr.id;
        document.getElementById('edit_label').value = addr.label || '';
        document.getElementById('edit_receiver_name').value = addr.receiver_name || '';
        document.getElementById('edit_phone').value = addr.phone || '';
        document.getElementById('edit_address').value = addr.address || '';
        document.getElementById('edit_city').value = addr.city || '';
        document.getElementById('edit_postal_code').value = addr.postal_code || '';
        document.getElementById('edit_latitude').value = addr.latitude || '';
        document.getElementById('edit_longitude').value = addr.longitude || '';
        document.getElementById('edit_is_default').checked = addr.is_default ? true : false;
        
        document.getElementById('edit-address-modal').classList.remove('hidden');
        
        setTimeout(() => {
            initEditMap(addr.latitude, addr.longitude);
            if (editMap) editMap.invalidateSize();
        }, 200);
    }

    function closeEditModal() {
        document.getElementById('edit-address-modal').classList.add('hidden');
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

    function previewAvatar(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatar-preview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    console.log("Seller Account Settings Page Initialized with Leaflet OSM Store Address Integration");
</script>
</body></html>