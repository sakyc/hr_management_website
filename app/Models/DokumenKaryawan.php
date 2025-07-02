<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenKaryawan extends Model
{
    use HasFactory;

    protected $table = 'dokumen_karyawan';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'karyawan_id',
        'nama_dokumen',
        'file',
        'created_at',
        'updated_at'
    ];
}
