<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapAbsen extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rekap_absen';

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
        'jenis', // Presensi, Absensi, Cuti
        'kategori_absensi_id',
        'status', // Hadir, Izin, Sakit, Cuti, Libur, dll
        'absensi_id',
        'presensi_id'
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id');
    }

    public function absensi()
    {
        return $this->belongsTo(Presensi::class, 'absensi_id', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriAbsensi::class, 'kategori_absensi_id', 'id');
    }

    public function presensi()
    {
        return $this->hasOne(Presensi::class, 'rekap_absen_id', 'id');
    }
}
