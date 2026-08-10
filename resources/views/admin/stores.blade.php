@extends('layouts.admin')

@section('content')
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-stack-lg">
    <div>
        <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-background">Manajemen Toko</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">Daftar semua toko dan statusnya di platform ini.</p>
    </div>
</div>

<div class="bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b border-surface-variant text-on-surface-variant">
                <th class="p-3 font-label-md">ID</th>
                <th class="p-3 font-label-md">Nama Toko</th>
                <th class="p-3 font-label-md">Pemilik</th>
                <th class="p-3 font-label-md">Status</th>
                <th class="p-3 font-label-md">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr class="border-b border-surface-container-low hover:bg-surface-container-lowest transition-colors">
                <td class="p-3 font-body-sm">{{ $store->id }}</td>
                <td class="p-3 font-body-sm">{{ $store->nama_toko }}</td>
                <td class="p-3 font-body-sm">{{ $store->user->name ?? 'N/A' }}</td>
                <td class="p-3 font-body-sm">
                    @if($store->is_active)
                        <span class="px-2 py-1 bg-primary-container text-on-primary-container text-xs rounded-full">Aktif</span>
                    @else
                        <span class="px-2 py-1 bg-error-container text-on-error-container text-xs rounded-full">Nonaktif</span>
                    @endif
                </td>
                <td class="p-3 font-body-sm">
                    <form action="{{ route('admin.stores.toggle', $store->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="px-3 py-1 bg-surface-container-highest hover:bg-surface-variant text-on-surface text-xs rounded border border-surface-variant transition-colors">
                            {{ $store->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $stores->links() }}
    </div>
</div>
@endsection
