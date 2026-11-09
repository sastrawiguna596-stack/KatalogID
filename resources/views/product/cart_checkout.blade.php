<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Keranjang Belanja &amp; Pembayaran | Katalog IDN</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-container": "#656464",
                        "surface": "#fbf9f8",
                        "surface-bright": "#fbf9f8",
                        "on-secondary": "#ffffff",
                        "on-surface": "#1b1c1c",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#f2f0f0",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-primary-container": "#6b4c00",
                        "surface-tint": "#7c5800",
                        "tertiary-fixed": "#e2e3e1",
                        "on-error-container": "#93000a",
                        "tertiary-container": "#c4c5c3",
                        "tertiary-fixed-dim": "#c6c7c5",
                        "surface-container-low": "#f5f3f3",
                        "on-primary-fixed": "#271900",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#ffdea8",
                        "outline-variant": "#d5c4ab",
                        "outline": "#837560",
                        "secondary": "#5f5e5e",
                        "on-surface-variant": "#514532",
                        "secondary-fixed": "#e5e2e1",
                        "on-secondary-fixed-variant": "#474646",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#ffba20",
                        "error-container": "#ffdad6",
                        "secondary-fixed-dim": "#c8c6c5",
                        "tertiary": "#5d5f5d",
                        "surface-dim": "#dbdad9",
                        "inverse-surface": "#303031",
                        "primary": "#7c5800",
                        "secondary-container": "#e5e2e1",
                        "background": "#fbf9f8",
                        "surface-container-highest": "#e4e2e2",
                        "on-tertiary-fixed-variant": "#454746",
                        "on-tertiary-fixed": "#1a1c1b",
                        "on-error": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#efeded",
                        "on-background": "#1b1c1c",
                        "primary-container": "#ffb800",
                        "on-primary-fixed-variant": "#5e4200",
                        "primary-fixed-dim": "#ffba20",
                        "surface-variant": "#e4e2e2",
                        "on-tertiary-container": "#505250",
                        "surface-container-high": "#e9e8e7"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "stack-md": "24px",
                        "base": "8px",
                        "margin-mobile": "16px",
                        "margin-desktop": "40px",
                        "stack-sm": "12px",
                        "stack-lg": "48px",
                        "gutter": "24px",
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        "body-sm": ["Plus Jakarta Sans", "sans-serif"],
                        "headline-sm": ["Hanken Grotesk", "sans-serif"],
                        "headline-lg": ["Hanken Grotesk", "sans-serif"],
                        "label-md": ["Hanken Grotesk", "sans-serif"],
                        "headline-xl-mobile": ["Hanken Grotesk", "sans-serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "headline-xl": ["Hanken Grotesk", "sans-serif"],
                        "headline-lg-mobile": ["Hanken Grotesk", "sans-serif"],
                        "headline-md": ["Hanken Grotesk", "sans-serif"]
                    }
                },
            },
        }
    </script>
    <style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            animation: pageFadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #7c5800 !important;
            box-shadow: 0 0 0 3px rgba(124, 88, 0, 0.15) !important;
        }
        /* Mobile Nav Drawer */
        #nav-overlay { display: none; }
        #nav-overlay.active { display: block; }
        #mobile-nav-drawer {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #mobile-nav-drawer.open { transform: translateX(0); }
        /* Zannpay method cards */
        .zann-method-card {
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.18s ease;
        }
        .zann-method-card:hover { border-color: rgba(124,88,0,0.35); transform: translateY(-2px); }
        .zann-method-card.active { border-color: #7c5800; background: rgba(124,88,0,0.07); }
        .zann-methods-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
            gap: 10px;
        }
        @media (max-width: 480px) { .zann-methods-grid { grid-template-columns: repeat(2, 1fr); } }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .zann-category { animation: slideUp 0.3s ease both; }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md min-h-screen flex flex-col justify-between">

    <!-- Navbar Component -->
    @include('layouts.navbar', ['active' => 'cart'])

    <main class="w-full max-w-[1280px] mx-auto px-4 md:px-margin-desktop py-6 md:py-8 flex-grow">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs md:text-sm text-secondary mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-base">home</span> Beranda
            </a>
            <span class="text-outline-variant">/</span>
            <a href="{{ route('shop') }}" class="hover:text-primary transition-colors">Katalog Produk</a>
            <span class="text-outline-variant">/</span>
            <span class="font-bold text-on-surface">Keranjang Belanja</span>
        </nav>

        {{-- Flash Messages --}}
        @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl font-bold flex items-center gap-3 shadow-xs">
            <span class="material-symbols-outlined text-emerald-600 text-xl">check_circle</span>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        @if(session('error'))
        <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-800 rounded-xl font-bold flex items-center gap-3 shadow-xs">
            <span class="material-symbols-outlined text-rose-600 text-xl">error</span>
            <span>{{ session('error') }}</span>
        </div>
        @endif

        {{-- ======================================================== --}}
        {{-- KONDISI 1: JIKA KERANJANG BERISI BARANG (ADA PRODUK)    --}}
        {{-- ======================================================== --}}
        @if(count($cart) > 0)
        
        <div class="mb-6">
            <h1 class="font-headline-xl text-2xl md:text-3xl font-extrabold text-on-surface leading-tight">
                Keranjang Belanja &amp; Checkout
            </h1>
            <p class="text-secondary text-sm md:text-base mt-1">
                Periksa daftar belanjaan Anda dan lengkapi alamat pengiriman untuk proses pemesanan.
            </p>
        </div>

        <form action="{{ route('checkout.process') }}" method="POST" id="checkout_form">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                {{-- Kolom Kiri: Daftar Produk, Alamat, dan Metode Pembayaran --}}
                <div class="lg:col-span-8 space-y-6">
                    
                    {{-- 1. Daftar Produk di Keranjang --}}
                    <section class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-5 sm:p-6 shadow-xs">
                        <div class="flex items-center justify-between border-b border-outline-variant/20 pb-4 mb-5">
                            <h2 class="font-headline-sm text-lg sm:text-xl font-bold text-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">shopping_bag</span>
                                <span>Daftar Produk ({{ count($cart) }} Barang)</span>
                            </h2>
                            <a href="{{ route('shop') }}" class="text-xs sm:text-sm font-bold text-primary hover:underline flex items-center gap-1">
                                <span>+ Tambah Produk Lain</span>
                            </a>
                        </div>

                        <div class="space-y-5">
                            @foreach($cart as $id => $item)
                            <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 pb-5 border-b border-outline-variant/20 last:border-b-0 last:pb-0">
                                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-surface-container rounded-xl overflow-hidden flex-shrink-0 border border-outline-variant/20">
                                    <img class="w-full h-full object-cover"
                                        src="{{ str_starts_with($item['foto_path'], 'http') ? $item['foto_path'] : asset($item['foto_path'] ?: 'https://via.placeholder.com/150') }}" 
                                        alt="{{ $item['nama_produk'] }}" />
                                </div>
                                <div class="flex-grow flex flex-col justify-between">
                                    <div>
                                        <div class="flex justify-between items-start gap-3">
                                            <h3 class="font-bold text-base sm:text-lg text-on-surface line-clamp-2">{{ $item['nama_produk'] }}</h3>
                                            <div class="text-right flex-shrink-0">
                                                <p class="font-extrabold text-primary text-base sm:text-lg">Rp {{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}</p>
                                                @if(!empty($item['harga_asal']) && $item['harga_asal'] > $item['harga'])
                                                    <p class="text-xs text-secondary line-through">Rp {{ number_format($item['harga_asal'] * $item['jumlah'], 0, ',', '.') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="flex flex-wrap items-center gap-2 text-xs text-secondary mt-1.5">
                                            <span class="inline-flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded text-on-surface-variant font-medium">
                                                <span class="material-symbols-outlined text-[13px]">storefront</span>
                                                {{ $item['store_name'] }}
                                            </span>
                                            @if(!empty($item['variant_name']))
                                                <span class="inline-flex items-center gap-1 bg-amber-500/10 text-primary font-bold px-2 py-0.5 rounded">
                                                    <span class="material-symbols-outlined text-[13px]">tune</span>
                                                    Varian: {{ $item['variant_name'] }}
                                                </span>
                                            @endif
                                            <span>Satuan: Rp {{ number_format($item['harga'], 0, ',', '.') }}</span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center mt-4 pt-2 border-t border-dashed border-outline-variant/20">
                                        <div class="flex items-center border border-outline-variant/40 rounded-lg overflow-hidden bg-surface-container-low shadow-2xs">
                                            <form action="{{ route('cart.update', $id) }}" method="POST" class="inline">
                                                @csrf
                                                <input type="hidden" name="type" value="decrease">
                                                <button type="submit" class="w-8 h-8 flex items-center justify-center hover:bg-surface-container transition-colors font-bold text-secondary" title="Kurangi Kuantitas">-</button>
                                            </form>
                                            <span class="w-10 text-center font-bold text-sm text-on-surface">{{ $item['jumlah'] }}</span>
                                            <form action="{{ route('cart.update', $id) }}" method="POST" class="inline">
                                                @csrf
                                                <input type="hidden" name="type" value="increase">
                                                <button type="submit" class="w-8 h-8 flex items-center justify-center hover:bg-surface-container transition-colors font-bold text-secondary" title="Tambah Kuantitas">+</button>
                                            </form>
                                        </div>

                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-rose-600 hover:text-rose-700 flex items-center gap-1 text-xs sm:text-sm font-bold hover:underline transition-colors" title="Hapus dari keranjang">
                                                <span class="material-symbols-outlined text-base">delete</span>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>

                    {{-- 2. Alamat Pengiriman & Penerima --}}
                    <section class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-5 sm:p-6 shadow-xs">
                        <div class="border-b border-outline-variant/20 pb-4 mb-5">
                            <h2 class="font-headline-sm text-lg sm:text-xl font-bold text-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">local_shipping</span>
                                <span>Informasi Pengiriman &amp; Penerima</span>
                            </h2>
                            <p class="text-xs text-secondary mt-1">Pastikan data kontak dan alamat tujuan diisi dengan tepat untuk kelancaran pengiriman.</p>
                        </div>

                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="block text-xs font-bold text-secondary uppercase tracking-wider">Alamat Email Pembeli</label>
                                    <input name="email"
                                        class="w-full h-11 px-4 rounded-xl border border-outline-variant/50 bg-surface-container-lowest text-on-surface text-sm transition-all"
                                        value="{{ Auth::user()->email ?? '' }}" placeholder="contoh: nama@email.com" type="email" required />
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-xs font-bold text-secondary uppercase tracking-wider">Nomor WhatsApp / Telepon</label>
                                    <input name="phone"
                                        class="w-full h-11 px-4 rounded-xl border border-outline-variant/50 bg-surface-container-lowest text-on-surface text-sm transition-all"
                                        value="{{ Auth::user()->phone ?? '' }}" placeholder="contoh: 08123456789" type="tel" required />
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-secondary uppercase tracking-wider">Alamat Lengkap Pengiriman</label>
                                <textarea id="address_input" name="address" rows="2"
                                    class="w-full p-3 rounded-xl border border-outline-variant/50 bg-surface-container-lowest text-on-surface text-sm transition-all"
                                    placeholder="Nama Jalan, Nomor Rumah, RT/RW, Kelurahan, Patokan Khusus..." required>{{ Auth::user()->address ?? '' }}</textarea>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-secondary uppercase tracking-wider">Catatan Pesanan (Opsional)</label>
                                <textarea name="catatan" rows="2"
                                    class="w-full p-3 rounded-xl border border-outline-variant/50 bg-surface-container-lowest text-on-surface text-sm transition-all"
                                    placeholder="Contoh: Tolong dibungkus rapi, warna sesuai pilihan..."></textarea>
                            </div>

                            <div class="mt-4 p-4 bg-amber-50 border border-amber-200 rounded-xl flex items-start gap-3">
                                <span class="material-symbols-outlined text-amber-600 flex-shrink-0 mt-0.5">info</span>
                                <div>
                                    <p class="text-xs font-bold text-amber-800">Pengiriman Langsung oleh Owner</p>
                                    <p class="text-xs text-amber-700 mt-0.5 leading-relaxed">Pesanan Anda akan diantarkan langsung oleh pemilik toko. Pihak toko akan menghubungi Anda untuk konfirmasi jadwal pengiriman.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- 3. Metode Pembayaran & Opsi COD --}}
                    <section id="payment_section" class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-5 sm:p-6 shadow-xs">
                        <div class="border-b border-outline-variant/20 pb-4 mb-5">
                            <h2 class="font-headline-sm text-lg sm:text-xl font-bold text-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">account_balance_wallet</span>
                                <span>Metode Pembayaran</span>
                            </h2>
                            <p class="text-xs text-secondary mt-1">Centang Bayar di Tempat (COD) atau pilih salah satu metode pembayaran online.</p>
                        </div>

                        <input type="hidden" name="payment_method" id="selected_payment_method" value="">

                        {{-- Opsi COD (Cash on Delivery) - Checklist --}}
                        <div class="mb-5">
                            <label for="cod_checkbox" id="cod_card" class="flex items-center justify-between p-4 rounded-2xl border-2 border-outline-variant/40 bg-surface-container-low hover:border-primary/50 transition-all cursor-pointer select-none">
                                <div class="flex items-start sm:items-center gap-3.5">
                                    <div class="pt-0.5 sm:pt-0">
                                        <input type="checkbox" id="cod_checkbox" name="is_cod" value="1" 
                                               class="w-5 h-5 rounded text-primary focus:ring-primary border-outline-variant cursor-pointer"
                                               onchange="toggleCodOption(this)">
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-bold text-on-surface text-sm sm:text-base">Bayar di Tempat (COD)</span>
                                            <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-emerald-500/10 text-emerald-700 uppercase tracking-wide">Cash on Delivery</span>
                                        </div>
                                        <p class="text-xs text-secondary mt-1 leading-relaxed">
                                            Bayar tunai secara langsung kepada penjual saat pesanan diantarkan ke lokasi Anda.
                                        </p>
                                    </div>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 ml-3">
                                    <span class="material-symbols-outlined text-2xl">local_shipping</span>
                                </div>
                            </label>
                        </div>

                        {{-- Pembayaran Online Zannpay --}}
                        <div id="online_payment_section" class="transition-all duration-200">
                            <div class="flex items-center gap-3 my-5">
                                <div class="h-px bg-outline-variant/30 flex-1"></div>
                                <span class="text-xs font-bold text-secondary uppercase tracking-wider">Atau Pilih Pembayaran Online</span>
                                <div class="h-px bg-outline-variant/30 flex-1"></div>
                            </div>

                            @if($isZannpayConfigured && count($zannpayMethods) > 0)
                                @php $grouped = collect($zannpayMethods)->groupBy('category'); @endphp
                                <div class="space-y-5" id="zann-groups">
                                    @foreach($grouped as $category => $methods)
                                        @php $activeMethods = $methods->where('status', 'aktif'); @endphp
                                        @if($activeMethods->count() > 0)
                                        <div class="zann-category">
                                            <p class="text-[11px] font-extrabold uppercase tracking-widest text-secondary mb-3">{{ $category }}</p>
                                            <div class="zann-methods-grid">
                                                @foreach($activeMethods as $method)
                                                <div class="zann-method-card rounded-xl p-3 bg-surface-container-low flex flex-col items-center gap-2 select-none"
                                                     data-code="{{ $method['code'] }}"
                                                     data-name="{{ $method['name'] }}"
                                                     onclick="selectZannMethod(this)">
                                                    <img src="{{ $method['logo'] ?? '' }}" alt="{{ $method['name'] }}"
                                                         class="h-8 w-auto object-contain" onerror="this.style.display='none'">
                                                    <span class="text-[11px] font-bold text-on-surface text-center leading-tight line-clamp-2">{{ $method['name'] }}</span>
                                                    @if(!empty($method['fee_format']))
                                                    <span class="text-[10px] text-secondary bg-surface-container px-2 py-0.5 rounded-full">Fee: {{ $method['fee_format'] }}</span>
                                                    @endif
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>

                                {{-- Selected Method Summary --}}
                                <div id="zann-selected-bar" class="hidden mt-5 p-4 rounded-2xl bg-primary/5 border border-primary/20 flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-3">
                                        <span class="material-symbols-outlined text-primary">check_circle</span>
                                        <div>
                                            <p class="text-xs text-secondary font-bold">Metode Dipilih</p>
                                            <p id="zann-selected-name" class="font-extrabold text-on-surface text-sm"></p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="clearZannMethod()" class="text-xs text-secondary hover:text-primary font-bold">Ganti</button>
                                </div>
                            @else
                                {{-- Fallback jika Zannpay belum dikonfig / kosong --}}
                                <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 flex items-start gap-3">
                                    <span class="material-symbols-outlined text-amber-600 flex-shrink-0 mt-0.5">info</span>
                                    <div>
                                        <p class="text-sm font-bold text-amber-800">Pembayaran online sedang tidak tersedia</p>
                                        <p class="text-xs text-amber-700 mt-1">Anda tetap dapat memilih opsi Bayar di Tempat (COD) di atas.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>

                </div>

                {{-- Kolom Kanan: Sticky Summary --}}
                <aside class="lg:col-span-4 sticky top-24 space-y-5">
                    <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-5 sm:p-6 shadow-xs">
                        <h2 class="font-headline-sm text-lg font-bold text-on-surface mb-5 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">receipt_long</span>
                            <span>Ringkasan Pesanan</span>
                        </h2>

                        <div class="space-y-3.5 mb-6 text-sm">
                            <div class="flex justify-between text-secondary">
                                <span>Subtotal Produk</span>
                                <span id="summary_subtotal" class="font-bold text-on-surface" data-value="{{ $subtotal }}">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between text-secondary pb-4 border-b border-outline-variant/20">
                                <span>Biaya Layanan</span>
                                <span id="summary_fees" class="font-bold text-on-surface" data-value="{{ $biayaOperasional }}">Rp {{ number_format($biayaOperasional, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between items-center pt-1">
                                <span class="font-bold text-base text-on-surface">Total Pembayaran</span>
                                <span id="summary_total" class="text-primary text-xl font-extrabold">Rp {{ number_format($subtotal + $biayaOperasional, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        {{-- Kupon Diskon --}}
                        <div class="mb-6 pt-4 border-t border-outline-variant/20">
                            <label class="block text-xs font-bold text-secondary mb-2 uppercase tracking-wider">Kode Kupon / Promo Diskon</label>
                            <div class="flex gap-2">
                                <input
                                    class="flex-grow h-10 px-3 text-sm rounded-xl border border-outline-variant/50 bg-surface-container-lowest transition-all"
                                    placeholder="Masukkan kode promo..." type="text" />
                                <button type="button"
                                    class="px-4 py-2 bg-on-surface text-surface text-xs font-bold rounded-xl hover:bg-secondary transition-colors">Gunakan</button>
                            </div>
                        </div>

                        {{-- Tombol Checkout Utama --}}
                        <button type="submit" id="btn_checkout"
                            class="w-full py-4 bg-primary text-white font-extrabold rounded-xl text-base shadow-md hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-2 cursor-pointer">
                            <span>Buat Pesanan Sekarang</span>
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </button>

                        <div class="mt-5 flex items-center justify-center gap-2 text-xs text-secondary">
                            <span class="material-symbols-outlined text-emerald-600 text-sm">lock</span>
                            <span class="font-medium">Transaksi Aman &amp; Terenkripsi SSL 256-bit</span>
                        </div>
                    </div>

                    {{-- Kotak Dukungan UMKM --}}
                    <div class="p-5 bg-surface-container-low border border-outline-variant/20 rounded-2xl">
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-xl">diversity_3</span>
                            </div>
                            <div>
                                <p class="font-bold text-sm text-on-surface">Dukungan Produk Lokal UMKM</p>
                                <p class="text-xs text-secondary mt-1 leading-relaxed">
                                    Setiap pesanan Anda langsung memberdayakan pengrajin, produsen lokal, serta mitra logistik daerah di seluruh Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        </form>

        {{-- ======================================================== --}}
        {{-- KONDISI 2: JIKA KERANJANG KOSONG (0 BARANG)              --}}
        {{-- ======================================================== --}}
        @else

        <div class="max-w-2xl mx-auto py-10 md:py-16">
            {{-- Kartu Empty State --}}
            <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-3xl p-8 sm:p-12 text-center shadow-xs">
                <div class="w-24 h-24 rounded-full bg-primary/10 text-primary flex items-center justify-center mx-auto mb-6 shadow-xs">
                    <span class="material-symbols-outlined text-5xl">remove_shopping_cart</span>
                </div>
                
                <h1 class="font-headline-md text-2xl sm:text-3xl font-extrabold text-on-surface mb-3">
                    Keranjang Belanja Anda Masih Kosong
                </h1>
                
                <p class="text-secondary text-sm sm:text-base max-w-lg mx-auto leading-relaxed mb-8">
                    Sepertinya Anda belum menambahkan produk apa pun ke dalam keranjang. Yuk, temukan beragam karya pengrajin dan produk lokal UMKM unggulan kami!
                </p>

                <div class="flex flex-col sm:flex-row gap-3.5 justify-center items-center">
                    <a href="{{ route('shop') }}" 
                        class="w-full sm:w-auto px-8 py-3.5 bg-primary text-white font-bold rounded-xl hover:brightness-110 active:scale-95 transition-all shadow-sm flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg">storefront</span>
                        <span>Jelajahi Katalog Produk</span>
                    </a>
                    <a href="{{ route('home') }}" 
                        class="w-full sm:w-auto px-6 py-3.5 border border-outline-variant/50 text-on-surface hover:bg-surface-variant font-bold rounded-xl active:scale-95 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg">home</span>
                        <span>Kembali ke Beranda</span>
                    </a>
                </div>
            </div>

            {{-- 3 Pilar Keunggulan --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8">
                <div class="p-4 rounded-2xl bg-surface-container-lowest border border-outline-variant/20 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-primary flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-xl">verified</span>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-on-surface">100% Produk UMKM</h4>
                        <p class="text-[11px] text-secondary mt-0.5">Produk asli karya anak bangsa</p>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-surface-container-lowest border border-outline-variant/20 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-700 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-xl">security</span>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-on-surface">Transaksi Aman</h4>
                        <p class="text-[11px] text-secondary mt-0.5">Payment gateway terpercaya</p>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-surface-container-lowest border border-outline-variant/20 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-700 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-xl">local_shipping</span>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-on-surface">Pengiriman Seluruh RI</h4>
                        <p class="text-[11px] text-secondary mt-0.5">Multi-kurir terintegrasi</p>
                    </div>
                </div>
            </div>
        </div>

        @endif

    </main>

    <!-- Footer Component -->
    @include('layouts.footer')

    <script>
        // Mobile nav drawer
        function openNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if(drawer) drawer.classList.add('open');
            if(overlay) overlay.classList.add('active');
        }
        function closeNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if(drawer) drawer.classList.remove('open');
            if(overlay) overlay.classList.remove('active');
        }

        // ── COD Toggle ───────────────────────────────────────────
        function toggleCodOption(checkbox) {
            const card = document.getElementById('cod_card');
            const onlineSection = document.getElementById('online_payment_section');
            const input = document.getElementById('selected_payment_method');
            const btn = document.getElementById('btn_checkout');
            const btnText = btn?.querySelector('span');

            if (checkbox.checked) {
                // Highlight COD Card
                card.classList.add('border-primary', 'bg-primary/5');
                card.classList.remove('border-outline-variant/40', 'bg-surface-container-low');

                // Deselect Zannpay methods
                clearZannMethod();

                // Set method value to COD
                if (input) input.value = 'COD';

                // Dim online section
                if (onlineSection) {
                    onlineSection.classList.add('opacity-40', 'pointer-events-none');
                }

                // Update button text
                if (btnText) btnText.textContent = 'Buat Pesanan (Bayar COD)';
            } else {
                // Unhighlight COD Card
                card.classList.remove('border-primary', 'bg-primary/5');
                card.classList.add('border-outline-variant/40', 'bg-surface-container-low');

                // Reset method value
                if (input) input.value = '';

                // Restore online section
                if (onlineSection) {
                    onlineSection.classList.remove('opacity-40', 'pointer-events-none');
                }

                // Restore button text
                if (btnText) btnText.textContent = 'Buat Pesanan Sekarang';
            }
        }

        // ── Zannpay Method Selector ──────────────────────────────
        function selectZannMethod(el) {
            // Uncheck COD if checked
            const codCheckbox = document.getElementById('cod_checkbox');
            if (codCheckbox && codCheckbox.checked) {
                codCheckbox.checked = false;
                toggleCodOption(codCheckbox);
            }

            // Deselect all cards
            document.querySelectorAll('.zann-method-card').forEach(c => c.classList.remove('active'));
            // Activate clicked card
            el.classList.add('active');

            const code = el.dataset.code;
            const name = el.dataset.name;

            // Update hidden input
            const input = document.getElementById('selected_payment_method');
            if (input) input.value = code;

            // Show selected bar
            const bar  = document.getElementById('zann-selected-bar');
            const label = document.getElementById('zann-selected-name');
            if (bar)   bar.classList.remove('hidden');
            if (label) label.textContent = name;

            // Reset button text
            const btn = document.getElementById('btn_checkout');
            const btnText = btn?.querySelector('span');
            if (btnText) btnText.textContent = 'Buat Pesanan & Bayar';
        }

        function clearZannMethod() {
            document.querySelectorAll('.zann-method-card').forEach(c => c.classList.remove('active'));
            const input = document.getElementById('selected_payment_method');
            if (input && input.value !== 'COD') input.value = '';
            const bar = document.getElementById('zann-selected-bar');
            if (bar) bar.classList.add('hidden');

            const btn = document.getElementById('btn_checkout');
            const btnText = btn?.querySelector('span');
            if (btnText && (!input || input.value !== 'COD')) btnText.textContent = 'Buat Pesanan Sekarang';
        }

        // ── Form Validation ──────────────────────────────────────
        const checkoutForm = document.getElementById('checkout_form');
        if (checkoutForm) {
            checkoutForm.addEventListener('submit', function(e) {
                const method = document.getElementById('selected_payment_method')?.value;
                if (!method) {
                    e.preventDefault();
                    alert('Silakan pilih metode pembayaran (centang COD atau pilih metode pembayaran online)!');
                    document.getElementById('payment_section')?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        }
    </script>
</body>

</html>