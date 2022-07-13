<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('status', 'Public')
            ->where('approved', 'Yes')
            ->orderBy('publish_at', 'desc')
            ->limit(3)
            ->get();

        $artikels_log = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('approved', 'Yes')
            ->orderBy('publish_at', 'desc')
            ->limit(3)
            ->get();
        return view('user/index', compact('artikels', 'artikels_log'));
    }

    public function contact()
    {
        return view('user/contact');
    }
}
