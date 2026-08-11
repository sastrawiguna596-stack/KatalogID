@extends('layouts.admin')

@section('content')
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-stack-lg">
    <div>
        <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-background">Master Admin Control Center</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">Pusat kendali dan manajemen platform e-commerce UMKM Katalog IDN.</p>
    </div>
</div>

@if(session('success'))
<div class="mb-stack-md p-4 bg-emerald-100 text-emerald-800 rounded-xl text-sm font-bold flex items-center gap-2">
    <span class="material-symbols-outlined">check_circle</span>
    {{ session('success') }}
</div>
@endif

<!-- Platform Stat Cards Row -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-stack-lg">
    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-primary-container/20 text-primary flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-2xl">storefront</span>
        </div>
        <div>
            <span class="text-xs text-on-surface-variant font-bold uppercase tracking-wider block">Toko UMKM</span>
            <span class="text-2xl font-bold text-on-surface">{{ number_format($stats['total_stores']) }}</span>
            <span class="text-[11px] text-emerald-600 font-semibold block">Toko Terdaftar</span>
        </div>
    </div>

    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-2xl">inventory_2</span>
        </div>
        <div>
            <span class="text-xs text-on-surface-variant font-bold uppercase tracking-wider block">Produk Katalog</span>
            <span class="text-2xl font-bold text-on-surface">{{ number_format($stats['total_products']) }}</span>
            <span class="text-[11px] text-secondary font-semibold block">Produk Aktif</span>
        </div>
    </div>

    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-2xl">group</span>
        </div>
        <div>
            <span class="text-xs text-on-surface-variant font-bold uppercase tracking-wider block">Total Pengguna</span>
            <span class="text-2xl font-bold text-on-surface">{{ number_format($stats['total_users']) }}</span>
            <span class="text-[11px] text-amber-700 font-semibold block">Pembeli & Penjual</span>
        </div>
    </div>

    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-2xl">receipt_long</span>
        </div>
        <div>
            <span class="text-xs text-on-surface-variant font-bold uppercase tracking-wider block">Transaksi</span>
            <span class="text-2xl font-bold text-on-surface">{{ number_format($stats['total_orders']) }}</span>
            <span class="text-[11px] text-blue-700 font-semibold block">Pesanan Platform</span>
        </div>
    </div>
</div>

<form action="{{ route('admin.settings.update') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-stack-lg">
    @csrf

    <!-- Section 1: Store Information (Spans 8 columns) -->
    <section class="lg:col-span-8 bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md">
        <div class="flex items-center gap-3 pb-4 border-b border-surface-container">
            <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">storefront</span>
            </div>
            <h2 class="font-headline-md text-headline-md text-on-surface">Informasi Utama Platform</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-sm">
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Nama Platform Store</label>
                <input name="store_name" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['store_name'] ?? 'Katalog IDN Main Platform' }}"/>
            </div>
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Email Kontak Global</label>
                <input name="contact_email" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="email" value="{{ $settings['contact_email'] ?? 'support@katalogidn.id' }}"/>
            </div>
            <div class="space-y-1 md:col-span-2">
                <label class="font-label-md text-label-md text-on-surface-variant">Alamat Operasional Kantor Pusat</label>
                <input name="business_address" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['business_address'] ?? 'Jl. Ganetri IV No.1, Tonja, Kec. Denpasar Utara, Kota Denpasar, Bali 80237' }}"/>
            </div>
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Mata Uang Utama</label>
                <div class="relative">
                    <select name="primary_currency" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all appearance-none cursor-pointer">
                        <option value="IDR" selected>IDR (Rp) - Rupiah Indonesia</option>
                        <option value="USD">USD ($) - US Dollar</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
                </div>
            </div>
            <div class="space-y-1 flex items-end justify-end">
                <button type="submit" class="w-full md:w-auto bg-primary text-on-primary px-6 py-3 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all active:scale-95 shadow-sm">
                    Simpan Informasi
                </button>
            </div>
        </div>
    </section>

    <!-- Section 2: Platform Configuration (Spans 4 columns) -->
    <section class="lg:col-span-4 bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md justify-between">
        <div class="flex items-center gap-3 pb-4 border-b border-surface-container">
            <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">tune</span>
            </div>
            <h2 class="font-headline-md text-headline-md text-on-surface">Konfigurasi Sistem</h2>
        </div>
        <div class="flex flex-col gap-stack-sm h-full justify-between">
            <!-- Maintenance Toggle -->
            <div class="flex items-center justify-between p-4 bg-surface-container-low rounded-lg border border-surface-container">
                <div>
                    <h3 class="font-label-md text-label-md text-on-surface">Mode Pemeliharaan (Maintenance)</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Nonaktifkan toko sementara untuk perbaikan.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input name="maintenance_mode" type="hidden" value="0">
                    <input class="sr-only peer" type="checkbox" name="maintenance_mode" value="1" {{ ($settings['maintenance_mode'] ?? '0') == '1' ? 'checked' : '' }}/>
                    <div class="w-11 h-6 bg-surface-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Tarif Pajak Standar / PPN (%)</label>
                <input name="tax_rate" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all text-right" step="0.1" type="number" value="{{ $settings['tax_rate'] ?? '11.0' }}"/>
            </div>
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Kode Asal Pengiriman Utama</label>
                <input name="shipping_origin" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface uppercase transition-all" type="text" value="{{ $settings['shipping_origin'] ?? 'ID-YOG-55213' }}"/>
            </div>
            <div class="mt-2">
                <button type="submit" class="w-full bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all active:scale-95 shadow-sm">
                    Simpan Konfigurasi
                </button>
            </div>
        </div>
    </section>
