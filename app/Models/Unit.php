<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_unit';
    protected $fillable = [
        'id_jenis_unit', 'nama_unit', 'email_unit', 'telepon_unit', 'alamat_unit'
    ];
}
