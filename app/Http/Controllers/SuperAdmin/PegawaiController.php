<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Alert;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->orderBy('nama_pegawai', 'asc')
            ->get();
        $units = Unit::get();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/pegawai.index', compact('pegawais', 'units', 'akun'));
    }

    public function create()
    {
        $units = Unit::get();
        return view('superadmin/pegawai.create', compact('units'));
    }

    public function show($id_user)
    {
        $pegawais = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', $id_user)->first();
        return view('superadmin/pegawai.show', compact('pegawais'));
    }


    public function edit($id_user)
    {
        $pegawais = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', $id_user)->first();
        $units = Unit::get();
        return view('superadmin/pegawai.edit', compact('pegawais', 'units'));
    }
    
    public function store(Request $request)
    {
        $nip = User::where('nip', $request->nip)->first();
        if ($nip == true) {
            return redirect()
                ->route('pegawai.index')
                ->with([
                    Alert::error('Gagal', 'NIP Sudah Ada')
                ]);
        } else {
            $this->validate($request, [
                'id_unit' => 'required',
                'nip' => 'required|min:18|max:18',
                'nama_pegawai' => 'required',
                'email_pegawai' => 'required',
                'password' => 'required|min:8',
                'role' => 'required',
            ]);

            $pegawai = User::create([
                'id_unit' => $request->id_unit,
                'nip' => $request->nip,
                'nama_pegawai' => $request->nama_pegawai,
                'email_pegawai' => $request->email_pegawai,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            if ($pegawai) {
                return redirect()
                    ->route('pegawai.index')
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
        $this->validate($request, [
            'id_unit' => 'required',
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'email_pegawai' => 'required',
            'role' => 'required',
        ]);

        $pegawai = User::where('id_user', $request->id_user);
        $pegawai->update([
            'id_unit' => $request->id_unit,
            'nip' => $request->nip,
            'nama_pegawai' => $request->nama_pegawai,
            'email_pegawai' => $request->email_pegawai,
            'role' => $request->role,
        ]);

        if ($pegawai) {
            return redirect()
                ->route('pegawai.index')
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
        $pegawai = DB::table('users')->where('id_user', $request->id_user);
        $pegawai->delete();

        if ($pegawai) {
            return redirect()
                ->route('pegawai.index')
                ->with([
                    Alert::success('Berhasil', 'Pegawai Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('pegawai.index')
                ->with([
                    Alert::error('Gagal', 'Pegawai Gagal Dihapus')
                ]);
        }
    }

}