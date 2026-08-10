@extends('layouts.admin')

@section('content')
<div class="mb-stack-lg">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="font-headline-lg text-headline-lg font-bold text-on-surface">Seluruh Transaksi</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Pantau seluruh order dari semua toko di platform Luminous.</p>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl border border-surface-container overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-surface-container">
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">ID Order</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Tanggal</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Pembeli</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Toko (Penjual)</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Total</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @foreach($orders as $order)
                    <tr class="hover:bg-surface-container-low/50 transition-colors">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface font-semibold">#{{ $order->id }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">{{ $order->created_at->format('d M Y H:i') }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">{{ $order->user->name ?? 'Unknown User' }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">{{ $order->store->nama_toko ?? 'Unknown Store' }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface font-bold">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">
                            @if($order->status == 'selesai')
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold uppercase tracking-wider">Selesai</span>
                            @elseif($order->status == 'diproses')
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold uppercase tracking-wider">Diproses</span>
                            @elseif($order->status == 'dikirim')
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-bold uppercase tracking-wider">Dikirim</span>
                            @elseif($order->status == 'dibatalkan')
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-bold uppercase tracking-wider">Dibatalkan</span>
                            @else
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-bold uppercase tracking-wider">{{ $order->status }}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @if($orders->isEmpty())
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-on-surface-variant font-body-md">
                            Belum ada transaksi di platform.
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        
        @if($orders->hasPages())
        <div class="px-6 py-4 border-t border-surface-container">
            {{ $orders->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
