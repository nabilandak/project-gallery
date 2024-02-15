<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function postingan(){
        return $this->hasMany(Postingan::class, 'user_id', 'id');
    }

    public function album(){
        return $this->hasMany(Album::class, 'user_id', 'id');
    }

    public function favorite(){
        return $this->hasMany(Favorite::class, 'user_id', 'id');
    }

    public function follow(){
        return $this->hasMany(Follow::class, 'user_id', 'id');
    }

    public function komentar(){
        return $this->hasMany(Komentar::class, 'user_id', 'id');
    }

    public function laporankomentar(){
        return $this->hasMany(LaporanKomentar::class, 'user_id', 'id');
    }

    public function laporanpostingan(){
        return $this->hasMany(LaporanPostingan::class, 'user_id', 'id');
    }

    public function like(){
        return $this->hasMany(Like::class, 'user_id', 'id');
    }
}
