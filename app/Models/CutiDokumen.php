<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutiDokumen extends Model
{
    use HasFactory;

    protected $table = 'cuti_dokumen';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'cuti_id',
        'file',
        'created_at',
        'updated_at'
    ];
}
