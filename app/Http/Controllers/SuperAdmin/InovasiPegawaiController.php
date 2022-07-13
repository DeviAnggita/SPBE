<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inovasi;
use App\Models\User;
use App\Models\InovasiPegawai;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class InovasiPegawaiController extends Controller
{
    public function index()
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->get();

            $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/inovasi.index', compact('inovasis'. 'akun'));
    }

    public function store(Request $request)
    {
        $idPegawai = InovasiPegawai::where('id_inovasi', $request->id_inovasi)
            ->where('id_user', $request->get('id_user'))
            ->first();

        if ($idPegawai == true) {
            return redirect()
                ->route('members.show', [$request->id_inovasi])
                ->with([
                    Alert::error('Gagal', 'Member Sudah Ada')
                ]);
        } else {
            $this->validate($request, [
                'id_inovasi' => 'required',
                'id_user' => 'required',
            ]);

            foreach ($request->get('id_user') as $id_user) {
                $inovasipegawai = InovasiPegawai::create(
                    $pegawais[] = [
                        'id_inovasi' => $request->id_inovasi,
                        'id_user' => $id_user,
                        'keterangan' => "Member",
                    ]
                );
            };

            if ($inovasipegawai) {
                return redirect()
                    ->route('members.show', [$request->id_inovasi])
                    ->with([
                        Alert::success('Berhasil', 'Member Berhasil Ditambahkan')
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        Alert::error('Gagal', 'Member Gagal Ditambahkan')
                    ]);
            }
        }
    }

    public function create()
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->get();
        $pegawais = User::get();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/inovasi.create', compact('inovasis', 'pegawais', 'akun'));
    }

    public function show($id_inovasi)
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)
            ->where('keterangan', 'Member')->get();
        $members = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $owner = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)
            ->where('keterangan', 'Owner')->first();
        $pegawais = User::get();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/inovasipegawai.show', compact('inovasis', 'owner', 'pegawais', 'members', 'akun'));
    }

    public function delete(Request $request)
    {
        $inovasipegawai = InovasiPegawai::where('id_inovasi_pegawai', $request->id_inovasi_pegawai);
        $inovasipegawai->delete();

        if ($inovasipegawai) {
            return redirect()
                ->route('members.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Member Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('members.show', [$request->id_inovasi])
                ->with([
                    Alert::error('Gagal', 'Member Gagal Dihapus')
                ]);
        }
    }

    public function destroy(Request $request, $id_inovasi_pegawai)
    {
        $member = InovasiPegawai::where('id_inovasi_pegawai', $id_inovasi_pegawai);
        $member->delete();

        if ($member) {
            return redirect()
                ->route('members.show', [$request->id_inovasi])
                ->with([
                    'error' => 'Member Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('members.index')
                ->with([
                    'error' => 'Member Gagal Dihapus'
                ]);
        }
    }

    public function edit($id_inovasi)
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $pegawais = User::get();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/inovasi.edit', compact('inovasis', 'pegawais', 'akun'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'judul_inovasi' => 'required',
            'latar_belakang' => 'required',
            'deskripsi_inovasi' => 'required',
            'tujuan_inovasi' => 'required',
            'lampiran_inovasi' => 'required',
            'kategori_inovasi' => 'required'
        ]);

        $lampiran = $request->file('lampiran_inovasi');
        $inovasi = Inovasi::where('id_inovasi', $request->id_inovasi);
        $inovasi->update([
            'judul_inovasi' => $request->judul_inovasi,
            'latar_belakang' => $request->latar_belakang,
            'deskripsi_inovasi' => $request->deskripsi_inovasi,
            'tujuan_inovasi' => $request->tujuan_inovasi,
            'lampiran_inovasi' => $lampiran->getClientOriginalName(),
            'kategori_inovasi' => $request->kategori_inovasi,
        ]);

        $inovasipegawai = InovasiPegawai::where('id_inovasi', $request->id_inovasi);
        $inovasipegawai->update([
            'id_inovasi' => $request->id_inovasi,
            'id_user' => $request->id_user,
        ]);

        if ($inovasi && $inovasipegawai) {
            return redirect()
                ->route('inovasi.index')
                ->with([
                    'info' => 'Data Inovasi Berhasil Diubah'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data Inovasi Gagal Diubah'
                ]);
        }
    }
}
