<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    use HasFactory;

    protected $table = 'lembur';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'karyawan_id',
        'tanggal',
        'tanggal_keluar',
        'jam_masuk',
        'jam_keluar',
        'status',
        'keterangan', // Add this line
        'verified_by',
        'created_at',
        'updated_at',
        'alasan_ditolak' // Add this line
    ];
}
