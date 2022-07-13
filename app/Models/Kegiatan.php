<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id_jenis_unit';
    // public $keyType = 'string';
    // protected $guarded = [];
    // public $timestamps = false;
    protected $table = 'tb_kegiatan';
    protected $fillable = [
        'id_inovasi', 'id_user','judul_kegiatan', 'latar_belakang_kegiatan', 'deskripsi_kegiatan', 'tujuan_kegiatan', 'created_at', 'updated_at', 'publish_at', 'lampiran_kegiatan', 'cover'
    ];
}
