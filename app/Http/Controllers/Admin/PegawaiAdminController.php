<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class PegawaiAdminController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        $pegawais = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('nama_unit', $user->nama_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->orderBy('nama_pegawai', 'asc')
            ->get();
        $units = Unit::get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/pegawai.index', compact('pegawais', 'units', 'akun'));
    }

    public function create()
    {
        $units = Unit::get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/pegawai.create', compact('units', 'akun'));
    }

    public function show($id_user)
    {
        $pegawais = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', $id_user)->first();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/pegawai.show', compact('pegawais', 'akun'));
    }


    public function edit($id_user)
    {
        $pegawais = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', $id_user)->first();
        $units = Unit::get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/pegawai.edit', compact('pegawais', 'units', 'akun'));
    }
    
    public function store(Request $request)
    {
        $user = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        $nip = User::where('nip', $request->nip)->first();
        if ($nip == true) {
            return redirect()
                ->route('pegawaiadmin.index')
                ->with([
                    'error' => 'Pegawai NIP Sudah Ada'
                ]);
        } else {
            $this->validate($request, [
                'nip' => 'required',
                'nama_pegawai' => 'required',
                'email_pegawai' => 'required',
                'password' => 'required|min:8',
            ]);

            $pegawai = User::create([
                'id_unit' => $user->id_unit,
                'nip' => $request->nip,
                'nama_pegawai' => $request->nama_pegawai,
                'email_pegawai' => $request->email_pegawai,
                'password' => Hash::make($request->password),
                'role' => 'User',
            ]);

            if ($pegawai) {
                return redirect()
                    ->route('pegawaiadmin.index')
                    ->with([
                        Alert::success('Berhasil', 'Pegawai Berhasil Ditambahkan')
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        Alert::error('Gagal', 'Pegawai Gagal Dihapus')
                    ]);
            }
        }
    }

    public function update(Request $request)
    {
        $user = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        $this->validate($request, [
                'nip' => 'required',
                'nama_pegawai' => 'required',
                'email_pegawai' => 'required',
        ]);

        $pegawai = User::where('id_user', $request->id_user);
        $pegawai->update([
                'nip' => $request->nip,
                'nama_pegawai' => $request->nama_pegawai,
                'email_pegawai' => $request->email_pegawai,
        ]);

        if ($pegawai) {
            return redirect()
                ->route('pegawaiadmin.index')
                ->with([
                    Alert::success('Berhasil', 'Pegawai Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Pegawai Gagal Dihapus')
                ]);
        }
    }

    public function delete(Request $request)
    {
        $pegawai = User::where('id_user', $request->id_user);
        $pegawai->delete();

        if ($pegawai) {
            return redirect()
                ->route('pegawaiadmin.index')
                ->with([
                    Alert::success('Berhasil', 'Pegawai Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('pegawaiadmin.index')
                ->with([
                    Alert::error('Gagal', 'Pegawai Gagal Dihapus')
                ]);
        }
    }

}