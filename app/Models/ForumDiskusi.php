<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumDiskusi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_forum';
    protected $fillable = [
        'id_artikel', 'id_user'
    ];
}
