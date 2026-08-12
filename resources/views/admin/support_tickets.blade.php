@extends('layouts.admin')

@section('content')
<div class="space-y-6" x-data="{ replyModalOpen: false, selectedTicket: null }">

    <!-- Page Title & Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-2xl border border-surface-container shadow-xs">
        <div>
            <h1 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface flex items-center gap-3">
                <span class="material-symbols-outlined text-primary text-3xl">mail</span>
                <span>Kotak Surat & Tiket Bantuan</span>
            </h1>
            <p class="text-xs sm:text-sm text-secondary mt-1">Kelola pertanyaan, laporan kendala, dan kirim balasan langsung ke pembeli / penjual Katalog IDN.</p>
        </div>
        @if($pendingCount > 0)
            <div class="px-4 py-2 bg-amber-500/10 border border-amber-500/30 text-amber-900 rounded-xl text-xs font-bold flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-ping"></span>
                <span>{{ $pendingCount }} Pesan Belum Dibalas</span>
            </div>
        @endif
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs sm:text-sm font-bold flex items-center gap-2 shadow-xs">
            <span class="material-symbols-outlined text-lg">check_circle</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Stats Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <a href="{{ route('admin.tickets', ['status' => 'pending']) }}" class="bg-white p-5 rounded-2xl border {{ $status === 'pending' ? 'border-primary ring-2 ring-primary/20' : 'border-surface-container' }} hover:shadow-md transition-all flex items-center justify-between group">
            <div class="space-y-1">
                <span class="text-xs font-bold text-secondary uppercase tracking-wider">Menunggu Balasan</span>
                <h3 class="text-2xl font-bold text-amber-600">{{ $pendingCount }}</h3>
                <p class="text-[11px] text-secondary">Tiket butuh respon admin</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-2xl">mark_email_unread</span>
            </div>
        </a>

        <a href="{{ route('admin.tickets', ['status' => 'replied']) }}" class="bg-white p-5 rounded-2xl border {{ $status === 'replied' ? 'border-primary ring-2 ring-primary/20' : 'border-surface-container' }} hover:shadow-md transition-all flex items-center justify-between group">
            <div class="space-y-1">
                <span class="text-xs font-bold text-secondary uppercase tracking-wider">Sudah Dibalas</span>
                <h3 class="text-2xl font-bold text-emerald-600">{{ $repliedCount }}</h3>
                <p class="text-[11px] text-secondary">Balasan terkirim ke user</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-2xl">mark_email_read</span>
            </div>
        </a>

        <a href="{{ route('admin.tickets', ['status' => 'all']) }}" class="bg-white p-5 rounded-2xl border {{ $status === 'all' ? 'border-primary ring-2 ring-primary/20' : 'border-surface-container' }} hover:shadow-md transition-all flex items-center justify-between group">
            <div class="space-y-1">
                <span class="text-xs font-bold text-secondary uppercase tracking-wider">Total Semua Tiket</span>
                <h3 class="text-2xl font-bold text-on-surface">{{ $totalCount }}</h3>
                <p class="text-[11px] text-secondary">Semua pesan masuk</p>
            </div>
            <div class="w-12 h-12 rounded-xl bg-surface-container-high text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-2xl">inbox</span>
            </div>
        </a>
    </div>

    <!-- Search & Filter Controls -->
    <div class="bg-white p-4 rounded-2xl border border-surface-container shadow-xs flex flex-col md:flex-row justify-between items-center gap-4">
        <!-- Status Tabs -->
        <div class="flex items-center gap-2 w-full md:w-auto overflow-x-auto pb-1 md:pb-0">
            <a href="{{ route('admin.tickets', ['status' => 'all']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-all whitespace-nowrap {{ $status === 'all' ? 'bg-primary text-white shadow-xs' : 'bg-surface-container-low text-secondary hover:bg-surface-container-high' }}">
                Semua ({{ $totalCount }})
            </a>
            <a href="{{ route('admin.tickets', ['status' => 'pending']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-all whitespace-nowrap flex items-center gap-1.5 {{ $status === 'pending' ? 'bg-amber-600 text-white shadow-xs' : 'bg-surface-container-low text-secondary hover:bg-surface-container-high' }}">
                <span>Belum Dibalas</span>
                @if($pendingCount > 0)
                    <span class="bg-amber-400 text-amber-950 px-1.5 py-0.2 text-[10px] rounded-full font-bold">{{ $pendingCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.tickets', ['status' => 'replied']) }}" class="px-4 py-2 rounded-xl text-xs font-bold transition-all whitespace-nowrap {{ $status === 'replied' ? 'bg-emerald-600 text-white shadow-xs' : 'bg-surface-container-low text-secondary hover:bg-surface-container-high' }}">
                Sudah Dibalas ({{ $repliedCount }})
            </a>
        </div>

        <!-- Search Form -->
        <form action="{{ route('admin.tickets') }}" method="GET" class="w-full md:w-80 relative">
            @if(request('status'))
                <input type="hidden" name="status" value="{{ request('status') }}"/>
            @endif
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-secondary text-lg">search</span>
            <input name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-xl text-xs focus:outline-none focus:border-primary transition-all" placeholder="Cari nama, email, subjek..." type="text"/>
        </form>
    </div>

    <!-- Support Tickets Table -->
    <div class="bg-white rounded-2xl border border-surface-container overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-surface-container text-xs font-bold text-secondary uppercase tracking-wider">
                        <th class="py-3.5 px-4">Pengirim / User</th>
                        <th class="py-3.5 px-4">Subjek & Kategori</th>
                        <th class="py-3.5 px-4">Tanggal Pesan</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container text-sm">
                    @forelse($tickets as $ticket)
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <!-- User & Store Info -->
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-primary/10 text-primary font-bold flex items-center justify-center text-sm flex-shrink-0">
                                        {{ strtoupper(substr($ticket->user->name ?? 'U', 0, 1)) }}
                                    </div>
                                    <div class="min-w-0">
                                        <h4 class="font-bold text-on-surface text-xs sm:text-sm truncate">{{ $ticket->user->name ?? 'User Unknown' }}</h4>
                                        <p class="text-[11px] text-secondary truncate">{{ $ticket->user->email ?? '-' }}</p>
                                        @if($ticket->store)
                                            <span class="inline-flex items-center gap-0.5 text-[10px] font-bold text-primary bg-primary/10 px-1.5 py-0.5 rounded mt-0.5">
                                                <span class="material-symbols-outlined text-[12px]">store</span>
                                                {{ $ticket->store->nama_toko }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </td>

                            <!-- Subject & Category -->
                            <td class="py-4 px-4">
                                <div class="space-y-1">
                                    <span class="font-bold text-on-surface text-xs sm:text-sm block line-clamp-1" title="{{ $ticket->subjek }}">{{ $ticket->subjek }}</span>
                                    <span class="inline-block text-[10px] uppercase font-bold text-secondary bg-surface-container-high px-2 py-0.5 rounded">
                                        {{ ucfirst($ticket->kategori) }}
                                    </span>
                                </div>
                            </td>

                            <!-- Date -->
                            <td class="py-4 px-4 whitespace-nowrap text-xs text-secondary">
                                <div>{{ $ticket->created_at->format('d M Y, H:i') }} WITA</div>
                                <span class="text-[10px] text-secondary/70">{{ $ticket->created_at->diffForHumans() }}</span>
                            </td>

                            <!-- Status Badge -->
                            <td class="py-4 px-4 whitespace-nowrap">
                                @if($ticket->status === 'replied')
                                    <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 text-xs font-bold rounded-full inline-flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">check_circle</span> Sudah Dibalas
                                    </span>
                                @else
                                    <span class="px-2.5 py-1 bg-amber-100 text-amber-800 text-xs font-bold rounded-full inline-flex items-center gap-1 animate-pulse">
                                        <span class="material-symbols-outlined text-sm">pending</span> Belum Dibalas
                                    </span>
                                @endif
                            </td>

                            <!-- Action -->
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <button type="button" 
                                    @click="selectedTicket = {{ json_encode([
                                        'id' => $ticket->id,
                                        'subjek' => $ticket->subjek,
                                        'kategori' => $ticket->kategori,
                                        'pesan' => $ticket->pesan,
                                        'balasan_admin' => $ticket->balasan_admin,
                                        'status' => $ticket->status,
                                        'user_name' => $ticket->user->name ?? 'User',
                                        'user_email' => $ticket->user->email ?? '-',
                                        'store_name' => $ticket->store->nama_toko ?? null,
                                        'created_at' => $ticket->created_at->format('d M Y H:i'),
                                        'replied_at' => $ticket->replied_at ? $ticket->replied_at->format('d M Y H:i') : null
                                    ]) }}; replyModalOpen = true"
                                    class="px-3 py-1.5 bg-primary text-white rounded-xl text-xs font-bold hover:brightness-110 transition-all flex items-center justify-center gap-1 mx-auto">
                                    <span class="material-symbols-outlined text-base">reply</span>
                                    <span>{{ $ticket->status === 'replied' ? 'Lihat Balasan' : 'Balas Pesan' }}</span>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-secondary">
                                <span class="material-symbols-outlined text-4xl mb-2">inbox</span>
                                <p class="font-bold text-sm">Tidak ada tiket bantuan ditemukan.</p>
                                <p class="text-xs text-secondary mt-1">Tiket yang dikirim oleh pengguna dari halaman Support akan tampil di sini.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($tickets->hasPages())
            <div class="p-4 border-t border-surface-container bg-surface-container-low/30">
                {{ $tickets->links() }}
            </div>
        @endif
    </div>

    <!-- Modal Balas Tiket Bantuan -->
    <div x-cloak x-show="replyModalOpen" class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-black/50 backdrop-blur-xs">
        <div @click.away="replyModalOpen = false" class="bg-white w-full max-w-2xl rounded-2xl p-6 space-y-5 shadow-2xl border border-surface-container max-h-[90vh] overflow-y-auto">
            
            <div class="flex items-center justify-between border-b border-surface-container pb-3">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-2xl">mark_email_unread</span>
                    <div>
                        <h3 class="font-bold text-lg text-on-surface">Detail & Balas Tiket Bantuan</h3>
                        <p class="text-xs text-secondary" x-text="'ID Tiket #' + (selectedTicket ? selectedTicket.id : '')"></p>
                    </div>
                </div>
                <button type="button" @click="replyModalOpen = false" class="p-1 rounded-lg text-secondary hover:bg-surface-container-high">
                    <span class="material-symbols-outlined text-xl">close</span>
                </button>
            </div>

            <template x-if="selectedTicket">
                <div class="space-y-4">
                    <!-- User Header Details -->
                    <div class="bg-surface-container-low p-4 rounded-xl space-y-2 border border-surface-container">
                        <div class="flex justify-between items-start flex-wrap gap-2">
                            <div>
                                <h4 class="font-bold text-on-surface text-sm" x-text="selectedTicket.user_name"></h4>
                                <p class="text-xs text-secondary" x-text="selectedTicket.user_email"></p>
                                <template x-if="selectedTicket.store_name">
                                    <span class="text-[11px] font-bold text-primary" x-text="'Toko: ' + selectedTicket.store_name"></span>
                                </template>
                            </div>
                            <span class="text-xs font-bold text-secondary" x-text="selectedTicket.created_at + ' WITA'"></span>
                        </div>
                        <div class="border-t border-surface-container pt-2 mt-2">
                            <span class="text-xs font-bold text-primary uppercase tracking-wider break-words" x-text="'[' + selectedTicket.kategori + '] ' + selectedTicket.subjek"></span>
                        </div>
                    </div>

                    <!-- Original User Message -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-secondary uppercase tracking-wider">Pesan Dari Pengguna:</label>
                        <div class="p-4 bg-amber-50/50 border border-amber-200/70 rounded-xl text-sm text-on-surface leading-relaxed font-medium" style="white-space:pre-wrap;word-break:break-word;overflow-wrap:break-word;overflow:hidden;" x-text="selectedTicket.pesan"></div>
                    </div>

                    <!-- Admin Reply History (If already replied) -->
                    <template x-if="selectedTicket.balasan_admin">
                        <div class="space-y-1">
                            <div class="flex justify-between items-center">
                                <label class="text-xs font-bold text-emerald-700 uppercase tracking-wider">Balasan Terkirim Sebelumnya:</label>
                                <span class="text-[11px] text-secondary" x-text="selectedTicket.replied_at"></span>
                            </div>
                            <div class="p-4 bg-emerald-50/60 border border-emerald-200 rounded-xl text-sm text-emerald-950 leading-relaxed font-medium" style="white-space:pre-wrap;word-break:break-word;overflow-wrap:break-word;overflow:hidden;" x-text="selectedTicket.balasan_admin"></div>
                        </div>
                    </template>

                    <!-- Reply Form -->
                    <form :action="'{{ url('/admin/tickets') }}/' + selectedTicket.id + '/reply'" method="POST" class="space-y-4 pt-2">
                        @csrf
                        <div>
                            <label class="block text-xs font-bold text-on-surface mb-1">
                                <span x-text="selectedTicket.balasan_admin ? 'Perbarui / Kirim Ulang Balasan Admin *' : 'Tulis Balasan Admin *'"></span>
                            </label>
                            <textarea name="balasan_admin" required rows="4" class="w-full bg-surface border border-outline-variant rounded-xl p-3 text-sm focus:outline-none focus:border-primary transition-all" placeholder="Ketik jawaban / balasan resmi dari Tim Support..." x-text="selectedTicket.balasan_admin || ''"></textarea>
                            <p class="text-[11px] text-secondary mt-1">
                                ℹ️ Balasan ini otomatis mengirim notifikasi ke akun pengirim dengan judul awal <strong>"Balasan dari Team Support"</strong>.
                            </p>
                        </div>

                        <div class="flex justify-end gap-2 pt-2">
                            <button type="button" @click="replyModalOpen = false" class="px-4 py-2.5 rounded-xl border border-outline-variant text-secondary text-xs font-bold hover:bg-surface-container-high transition-all">
                                Batal
                            </button>
                            <button type="submit" class="px-5 py-2.5 bg-primary text-white rounded-xl text-xs font-bold hover:brightness-110 transition-all flex items-center gap-1.5 shadow-sm">
                                <span class="material-symbols-outlined text-base">send</span>
                                <span>Kirim Balasan & Notifikasi</span>
                            </button>
                        </div>
                    </form>
                </div>
            </template>
        </div>
    </div>

</div>
@endsection
