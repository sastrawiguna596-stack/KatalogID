@extends('layouts.admin')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-stack-lg">
    <div>
        <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-background">Manajemen Toko</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">Verifikasi dan kelola status semua toko di platform ini.</p>
    </div>
    <form action="{{ route('admin.stores') }}" method="GET" class="relative w-full md:w-80">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama toko atau pemilik..." class="w-full pl-10 pr-10 py-2 bg-surface-container-lowest border border-surface-variant rounded-lg text-sm focus:outline-none focus:border-primary transition-all text-on-surface"/>
        @if(request('search'))
        <a href="{{ route('admin.stores') }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-primary">
            <span class="material-symbols-outlined text-sm">close</span>
        </a>
        @endif
    </form>
</div>

{{-- Summary Cards --}}
@php
    $totalStores    = $stores->total();
    $activeStores   = \App\Models\Store::where('is_active', true)->count();
    $pendingStores  = \App\Models\Store::where('is_active', false)->count();
@endphp
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-stack-md">
    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-3">
        <span class="material-symbols-outlined text-secondary text-3xl">store</span>
        <div>
            <p class="text-xs text-on-surface-variant font-label-md">Total Toko</p>
            <p class="text-2xl font-bold text-on-surface">{{ $totalStores }}</p>
        </div>
    </div>
    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-3">
        <span class="material-symbols-outlined text-emerald-600 text-3xl">check_circle</span>
        <div>
            <p class="text-xs text-on-surface-variant font-label-md">Toko Aktif</p>
            <p class="text-2xl font-bold text-emerald-600">{{ $activeStores }}</p>
        </div>
    </div>
    <div class="bg-surface border border-surface-variant rounded-xl p-4 flex items-center gap-3">
        <span class="material-symbols-outlined text-amber-600 text-3xl">pending</span>
        <div>
            <p class="text-xs text-on-surface-variant font-label-md">Menunggu Verifikasi</p>
            <p class="text-2xl font-bold text-amber-600">{{ $pendingStores }}</p>
        </div>
    </div>
</div>

<div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b border-surface-variant text-on-surface-variant">
                <th class="p-3 font-label-md">ID</th>
                <th class="p-3 font-label-md">Nama Toko</th>
                <th class="p-3 font-label-md">Pemilik</th>
                <th class="p-3 font-label-md">Kota</th>
                <th class="p-3 font-label-md">Terdaftar</th>
                <th class="p-3 font-label-md">Status</th>
                <th class="p-3 font-label-md">Aksi Verifikasi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($stores as $store)
            <tr class="border-b border-surface-container-low hover:bg-surface-container-lowest transition-colors {{ !$store->is_active ? 'bg-amber-50/40' : '' }}">
                <td class="p-3 font-body-sm text-on-surface-variant">#{{ $store->id }}</td>
                <td class="p-3 font-body-sm">
                    <div class="font-bold text-on-surface">{{ $store->nama_toko }}</div>
                    @if(!$store->is_active)
                        <div class="text-[11px] text-amber-600 font-bold flex items-center gap-1 mt-0.5">
                            <span class="material-symbols-outlined text-xs">schedule</span>
                            Menunggu verifikasi admin
                        </div>
                    @endif
                </td>
                <td class="p-3 font-body-sm">
                    <div>{{ $store->user->name ?? 'N/A' }}</div>
                    <div class="text-[11px] text-on-surface-variant">{{ $store->user->email ?? '' }}</div>
                </td>
                <td class="p-3 font-body-sm text-on-surface-variant">{{ $store->kota ?? '-' }}</td>
                <td class="p-3 font-body-sm text-on-surface-variant">{{ $store->created_at ? $store->created_at->format('d M Y') : '-' }}</td>
                <td class="p-3 font-body-sm">
                    @if($store->is_active)
                        <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-xs rounded-full font-bold flex items-center gap-1 w-fit">
                            <span class="material-symbols-outlined text-xs">check_circle</span> Aktif
                        </span>
                    @else
                        <span class="px-2 py-1 bg-amber-100 text-amber-700 text-xs rounded-full font-bold flex items-center gap-1 w-fit">
                            <span class="material-symbols-outlined text-xs">pending</span> Belum Diverifikasi
                        </span>
                    @endif
                </td>
                <td class="p-3 font-body-sm">
                    <form action="{{ route('admin.stores.toggle', $store->id) }}" method="POST">
                        @csrf
                        @if($store->is_active)
                            <button type="submit"
                                class="px-3 py-1.5 bg-error-container hover:bg-error text-on-error-container hover:text-on-error text-xs rounded-lg border border-error/30 transition-colors font-bold flex items-center gap-1"
                                onclick="return confirm('Nonaktifkan toko \'{{ addslashes($store->nama_toko) }}\'?')">
                                <span class="material-symbols-outlined text-xs">block</span> Nonaktifkan
                            </button>
                        @else
                            <button type="submit"
                                class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs rounded-lg transition-colors font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs">verified</span> Verifikasi & Aktifkan
                            </button>
                        @endif
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="p-8 text-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-3xl block mb-2">store_off</span>
                    Tidak ada toko yang ditemukan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $stores->links() }}
    </div>
</div>
@endsection
