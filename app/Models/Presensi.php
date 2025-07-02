<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'karyawan_id',
        'tanggal',
        'jam_masuk',
        'telat',
        'foto_masuk',
        'jam_keluar',
        'pulang_cepat',
        'foto_keluar',
        'durasi_kerja',
        'status',
        'keterangan_masuk',
        'keterangan_keluar',
        'lat_masuk',
        'long_masuk',
        'lat_pulang',
        'long_pulang',
        'trx_id',
        'rekap_absen_id',
        'created_at',
        'updated_at'
    ];
}
