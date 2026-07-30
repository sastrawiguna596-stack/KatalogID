<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Tambah alamat baru
     */
    public function store(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'label' => 'required|string|max:100',
            'receiver_name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:1000',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $isDefault = $request->has('is_default') || $user->addresses()->count() === 0;

        if ($isDefault) {
            $user->addresses()->update(['is_default' => false]);
        }

        $newAddress = $user->addresses()->create([
            'label' => $request->label,
            'receiver_name' => $request->receiver_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'is_default' => $isDefault,
        ]);

        if ($isDefault) {
            $user->address = $request->address;
            $user->save();
        }

        return back()->with('success', 'Alamat baru berhasil ditambahkan!');
    }

    /**
     * Update alamat existing
     */
    public function update(Request $request, $id)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $address = $user->addresses()->findOrFail($id);

        $request->validate([
            'label' => 'required|string|max:100',
            'receiver_name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:1000',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $isDefault = $request->has('is_default') || ($address->is_default && $user->addresses()->count() === 1);

        if ($isDefault) {
            $user->addresses()->where('id', '!=', $id)->update(['is_default' => false]);
            $user->address = $request->address;
            $user->save();
        }

        $address->update([
            'label' => $request->label,
            'receiver_name' => $request->receiver_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'is_default' => $isDefault,
        ]);

        return back()->with('success', 'Alamat berhasil diperbarui!');
    }

    /**
     * Hapus alamat
     */
    public function destroy($id)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $address = $user->addresses()->findOrFail($id);
        $wasDefault = $address->is_default;

        $address->delete();

        if ($wasDefault) {
            $firstRemaining = $user->addresses()->first();
            if ($firstRemaining) {
                $firstRemaining->update(['is_default' => true]);
                $user->address = $firstRemaining->address;
                $user->save();
            } else {
                $user->address = null;
                $user->save();
            }
        }

        return back()->with('success', 'Alamat berhasil dihapus!');
    }

    /**
     * Set alamat sebagai default
     */
    public function setDefault($id)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $address = $user->addresses()->findOrFail($id);

        $user->addresses()->update(['is_default' => false]);
        $address->update(['is_default' => true]);

        $user->address = $address->address;
        $user->save();

        return back()->with('success', 'Alamat utama berhasil diubah!');
    }
}
