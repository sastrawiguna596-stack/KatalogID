<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Simpan Ulasan Baru dari User
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('info', 'Silakan masuk terlebih dahulu untuk memberikan ulasan.');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'required|string|max:1000',
            'product_id' => 'required|exists:products,id',
        ]);

        Review::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ],
            [
                'rating' => (int) $request->rating,
                'komentar' => $request->komentar,
            ]
        );

        return back()->with('success', 'Terima kasih! Ulasan & rating produk Anda telah berhasil disimpan.');
    }
}
