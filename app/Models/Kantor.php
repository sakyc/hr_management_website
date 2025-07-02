<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kantor';
    // protected $keyType = 'string';
    protected $fillable = [
        'id',
        'nama_kantor',
        'alamat',
        'latitude',
        'longitude',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
