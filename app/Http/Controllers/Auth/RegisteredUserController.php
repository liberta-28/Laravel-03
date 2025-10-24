<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nim' => ['required', 'string', 'max:20', 'unique:users'],
            'tempat_lahir' => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'foto_profil' => ['nullable', 'image', 'mimes:jpg,png,jpeg,svg', 'max:2048'],
        ], [
            'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
            'foto_profil.max' => 'Ukuran foto maksimal 2MB.',
            'foto_profil.mimes' => 'Format foto harus JPG, PNG, JPEG, atau SVG.',
        ]);

        $fotoProfilName = null;
        if ($request->hasFile('foto_profil')) {
            $fotoProfil = $request->file('foto_profil');
            $fotoProfilName = time() . '_' . uniqid() . '.' . $fotoProfil->getClientOriginalExtension();
            $fotoProfil->storeAs('public/foto-profil', $fotoProfilName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nim' => $request->nim,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'foto_profil' => $fotoProfilName,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}