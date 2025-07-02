<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlipGaji extends Model
{
    use HasFactory;

    protected $table = 'slip_gaji';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'karyawan_id',
        'jabatan_id',
        'tanggal',
        'gaji_pokok',
        'tunjangan',
        'lembur',
        'potongan',
        'created_at',
        'updated_at'
    ];
}
