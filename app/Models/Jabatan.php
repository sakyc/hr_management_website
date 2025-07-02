<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    // protected $keyType = 'string';
    protected $fillable = [
        // 'divisi_id',
        'nama_jabatan',
        'status',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
