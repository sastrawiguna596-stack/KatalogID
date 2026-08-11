<!-- Footer Shell -->
<footer class="w-full py-stack-lg px-margin-mobile md:px-margin-desktop bg-surface-container grid grid-cols-1 md:grid-cols-4 gap-gutter border-t border-outline-variant mt-auto">
    <!-- Column 1: Brand & Mission -->
    <div class="flex flex-col gap-base">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-2xl">storefront</span>
            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Katalog IDN</span>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs leading-relaxed">
            Wadah pemberdayaan dan pemasaran produk asli buatan UMKM lokal Indonesia. Kualitas terjamin, transaksi aman, dan mendukung perekonomian daerah.
        </p>
        <div class="flex items-center gap-3 text-secondary">
            <span class="material-symbols-outlined text-xl hover:text-primary cursor-pointer transition-colors" title="Indonesia">public</span>
            <span class="material-symbols-outlined text-xl hover:text-primary cursor-pointer transition-colors" title="Keamanan Pembayaran">shield</span>
            <span class="material-symbols-outlined text-xl hover:text-primary cursor-pointer transition-colors" title="Pembayaran Terverifikasi">payments</span>
        </div>
    </div>

    <!-- Column 2: Kategori Populer -->
    <div class="flex flex-col gap-base">
        <h5 class="font-label-md text-label-md text-on-surface uppercase tracking-widest font-bold">Kategori Produk</h5>
        <nav class="flex flex-col gap-2">
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop', ['category' => 'kebutuhan-harian']) }}">Kebutuhan Harian</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop', ['category' => 'peralatan-dapur']) }}">Peralatan Dapur</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop', ['category' => 'lampu-pencahayaan']) }}">Lampu & Pencahayaan</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop', ['category' => 'mebel-furnitur']) }}">Mebel & Furnitur</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop', ['category' => 'dekorasi-rumah']) }}">Dekorasi Rumah</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop', ['category' => 'pakaian-aksesoris']) }}">Pakaian & Aksesoris</a>
        </nav>
    </div>

    <!-- Column 3: Navigasi & Layanan -->
    <div class="flex flex-col gap-base">
        <h5 class="font-label-md text-label-md text-on-surface uppercase tracking-widest font-bold">Navigasi & Layanan</h5>
        <nav class="flex flex-col gap-2">
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop') }}">Katalog Semua Produk</a>
            @auth
                @if(Auth::user()->role === 'seller')
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('account') }}">Dashboard Toko Saya</a>
                @else
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('cust_account') }}">Akun Saya</a>
                @endif
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('cart') }}">Keranjang Belanja</a>
            @else
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('login') }}">Masuk / Daftar</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('login') }}">Buka Toko UMKM</a>
            @endauth
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('support') }}">Pusat Bantuan & Support</a>
        </nav>
    </div>

    <!-- Column 4: Kontak & Operasional -->
    <div class="flex flex-col gap-base">
        <h5 class="font-label-md text-label-md text-on-surface uppercase tracking-widest font-bold">Hubungi Kami</h5>
        <div class="flex flex-col gap-2.5 text-body-sm text-on-surface-variant">
            <div class="flex items-start gap-2">
                <span class="material-symbols-outlined text-primary text-sm mt-0.5">location_on</span>
                <span>Jl. Ganetri IV No.1, Tonja, Kec. Denpasar Utara, Kota Denpasar, Bali 80237</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">mail</span>
                <span>support@katalogidn.id</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">schedule</span>
                <span>24 Jam Nonstop (Senin - Minggu)</span>
            </div>
        </div>
    </div>

    <!-- Bottom Copyright Bar -->
    <div class="md:col-span-4 flex flex-col md:flex-row justify-between items-center border-t border-outline-variant pt-stack-md mt-stack-md gap-stack-md">
        <p class="font-body-sm text-body-sm text-secondary text-center md:text-left">
            © 2026 Katalog IDN. Harga Terjangkau, Kualitas Terjamin. Karya & Produk Asli Indonesia.
        </p>
        <div class="flex items-center gap-4 text-xs text-secondary font-medium">
            <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Pembayaran Aman</span>
            <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-primary"></span> Dukungan UMKM Lokal</span>
        </div>
    </div>
</footer>
