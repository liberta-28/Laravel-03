<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();

        // Validasi data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'foto_profil' => ['nullable', 'image', 'mimes:jpg,png,jpeg,svg', 'max:2048'],
        ], [
            'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
            'foto_profil.max' => 'Ukuran foto maksimal 2MB.',
            'foto_profil.mimes' => 'Format foto harus JPG, PNG, JPEG, atau SVG.',
        ]);

        try {
            // Handle foto profil
            if ($request->hasFile('foto_profil')) {
                // Hapus foto lama jika ada
                if ($user->foto_profil && Storage::exists('public/foto-profil/' . $user->foto_profil)) {
                    Storage::delete('public/foto-profil/' . $user->foto_profil);
                }

                // Upload foto baru
                $fotoProfil = $request->file('foto_profil');
                $fotoProfilName = time() . '_' . uniqid() . '.' . $fotoProfil->getClientOriginalExtension();
                $fotoProfil->storeAs('public/foto-profil', $fotoProfilName);
                $user->foto_profil = $fotoProfilName;
            }

            // Update data user
            $user->name = $request->name;
            $user->tempat_lahir = $request->tempat_lahir;
            $user->tanggal_lahir = $request->tanggal_lahir;
            
            // Simpan perubahan
            $user->save();

            return redirect()->route('dashboard')->with('success', 'Profil berhasil diperbarui!');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        // Hapus foto profil jika ada
        if ($user->foto_profil && Storage::exists('public/foto-profil/' . $user->foto_profil)) {
            Storage::delete('public/foto-profil/' . $user->foto_profil);
        }

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}