<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'pengaturan';
    protected $fillable = [
        'id',
        'nama_perusahaan',
        'alamat',
        'lat',
        'long',
        'radius_absen',
        'logo',
        'created_at',
        'updated_at'
    ];
}
