<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatKaryawan extends Model
{
    use HasFactory;

    protected $table = 'alamat_karyawan';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'karyawan_id',
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kec',
        'kab',
        'prov',
        'created_at',
        'updated_at'
    ];
}
