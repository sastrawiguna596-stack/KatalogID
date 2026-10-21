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
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        body { animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .zann-method-card {
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.2s ease;
        }
        .zann-method-card:hover  { border-color: rgb(var(--color-primary) / 0.4); transform: translateY(-2px); }
        .zann-method-card.active { border-color: rgb(var(--color-primary)); background: rgb(var(--color-primary) / 0.06); }
        .zann-category { animation: slideUp 0.35s ease both; }
        .zann-methods-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 12px;
        }
        @media (max-width: 480px) {
            .zann-methods-grid { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md min-h-screen flex flex-col justify-between">

@include('layouts.navbar', ['active' => 'cart'])

<main class="w-full max-w-[1280px] mx-auto px-4 md:px-margin-desktop py-8 flex-grow">

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-xl font-bold flex items-center gap-2 shadow-xs">
        <span class="material-symbols-outlined text-emerald-600">check_circle</span>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    @if(session('error'))
    <div class="mb-6 p-4 bg-rose-100 border border-rose-300 text-rose-800 rounded-xl font-bold flex items-center gap-2 shadow-xs">
        <span class="material-symbols-outlined text-rose-600">error</span>
        <span>{{ session('error') }}</span>
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

        {{-- Left Column --}}
        <div class="lg:col-span-8 space-y-6">

            {{-- Header Card --}}
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
                            {{ $activeGateway }}
                        </span>
                    </div>
                </div>
            </div>

            {{-- Payment Action Box --}}
            <div class="bg-surface-container-lowest border border-outline-variant/40 rounded-2xl p-6 sm:p-8 shadow-xs">

                @if($order->status_pembayaran === 'paid')
                    {{-- PAID --}}
                    <div class="text-center py-8">
                        <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-4xl">check_circle</span>
                        </div>
                        <h2 class="font-headline-md text-2xl font-bold text-on-surface">Pembayaran Berhasil!</h2>
                        <p class="text-secondary text-body-sm mt-2 max-w-md mx-auto">
                            Pesanan Anda telah dikonfirmasi dan sedang diproses oleh penjual.
                        </p>
                        <a href="{{ route('cust_recent_orders') }}" class="mt-6 inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-bold rounded-xl text-sm shadow-md hover:brightness-110 transition-all">
                            <span>Lihat Pesanan Saya</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>

                @elseif($activeGateway === 'zannpay')
                    {{-- ══════════════════════════ ZANNPAY ══════════════════════════ --}}
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-primary">payment</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-on-surface text-base leading-tight">Bayar via Zannpay</h3>
                            <p class="text-xs text-secondary">Pilih metode pembayaran yang Anda inginkan</p>
                        </div>
                        <div class="ml-auto">
                            <span class="text-[10px] font-bold px-2 py-1 rounded-full {{ $isZannpayConfigured ? 'bg-emerald-500/10 text-emerald-700' : 'bg-amber-500/10 text-amber-700' }} uppercase tracking-wide">
                                {{ $isZannpayConfigured ? 'Live' : 'Simulasi' }}
                            </span>
                        </div>
                    </div>

                    @if($isZannpayConfigured && count($zannpayMethods) > 0)
                        @php $grouped = collect($zannpayMethods)->groupBy('category'); @endphp

                        <form id="zannpay-form" action="{{ route('payment.zannpay.initiate', $order->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="payment_method" id="selected-method" value="">

                            <div class="space-y-5 mb-6">
                                @foreach($grouped as $category => $methods)
                                <div class="zann-category">
                                    <p class="text-[11px] font-extrabold uppercase tracking-widest text-secondary mb-3">{{ $category }}</p>
                                    <div class="zann-methods-grid">
                                        @foreach($methods->where('status', 'aktif') as $method)
                                        <div class="zann-method-card rounded-xl p-3 bg-surface-container-low flex flex-col items-center gap-2 select-none"
                                             data-code="{{ $method['code'] }}"
                                             data-name="{{ $method['name'] }}"
                                             data-fee="{{ $method['fee_format'] ?? '' }}"
                                             onclick="selectZannMethod(this)">
                                            <img src="{{ $method['logo'] ?? '' }}" alt="{{ $method['name'] }}"
                                                 class="h-8 w-auto object-contain" onerror="this.style.display='none'">
                                            <span class="text-[11px] font-bold text-on-surface text-center leading-tight line-clamp-2">{{ $method['name'] }}</span>
                                            @if(!empty($method['fee_format']))
                                            <span class="text-[10px] text-secondary bg-surface-container px-2 py-0.5 rounded-full">Fee: {{ $method['fee_format'] }}</span>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            {{-- Selected Summary --}}
                            <div id="zannpay-summary" class="hidden p-5 rounded-2xl bg-primary/5 border border-primary/20 flex flex-col sm:flex-row items-center justify-between gap-4 mb-4 transition-all">
                                <div>
                                    <p class="text-xs text-secondary font-bold uppercase">Metode Dipilih</p>
                                    <p id="summary-method-name" class="font-extrabold text-on-surface text-base mt-0.5"></p>
                                    <p id="summary-method-fee" class="text-xs text-secondary mt-0.5"></p>
                                </div>
                                <button type="submit"
                                        class="flex-shrink-0 px-6 py-3 bg-primary text-white font-bold rounded-xl text-sm shadow-lg hover:brightness-110 active:scale-95 transition-all flex items-center gap-2">
                                    <span class="material-symbols-outlined text-base">open_in_new</span>
                                    Bayar Sekarang
                                </button>
                            </div>
                            <p class="text-xs text-secondary text-center">Setelah memilih, Anda akan diarahkan ke halaman pembayaran Zannpay.</p>
                        </form>

                    @else
                        {{-- Belum dikonfigurasi --}}
                        <div class="text-center py-4 px-4 mb-5">
                            @if(!$isZannpayConfigured)
                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-amber-500/10 text-amber-800 font-bold text-xs mb-4">
                                <span class="material-symbols-outlined text-sm">warning</span>
                                API Key Zannpay belum diisi — mode simulasi aktif.
                            </div>
                            @endif
                            <p class="text-secondary text-sm">
                                Setelah Anda memasukkan <code class="bg-surface-container px-1.5 py-0.5 rounded text-primary font-mono">ZANNPAY_MERCHANT_ID</code> &amp; <code class="bg-surface-container px-1.5 py-0.5 rounded text-primary font-mono">ZANNPAY_SECRET_KEY</code> di <code>.env</code>, metode pembayaran akan muncul di sini secara otomatis.
                            </p>
                        </div>
                        {{-- Sandbox button --}}
                        <div class="p-6 rounded-2xl bg-amber-500/10 border border-primary/20 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div>
                                <h4 class="font-bold text-on-surface text-sm flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-primary text-base">science</span>
                                    Simulasi Pembayaran (Mode Sandbox)
                                </h4>
                                <p class="text-xs text-secondary mt-1">Konfirmasi pembayaran instan tanpa API Key.</p>
                            </div>
                            <form action="{{ route('payment.confirm_manual', $order->id) }}" method="POST" class="flex-shrink-0">
                                @csrf
                                <button type="submit" class="px-5 py-3 bg-primary text-white font-bold rounded-xl text-xs shadow-md hover:brightness-110 transition-all whitespace-nowrap">
                                    Simulasikan Bayar Lunas
                                </button>
                            </form>
                        </div>
                    @endif

                @elseif($order->payment_gateway === 'midtrans' && !empty($order->payment_token) && !str_contains($order->payment_token, 'MOCK'))
                    {{-- ══════════════════════════ MIDTRANS ══════════════════════════ --}}
                    <div class="text-center py-6">
                        <h3 class="font-headline-sm text-lg font-bold mb-2">Selesaikan Pembayaran via Midtrans</h3>
                        <p class="text-body-sm text-secondary mb-6">Klik tombol di bawah ini untuk membuka portal pembayaran resmi Midtrans Snap.</p>
                        <button id="pay-button" type="button" class="px-8 py-4 bg-primary text-white font-bold rounded-xl shadow-lg hover:brightness-110 active:scale-95 transition-all">
                            Bayar Sekarang dengan Midtrans
                        </button>
                    </div>
                    <script type="text/javascript">
                        document.getElementById('pay-button').onclick = function(){
                            snap.pay('{{ $order->payment_token }}', {
                                onSuccess: function(){ window.location.reload(); },
                                onPending: function(){ window.location.reload(); },
                                onError:   function(){ alert("Pembayaran gagal!"); },
                                onClose:   function(){ alert('Anda menutup popup pembayaran.'); }
                            });
                        };
                    </script>

                @else
                    {{-- ══════════════════════════ MANUAL / BANK TRANSFER ══════════════════════════ --}}
                    <h3 class="font-headline-sm text-lg font-bold text-on-surface mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_balance</span>
                        Instruksi Transfer Bank
                    </h3>
                    <p class="text-body-sm text-secondary mb-6">Transfer ke salah satu rekening berikut sejumlah tepat <strong>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</strong></p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                        @foreach($bankAccounts as $bank)
                        <div class="p-4 rounded-xl border border-outline-variant/50 bg-surface-container-low/50">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-extrabold text-sm text-primary">{{ $bank['bank'] }}</span>
                                <button type="button" onclick="navigator.clipboard.writeText('{{ $bank['number'] }}'); alert('Nomor {{ $bank['bank'] }} disalin!');" class="text-xs text-secondary hover:text-primary font-bold">Copy</button>
                            </div>
                            <p class="font-mono font-bold text-on-surface text-base tracking-wider">{{ $bank['number'] }}</p>
                            <p class="text-xs text-secondary truncate mt-1">a.n {{ $bank['holder'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="p-6 rounded-2xl bg-amber-500/10 border border-primary/20 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <h4 class="font-bold text-on-surface text-sm flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-primary text-base">science</span>
                                Simulasi Pembayaran (Mode Sandbox / Dev)
                            </h4>
                            <p class="text-xs text-secondary mt-1">Konfirmasi instan tanpa API Key.</p>
                        </div>
                        <form action="{{ route('payment.confirm_manual', $order->id) }}" method="POST" class="flex-shrink-0">
                            @csrf
                            <button type="submit" class="px-5 py-3 bg-primary text-white font-bold rounded-xl text-xs shadow-md hover:brightness-110 transition-all whitespace-nowrap">
                                Simulasikan Bayar Lunas
                            </button>
                        </form>
                    </div>
                @endif
            </div>

            {{-- Developer Notice --}}
            <div class="bg-surface-container-low border border-outline-variant/30 rounded-2xl p-6">
                <h4 class="font-bold text-on-surface text-sm flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary">key</span>
                    Cara Memasang API Key Zannpay
                </h4>
                <p class="text-xs text-secondary leading-relaxed mb-3">
                    Buka file <code class="bg-surface-container px-1 rounded">.env</code> di root proyek dan isi variabel berikut. Tidak perlu mengubah kode apapun setelah ini.
                </p>
                <div class="bg-inverse-surface text-inverse-on-surface p-4 rounded-xl font-mono text-[11px] overflow-x-auto space-y-1">
                    <p class="text-emerald-400"># 1. Aktifkan Zannpay sebagai driver utama:</p>
                    <p><span class="text-amber-400">PAYMENT_GATEWAY</span>=zannpay</p>
                    <br/>
                    <p class="text-emerald-400"># 2. Isi dari dashboard https://pay.zannstore.com/dashboard :</p>
                    <p><span class="text-amber-400">ZANNPAY_MERCHANT_ID</span>=<span class="text-sky-300">M12345678</span></p>
                    <p><span class="text-amber-400">ZANNPAY_SECRET_KEY</span>=<span class="text-sky-300">your-secret-key-here</span></p>
                    <br/>
                    <p class="text-emerald-400"># 3. false = sandbox, true = production:</p>
                    <p><span class="text-amber-400">ZANNPAY_IS_PRODUCTION</span>=false</p>
                    <br/>
                    <p class="text-emerald-400"># 4. Jalankan setelah edit .env :</p>
                    <p><span class="text-rose-400">php artisan config:clear</span></p>
                </div>
            </div>

        </div>

        {{-- Right Column: Order Summary --}}
        <aside class="lg:col-span-4 sticky top-24">
            <div class="bg-surface-container-lowest border border-outline-variant/40 rounded-2xl p-6 shadow-xs">
                <h2 class="font-headline-sm text-lg font-bold mb-4 pb-3 border-b border-outline-variant/30">Ringkasan Pembayaran</h2>

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
    // Zannpay Method Selector
    function selectZannMethod(card) {
        document.querySelectorAll('.zann-method-card').forEach(c => c.classList.remove('active'));
        card.classList.add('active');

        const code = card.dataset.code;
        const name = card.dataset.name;
        const fee  = card.dataset.fee;

        document.getElementById('selected-method').value = code;

        const summary     = document.getElementById('zannpay-summary');
        const summaryName = document.getElementById('summary-method-name');
        const summaryFee  = document.getElementById('summary-method-fee');

        if (summary && summaryName && summaryFee) {
            summaryName.textContent = name;
            summaryFee.textContent  = fee ? 'Biaya admin: ' + fee : '';
            summary.classList.remove('hidden');
        }
    }

    // Live Polling Payment Status
    @if($order->status_pembayaran !== 'paid')
        setInterval(function() {
            fetch('{{ route("payment.check_status", $order->id) }}')
                .then(res => res.json())
                .then(data => { if (data.status === 'paid') window.location.reload(); })
                .catch(err => console.error(err));
        }, 5000);
    @endif
</script>

</body>
</html>
