<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $opd      = DB::table('tb_unit')->count();
        $pegawai  = DB::table('users')->where('id_unit', Auth::user()->id_unit)
            ->whereNotIn('role', ['Super Admin'])->count();
        $inovasi  = DB::table('tb_inovasi')->where('id_unit', Auth::user()->id_unit)->count();
        $artikel  = DB::table('tb_artikel')->where('id_unit', Auth::user()->id_unit)->count();
        $kategori = DB::table('tb_kategori')->count();

        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/dashboard', compact('opd', 'pegawai', 'inovasi', 'artikel', 'kategori', 'akun'));
    }
}