</form>

<!-- Section 3: Recent Activity (Toko UMKM Terbaru & Produk Terbaru) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
    <!-- Toko UMKM Terbaru -->
    <div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-4">
        <div class="flex justify-between items-center pb-3 border-b border-surface-container">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">store</span>
                <h3 class="font-headline-md text-base font-bold text-on-surface">Toko UMKM Terbaru</h3>
            </div>
            <a href="{{ route('admin.stores') }}" class="text-xs text-primary font-bold hover:underline">Kelola Toko</a>
        </div>
        
        @if(isset($recentStores) && count($recentStores) > 0)
        <div class="divide-y divide-surface-container-low">
            @foreach($recentStores as $s)
            <div class="py-2.5 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-primary-container/20 text-primary flex items-center justify-center font-bold text-xs">
                        {{ strtoupper(substr($s->nama_toko, 0, 2)) }}
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-on-surface">{{ $s->nama_toko }}</h4>
                        <p class="text-[11px] text-secondary">Pemilik: {{ $s->user->name ?? 'User' }}</p>
                    </div>
                </div>
                <span class="px-2 py-0.5 text-[10px] font-bold rounded-full {{ $s->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                    {{ $s->is_active ? 'Aktif' : 'Non-Aktif' }}
                </span>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-xs text-secondary italic py-4 text-center">Belum ada toko registered.</p>
        @endif
    </div>

    <!-- Produk Terbaru -->
    <div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-4">
        <div class="flex justify-between items-center pb-3 border-b border-surface-container">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">inventory_2</span>
                <h3 class="font-headline-md text-base font-bold text-on-surface">Produk Katalog Terbaru</h3>
            </div>
            <a href="{{ route('admin.welcome_settings') }}" class="text-xs text-primary font-bold hover:underline">Atur Halaman Utama</a>
        </div>
        
        @if(isset($recentProducts) && count($recentProducts) > 0)
        <div class="divide-y divide-surface-container-low">
            @foreach($recentProducts as $p)
            <div class="py-2.5 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ $p->first_image_url }}" alt="{{ $p->nama_produk }}" class="w-9 h-9 rounded-lg object-cover border border-outline-variant flex-shrink-0" />
                    <div class="overflow-hidden">
                        <h4 class="font-bold text-xs text-on-surface truncate max-w-[180px]">{{ $p->nama_produk }}</h4>
                        <p class="text-[11px] text-secondary truncate">{{ $p->category->nama_kategori ?? 'Kategori' }} • {{ $p->store->nama_toko ?? 'Toko' }}</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-on-surface">Rp {{ number_format($p->harga, 0, ',', '.') }}</span>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-xs text-secondary italic py-4 text-center">Belum ada produk terdaftar.</p>
        @endif
    </div>
</div>

@endsection