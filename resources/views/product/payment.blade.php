<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pembayaran Pesanan {{ $order->kode_transaksi }} | Katalog IDN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    @if($order->payment_gateway === 'midtrans' && !empty($midtransClientKey))
        <script src="{{ $isMidtransProduction ? 'https://app.midtrans.com/snap/snap.js' : 'https://app.sandbox.midtrans.com/snap/snap.js' }}" data-client-key="{{ $midtransClientKey }}"></script>
    @endif

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
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md min-h-screen flex flex-col justify-between">

@include('layouts.navbar', ['active' => 'cart'])

<main class="w-full max-w-[1280px] mx-auto px-4 md:px-margin-desktop py-8 flex-grow">

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-xl font-bold flex items-center justify-between shadow-xs">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-emerald-600">check_circle</span>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Column: Payment Details & Gateway Selector -->
        <div class="lg:col-span-8 space-y-6">
            
            <!-- Header Card -->
            <div class="bg-surface-container-lowest border border-outline-variant/40 rounded-2xl p-6 sm:p-8 shadow-xs">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b border-outline-variant/30 pb-6 mb-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-secondary">Kode Transaksi</span>
                        <h1 class="font-headline-md text-2xl sm:text-3xl font-extrabold text-on-surface flex items-center gap-2 mt-1">
                            <span>{{ $order->kode_transaksi }}</span>
                            <button type="button" onclick="navigator.clipboard.writeText('{{ $order->kode_transaksi }}'); alert('Kode transaksi telah disalin!');" class="p-1 text-secondary hover:text-primary transition-colors" title="Salin Kode">
                                <span class="material-symbols-outlined text-lg">content_copy</span>
                            </button>
                        </h1>
                    </div>

                    <div class="flex items-center gap-2">
                        @if($order->status_pembayaran === 'paid')
                            <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-emerald-500/10 text-emerald-700 font-bold text-xs">
                                <span class="material-symbols-outlined text-sm">verified</span> LUNAS / PAID
                            </span>
                        @elseif($order->status_pembayaran === 'failed')
                            <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-rose-500/10 text-rose-700 font-bold text-xs">
                                <span class="material-symbols-outlined text-sm">cancel</span> GAGAL
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-amber-500/15 text-amber-800 font-bold text-xs animate-pulse">
                                <span class="material-symbols-outlined text-sm">hourglass_empty</span> MENUNGGU PEMBAYARAN
                            </span>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-body-sm text-secondary">
                    <div>
                        <span class="block text-xs uppercase font-bold text-outline">Toko Penjual</span>
                        <span class="font-bold text-on-surface text-base">{{ $order->store->nama_toko ?? 'Katalog IDN Store' }}</span>
                    </div>
                    <div>
                        <span class="block text-xs uppercase font-bold text-outline">Metode Terpilih</span>
                        <span class="font-bold text-primary text-base uppercase">{{ str_replace('_', ' ', $order->payment_method ?: 'Bank Transfer') }}</span>
                    </div>
                    <div>
                        <span class="block text-xs uppercase font-bold text-outline">Active Gateway Driver</span>
                        <span class="font-bold text-on-surface text-base uppercase flex items-center gap-1">
                            <span class="material-symbols-outlined text-base text-primary">hub</span>
                            {{ $order->payment_gateway ?: 'Manual / Sandbox' }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Payment Action Box -->
            <div class="bg-surface-container-lowest border border-outline-variant/40 rounded-2xl p-6 sm:p-8 shadow-xs">
                
                @if($order->status_pembayaran === 'paid')
                    <div class="text-center py-8">
                        <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-4xl">check_circle</span>
                        </div>
                        <h2 class="font-headline-md text-2xl font-bold text-on-surface">Pembayaran Berhasil!</h2>
                        <p class="text-secondary text-body-sm mt-2 max-w-md mx-auto">
                            Pesanan Anda telah dikonfirmasi dan sedang diproses oleh penjual. Anda dapat melacak status pesanan di halaman Akun.
                        </p>
                        <a href="{{ route('cust_recent_orders') }}" class="mt-6 inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-bold rounded-xl text-sm shadow-md hover:brightness-110 transition-all">
                            <span>Lihat Pesanan Saya</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                @else
                    
                    <!-- Midtrans Snap Section (If Midtrans Snap Token & Key exist) -->
                    @if($order->payment_gateway === 'midtrans' && !empty($order->payment_token) && !str_contains($order->payment_token, 'MOCK'))
                        <div class="text-center py-6">
                            <h3 class="font-headline-sm text-lg font-bold mb-2">Selesaikan Pembayaran via Midtrans</h3>
                            <p class="text-body-sm text-secondary mb-6">Klik tombol di bawah ini untuk membuka portal pembayaran resmi Midtrans Snap.</p>
                            <button id="pay-button" type="button" class="px-8 py-4 bg-primary text-white font-bold rounded-xl text-headline-sm shadow-lg hover:brightness-110 active:scale-95 transition-all">
                                Bayar Sekarang dengan Midtrans
                            </button>
                        </div>
                        <script type="text/javascript">
                            document.getElementById('pay-button').onclick = function(){
                                snap.pay('{{ $order->payment_token }}', {
                                    onSuccess: function(result){ window.location.reload(); },
                                    onPending: function(result){ window.location.reload(); },
                                    onError: function(result){ alert("Pembayaran gagal!"); },
                                    onClose: function(){ alert('Anda menutup popup pembayaran.'); }
                                });
                            };
                        </script>
                    
                    <!-- Manual Transfer / Sandbox Payment Instructions -->
                    @else
                        <h3 class="font-headline-sm text-lg font-bold text-on-surface mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">account_balance</span>
                            <span>Instruksi Transfer Bank</span>
                        </h3>
                        <p class="text-body-sm text-secondary mb-6">Silakan lakukan transfer ke salah satu rekening berikut sejumlah tepat <strong>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</strong></p>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                            @foreach($bankAccounts as $bank)
                            <div class="p-4 rounded-xl border border-outline-variant/50 bg-surface-container-low/50 relative group">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="font-extrabold text-sm text-primary">{{ $bank['bank'] }}</span>
                                    <button type="button" onclick="navigator.clipboard.writeText('{{ $bank['number'] }}'); alert('Nomor Rekening {{ $bank['bank'] }} disalin!');" class="text-xs text-secondary hover:text-primary font-bold">Copy</button>
                                </div>
                                <p class="font-mono font-bold text-on-surface text-base tracking-wider">{{ $bank['number'] }}</p>
                                <p class="text-xs text-secondary truncate mt-1">a.n {{ $bank['holder'] }}</p>
                            </div>
                            @endforeach
                        </div>

                        <!-- Instant Sandbox Test Button -->
                        <div class="p-6 rounded-2xl bg-amber-500/10 border border-primary/20 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div>
                                <h4 class="font-bold text-on-surface text-sm flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-primary text-base">science</span>
                                    <span>Simulasi Pembayaran (Mode Sandbox / Dev)</span>
                                </h4>
                                <p class="text-xs text-secondary mt-1">
                                    Gunakan tombol ini untuk menguji konfirmasi pembayaran berhasil secara instan tanpa perlu API Key gateway.
                                </p>
                            </div>
                            <form action="{{ route('payment.confirm_manual', $order->id) }}" method="POST" class="flex-shrink-0">
                                @csrf
                                <button type="submit" class="px-5 py-3 bg-primary text-white font-bold rounded-xl text-xs shadow-md hover:brightness-110 transition-all whitespace-nowrap">
                                    Simulasikan Bayar Lunas
                                </button>
                            </form>
                        </div>
                    @endif
                @endif
            </div>

            <!-- API Gateway Setup Integration Note for Developer -->
            <div class="bg-surface-container-low border border-outline-variant/30 rounded-2xl p-6">
                <h4 class="font-bold text-on-surface text-sm flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary">key</span>
                    <span>Petunjuk Pemasangan API Payment Gateway (Developer Notice)</span>
                </h4>
                <p class="text-xs text-secondary leading-relaxed mb-3">
                    Sistem payment gateway telah terstruktur secara modular di <code>config/payment.php</code> dan <code>App\Services\Payment</code>. Saat Anda sudah memiliki API Key dari Midtrans, Xendit, atau Tripay, Anda cukup menyisipkannya di file <code>.env</code> tanpa merubah kode utama:
                </p>
                <div class="bg-inverse-surface text-inverse-on-surface p-4 rounded-xl font-mono text-[11px] overflow-x-auto">
                    <p class="text-emerald-400"># Pilih driver aktif: manual | midtrans | xendit | tripay</p>
                    <p><span class="text-amber-400">PAYMENT_GATEWAY</span>=midtrans</p>
                    <br/>
                    <p class="text-emerald-400"># Masukkan API Key Anda nanti saat sudah tersedia:</p>
                    <p><span class="text-amber-400">MIDTRANS_SERVER_KEY</span>=SB-Mid-server-xxxxxxxxx</p>
                    <p><span class="text-amber-400">MIDTRANS_CLIENT_KEY</span>=SB-Mid-client-xxxxxxxxx</p>
                    <p><span class="text-amber-400">XENDIT_SECRET_KEY</span>=xnd_development_xxxxxxxxx</p>
                    <p><span class="text-amber-400">TRIPAY_API_KEY</span>=DEV-xxxxxxxxx</p>
                </div>
            </div>

        </div>

        <!-- Right Column: Order Summary Sidebar -->
        <aside class="lg:col-span-4 sticky top-24">
            <div class="bg-surface-container-lowest border border-outline-variant/40 rounded-2xl p-6 shadow-xs">
                <h2 class="font-headline-sm text-lg font-bold mb-4 pb-3 border-b border-outline-variant/30">Ringkasan Pembayaran</h2>

                <!-- Items list preview -->
                <div class="space-y-3 mb-6 max-h-60 overflow-y-auto pr-1">
                    @foreach($order->items as $it)
                    <div class="flex items-center gap-3">
                        <img src="{{ str_starts_with($it->product->galleries->first()?->foto_path ?? '', 'http') ? $it->product->galleries->first()?->foto_path : asset($it->product->galleries->first()?->foto_path ?: 'https://via.placeholder.com/80') }}" class="w-12 h-12 rounded-lg object-cover bg-surface-container-low flex-shrink-0" alt="Produk"/>
                        <div class="min-w-0 flex-1">
                            <h4 class="font-bold text-xs text-on-surface truncate">{{ $it->product->nama_produk ?? 'Produk' }}</h4>
                            <p class="text-[11px] text-secondary">{{ $it->jumlah }}x @ Rp {{ number_format($it->harga_satuan, 0, ',', '.') }}</p>
                        </div>
                        <span class="font-bold text-xs text-on-surface flex-shrink-0">Rp {{ number_format($it->subtotal, 0, ',', '.') }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="space-y-2 border-t border-outline-variant/30 pt-4 text-xs">
                    <div class="flex justify-between text-secondary">
                        <span>Subtotal Produk</span>
                        <span class="font-bold text-on-surface">Rp {{ number_format($order->total_harga - ($order->shipping_cost + 1000), 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-secondary">
                        <span>Ongkos Kirim ({{ strtoupper($order->courier_company ?? 'Kurir') }})</span>
                        <span class="font-bold text-on-surface">Rp {{ number_format($order->shipping_cost, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-secondary">
                        <span>Biaya Operasional</span>
                        <span class="font-bold text-on-surface">Rp 1.000</span>
                    </div>
                    <div class="flex justify-between text-sm font-extrabold text-on-surface pt-3 border-t border-outline-variant/30">
                        <span>Total Harus Dibayar</span>
                        <span class="text-primary text-base font-extrabold">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</span>
                    </div>
                </div>

                <div class="mt-6 border-t border-outline-variant/30 pt-4">
                    <a href="{{ route('cust_recent_orders') }}" class="w-full py-3 bg-surface-container-low text-on-surface text-center font-bold rounded-xl text-xs block hover:bg-surface-container-high transition-colors">
                        Kembali ke Pesanan Saya
                    </a>
                </div>
            </div>
        </aside>

    </div>
</main>

@include('layouts.footer')

<script>
    // Live Polling for Payment Status Check every 5 seconds
    @if($order->status_pembayaran !== 'paid')
        setInterval(function() {
            fetch('{{ route("payment.check_status", $order->id) }}')
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'paid') {
                        window.location.reload();
                    }
                })
                .catch(err => console.error(err));
        }, 5000);
    @endif
</script>

</body>
</html>
