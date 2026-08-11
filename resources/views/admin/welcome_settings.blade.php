@extends('layouts.admin')

@section('content')
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-stack-lg">
    <div>
        <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-background">Pengaturan Halaman Utama</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">Sesuaikan konten yang tampil di halaman depan.</p>
    </div>
</div>

@php
    $featuredIds = isset($settings['featured_product_ids']) ? json_decode($settings['featured_product_ids'], true) : [];
    $newIds = isset($settings['new_product_ids']) ? json_decode($settings['new_product_ids'], true) : [];
@endphp

<form action="{{ route('admin.settings.update') }}" method="POST" class="grid grid-cols-1 gap-gutter">
    @csrf
    
    <div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md">
        <h2 class="font-headline-md text-headline-md text-on-surface">Hero Section</h2>
        
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Judul Dasar (Hero Title)</label>
            <input name="hero_title_base" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['hero_title_base'] ?? 'Nikmati' }}"/>
        </div>
        
        @php
            $hwRaw = $settings['hero_words'] ?? '';
            $hwDecoded = json_decode($hwRaw, true);
            $hwDisplay = is_array($hwDecoded) ? implode(', ', $hwDecoded) : $hwRaw;
        @endphp
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Kata Berganti (Pisahkan dengan Koma)</label>
            <input name="hero_words" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $hwDisplay ?: 'Produk lokal berkualitas terbaik, Belanja aman setiap hari, Pilihan produk lokal terbaik, Karya & Produk Asli Indonesia' }}"/>
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Deskripsi Hero</label>
            <textarea name="hero_desc" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" rows="3">{{ $settings['hero_desc'] ?? 'Tempat menemukan karya atau pun produk yang dijual oleh masyarakat lokal dari anak-anak sampai orang tua, dari karya tangan maupun barang kebutuhan sehari-hari.' }}</textarea>
        </div>
    </div>

    <div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md">
        <h2 class="font-headline-md text-headline-md text-on-surface">Sections</h2>
        
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Judul Kategori</label>
            <input name="categories_title" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['categories_title'] ?? 'Browse Categories' }}"/>
        </div>
        
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Judul Barang Unggulan</label>
            <input name="featured_title" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['featured_title'] ?? 'Barang Unggulan' }}"/>
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Deskripsi Barang Unggulan</label>
            <input name="featured_desc" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['featured_desc'] ?? 'Produk yang dibuat untuk kegiatan sehari-hari dirumah maupun dliuar rumah.' }}"/>
        </div>
        
        <div class="space-y-1">
            <div class="flex items-center justify-between">
                <label class="font-label-md text-label-md text-on-surface-variant">Pilih Produk Unggulan</label>
                <div class="flex gap-2">
                    <button type="button" class="sort-btn text-[11px] px-2 py-1 bg-surface-container-high hover:bg-primary hover:text-on-primary rounded transition-colors" data-target="#featured-select" data-sort="sales">Terlaris</button>
                    <button type="button" class="sort-btn text-[11px] px-2 py-1 bg-surface-container-high hover:bg-primary hover:text-on-primary rounded transition-colors" data-target="#featured-select" data-sort="name">Nama A-Z</button>
                </div>
            </div>
            <select id="featured-select" name="featured_product_ids[]" multiple class="select2 w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none font-body-md text-body-md text-on-surface transition-all">
                @foreach($products as $product)
                    <option value="{{ $product->id }}" 
                            data-sales="{{ $product->total_terjual ?? 0 }}" 
                            data-name="{{ strtolower($product->nama_produk) }}"
                            {{ is_array($featuredIds) && in_array($product->id, $featuredIds) ? 'selected' : '' }}>
                        {{ $product->nama_produk }} (Terjual: {{ $product->total_terjual ?? 0 }})
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Judul Barang Baru</label>
            <input name="new_title" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['new_title'] ?? 'Barang Baru' }}"/>
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Deskripsi Barang Baru</label>
            <input name="new_desc" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['new_desc'] ?? 'Barang untuk kehidupan sehari-hari.' }}"/>
        </div>
        
        <div class="space-y-1">
            <div class="flex items-center justify-between">
                <label class="font-label-md text-label-md text-on-surface-variant">Pilih Produk Baru</label>
                <div class="flex gap-2">
                    <button type="button" class="sort-btn text-[11px] px-2 py-1 bg-surface-container-high hover:bg-primary hover:text-on-primary rounded transition-colors" data-target="#new-select" data-sort="sales">Terlaris</button>
                    <button type="button" class="sort-btn text-[11px] px-2 py-1 bg-surface-container-high hover:bg-primary hover:text-on-primary rounded transition-colors" data-target="#new-select" data-sort="name">Nama A-Z</button>
                </div>
            </div>
            <select id="new-select" name="new_product_ids[]" multiple class="select2 w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none font-body-md text-body-md text-on-surface transition-all">
                @foreach($products as $product)
                    <option value="{{ $product->id }}" 
                            data-sales="{{ $product->total_terjual ?? 0 }}" 
                            data-name="{{ strtolower($product->nama_produk) }}"
                            {{ is_array($newIds) && in_array($product->id, $newIds) ? 'selected' : '' }}>
                        {{ $product->nama_produk }} (Terjual: {{ $product->total_terjual ?? 0 }})
                    </option>
                @endforeach
            </select>
        </div>
    </div>



    <div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md">
        <h2 class="font-headline-md text-headline-md text-on-surface">Our Mission</h2>
        
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Judul Misi</label>
            <input name="mission_title" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="{{ $settings['mission_title'] ?? 'Supporting Small Businesses and Master Artisans' }}"/>
        </div>
        
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Deskripsi Misi (Mendukung HTML)</label>
            <textarea name="mission_desc" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" rows="5">{{ $settings['mission_desc'] ?? 'Katalog IDN adalah platform yang hadir sebagai wadah bagi pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) untuk memperkenalkan serta memasarkan produk unggulan mereka kepada masyarakat luas. Kami percaya bahwa setiap produk lokal memiliki nilai, kualitas, dan potensi untuk berkembang di era digital.<br><br>Melalui Katalog IDN, kami menghubungkan pembeli dengan beragam produk UMKM terpercaya dalam satu platform yang mudah diakses, aman, dan nyaman digunakan. Dengan mendukung UMKM, setiap transaksi bukan hanya memenuhi kebutuhan, tetapi juga berkontribusi pada pertumbuhan ekonomi lokal dan kemajuan usaha Indonesia.<br><br>Misi kami adalah menjadikan produk UMKM lebih mudah ditemukan, lebih dipercaya, dan lebih dikenal oleh seluruh masyarakat Indonesia.' }}</textarea>
        </div>
    </div>

    <div class="flex justify-end mt-4">
        <button type="submit" class="bg-primary text-on-primary px-8 py-3 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all active:scale-95 shadow-sm">
            Simpan Pengaturan
        </button>
    </div>
</form>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--multiple {
        border-color: theme('colors.surface-variant');
        border-radius: 0.5rem;
        padding: 4px;
        min-height: 48px;
    }
    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: theme('colors.on-surface-variant');
    }
    .select2-results__option {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Cari dan pilih produk...",
            allowClear: true
        });

        $('.sort-btn').on('click', function() {
            const targetId = $(this).data('target');
            const sortType = $(this).data('sort');
            const $select = $(targetId);
            const $options = $select.find('option');

            $options.sort(function(a, b) {
                if (sortType === 'sales') {
                    return parseInt($(b).data('sales')) - parseInt($(a).data('sales'));
                } else {
                    return $(a).data('name').localeCompare($(b).data('name'));
                }
            });

            $select.empty().append($options);
            $select.select2('destroy').select2({
                placeholder: "Cari dan pilih produk...",
                allowClear: true
            });
        });
    });
</script>
@endsection
