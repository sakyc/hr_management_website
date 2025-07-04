<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'admin';
    // protected $keyType = 'string';
    protected $fillable = [
        'username',
        'nama',
        'password',
    ];

    protected $hidden = [
        'passwowrd',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'passwowrd' => 'hashed',
    ];
}
