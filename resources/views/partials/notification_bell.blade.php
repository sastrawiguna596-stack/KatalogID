@auth
@php
    $userNotifications = \App\Models\UserNotification::where('user_id', Auth::id())->latest()->take(10)->get();
    $unreadCount = \App\Models\UserNotification::where('user_id', Auth::id())->where('is_read', false)->count();
@endphp

<div style="position:relative;display:inline-block;">
    <!-- Bell Button -->
    <button type="button" id="notif-bell-btn" onclick="notifBellToggle(this)" style="position:relative;padding:6px;border-radius:999px;background:transparent;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#514532;">
        <span class="material-symbols-outlined" style="font-size:24px;pointer-events:none;">notifications</span>
        @if($unreadCount > 0)
            <span style="position:absolute;top:-4px;right:-4px;background:#dc2626;color:#fff;font-size:10px;font-weight:800;min-width:18px;height:18px;padding:0 4px;border-radius:999px;display:flex;align-items:center;justify-content:center;border:2px solid #fff;pointer-events:none;">{{ $unreadCount }}</span>
        @endif
    </button>

    <!-- Dropdown Panel -->
    <div id="notif-panel-{{ Auth::id() }}" style="display:none;position:absolute;right:0;top:calc(100% + 8px);width:320px;max-width:90vw;background:#fff;border:1px solid #e0dedd;border-radius:16px;box-shadow:0 8px 32px rgba(0,0,0,0.12);z-index:9999;overflow:hidden;">

        <!-- Header -->
        <div style="padding:12px 16px;background:#f5f3f3;border-bottom:1px solid #e0dedd;display:flex;align-items:center;justify-content:space-between;">
            <div style="display:flex;align-items:center;gap:8px;">
                <span class="material-symbols-outlined" style="color:#7c5800;font-size:20px;">notifications_active</span>
                <span style="font-weight:700;font-size:13px;color:#1b1c1c;">Notifikasi Akun</span>
            </div>
            @if($unreadCount > 0)
                <button type="button" onclick="notifMarkAllRead()" style="font-size:11px;font-weight:700;color:#7c5800;background:none;border:none;cursor:pointer;text-decoration:underline;">Tandai Dibaca</button>
            @endif
        </div>

        <!-- Notification List -->
        <div style="max-height:320px;overflow-y:auto;">
            @forelse($userNotifications as $notif)
                <div style="padding:12px 16px;border-bottom:1px solid #f0eeee;background:{{ !$notif->is_read ? '#fffbeb' : '#fff' }};overflow:hidden;">
                    <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:8px;margin-bottom:6px;overflow:hidden;">
                        <div style="display:flex;align-items:flex-start;gap:6px;flex:1;min-width:0;overflow:hidden;">
                            @if(!$notif->is_read)
                                <span style="width:8px;height:8px;border-radius:50%;background:#7c5800;flex-shrink:0;margin-top:4px;"></span>
                            @endif
                            <span style="font-weight:700;font-size:12px;color:#1b1c1c;line-height:1.4;word-break:break-word;overflow-wrap:break-word;min-width:0;">{{ $notif->judul }}</span>
                        </div>
                        <span style="font-size:10px;color:#837560;white-space:nowrap;flex-shrink:0;">{{ $notif->created_at->diffForHumans() }}</span>
                    </div>
                    <p style="font-size:12px;color:#514532;line-height:1.5;background:#f5f3f3;padding:8px;border-radius:8px;border:1px solid #e9e8e7;white-space:pre-wrap;word-break:break-word;overflow-wrap:break-word;margin:0;overflow:hidden;">{{ $notif->pesan }}</p>
                </div>
            @empty
                <div style="padding:32px 16px;text-align:center;">
                    <span class="material-symbols-outlined" style="font-size:36px;color:#c5bfb8;display:block;margin-bottom:8px;">notifications_off</span>
                    <p style="font-weight:700;font-size:13px;color:#514532;margin:0 0 4px;">Belum ada notifikasi</p>
                    <p style="font-size:11px;color:#837560;margin:0;">Balasan dari Tim Support akan muncul di sini.</p>
                </div>
            @endforelse
        </div>

        <!-- Footer -->
        <div style="padding:8px;border-top:1px solid #e0dedd;background:#f5f3f3;text-align:center;">
            <span style="font-size:10px;color:#837560;">Tim Support Katalog IDN</span>
        </div>
    </div>
</div>

<script>
(function() {
    function notifBellToggle(btn) {
        var panelId = 'notif-panel-{{ Auth::id() }}';
        var panel = document.getElementById(panelId);
        if (!panel) return;
        var isHidden = panel.style.display === 'none' || panel.style.display === '';
        panel.style.display = isHidden ? 'block' : 'none';
    }

    function notifMarkAllRead() {
        fetch('{{ route('notifications.read_all') }}', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
        }).then(function(r) { return r.json(); }).then(function(d) { if (d.success) location.reload(); });
    }

    document.addEventListener('click', function(e) {
        var panel = document.getElementById('notif-panel-{{ Auth::id() }}');
        var bellBtn = document.getElementById('notif-bell-btn');
        if (panel && bellBtn && !panel.contains(e.target) && !bellBtn.contains(e.target)) {
            panel.style.display = 'none';
        }
    });

    // Expose to global scope
    window.notifBellToggle = notifBellToggle;
    window.notifMarkAllRead = notifMarkAllRead;
})();
</script>
@endauth
