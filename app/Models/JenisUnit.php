<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisUnit extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id_jenis_unit';
    // public $keyType = 'string';
    // protected $guarded = [];
    public $timestamps = false;
    protected $table = 'tb_jenis_unit';
    protected $fillable = [
        'nama_jenis_unit'
    ];
}
