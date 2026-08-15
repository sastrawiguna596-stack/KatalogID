<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Katalog IDN - Product Detail</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
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
        }
        .filled-icon {
            font-variation-settings: 'FILL' 1;
        }
        /* Custom scrollbar for gallery */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Active state for custom variant selectors */
        .variant-active {
            border-color: #1b1c1c !important;
            box-shadow: 0 0 0 1px #1b1c1c;
        }
        
        .tab-active {
            border-bottom: 2px solid #7c5800;
            color: #7c5800;
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
</head>
<body class="bg-surface text-on-surface font-body-md">
<!-- TopAppBar -->
@include('layouts.navbar', ['active' => 'shop'])
<main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-stack-lg">
<!-- Product Detail Layout: Asymmetric 2-Column -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg items-start">
<!-- Left: Gallery Side -->
<div class="lg:col-span-7 flex flex-col md:flex-row gap-4">
    <!-- Thumbnails (Desktop: Vertical, Mobile: Horizontal) -->
    <div class="flex md:flex-col gap-3 overflow-x-auto md:overflow-y-auto no-scrollbar w-full md:w-24 order-2 md:order-1">
        @if(is_object($product) && $product->galleries->count() > 0)
            @foreach($product->galleries as $index => $gallery)
            @php
                $gUrl = str_starts_with($gallery->foto_path, 'http') ? $gallery->foto_path : asset($gallery->foto_path);
            @endphp
            <button type="button" 
                onclick="changeMainImage('{{ $gUrl }}', this)" 
                class="gallery-thumb flex-shrink-0 w-20 h-20 md:w-24 md:h-24 border rounded-sm overflow-hidden transition-all cursor-pointer {{ $index === 0 ? 'border-primary ring-2 ring-primary' : 'border-outline-variant hover:border-primary' }}">
                <img class="w-full h-full object-cover" src="{{ $gUrl }}" alt="{{ $product->nama_produk }}" />
            </button>
            @endforeach
        @else
            @php
                $fallbackUrl = is_array($product) ? ($product['image'] ?? '') : ($product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/600');
                $fallbackUrl = str_starts_with($fallbackUrl, 'http') ? $fallbackUrl : asset($fallbackUrl);
            @endphp
            <button type="button" onclick="changeMainImage('{{ $fallbackUrl }}', this)" class="gallery-thumb flex-shrink-0 w-20 h-20 md:w-24 md:h-24 border border-primary ring-2 ring-primary rounded-sm overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ $fallbackUrl }}" alt="Product Image" />
            </button>
        @endif
    </div>
    <!-- Main Featured Image -->
    <div class="flex-1 relative aspect-[4/5] bg-surface-container-lowest border border-[#EDEDED] rounded-sm overflow-hidden shadow-sm order-1 md:order-2">
        @php
            $mainImg = is_array($product) ? ($product['image'] ?? '') : ($product->galleries->first()?->foto_path ?? 'https://via.placeholder.com/600');
            $mainImgUrl = str_starts_with($mainImg, 'http') ? $mainImg : asset($mainImg);
            $badgeText = is_array($product) ? ($product['badge'] ?? '') : $product->badge;
        @endphp
        <img id="main-product-image" class="w-full h-full object-cover transition-all duration-300" src="{{ $mainImgUrl }}" alt="{{ is_array($product) ? ($product['title'] ?? '') : $product->nama_produk }}" />
        @if(!empty($badgeText))
        <div class="absolute top-4 left-4 bg-primary-container text-on-primary-container px-3 py-1 rounded-full font-label-md text-label-md">
            {{ $badgeText }}
        </div>
        @endif
    </div>
</div>
<!-- Right: Product Info Side -->
<div class="lg:col-span-5 flex flex-col gap-stack-md sticky top-24">
    <div class="flex flex-col gap-2">
        <nav class="flex gap-2 text-on-secondary-container font-body-sm text-body-sm uppercase tracking-wider">
            <a class="hover:text-primary transition-colors" href="{{ route('shop') }}">Katalog</a>
            <span>/</span>
            <a class="hover:text-primary transition-colors" href="{{ route('shop') }}">{{ is_array($product) ? ($product['category'] ?? '') : ($product->category->nama_kategori ?? 'Umum') }}</a>
        </nav>
        <h2 class="font-headline-xl text-headline-xl text-on-surface">{{ is_array($product) ? ($product['title'] ?? '') : $product->nama_produk }}</h2>
        @php
            $prodModel = is_object($product) ? $product : null;
            $reviewsList = $prodModel && isset($prodModel->reviews) ? $prodModel->reviews : collect();
            $reviewsCount = $reviewsList->count();
            $avgRating = $reviewsCount > 0 ? round($reviewsList->avg('rating'), 1) : 5.0;
        @endphp
        <div class="flex items-center gap-2">
            <div class="flex text-amber-500">
                @for($s = 1; $s <= 5; $s++)
                    <span class="material-symbols-outlined text-base" style="font-variation-settings: 'FILL' {{ $s <= round($avgRating) ? 1 : 0 }};">star</span>
                @endfor
            </div>
            <button type="button" onclick="switchDetailTab('reviews')" class="font-body-sm text-body-sm text-on-secondary-container font-bold hover:text-primary hover:underline cursor-pointer">
                {{ number_format($avgRating, 1) }} ({{ $reviewsCount }} ulasan)
            </button>
        </div>
    </div>
    <div class="flex items-baseline gap-4">
        @php
            $basePriceVal = is_array($product) ? floatval(str_replace(['Rp', '.', ' '], '', $product['price'] ?? 0)) : floatval($product->harga);
            $initialVariantExtra = (is_object($product) && $product->variants->first()) ? floatval($product->variants->first()->harga_tambahan) : 0;
            $initialPrice = $basePriceVal + $initialVariantExtra;
        @endphp
        <span class="font-headline-lg text-headline-lg text-primary" id="display-product-price" data-base-price="{{ $basePriceVal }}">
            Rp {{ number_format($initialPrice, 0, ',', '.') }}
        </span>
        @if(is_object($product) && $product->harga_diskon)
        <span class="font-body-md text-body-md text-secondary line-through">
            Rp {{ number_format($product->harga_diskon, 0, ',', '.') }}
        </span>
        @elseif(is_array($product) && !empty($product['original_price']))
        <span class="font-body-md text-body-md text-secondary line-through">{{ $product['original_price'] }}</span>
        @endif
    </div>


    <!-- Toko Penjual Produk -->
    @if(is_object($product) && $product->store)
    <div class="p-4 rounded-2xl bg-surface-container-lowest border border-[#EDEDED] shadow-xs flex items-center justify-between gap-4">
        <div class="flex items-center gap-3.5 min-w-0">
            <div class="w-12 h-12 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-lg overflow-hidden flex-shrink-0 border border-primary/20">
                @if(!empty($product->store->logo_path))
                    <img src="{{ str_starts_with($product->store->logo_path, 'http') ? $product->store->logo_path : asset($product->store->logo_path) }}" alt="{{ $product->store->nama_toko }}" class="w-full h-full object-cover">
                @else
                    <span class="material-symbols-outlined text-2xl">store</span>
                @endif
            </div>
            <div class="min-w-0">
                <div class="flex items-center gap-2">
                    <h4 class="font-bold text-on-surface text-sm sm:text-base truncate">{{ $product->store->nama_toko }}</h4>
                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-700 text-[10px] font-bold flex-shrink-0">
                        <span class="material-symbols-outlined text-[12px]">verified</span> Toko Resmi
                    </span>
                </div>
                <p class="text-xs text-secondary truncate mt-0.5 flex items-center gap-1.5">
                    @if(!empty($product->store->kota))
                        <span class="flex items-center gap-0.5 text-primary font-semibold">
                            <span class="material-symbols-outlined text-xs">location_on</span>
                            {{ $product->store->kota }}
                        </span>
                        <span>•</span>
                    @endif
                    <span class="line-clamp-1">{{ $product->store->deskripsi ?? 'Penyedia produk berkualitas di Katalog IDN' }}</span>
                </p>
            </div>
        </div>
        <a href="{{ route('store_product', $product->store->id) }}" class="flex-shrink-0 px-3.5 py-2 bg-primary text-on-primary font-label-md text-xs font-bold rounded-xl hover:brightness-110 active:scale-95 transition-all flex items-center gap-1.5 shadow-xs">
            <span>Kunjungi Toko</span>
            <span class="material-symbols-outlined text-sm">open_in_new</span>
        </a>
    </div>
    @endif

    <div class="h-px bg-outline-variant w-full"></div>
    <!-- Variant Selector: Options -->
    <div class="flex flex-col gap-stack-sm">
        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">
            Pilihan Varian: <span class="font-bold text-on-surface" id="selected-variant-display">
                {{ (is_object($product) && $product->variants->first()) ? $product->variants->first()->nama_varian : 'Standard' }}
            </span>
        </span>
        <div class="flex flex-wrap gap-3" id="variant-list">
            @if(is_object($product) && $product->variants->count() > 0)
                @foreach($product->variants as $vIndex => $variant)
                <button type="button" 
                    onclick="selectProductVariant('{{ $variant->id }}', '{{ addslashes($variant->nama_varian) }}', {{ floatval($variant->harga_tambahan) }}, this)"
                    class="variant-option-btn px-4 py-2.5 border-2 rounded-xl font-label-md text-label-md transition-all cursor-pointer flex items-center gap-2 {{ $vIndex === 0 ? 'border-primary bg-primary/10 text-primary font-bold shadow-xs' : 'border-outline-variant hover:border-outline text-on-surface-variant' }}"
                    data-variant-id="{{ $variant->id }}"
                    data-variant-name="{{ $variant->nama_varian }}"
                    data-extra-price="{{ $variant->harga_tambahan }}">
                    <span>{{ $variant->nama_varian }}</span>
                    @if($variant->harga_tambahan > 0)
                        <span class="text-xs opacity-75">(+Rp {{ number_format($variant->harga_tambahan, 0, ',', '.') }})</span>
                    @endif
                </button>
                @endforeach
            @else
                <button type="button" class="px-4 py-2.5 border-2 border-primary bg-primary/10 text-primary font-bold rounded-xl font-label-md text-label-md">Standard</button>
            @endif
        </div>
    </div>
    <!-- Flash Success Alert -->
    @if(session('success'))
    <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-xl font-bold flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <a href="{{ route('cart') }}" class="underline text-sm hover:text-emerald-900">Lihat Keranjang &rarr;</a>
    </div>
    @endif

    <!-- CTA Actions -->
    @php
        $firstVarId = (is_object($product) && $product->variants->first()) ? $product->variants->first()->id : '';
        $firstVarName = (is_object($product) && $product->variants->first()) ? $product->variants->first()->nama_varian : 'Standard';
    @endphp
    <div class="flex flex-col gap-4 pt-4">
        @auth
        <form action="{{ route('cart.add', is_array($product) ? $product['id'] : $product->id) }}" method="POST">
            @csrf
            <input type="hidden" name="variant_id" class="input-variant-id" value="{{ $firstVarId }}">
            <input type="hidden" name="variant_name" class="input-variant-name" value="{{ $firstVarName }}">
            <button type="submit" class="w-full bg-primary-container text-on-primary-container h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-[#ffaa00] active:scale-[0.98] transition-all font-bold shadow-md">
                <span class="material-symbols-outlined">shopping_bag</span>
                Tambah ke Keranjang
            </button>
        </form>

        <form action="{{ route('cart.add', is_array($product) ? $product['id'] : $product->id) }}" method="POST">
            @csrf
            <input type="hidden" name="action" value="buy_now">
            <input type="hidden" name="variant_id" class="input-variant-id" value="{{ $firstVarId }}">
            <input type="hidden" name="variant_name" class="input-variant-name" value="{{ $firstVarName }}">
            <button type="submit" class="w-full bg-transparent border-2 border-on-surface text-on-surface h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-on-surface hover:text-surface transition-all font-bold">
                Beli Sekarang
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="w-full bg-primary-container text-on-primary-container h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-[#ffaa00] active:scale-[0.98] transition-all font-bold shadow-md">
            <span class="material-symbols-outlined">shopping_bag</span>
            Tambah ke Keranjang
        </a>
        <a href="{{ route('login') }}" class="w-full bg-transparent border-2 border-on-surface text-on-surface h-14 rounded-full font-headline-sm text-headline-sm flex justify-center items-center gap-2 hover:bg-on-surface hover:text-surface transition-all font-bold">
            Beli Sekarang
        </a>
        @endauth
    </div>
    <!-- Product Benefits -->
    <div class="grid grid-cols-2 gap-4 mt-4">
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">local_shipping</span>
            <span class="font-body-sm text-body-sm">Gratis Ongkir Seluruh Indonesia</span>
        </div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">verified</span>
            <span class="font-body-sm text-body-sm">Garansi Produk Original</span>
        </div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">eco</span>
            <span class="font-body-sm text-body-sm">Ramah Lingkungan</span>
        </div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-primary">history</span>
            <span class="font-body-sm text-body-sm">Pengembalian 30 Hari</span>
        </div>
    </div>
</div>
</div>
<!-- Detail Tabs Section -->
<section id="detail-tabs-section" class="mt-stack-lg border-t border-outline-variant pt-stack-lg">
<div class="flex gap-gutter border-b border-outline-variant overflow-x-auto no-scrollbar">
<button type="button" id="tab-btn-desc" onclick="switchDetailTab('desc')" class="pb-4 font-label-md text-label-md uppercase tracking-widest tab-active whitespace-nowrap cursor-pointer">Deskripsi</button>
<button type="button" id="tab-btn-reviews" onclick="switchDetailTab('reviews')" class="pb-4 font-label-md text-label-md uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors whitespace-nowrap cursor-pointer">Ulasan ({{ $reviewsCount }})</button>
</div>
<div class="py-stack-md max-w-3xl space-y-6">
<!-- Tab Content: Deskripsi -->
<div id="tab-content-desc" class="flex flex-col gap-stack-sm">
<h3 class="font-headline-md text-headline-md">{{ is_array($product) ? ($product['title'] ?? '') : $product->nama_produk }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed whitespace-pre-line break-words break-all">
    {{ is_array($product) ? ($product['description'] ?? '') : ($product->deskripsi_lengkap ?? $product->deskripsi ?? 'Produk lokal unggulan dari UMKM Indonesia.') }}
</p>
</div>

<!-- Tab Content: Ulasan -->
<div id="tab-content-reviews" class="hidden space-y-4">
    <h3 class="font-headline-md text-xl font-bold text-on-surface flex items-center gap-2">
        <span class="material-symbols-outlined text-primary">rate_review</span>
        Ulasan & Rating Pembeli ({{ $reviewsCount }})
    </h3>
    @if($reviewsCount > 0)
        <div class="space-y-4">
            @foreach($reviewsList as $rev)
                <div class="p-4 bg-white rounded-xl border border-surface-container-low shadow-xs space-y-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="{{ $rev->user->avatar ? asset($rev->user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($rev->user->name ?? 'User') . '&background=7c5800&color=ffffff&size=128' }}" class="w-8 h-8 rounded-full object-cover border border-outline-variant" alt="Avatar"/>
                            <div>
                                <h4 class="font-bold text-xs text-on-surface">{{ $rev->user->name ?? 'Pembeli Katalog IDN' }}</h4>
                                <span class="text-[11px] text-secondary">{{ $rev->created_at ? $rev->created_at->format('d M Y') : '-' }}</span>
                            </div>
                        </div>
                        <div class="flex text-amber-400">
                            @for($s = 1; $s <= 5; $s++)
                                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' {{ $s <= $rev->rating ? 1 : 0 }};">star</span>
                            @endfor
                        </div>
                    </div>
                    <p class="text-sm font-body-sm text-on-surface leading-relaxed pt-1">
                        "{{ $rev->komentar }}"
                    </p>
                </div>
            @endforeach
        </div>
    @else
        <div class="p-6 bg-surface-container-low rounded-xl text-center text-xs text-secondary italic">
            Belum ada ulasan untuk produk ini. Pembeli yang telah mengonfirmasi pesanan selesai dapat memberikan rating & ulasan pertama!
        </div>
    @endif
</div>
</div>
</section>
</div>
</div>
</section>
<!-- Related Products Section -->
<section class="mt-stack-lg pt-stack-lg">
<div class="flex justify-between items-end mb-stack-md">
<div class="flex flex-col gap-2">
<span class="font-label-md text-label-md uppercase tracking-widest text-primary">Curated for You</span>
<h2 class="font-headline-lg text-headline-lg">You May Also Like</h2>
</div>
<button class="font-label-md text-label-md text-on-surface flex items-center gap-2 hover:translate-x-1 transition-transform">
                    View All
                    <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<!-- Bento-style Suggestion Grid -->
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6">
    @forelse($relatedProducts as $rel)
        @php
            $relImg = $rel->galleries->first()?->foto_path ?? 'https://via.placeholder.com/300x400';
            $relImgUrl = str_starts_with($relImg, 'http') ? $relImg : asset($relImg);
        @endphp
        <a href="{{ route('product.detail', $rel->id) }}" class="flex flex-col gap-3 group cursor-pointer">
            <div class="aspect-[4/5] bg-surface-container-high rounded-xl overflow-hidden border border-[#EDEDED] relative">
                <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('{{ $relImgUrl }}')"></div>
                <!-- <button type="button" class="absolute bottom-4 right-4 w-10 h-10 bg-surface rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-primary">shopping_cart</span>
                </button> -->
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider line-clamp-1">{{ $rel->category->nama_kategori ?? 'Kategori' }}</h4>
                <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-1">{{ $rel->nama_produk }}</h3>
                <p class="font-body-md text-body-md font-bold text-on-surface">Rp {{ number_format($rel->harga, 0, ',', '.') }}</p>
            </div>
        </a>
    @empty
        <div class="col-span-full py-8 text-center text-secondary italic">
            Belum ada produk terkait yang tersedia saat ini.
        </div>
    @endforelse
</div>
</section>
</main>
@include('layouts.footer')
<!-- Mobile Bottom NavBar (Visible on mobile only) -->
<script>
        // Interactive Gallery Image Switcher
        function changeMainImage(url, btnElement) {
            const mainImg = document.getElementById('main-product-image');
            if (mainImg) {
                mainImg.style.opacity = '0.4';
                mainImg.src = url;
                setTimeout(() => { mainImg.style.opacity = '1'; }, 150);
            }
            document.querySelectorAll('.gallery-thumb').forEach(b => {
                b.classList.remove('border-primary', 'ring-2', 'ring-primary');
                b.classList.add('border-outline-variant');
            });
            if (btnElement) {
                btnElement.classList.remove('border-outline-variant');
                btnElement.classList.add('border-primary', 'ring-2', 'ring-primary');
            }
        }

        // Dynamic Variant Selector & Price Recalculation
        function selectProductVariant(variantId, variantName, extraPrice, btnElement) {
            // Update Display Label
            const displayLabel = document.getElementById('selected-variant-display');
            if (displayLabel) displayLabel.textContent = variantName;

            // Recalculate Price
            const priceDisplay = document.getElementById('display-product-price');
            if (priceDisplay) {
                const basePrice = parseFloat(priceDisplay.dataset.basePrice || 0);
                const totalPrice = basePrice + parseFloat(extraPrice || 0);
                priceDisplay.textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(totalPrice);
            }

            // Update Hidden Form Inputs
            document.querySelectorAll('.input-variant-id').forEach(input => input.value = variantId);
            document.querySelectorAll('.input-variant-name').forEach(input => input.value = variantName);

            // Update Active Button Styling
            document.querySelectorAll('.variant-option-btn').forEach(btn => {
                btn.classList.remove('border-primary', 'bg-primary/10', 'text-primary', 'font-bold', 'shadow-xs');
                btn.classList.add('border-outline-variant', 'text-on-surface-variant');
            });
            if (btnElement) {
                btnElement.classList.remove('border-outline-variant', 'text-on-surface-variant');
                btnElement.classList.add('border-primary', 'bg-primary/10', 'text-primary', 'font-bold', 'shadow-xs');
            }
        }

        // Tab Switching Handler
        function switchDetailTab(tabName) {
            const btnDesc = document.getElementById('tab-btn-desc');
            const btnReviews = document.getElementById('tab-btn-reviews');
            const contentDesc = document.getElementById('tab-content-desc');
            const contentReviews = document.getElementById('tab-content-reviews');

            if (!btnDesc || !btnReviews || !contentDesc || !contentReviews) return;

            if (tabName === 'desc') {
                btnDesc.classList.add('tab-active');
                btnDesc.classList.remove('text-on-surface-variant');
                btnReviews.classList.remove('tab-active');
                btnReviews.classList.add('text-on-surface-variant');

                contentDesc.classList.remove('hidden');
                contentReviews.classList.add('hidden');
            } else {
                btnReviews.classList.add('tab-active');
                btnReviews.classList.remove('text-on-surface-variant');
                btnDesc.classList.remove('tab-active');
                btnDesc.classList.add('text-on-surface-variant');

                contentReviews.classList.remove('hidden');
                contentDesc.classList.add('hidden');

                const tabsSec = document.getElementById('detail-tabs-section');
                if (tabsSec) tabsSec.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Mobile Navigation Drawer handlers
        function openNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if (drawer) drawer.classList.add('open');
            if (overlay) overlay.classList.add('active');
        }

        function closeNavDrawer() {
            const drawer = document.getElementById('mobile-nav-drawer');
            const overlay = document.getElementById('nav-overlay');
            if (drawer) drawer.classList.remove('open');
            if (overlay) overlay.classList.remove('active');
        }

        // Add scale effect to CTAs
        const mainCta = document.querySelector('.bg-primary-container');
        if (mainCta) {
            mainCta.addEventListener('mousedown', () => mainCta.style.transform = 'scale(0.95)');
            mainCta.addEventListener('mouseup', () => mainCta.style.transform = 'scale(1)');
        }
    </script>
</body></html>