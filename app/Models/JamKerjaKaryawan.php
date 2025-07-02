<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamKerjaKaryawan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jam_kerja_karyawan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['karyawan_id', 'jam_kerja_id', 'tanggal', 'jam_masuk', 'jam_pulang', 'created_by'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id');
    }

    public function jamKerja()
    {
        return $this->belongsTo(JamKerja::class, 'jam_kerja_id', 'id');
    }
}
