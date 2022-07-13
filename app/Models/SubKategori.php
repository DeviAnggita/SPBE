<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id_jenis_unit';
    // public $keyType = 'string';
    // protected $guarded = [];
    public $timestamps = false;
    protected $table = 'tb_sub_kategori';
    protected $fillable = [
        'nama_sub_kategori',
        'id_kategori'
    ];
}
