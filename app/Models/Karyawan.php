<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Karyawan extends Authenticatable
{
    use HasFactory;

    protected $guard = 'karyawan';

    protected $table = 'karyawan';

    // protected $keyType = 'string';

    protected $fillable = [
        'jabatan_id',
        'nip',
        'nama_karyawan',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'tgl_masuk',
        'foto',
        'no_hp',
        'created_by',
        'password',
        'status',
        'created_by',
        'pendidikan_terkhir',
        'alamat',
        'created_at',
        'updated_at'
    ];

    public function rekapAbsens()
    {
        return $this->hasMany(RekapAbsen::class, 'karyawan_id', 'id');
    }

    public function totalLembur()
    {
        return $this->hasMany(Lembur::class, 'karyawan_id', 'id')->where('status', 'Disetujui');
    }
}
