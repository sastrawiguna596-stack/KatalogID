<!DOCTYPE html>

<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pusat Bantuan & Support | Katalog IDN</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            vertical-align: middle;
        }
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fbf9f8;
            color: #1b1c1c;
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
        }
        /* Sidebar Mobile Drawer */
        #sidebar-overlay { display: none; }
        #sidebar-overlay.active { display: block; }
        #main-sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #main-sidebar.open { transform: translateX(0); }
        @media (min-width: 1024px) {
            #main-sidebar { transform: translateX(0) !important; }
        }
</style>
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
            }
          },
        },
      }
</script>
</head>
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col justify-between">

<!-- Sidebar Overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- Top Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-4 md:px-margin-desktop py-4 bg-surface border-b border-outline-variant">
<div class="flex items-center gap-3">
    <button class="lg:hidden p-1 rounded-lg text-on-surface-variant hover:bg-surface-variant transition-colors" onclick="toggleSidebar()">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <span class="font-headline-md text-headline-md font-bold text-primary">Katalog IDN</span>
</div>
<div class="flex items-center gap-3 md:gap-gutter">
<button class="material-symbols-outlined text-on-surface-variant scale-95 active:scale-90 transition-transform">shopping_cart</button>
<button class="material-symbols-outlined text-on-surface-variant scale-95 active:scale-90 transition-transform">notifications</button>
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline">
<img class="w-full h-full object-cover" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name ?? 'User') . '&background=7c5800&color=ffffff&size=128' }}" alt="{{ Auth::user()->name ?? 'User avatar' }}"/>
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
<span class="material-symbols-outlined">receipt_long</span> Orders Masuk
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
<a class="flex items-center gap-3 px-3 py-2.5 text-on-surface-variant hover:bg-surface-variant rounded-lg transition-all font-label-md text-label-md" href="{{ route('account_setting') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined">settings</span> Settings
    </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 flex flex-col gap-1">
<!-- Active: Support -->
<a class="flex items-center gap-3 px-3 py-2.5 text-on-primary-container bg-primary-container rounded-lg font-bold transition-all font-label-md text-label-md" href="{{ route('support') }}" onclick="closeSidebar()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">help_outline</span> Support
    </a>
<form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 text-error hover:bg-error-container rounded-lg transition-all font-label-md text-label-md font-bold">
        <span class="material-symbols-outlined">logout</span> Sign Out
    </button>
</form>
</div>
</aside>

