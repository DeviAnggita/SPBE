<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = 'tb_artikel';
    protected $fillable = [
        'id_user', 'id_unit', 'judul_artikel', 'isi_artikel', 'lampiran_artikel', 'cover', 'status', 'approved', 'alasan_reject', 'created_at', 'updated_at', 'publish_at', 'id_sub_kategori'
    ];
}

