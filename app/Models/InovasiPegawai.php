<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InovasiPegawai extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id_jenis_unit';
    // public $keyType = 'string';
    // protected $guarded = [];
    public $timestamps = false;
    protected $table = 'tb_inovasi_pegawai';
    protected $fillable = [
        'id_inovasi', 'id_user', 'keterangan'
    ];
}
