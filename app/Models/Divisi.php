<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';
    // protected $keyType = 'string';
    protected $fillable = [
        'nama_divisi',
        'status',
        'created_by',
        'created_at',
        'updated_at'
    ];

    public function jabatans()
    {
        return $this->hasMany(Jabatan::class);
    }
}
