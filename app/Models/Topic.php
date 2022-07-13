<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_topik';
    protected $fillable = [
        'id_forum', 'id_user', 'judul_topik'
    ];
}
