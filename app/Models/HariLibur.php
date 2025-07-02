<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HariLibur extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hari_libur';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'tanggal',
        'keterangan',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
