<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'absensi';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    // protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'karyawan_id',
        'tanggal',
        'sampai_tanggal',
        'kategori_absensi_id',
        'keterangan',
        'status', // Add this line
        'rekap_absen_id',
        'verified_by',
        'created_at',
        'updated_at',
        'alasan_ditolak' // Add this line
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id');
    }

    public function kategoriAbsensi()
    {
        return $this->belongsTo(KategoriAbsensi::class, 'kategori_absensi_id', 'id');
    }
}
