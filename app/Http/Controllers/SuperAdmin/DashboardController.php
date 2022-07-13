<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $opd      = DB::table('tb_unit')->count();
        $pegawai  = DB::table('users')->count();
        $inovasi  = DB::table('tb_inovasi')->count();
        $artikel  = DB::table('tb_artikel')->count();
        $kategori = DB::table('tb_kategori')->count();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/dashboard', compact('opd', 'pegawai', 'inovasi', 'artikel', 'kategori', 'akun'));
    }
}