<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Shopping Cart &amp; Checkout | Katalog IDN</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
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
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "label-md": ["14px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-xl-mobile": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-xl": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }]
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
        .active-nav-line { position: relative; }
        .active-nav-line::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #7c5800;
        }
        input:focus {
            outline: none;
            border-color: #1b1c1c !important;
            box-shadow: 0 0 0 4px rgba(255, 184, 0, 0.2) !important;
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

<body class="bg-surface text-on-surface font-body-md min-h-screen">

<!-- TopAppBar -->
@include('layouts.navbar', ['active' => 'cart'])
    <main class="w-full px-4 md:px-margin-desktop py-6 md:py-8 overflow-hidden">
        <h1 class="font-headline-xl text-xl md:text-headline-xl mb-stack-md">Your Checkout</h1>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <!-- Left Column: Cart & Details -->
            <div class="lg:col-span-8 space-y-stack-md">
                <!-- Section: Cart Items -->
                <section class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="font-headline-sm text-headline-sm">Shopping Cart ({{ count($cart) }} Items)</h2>
                    </div>

                    @if(session('success'))
                    <div class="mb-4 p-3 bg-emerald-100 text-emerald-800 rounded-lg text-body-sm font-bold">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(count($cart) > 0)
                    <div class="space-y-6">
                        @foreach($cart as $id => $item)
                        <div class="flex gap-6 pb-6 border-b border-[#EDEDED]">
                            <div class="w-24 h-24 bg-surface-container rounded-lg overflow-hidden flex-shrink-0">
                                <img class="w-full h-full object-cover"
                                    src="{{ str_starts_with($item['foto_path'], 'http') ? $item['foto_path'] : asset($item['foto_path'] ?: 'https://via.placeholder.com/150') }}" alt="{{ $item['nama_produk'] }}" />
                            </div>
                            <div class="flex-grow flex flex-col justify-between py-1">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="font-headline-sm text-[18px] font-bold">{{ $item['nama_produk'] }}</h3>
                                        <div class="text-right">
                                            <p class="font-bold text-primary">Rp {{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}</p>
                                            @if(!empty($item['harga_asal']) && $item['harga_asal'] > $item['harga'])
                                                <p class="text-xs text-secondary line-through">Rp {{ number_format($item['harga_asal'] * $item['jumlah'], 0, ',', '.') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="text-body-sm text-secondary mt-1">
                                        <span>Toko: {{ $item['store_name'] }}</span>
                                        @if(!empty($item['variant_name']))
                                            <span class="mx-1">•</span>
                                            <span class="inline-flex items-center gap-1 bg-amber-500/10 text-primary font-bold px-2 py-0.5 rounded text-xs">
                                                <span class="material-symbols-outlined text-xs">tune</span>
                                                Varian: {{ $item['variant_name'] }}
                                            </span>
                                        @endif
                                        <span class="mx-1">•</span>
                                        <span>Satuan: Rp {{ number_format($item['harga'], 0, ',', '.') }}</span>
                                        @if(!empty($item['harga_asal']) && $item['harga_asal'] > $item['harga'])
                                            <span class="text-xs text-secondary line-through ml-1">Rp {{ number_format($item['harga_asal'], 0, ',', '.') }}</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center border border-[#EDEDED] rounded-lg">
                                        <form action="{{ route('cart.update', $id) }}" method="POST" class="inline">
                                            @csrf
                                            <input type="hidden" name="type" value="decrease">
                                            <button type="submit" class="px-3 py-1 hover:bg-surface-container transition-colors">-</button>
                                        </form>
                                        <span class="px-4 font-semibold">{{ $item['jumlah'] }}</span>
                                        <form action="{{ route('cart.update', $id) }}" method="POST" class="inline">
                                            @csrf
                                            <input type="hidden" name="type" value="increase">
                                            <button type="submit" class="px-3 py-1 hover:bg-surface-container transition-colors">+</button>
                                        </form>
                                    </div>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-error flex items-center gap-1 hover:underline text-body-sm font-bold">
                                            <span class="material-symbols-outlined text-sm">delete</span>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="py-12 text-center">
                        <span class="material-symbols-outlined text-6xl text-secondary mb-3">shopping_cart</span>
                        <p class="text-headline-sm text-on-surface mb-2 font-bold">Keranjang Belanja Anda Kosong</p>
                        <p class="text-secondary font-body-sm mb-6">Belum ada barang yang Anda tambahkan ke keranjang.</p>
                        <a href="{{ route('shop') }}" class="px-6 py-3 bg-primary text-on-primary font-bold rounded-lg hover:bg-[#684900] transition-colors inline-block">Mulai Belanja Sekarang</a>
                    </div>
                    @endif
                </section>
                <!-- Section: Shipping & Delivery -->
                <section class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-6">
                    <h2 class="font-headline-sm text-headline-sm mb-6">Shipping &amp; Delivery</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter mb-8">
                        <div class="space-y-4">
                            <label class="block text-label-md text-secondary">Contact Information</label>
                            <input
                                class="w-full h-12 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface"
                                value="{{ Auth::user()->email ?? '' }}" placeholder="Email Address" type="email" />
                            <input
                                class="w-full h-12 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface"
                                value="{{ Auth::user()->phone ?? '' }}" placeholder="Phone Number" type="tel" />
                        </div>
                        <div class="space-y-4">
                            <label class="block text-label-md text-secondary">Shipping Address</label>
                            <input
                                class="w-full h-12 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface"
                <section class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-6">
                    <h2 class="font-headline-sm text-headline-sm mb-6">Payment Method</h2>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-4">
                            <button type="button"
                                class="payment-option-btn flex-1 min-w-[120px] flex flex-col items-center justify-center py-4 border-2 border-primary bg-primary/5 rounded-xl gap-2 transition-all cursor-pointer">
                                <span class="material-symbols-outlined text-primary">account_balance_wallet</span>
                                <span class="text-label-md font-semibold text-primary">Transfer Bank</span>
                            </button>
                            <button type="button"
                                class="payment-option-btn flex-1 min-w-[120px] flex flex-col items-center justify-center py-4 border border-[#EDEDED] hover:bg-surface-container-low rounded-xl gap-2 transition-all cursor-pointer">
                                <span class="material-symbols-outlined text-secondary">qr_code_2</span>
                                <span class="text-label-md text-on-surface">QRIS</span>
                            </button>
                            <button type="button"
                                class="payment-option-btn flex-1 min-w-[120px] flex flex-col items-center justify-center py-4 border border-[#EDEDED] hover:bg-surface-container-low rounded-xl gap-2 transition-all cursor-pointer">
                                <span class="material-symbols-outlined text-secondary">handshake</span>
                                <span class="text-label-md text-on-surface">COD</span>
                            </button>
                        </div>
                        <div class="mt-6 space-y-4">
                            <input
                                class="w-full h-12 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface"
                                placeholder="Card Number" type="text" />
                            <div class="grid grid-cols-2 gap-4">
                                <input
                                    class="h-12 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface"
                                    placeholder="MM/YY" type="text" />
                                <input
                                    class="h-12 px-4 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface"
                                    placeholder="CVV" type="text" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right Column: Sticky Summary -->
            <aside class="lg:col-span-4 sticky top-24">
                <div
                    class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl p-6 shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <h2 class="font-headline-sm text-headline-sm mb-6">Ringkasan Pesanan</h2>
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between text-body-md text-secondary">
                            <span>Subtotal Produk</span>
                            <span class="font-semibold text-on-surface">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-body-md text-secondary">
                            <span>Estimasi Pengiriman</span>
                            <span class="font-semibold text-on-surface">Rp {{ number_format($shipping, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-body-md text-secondary pb-4 border-b border-[#EDEDED]">
                            <span>Biaya Operasional</span>
                            <span class="font-semibold text-on-surface">Rp {{ number_format($biayaOperasional, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-headline-sm font-bold pt-2">
                            <span>Total Pembayaran</span>
                            <span class="text-primary text-xl font-extrabold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-label-md text-secondary mb-2">Promo Code</label>
                        <div class="flex gap-2">
                            <input
                                class="flex-grow h-10 px-3 rounded-lg border border-outline-variant bg-surface-container-lowest"
                                placeholder="Enter code" type="text" />
                            <button
                                class="px-4 py-2 bg-secondary text-white text-label-md rounded-lg hover:bg-on-surface transition-colors">Apply</button>
                        </div>
                    </div>
                    <form action="{{ route('checkout.process') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full py-4 bg-primary text-on-secondary font-bold rounded-xl text-headline-sm shadow-lg hover:brightness-90 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                            Buat Pesanan Sekarang
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </form>
                    <div class="mt-6 flex items-center justify-center gap-4 opacity-50 grayscale">
                        <span class="material-symbols-outlined">verified_user</span>
                        <p class="text-[10px] text-center uppercase tracking-widest font-bold">Secure SSL Checkout</p>
                    </div>
                </div>
                <div class="mt-stack-md p-6 bg-surface-container rounded-xl">
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary">local_shipping</span>
                        <div>
                            <p class="font-semibold text-body-sm">Ethical Fulfillment</p>
                            <p class="text-body-sm text-secondary">This order supports small independent makers and
                                local delivery partners.</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    @include('layouts.footer')
    <script>
        // Mobile nav drawer
        function openNavDrawer() {
            document.getElementById('mobile-nav-drawer').classList.add('open');
            document.getElementById('nav-overlay').classList.add('active');
        }
        function closeNavDrawer() {
            document.getElementById('mobile-nav-drawer').classList.remove('open');
            document.getElementById('nav-overlay').classList.remove('active');
        }

        // Micro-interaction for quantity buttons
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mousedown', () => {
                btn.classList.add('scale-95');
            });
            btn.addEventListener('mouseup', () => {
                btn.classList.remove('scale-95');
            });
            btn.addEventListener('mouseleave', () => {
                btn.classList.remove('scale-95');
            });
        });

        // Toggle radio button visual state for shipping/delivery
        const deliveryRadios = document.querySelectorAll('input[name="delivery"]');
        deliveryRadios.forEach(radio => {
            radio.parentElement.addEventListener('click', () => {
                deliveryRadios.forEach(r => {
                    r.parentElement.classList.remove('border-primary', 'bg-primary/5', 'border-2');
                    r.parentElement.classList.add('border-[#EDEDED]', 'border');
                    r.parentElement.querySelector('.w-5').classList.remove('border-primary');
                    r.parentElement.querySelector('.w-5').innerHTML = '';
                });
                radio.checked = true;
                radio.parentElement.classList.add('border-primary', 'bg-primary/5', 'border-2');
                radio.parentElement.classList.remove('border-[#EDEDED]', 'border');
                radio.parentElement.querySelector('.w-5').classList.add('border-primary');
                radio.parentElement.querySelector('.w-5').innerHTML = '<div class="w-2.5 h-2.5 rounded-full bg-primary"></div>';
            });
        });

        // Toggle payment option visual border state
        const paymentBtns = document.querySelectorAll('.payment-option-btn');
        paymentBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                paymentBtns.forEach(b => {
                    b.classList.remove('border-primary', 'bg-primary/5', 'border-2');
                    b.classList.add('border-[#EDEDED]', 'border');
                    const icon = b.querySelector('.material-symbols-outlined');
                    const text = b.querySelector('.text-label-md');
                    if (icon) {
                        icon.classList.remove('text-primary');
                        icon.classList.add('text-secondary');
                    }
                    if (text) {
                        text.classList.remove('font-semibold', 'text-primary');
                        text.classList.add('text-on-surface');
                    }
                });
                btn.classList.add('border-primary', 'bg-primary/5', 'border-2');
                btn.classList.remove('border-[#EDEDED]', 'border');
                const icon = btn.querySelector('.material-symbols-outlined');
                const text = btn.querySelector('.text-label-md');
                if (icon) {
                    icon.classList.add('text-primary');
                    icon.classList.remove('text-secondary');
                }
                if (text) {
                    text.classList.add('font-semibold', 'text-primary');
                    text.classList.remove('text-on-surface');
                }
            });
        });
    </script>
</body>

</html>