<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Tampilkan Halaman Login / Register
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return $this->redirectUserBasedOnRole(Auth::user());
        }
        return view('login_page');
    }

    /**
     * Proses Login User
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            return $this->redirectUserBasedOnRole($user)->with('success', 'Selamat datang kembali, ' . $user->name . '!');
        }

        return back()
            ->withInput($request->only('email'))
            ->with('error', 'Email atau password yang Anda masukkan salah!');
    }

    /**
     * Proses Register User Baru
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:customer,seller',
            'nama_toko' => 'nullable|required_if:role,seller|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'phone' => $request->phone ?? null,
            'address' => $request->address ?? null,
        ]);

        // Jika pendaftar adalah Penjual (Seller), otomatis buatkan Toko
        // is_active = false: toko harus diverifikasi oleh Master Admin sebelum aktif
        if ($user->role === 'seller') {
            $namaToko = $request->nama_toko ?: $user->name . ' Store';
            Store::create([
                'user_id' => $user->id,
                'nama_toko' => $namaToko,
                'slug' => Str::slug($namaToko . '-' . time()),
                'deskripsi' => 'Toko resmi ' . $user->name,
                'is_active' => false,
            ]);
        }

        Auth::login($user);

        return $this->redirectUserBasedOnRole($user)->with('success', 'Akun berhasil dibuat!');
    }

    /**
     * Logout User
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('info', 'Anda telah keluar dari akun.');
    }

    /**
     * Update Profile User, Store, & Password
     */
    public function updateProfile(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_toko' => 'nullable|string|max:255',
            'deskripsi_toko' => 'nullable|string|max:1000',
            'kota' => 'nullable|string|max:255',
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:6',
        ]);

        if ($request->filled('new_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Password lama yang Anda masukkan salah!'])->withInput();
            }
            $user->password = Hash::make($request->new_password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->hasFile('avatar')) {
            $avatarName = time() . '_' . Str::slug($request->name) . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('uploads/avatars'), $avatarName);
            $user->avatar = 'uploads/avatars/' . $avatarName;
        }

        $user->save();

        // Update Toko Seller
        if ($user->role === 'seller') {
            $store = Store::firstOrCreate(
                ['user_id' => $user->id],
                [
                    'nama_toko' => $request->nama_toko ?: $user->name . ' Store',
                    'slug' => Str::slug(($request->nama_toko ?: $user->name . ' Store') . '-' . time()),
                    'deskripsi' => $request->deskripsi_toko ?: 'Toko resmi ' . $user->name,
                    'kota' => $request->kota ?: 'Kota Denpasar',
                    // is_active = false: toko perlu diverifikasi admin jika baru dibuat
                    'is_active' => false,
                ]
            );

            if ($request->filled('nama_toko')) {
                $store->nama_toko = $request->nama_toko;
                $store->slug = Str::slug($request->nama_toko . '-' . $store->id);
            }
            if ($request->has('deskripsi_toko')) {
                $store->deskripsi = $request->deskripsi_toko;
            }
            if ($request->filled('kota')) {
                $store->kota = $request->kota;
            }
            $store->save();
        }

        return back()->with('success', 'Profil dan pengaturan akun Anda berhasil diperbarui!');
    }

    /**
     * Helper Redireksi Berdasarkan Role User
     */
    private function redirectUserBasedOnRole($user)
    {
        if ($user->role === 'admin') {
            return redirect()->intended(route('admin.dashboard'));
        }
        if ($user->role === 'seller') {
            return redirect()->intended(route('inventories'));
        }
        return redirect()->intended(route('cust_account'));
    }

    /**
     * Redirect User ke Google OAuth
     */
    public function redirectToGoogle()
    {
        $clientId = config('services.google.client_id');
        $clientSecret = config('services.google.client_secret');

        if (empty($clientId) || empty($clientSecret)) {
            return redirect()->route('login')->with('error', 'Login Google belum aktif karena Kunci OAuth (GOOGLE_CLIENT_ID & GOOGLE_CLIENT_SECRET) belum diisi di file .env.');
        }

        try {
            return \Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal terhubung ke Google: ' . $e->getMessage());
        }
    }

    /**
     * Callback dari Google OAuth
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = \Laravel\Socialite\Facades\Socialite::driver('google')->user();

            $user = User::where('google_id', $googleUser->id)
                ->orWhere('email', $googleUser->email)
                ->first();

            if ($user) {
                $user->update([
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar ?? $user->avatar,
                ]);
            } else {
                $user = User::create([
                    'name' => $googleUser->name ?? $googleUser->nickname ?? 'Pengguna Google',
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                    'password' => Hash::make(Str::random(16)),
                    'role' => 'customer',
                ]);
            }

            Auth::login($user, true);

            return $this->redirectUserBasedOnRole($user)->with('success', 'Selamat datang, ' . $user->name . '! Anda berhasil masuk dengan Google.');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal masuk dengan Google: ' . $e->getMessage());
        }
    }
}
