@extends('layouts.admin')

@section('content')
<div class="mb-stack-lg">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="font-headline-lg text-headline-lg font-bold text-on-surface">Inventory Keseluruhan</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Pantau seluruh produk dari semua toko di platform Luminous.</p>
        </div>
        <form action="{{ route('admin.inventory') }}" method="GET" class="relative w-full md:w-80">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama produk, toko, kategori..." class="w-full pl-10 pr-10 py-2 bg-surface-container-lowest border border-surface-variant rounded-lg text-sm focus:outline-none focus:border-primary transition-all text-on-surface"/>
            @if(request('search'))
            <a href="{{ route('admin.inventory') }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-primary">
                <span class="material-symbols-outlined text-sm">close</span>
            </a>
            @endif
        </form>
    </div>

    @if(session('success'))
        <div class="bg-primary-container text-on-primary-container p-4 rounded-lg mb-6 font-body-md text-body-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-surface-container-lowest rounded-xl border border-surface-container overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-surface-container">
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Produk</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Toko</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Kategori</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Harga</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @foreach($products as $product)
                    <tr class="hover:bg-surface-container-low/50 transition-colors">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface font-semibold">{{ $product->nama_produk }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">{{ $product->store->nama_toko ?? 'Toko Tidak Ditemukan' }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">
                            <span class="px-2 py-1 bg-surface-container-high rounded text-xs">{{ $product->category->nama_kategori ?? 'Uncategorized' }}</span>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('product.detail', $product->id) }}" target="_blank" class="text-primary hover:text-primary-fixed-dim transition-colors mr-3" title="Lihat">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </a>
                            <form action="{{ route('admin.inventory.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Peringatan: Tindakan ini akan menghapus produk ini dari platform. Lanjutkan?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-error hover:text-opacity-80 transition-colors" title="Hapus Produk">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($products->isEmpty())
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-on-surface-variant font-body-md">
                            Belum ada produk di platform.
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        
        @if($products->hasPages())
        <div class="px-6 py-4 border-t border-surface-container">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
