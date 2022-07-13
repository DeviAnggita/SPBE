<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id_jenis_unit';
    // public $keyType = 'string';
    // protected $guarded = [];
    // public $timestamps = false;
    protected $table = 'tb_inovasi';
    protected $fillable = [
        'id_unit','judul_inovasi', 'latar_belakang', 'deskripsi_inovasi', 'tujuan_inovasi', 'created_at', 'updated_at', 'publish_at', 'lampiran_inovasi', 'cover', 'kategori_inovasi'
    ];
}
