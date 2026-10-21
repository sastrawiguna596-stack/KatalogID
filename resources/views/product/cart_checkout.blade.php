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

                            {{-- Area Search Biteship --}}
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-secondary uppercase tracking-wider">Kecamatan / Kota Tujuan</label>
                                <div class="relative">
                                    <span class="absolute left-3.5 top-3 text-secondary material-symbols-outlined text-lg">location_on</span>
                                    <input id="area_search" type="text" 
                                        class="w-full h-11 pl-10 pr-4 rounded-xl border border-outline-variant/50 bg-surface-container-lowest text-on-surface text-sm transition-all"
                                        placeholder="Ketik minimal 3 huruf nama kecamatan atau kota..." autocomplete="off">
                                    <input type="hidden" name="destination_area_id" id="destination_area_id" value="">
                                    
                                    <!-- Search Results Dropdown -->
                                    <ul id="area_results" class="absolute z-20 w-full bg-white border border-outline-variant/40 rounded-xl mt-1.5 max-h-48 overflow-y-auto hidden shadow-xl divide-y divide-outline-variant/20">
                                    </ul>
                                </div>
                            </div>

                            <!-- Courier Selection (Loaded via AJAX) -->
                            <div id="courier_selection_container" class="hidden mt-5 pt-5 border-t border-outline-variant/20">
                                <label class="block text-xs font-bold text-secondary uppercase tracking-wider mb-3">Pilihan Layanan Kurir &amp; Tarif Ongkir</label>
                                <div id="courier_list" class="space-y-2.5">
                                    <!-- Courier options will be injected here -->
                                </div>
                                <input type="hidden" name="courier_company" id="courier_company" value="">
                                <input type="hidden" name="courier_type" id="courier_type" value="">
                                <input type="hidden" name="shipping_cost" id="shipping_cost" value="0">
                            </div>
                        </div>
                    </section>

                    {{-- 3. Metode Pembayaran --}}
                    <section class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-5 sm:p-6 shadow-xs">
                        <div class="border-b border-outline-variant/20 pb-4 mb-5">
                            <h2 class="font-headline-sm text-lg sm:text-xl font-bold text-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">account_balance_wallet</span>
                                <span>Pilihan Metode Pembayaran</span>
                            </h2>
                            <p class="text-xs text-secondary mt-1">Pilih cara pembayaran yang paling nyaman untuk Anda.</p>
                        </div>

                        <input type="hidden" name="payment_method" id="selected_payment_method" value="bank_transfer">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <button type="button" data-method="bank_transfer"
                                class="payment-option-btn flex flex-col items-center justify-center p-4 border-2 border-primary bg-primary/5 rounded-xl gap-2 transition-all cursor-pointer text-center">
                                <span class="material-symbols-outlined text-primary text-2xl">account_balance</span>
                                <span class="text-sm font-bold text-primary">Transfer Bank</span>
                                <span class="text-[11px] text-secondary">Virtual Account Otomatis</span>
                            </button>

                            <button type="button" data-method="qris"
                                class="payment-option-btn flex flex-col items-center justify-center p-4 border border-outline-variant/40 hover:bg-surface-container-low rounded-xl gap-2 transition-all cursor-pointer text-center">
                                <span class="material-symbols-outlined text-secondary text-2xl">qr_code_2</span>
                                <span class="text-sm font-bold text-on-surface">QRIS Instant</span>
                                <span class="text-[11px] text-secondary">Gopay, OVO, Dana, BCA, dll</span>
                            </button>

                            <button type="button" data-method="cod"
                                class="payment-option-btn flex flex-col items-center justify-center p-4 border border-outline-variant/40 hover:bg-surface-container-low rounded-xl gap-2 transition-all cursor-pointer text-center">
                                <span class="material-symbols-outlined text-secondary text-2xl">handshake</span>
                                <span class="text-sm font-bold text-on-surface">COD (Bayar di Tempat)</span>
                                <span class="text-[11px] text-secondary">Bayar saat kurir tiba</span>
                            </button>
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
                            <div class="flex justify-between text-secondary">
                                <span>Estimasi Biaya Ongkir</span>
                                <span id="summary_shipping" class="font-bold text-on-surface" data-value="0">Rp 0</span>
                            </div>
                            <div class="flex justify-between text-secondary pb-4 border-b border-outline-variant/20">
                                <span>Biaya Layanan</span>
                                <span id="summary_fees" class="font-bold text-on-surface" data-value="{{ $biayaOperasional }}">Rp {{ number_format($biayaOperasional, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex justify-between items-center pt-1">
                                <span class="font-bold text-base text-on-surface">Total Pembayaran</span>
                                <span id="summary_total" class="text-primary text-xl font-extrabold" data-value="{{ $subtotal + $biayaOperasional }}">Rp {{ number_format($subtotal + $biayaOperasional, 0, ',', '.') }}</span>
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

        // Toggle payment option visual state
        const paymentBtns = document.querySelectorAll('.payment-option-btn');
        const selectedPaymentInput = document.getElementById('selected_payment_method');

        paymentBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const method = btn.getAttribute('data-method') || 'bank_transfer';
                if (selectedPaymentInput) {
                    selectedPaymentInput.value = method;
                }

                paymentBtns.forEach(b => {
                    b.classList.remove('border-primary', 'bg-primary/5', 'border-2');
                    b.classList.add('border-outline-variant/40', 'border');
                    const icon = b.querySelector('.material-symbols-outlined');
                    const text = b.querySelector('.text-sm');
                    if (icon) {
                        icon.classList.remove('text-primary');
                        icon.classList.add('text-secondary');
                    }
                    if (text) {
                        text.classList.remove('text-primary');
                        text.classList.add('text-on-surface');
                    }
                });
                btn.classList.add('border-primary', 'bg-primary/5', 'border-2');
                btn.classList.remove('border-outline-variant/40', 'border');
                const icon = btn.querySelector('.material-symbols-outlined');
                const text = btn.querySelector('.text-sm');
                if (icon) {
                    icon.classList.add('text-primary');
                    icon.classList.remove('text-secondary');
                }
                if (text) {
                    text.classList.add('text-primary');
                    text.classList.remove('text-on-surface');
                }
            });
        });

        // Biteship Integration Logic
        document.addEventListener('DOMContentLoaded', function() {
            const areaSearchInput = document.getElementById('area_search');
            if (!areaSearchInput) return; // If cart is empty, do nothing

            const areaResults = document.getElementById('area_results');
            const destinationAreaIdInput = document.getElementById('destination_area_id');
            const courierSelectionContainer = document.getElementById('courier_selection_container');
            const courierList = document.getElementById('courier_list');
            
            const courierCompanyInput = document.getElementById('courier_company');
            const courierTypeInput = document.getElementById('courier_type');
            const shippingCostInput = document.getElementById('shipping_cost');

            const summaryShipping = document.getElementById('summary_shipping');
            const summaryTotal = document.getElementById('summary_total');
            const summarySubtotal = document.getElementById('summary_subtotal');
            const summaryFees = document.getElementById('summary_fees');

            let searchTimeout;

            // Handle Area Search with Debounce
            areaSearchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                const query = this.value;

                if (query.length < 3) {
                    if (areaResults) areaResults.classList.add('hidden');
                    return;
                }

                searchTimeout = setTimeout(() => {
                    fetch(`/api/biteship/search-area?query=${encodeURIComponent(query)}`)
                        .then(res => res.json())
                        .then(data => {
                            if (!areaResults) return;
                            areaResults.innerHTML = '';
                            if (data.length > 0) {
                                data.forEach(area => {
                                    const li = document.createElement('li');
                                    li.className = 'px-4 py-3 hover:bg-surface-container cursor-pointer text-xs font-semibold text-on-surface transition-colors';
                                    li.innerHTML = `<span class="flex items-center gap-2"><span class="material-symbols-outlined text-sm text-primary">pin_drop</span> ${area.name}</span>`;
                                    li.addEventListener('click', () => {
                                        areaSearchInput.value = area.name;
                                        destinationAreaIdInput.value = area.id;
                                        areaResults.classList.add('hidden');
                                        
                                        // Once area is selected, fetch rates
                                        fetchRates(area.id);
                                    });
                                    areaResults.appendChild(li);
                                });
                                areaResults.classList.remove('hidden');
                            } else {
                                areaResults.innerHTML = '<li class="px-4 py-3 text-secondary text-xs">Area tidak ditemukan</li>';
                                areaResults.classList.remove('hidden');
                            }
                        })
                        .catch(err => console.error('Error searching area:', err));
                }, 400);
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (areaSearchInput && areaResults && !areaSearchInput.contains(e.target) && !areaResults.contains(e.target)) {
                    areaResults.classList.add('hidden');
                }
            });

            // Fetch Rates
            function fetchRates(destinationId) {
                if (!courierList || !courierSelectionContainer) return;
                courierList.innerHTML = '<div class="text-secondary text-xs animate-pulse p-3 bg-surface-container-low rounded-xl">Menghubungkan ke server kurir... Mohon tunggu.</div>';
                courierSelectionContainer.classList.remove('hidden');
                
                const storeId = {{ !empty($cart) ? collect($cart)->first()['store_id'] : 1 }};

                fetch('/api/biteship/check-rates', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        destination_area_id: destinationId,
                        store_id: storeId,
                        couriers: 'jne,sicepat,jnt,anteraja'
                    })
                })
                .then(res => res.json())
                .then(data => {
                    courierList.innerHTML = '';
                    if (data.error) {
                        courierList.innerHTML = `<div class="text-rose-600 text-xs p-3 bg-rose-50 border border-rose-200 rounded-xl font-bold">${data.error}</div>`;
                        return;
                    }

                    if (data.length > 0) {
                        data.forEach((rate, index) => {
                            const option = document.createElement('div');
                            option.className = 'flex items-center justify-between p-3.5 border border-outline-variant/40 rounded-xl hover:border-primary cursor-pointer courier-option transition-all bg-surface-container-lowest';
                            option.dataset.company = rate.company;
                            option.dataset.type = rate.type;
                            option.dataset.price = rate.price;
                            
                            option.innerHTML = `
                                <div class="flex items-center gap-3">
                                    <input type="radio" name="courier_selection" class="w-4 h-4 text-primary bg-surface-container border-outline focus:ring-primary">
                                    <div>
                                        <p class="font-bold text-xs uppercase text-on-surface">${rate.company} - ${rate.type}</p>
                                        <p class="text-[11px] text-secondary">Estimasi pengiriman: ${rate.duration}</p>
                                    </div>
                                </div>
                                <div class="font-extrabold text-primary text-sm">Rp ${rate.price.toLocaleString('id-ID')}</div>
                            `;

                            option.addEventListener('click', function() {
                                const radio = this.querySelector('input[type="radio"]');
                                if (radio) radio.checked = true;

                                document.querySelectorAll('.courier-option').forEach(opt => {
                                    opt.classList.remove('border-primary', 'bg-primary/5', 'border-2');
                                    opt.classList.add('border-outline-variant/40', 'border');
                                });
                                this.classList.add('border-primary', 'bg-primary/5', 'border-2');
                                this.classList.remove('border-outline-variant/40', 'border');

                                courierCompanyInput.value = this.dataset.company;
                                courierTypeInput.value = this.dataset.type;
                                shippingCostInput.value = this.dataset.price;

                                updateSummary(parseInt(this.dataset.price));
                            });

                            courierList.appendChild(option);
                        });
                    } else {
                        courierList.innerHTML = '<div class="text-secondary text-xs p-3 bg-surface-container-low rounded-xl">Layanan kurir tidak tersedia untuk rute tujuan ini.</div>';
                    }
                })
                .catch(err => {
                    console.error('Error fetching rates:', err);
                    courierList.innerHTML = '<div class="text-rose-600 text-xs p-3 bg-rose-50 border border-rose-200 rounded-xl font-bold">Gagal memuat tarif kurir. Silakan coba lagi.</div>';
                });
            }

            // Update Order Summary
            function updateSummary(shippingCost) {
                if (summaryShipping) summaryShipping.innerText = `Rp ${shippingCost.toLocaleString('id-ID')}`;
                
                const subtotal = summarySubtotal ? parseInt(summarySubtotal.dataset.value) : 0;
                const fees = summaryFees ? parseInt(summaryFees.dataset.value) : 0;
                const total = subtotal + fees + shippingCost;
                
                if (summaryTotal) {
                    summaryTotal.innerText = `Rp ${total.toLocaleString('id-ID')}`;
                    summaryTotal.dataset.value = total;
                }
            }

            // Form Validation before submit
            const checkoutForm = document.getElementById('checkout_form');
            if (checkoutForm) {
                checkoutForm.addEventListener('submit', function(e) {
                    if (!destinationAreaIdInput || !destinationAreaIdInput.value) {
                        e.preventDefault();
                        alert('Silakan pilih Area Kecamatan / Kota Tujuan Pengiriman terlebih dahulu!');
                        if (areaSearchInput) areaSearchInput.focus();
                        return;
                    }
                    
                    if (!courierCompanyInput || !courierCompanyInput.value || !courierTypeInput || !courierTypeInput.value) {
                        e.preventDefault();
                        alert('Silakan pilih salah satu Layanan Kurir pengiriman yang tersedia!');
                        return;
                    }
                });
            }
        });
    </script>
</body>

</html>