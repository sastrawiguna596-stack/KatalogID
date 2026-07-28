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
        if ($user->role === 'seller') {
            $namaToko = $request->nama_toko ?: $user->name . ' Store';
            Store::create([
                'user_id' => $user->id,
                'nama_toko' => $namaToko,
                'slug' => Str::slug($namaToko . '-' . time()),
                'deskripsi' => 'Toko resmi ' . $user->name,
                'is_active' => true,
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
                    'is_active' => true,
                ]
            );

            if ($request->filled('nama_toko')) {
                $store->nama_toko = $request->nama_toko;
                $store->slug = Str::slug($request->nama_toko . '-' . $store->id);
            }
            if ($request->has('deskripsi_toko')) {
                $store->deskripsi = $request->deskripsi_toko;
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
        if ($user->role === 'seller') {
            return redirect()->intended(route('inventories'));
        }
        return redirect()->intended(route('cust_account'));
    }
}