<!-- Main Content Area -->
<main class="lg:pl-64 pt-20 pb-stack-lg min-h-screen flex-grow">
<div class="max-w-container-max mx-auto px-4 md:px-margin-desktop py-6">

    <!-- Page Title & Header -->
    <div class="mb-stack-md">
        <nav class="flex items-center gap-2 text-xs text-secondary font-medium mb-2">
            <span>Bantuan</span>
            <span>/</span>
            <span class="text-on-surface font-bold">Pusat Layanan Penjual</span>
        </nav>
        <h1 class="font-headline-xl text-2xl md:text-headline-xl font-bold text-on-surface">Pusat Bantuan & Layanan Seller</h1>
        <p class="text-sm text-secondary mt-1">Temukan jawaban pertanyaan umum seputar toko, pengiriman, pembayaran, atau hubungi Tim Support Katalog IDN secara langsung.</p>
    </div>

    <!-- Quick Channel Cards (Bento Grid) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <!-- WhatsApp CS -->
        <a href="https://wa.me/6281234567890?text=Halo%20Tim%20Support%20Katalog%20IDN,%20saya%20butuh%20bantuan%20seputar%20toko%20saya." target="_blank" class="bg-white border border-[#EDEDED] rounded-2xl p-5 hover:shadow-md hover:border-emerald-400 transition-all duration-300 group flex flex-col justify-between">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">chat</span>
                </div>
                <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 text-[10px] font-bold rounded-full">Respon Cepat</span>
            </div>
            <div>
                <h3 class="font-bold text-base text-on-surface group-hover:text-emerald-700 transition-colors">WhatsApp Live Chat</h3>
                <p class="text-xs text-secondary mt-1">+62 812-3456-7890</p>
                <p class="text-[11px] text-emerald-600 font-semibold mt-2 flex items-center gap-1">
                    <span>Chat Sekarang</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </p>
            </div>
        </a>

        <!-- Email Helpdesk -->
        <a href="mailto:support@katalogidn.id?subject=Bantuan%20Seller%20Katalog%20IDN" class="bg-white border border-[#EDEDED] rounded-2xl p-5 hover:shadow-md hover:border-amber-400 transition-all duration-300 group flex flex-col justify-between">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">mail</span>
                </div>
                <span class="px-2 py-0.5 bg-amber-100 text-primary text-[10px] font-bold rounded-full">24/7 Email</span>
            </div>
            <div>
                <h3 class="font-bold text-base text-on-surface group-hover:text-primary transition-colors">Email Bantuan</h3>
                <p class="text-xs text-secondary mt-1">support@katalogidn.id</p>
                <p class="text-[11px] text-primary font-semibold mt-2 flex items-center gap-1">
                    <span>Kirim Email</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </p>
            </div>
        </a>

        <!-- Jam Operasional -->
        <div class="bg-white border border-[#EDEDED] rounded-2xl p-5 flex flex-col justify-between">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center">
                    <span class="material-symbols-outlined text-2xl">schedule</span>
                </div>
                <span class="px-2 py-0.5 bg-sky-100 text-sky-800 text-[10px] font-bold rounded-full">Buka Hari Ini</span>
            </div>
            <div>
                <h3 class="font-bold text-base text-on-surface">Jam Kerja Customer Care</h3>
                <p class="text-xs text-secondary mt-1">Senin - Sabtu: 08.00 - 20.00 WITA</p>
                <p class="text-[11px] text-sky-700 font-semibold mt-2">Minggu & Hari Libur: Nondinas</p>
            </div>
        </div>

        <!-- Panduan Seller -->
        <a href="{{ route('shop') }}" class="bg-white border border-[#EDEDED] rounded-2xl p-5 hover:shadow-md hover:border-purple-400 transition-all duration-300 group flex flex-col justify-between">
            <div class="flex items-center justify-between mb-3">
                <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">menu_book</span>
                </div>
                <span class="px-2 py-0.5 bg-purple-100 text-purple-800 text-[10px] font-bold rounded-full">Panduan</span>
            </div>
            <div>
                <h3 class="font-bold text-base text-on-surface group-hover:text-purple-700 transition-colors">Panduan UMKM</h3>
                <p class="text-xs text-secondary mt-1">Tips jualan & optimasi katalog produk Anda.</p>
                <p class="text-[11px] text-purple-600 font-semibold mt-2 flex items-center gap-1">
                    <span>Lihat Katalog</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </p>
            </div>
        </a>
    </div>

    <!-- Main Content: FAQ Accordion & Ticket Form -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        
        <!-- Left 7 Cols: FAQ List -->
        <div class="lg:col-span-7 space-y-6">
            <div class="bg-white border border-[#EDEDED] rounded-2xl p-5 sm:p-6 space-y-4">
                <div class="flex items-center justify-between border-b border-surface-container-low pb-4">
                    <h2 class="font-headline-sm text-lg font-bold text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">quiz</span>
                        Pertanyaan Sering Diajukan (FAQ)
                    </h2>
                </div>

                <!-- FAQ Items (Accordion) -->
                <div class="space-y-3 pt-2">
                    <details class="group border border-surface-container-low rounded-xl p-4 bg-surface-container-lowest transition-all cursor-pointer">
                        <summary class="flex justify-between items-center font-bold text-sm text-on-surface group-hover:text-primary list-none">
                            <span>Bagaimana cara memantau pesanan masuk dari pembeli?</span>
                            <span class="material-symbols-outlined text-secondary transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <p class="mt-3 text-xs text-secondary leading-relaxed border-t border-surface-container-low pt-3">
                            Setiap kali ada pesanan baru dari pembeli, transaksi tersebut otomatis muncul di halaman <strong>Orders Masuk</strong> (`/account/order`). Anda dapat memeriksa status pembayaran (*Lunas* / *Menunggu*), detail item produk, serta alamat pengiriman pembeli.
                        </p>
                    </details>

                    <details class="group border border-surface-container-low rounded-xl p-4 bg-surface-container-lowest transition-all cursor-pointer">
                        <summary class="flex justify-between items-center font-bold text-sm text-on-surface group-hover:text-primary list-none">
                            <span>Bagaimana cara mengubah lokasi kota toko saya (Denpasar, Badung, dll)?</span>
                            <span class="material-symbols-outlined text-secondary transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <p class="mt-3 text-xs text-secondary leading-relaxed border-t border-surface-container-low pt-3">
                            Buka menu <strong>Settings</strong> (`/account/settings`), pilih Kota lokasi toko Anda dari dropdown pilihan kota di Bali (seperti *Denpasar*, *Badung*, *Gianyar*, *Tabanan*, dll.), lalu klik **Simpan Pengaturan Profil**. Kota lokasi toko Anda akan ditampilkan pada katalog produk pembeli.
                        </p>
                    </details>

                    <details class="group border border-surface-container-low rounded-xl p-4 bg-surface-container-lowest transition-all cursor-pointer">
                        <summary class="flex justify-between items-center font-bold text-sm text-on-surface group-hover:text-primary list-none">
                            <span>Bagaimana cara menambahkan produk baru dan menetapkan harga diskon?</span>
                            <span class="material-symbols-outlined text-secondary transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <p class="mt-3 text-xs text-secondary leading-relaxed border-t border-surface-container-low pt-3">
                            Masuk ke menu <strong>Inventory</strong>, klik tombol **Tambah Produk**. Isi *Harga (Rp)* dengan harga jual riil setelah diskon yang harus dibayar pembeli. Jika ingin menampilkan harga coret sebelum diskon, isi kolom *Harga Sebelum Diskon (Rp)* dengan nominal harga asli yang lebih tinggi.
                        </p>
                    </details>

                    <details class="group border border-surface-container-low rounded-xl p-4 bg-surface-container-lowest transition-all cursor-pointer">
                        <summary class="flex justify-between items-center font-bold text-sm text-on-surface group-hover:text-primary list-none">
                            <span>Apakah pesanan yang sudah dibayar dapat dikonfirmasi oleh penjual?</span>
                            <span class="material-symbols-outlined text-secondary transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <p class="mt-3 text-xs text-secondary leading-relaxed border-t border-surface-container-low pt-3">
                            Ya, pesanan dengan status *Paid / Lunas* menandakan pembeli telah menyelesaikan pembayaran. Anda dapat memproses pengemasan barang dan menghubungi pembeli jika diperlukan info pengiriman tambahan.
                        </p>
                    </details>
                </div>
            </div>
        </div>

        <!-- Right 5 Cols: Submit Support Ticket Form -->
        <div class="lg:col-span-5">
            <div class="bg-white border border-[#EDEDED] rounded-2xl p-5 sm:p-6 space-y-4 shadow-sm">
                <div class="border-b border-surface-container-low pb-3">
                    <h2 class="font-headline-sm text-lg font-bold text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">contact_support</span>
                        Kirim Tiket Bantuan Penjual
                    </h2>
                    <p class="text-xs text-secondary mt-1">Mengalami kendala akun, kendala pembayaran, atau masalah teknis? Kirim pesan ke Tim Support kami.</p>
                </div>

                <div id="ticket-success-alert" class="hidden p-3.5 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs font-bold">
                    Pesan bantuan Anda telah berhasil dikirim! Tim Support Katalog IDN akan menghubungi Anda dalam waktu 1x24 jam.
                </div>

                <form id="support-ticket-form" onsubmit="handleSupportSubmit(event)" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-on-surface mb-1">Subjek Kendala *</label>
                        <input id="ticket-subject" required class="w-full bg-surface border border-outline-variant rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-all" placeholder="Contoh: Kendala Update Stok Produk..." type="text"/>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface mb-1">Kategori Kendala *</label>
                        <select id="ticket-category" class="w-full bg-surface border border-outline-variant rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-all cursor-pointer font-medium">
                            <option value="pesanan">Masalah Pesanan & Transaksi</option>
                            <option value="produk">Masalah Produk & Inventory</option>
                            <option value="pembayaran">Pencairan Dana & Pembayaran</option>
                            <option value="akun">Pengaturan Akun & Profil Toko</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface mb-1">Pesan / Rincian Masalah *</label>
                        <textarea id="ticket-message" required rows="4" class="w-full bg-surface border border-outline-variant rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-all" placeholder="Jelaskan detail permasalahan yang Anda alami..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-3 bg-primary text-on-primary font-bold text-sm rounded-xl hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-sm">
                        <span class="material-symbols-outlined text-lg">send</span>
                        <span>Kirim Pesan Bantuan</span>
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>
</main>

<!-- Footer -->
<footer class="lg:pl-64 w-full py-stack-lg px-4 md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container-high border-t border-outline-variant">
<div class="flex flex-col gap-2">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Katalog IDN</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2026 Katalog IDN. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:gap-6">
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
        if (sidebar) sidebar.classList.toggle('open');
        if (overlay) overlay.classList.toggle('active');
    }
    function closeSidebar() {
        const sidebar = document.getElementById('main-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        if (sidebar) sidebar.classList.remove('open');
        if (overlay) overlay.classList.remove('active');
    }

    function handleSupportSubmit(e) {
        e.preventDefault();
        const alertBox = document.getElementById('ticket-success-alert');
        const form = document.getElementById('support-ticket-form');
        
        if (alertBox) {
            alertBox.classList.remove('hidden');
        }
        if (form) {
            form.reset();
        }
        window.scrollTo({ top: alertBox.offsetTop - 100, behavior: 'smooth' });
    }
</script>
</body>
</html>