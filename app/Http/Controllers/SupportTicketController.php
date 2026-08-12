<?php

namespace App\Http\Controllers;

use App\Models\SupportTicket;
use App\Models\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportTicketController extends Controller
{
    /**
     * User Submit Support Ticket (from /account/support)
     */
    public function store(Request $request)
    {
        $request->validate([
            'subjek' => 'required|string|max:255',
            'kategori' => 'required|string',
            'pesan' => 'required|string',
        ]);

        $user = Auth::user();
        $storeId = $user->store ? $user->store->id : null;

        $ticket = SupportTicket::create([
            'user_id' => $user->id,
            'store_id' => $storeId,
            'subjek' => $request->subjek,
            'kategori' => $request->kategori,
            'pesan' => $request->pesan,
            'status' => 'pending',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan bantuan Anda telah berhasil dikirim! Tim Support Katalog IDN akan membalas pesan Anda.',
                'ticket' => $ticket,
            ]);
        }

        return redirect()->back()->with('success', 'Pesan bantuan Anda telah berhasil dikirim! Tim Support Katalog IDN akan membalas pesan Anda.');
    }

    /**
     * Admin: Display All Support Tickets / Kotak Surat
     */
    public function adminTickets(Request $request)
    {
        $status = $request->query('status', 'all');
        $search = trim($request->query('search', ''));

        $query = SupportTicket::with(['user', 'store']);

        if ($status === 'pending') {
            $query->where('status', 'pending');
        } elseif ($status === 'replied') {
            $query->where('status', 'replied');
        }

        if (!empty($search)) {
            $term = '%' . $search . '%';
            $query->where(function ($q) use ($term) {
                $q->where('subjek', 'like', $term)
                  ->orWhere('pesan', 'like', $term)
                  ->orWhereHas('user', function ($uQ) use ($term) {
                      $uQ->where('name', 'like', $term)->orWhere('email', 'like', $term);
                  })
                  ->orWhereHas('store', function ($sQ) use ($term) {
                      $sQ->where('nama_toko', 'like', $term);
                  });
            });
        }

        $tickets = $query->latest()->paginate(15)->withQueryString();

        $pendingCount = SupportTicket::where('status', 'pending')->count();
        $repliedCount = SupportTicket::where('status', 'replied')->count();
        $totalCount = SupportTicket::count();

        return view('admin.support_tickets', compact('tickets', 'pendingCount', 'repliedCount', 'totalCount', 'status'));
    }

    /**
     * Admin: Reply to a Support Ticket
     */
    public function adminReply(Request $request, $id)
    {
        $request->validate([
            'balasan_admin' => 'required|string',
        ]);

        $ticket = SupportTicket::with('user')->findOrFail($id);

        $ticket->update([
            'balasan_admin' => $request->balasan_admin,
            'status' => 'replied',
            'replied_at' => now(),
        ]);

        // Create Notification for the User
        // User directive requirement: "notifikasi di user muncul di icon lonceng nya, dengan judul awal balasan dari team support"
        $notificationTitle = "Balasan dari Team Support: " . $ticket->subjek;

        UserNotification::create([
            'user_id' => $ticket->user_id,
            'support_ticket_id' => $ticket->id,
            'judul' => $notificationTitle,
            'pesan' => $request->balasan_admin,
            'is_read' => false,
        ]);

        return redirect()->back()->with('success', 'Balasan tiket berhasil dikirim dan notifikasi telah dikirim ke akun ' . ($ticket->user->name ?? 'User') . '.');
    }

    /**
     * User: Mark notification as read
     */
    public function markAsRead($id)
    {
        $notification = UserNotification::where('user_id', Auth::id())->findOrFail($id);
        $notification->update(['is_read' => true]);

        return response()->json(['success' => true]);
    }

    /**
     * User: Mark all notifications as read
     */
    public function markAllAsRead()
    {
        UserNotification::where('user_id', Auth::id())->update(['is_read' => true]);

        return response()->json(['success' => true]);
    }
}
