<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'nim',
        'tempat_lahir',
        'tanggal_lahir',
        'foto_profil'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'tanggal_lahir' => 'date',
    ];

    public function getFotoProfilUrlAttribute()
    {
        if ($this->foto_profil) {
            return asset('storage/foto-profil/' . $this->foto_profil);
        }
        return asset('images/avatar-default.png');
    }
}