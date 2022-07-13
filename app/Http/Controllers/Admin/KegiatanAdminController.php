<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inovasi;
use App\Models\User;
use App\Models\InovasiPegawai;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class KegiatanAdminController extends Controller
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
        return view('admin/inovasi.index', compact('inovasis', 'akun'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_inovasi' => 'required',
            'id_user' => 'required',
            'judul_kegiatan' => 'required',
            'latar_belakang_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tujuan_kegiatan' => 'required',
            'lampiran_kegiatan' => 'required',
            'publish_at' => 'required',
        ]);

        $lampiran = $request->file('lampiran_kegiatan');
        $filename= $lampiran->getClientOriginalName();
        $lampiran-> move( public_path().'/assets/lampiran', $filename);
        $kegiatan = Kegiatan::create([
            'id_inovasi' => $request->id_inovasi,
            'id_user' => $request->id_user,
            'judul_kegiatan' => $request->judul_kegiatan,
            'latar_belakang_kegiatan' => $request->latar_belakang_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'tujuan_kegiatan' => $request->tujuan_kegiatan,
            'lampiran_kegiatan' => $lampiran->getClientOriginalName(),
            'publish_at' => $request->publish_at,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('inovasiadmin.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Data Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Data Gagal Ditambahkan')
                ]);
        }
    }

    public function viewLampiran($id_kegiatan){
        $kegiatan = Kegiatan::where('id_kegiatan', $id_kegiatan)->first();
        return view('admin/kegiatan.image', compact('kegiatan'));
    }

    public function download($lampiran_kegiatan){
        $file = public_path('assets/lampiran/'.$lampiran_kegiatan);
        return response()->download($file);
    }

    public function add($id_inovasi)
    {
        $inovasi = Inovasi::where('id_inovasi', $id_inovasi)->first();
        $pegawais = DB::table('users')
            ->join('tb_inovasi_pegawai', 'users.id_user', '=', 'tb_inovasi_pegawai.id_user')
            ->where('id_inovasi', $id_inovasi)
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/kegiatan.create', compact('inovasi', 'pegawais', 'akun'));
    }

    public function show($id_kegiatan)
    {
        $kegiatan = DB::table('tb_kegatan')
            ->join('users', 'tb_kegiatan.id_user', '=', 'users.id_user')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $inovasi = DB::table('tb_kegiatan')    
            ->join('tb_inovasi', 'tb_kegiatan.id_inovasi', '=', 'tb_inovasi.id_inovasi')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/kegiatan.show', compact('kegiatan', 'inovasi', 'akun'));
    }

    
    public function destroy(Request $request, $id_kegiatan)
    {
        $kegiatan = Kegiatan::where('id_kegiatan', $id_kegiatan);
        $kegiatan->delete();
        
        if ($kegiatan) {
            return redirect()
            ->route('inovasiadmin.show', [$request->id_inovasi])
                ->with([
                    'error' => 'Data Kegiatan Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    'error' => 'Data Kegiatan Gagal Dihapus'
                ]);
            }
        }

    public function edit($id_kegiatan)
    {
        $kegiatan = DB::table('tb_kegiatan')
        ->join('tb_inovasi', 'tb_kegiatan.id_inovasi', '=', 'tb_inovasi.id_inovasi')
        ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $pegawais = User::get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/kegiatan.edit', compact('kegiatan', 'pegawais', 'akun'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul_kegiatan' => 'required',
            'latar_belakang_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tujuan_kegiatan' => 'required',
            'publish_at' => 'required',
        ]);

        $old = Kegiatan::where('id_kegiatan', $request->id_kegiatan)->first();

        $lampiran = $request->file('lampiran_kegiatan');
        $cover = $request->file('cover');

        function lampiran($lampiran, $old)
        {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_kegiatan;
            }
        }

        function cover($cover, $old)
        {
            if ($cover != null) {
                $filename = $cover->getClientOriginalName();
                $cover->move(public_path() . '/assets/cover', $filename);
                return $filename;
            } else {
                return $old->cover;
            }
        }

        $kegiatan = Kegiatan::where('id_kegiatan', $request->id_kegiatan);
        $kegiatan->update([
            'judul_kegiatan' => $request->judul_kegiatan,
            'latar_belakang_kegiatan' => $request->latar_belakang_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'tujuan_kegiatan' => $request->tujuan_kegiatan,
            'lampiran_kegiatan' => lampiran($lampiran, $old),
            'cover' => cover($cover, $old),
            'publish_at' => $request->publish_at,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('inovasiadmin.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Kegiatan Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Kegiatan Gagal Diubah')
                ]);
        }
    }
    
    public function delete(Request $request)
    {
        $kegiatan = Kegiatan::where('id_kegiatan', $request->id_kegiatan);
        $kegiatan->delete();
    
        if ($kegiatan) {
            return redirect()
                ->route('inovasiadmin.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Data Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('inovasiadmin.show', [$request->id_inovasi])
                ->with([
                    Alert::error('Gagal', 'Data Gagal Dihapus')
                ]);
        }
    }

    public function mykegiatanadd($id_inovasi)
    {
        $inovasi = Inovasi::where('id_inovasi', $id_inovasi)->first();
        $pegawais = DB::table('users')
            ->join('tb_inovasi_pegawai', 'users.id_user', '=', 'tb_inovasi_pegawai.id_user')
            ->where('id_inovasi', $id_inovasi)
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/kegiatan.mykegiatancreate', compact('inovasi', 'pegawais', 'akun'));
    }

    public function mykegiatanstore(Request $request)
    {
        $this->validate($request, [
            'id_inovasi' => 'required',
            'id_user' => 'required',
            'judul_kegiatan' => 'required',
            'latar_belakang_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tujuan_kegiatan' => 'required',
            'lampiran_kegiatan' => 'required',
            'publish_at' => 'required',
        ]);

        $lampiran = $request->file('lampiran_kegiatan');
        $filename= $lampiran->getClientOriginalName();
        $lampiran-> move( public_path().'/assets/lampiran', $filename);
        $kegiatan = Kegiatan::create([
            'id_inovasi' => $request->id_inovasi,
            'id_user' => $request->id_user,
            'judul_kegiatan' => $request->judul_kegiatan,
            'latar_belakang_kegiatan' => $request->latar_belakang_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'tujuan_kegiatan' => $request->tujuan_kegiatan,
            'lampiran_kegiatan' => $lampiran->getClientOriginalName(),
            'publish_at' => $request->publish_at,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('inovasiadmin.myinovasishow', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Data Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Data Gagal Ditambahkan')
                ]);
        }
    }

    public function mykegiatanedit($id_kegiatan)
    {
        $kegiatan = DB::table('tb_kegiatan')
        ->join('tb_inovasi', 'tb_kegiatan.id_inovasi', '=', 'tb_inovasi.id_inovasi')
        ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $pegawais = User::get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/kegiatan.mykegiatanedit', compact('kegiatan', 'pegawais', 'akun'));
    }

    public function mykegiatanupdate(Request $request)
    {
        $this->validate($request, [
            'judul_kegiatan' => 'required',
            'latar_belakang_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tujuan_kegiatan' => 'required',
            'publish_at' => 'required',
        ]);

        $old = Kegiatan::where('id_kegiatan', $request->id_kegiatan)->first();

        $lampiran = $request->file('lampiran_kegiatan');
        $cover = $request->file('cover');

        function mylampiran($lampiran, $old)
        {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_kegiatan;
            }
        }

        function mycover($cover, $old)
        {
            if ($cover != null) {
                $filename = $cover->getClientOriginalName();
                $cover->move(public_path() . '/assets/cover', $filename);
                return $filename;
            } else {
                return $old->cover;
            }
        }

        $kegiatan = Kegiatan::where('id_kegiatan', $request->id_kegiatan);
        $kegiatan->update([
            'judul_kegiatan' => $request->judul_kegiatan,
            'latar_belakang_kegiatan' => $request->latar_belakang_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'tujuan_kegiatan' => $request->tujuan_kegiatan,
            'lampiran_kegiatan' => lampiran($lampiran, $old),
            'cover' => cover($cover, $old),
            'publish_at' => $request->publish_at,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('inovasiadmin.myinovasishow', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Kegiatan Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Kegiatan Gagal Diubah')
                ]);
        }
    }

    public function mykegiatanshow($id_kegiatan)
    {
        $kegiatan = DB::table('tb_kegatan')
            ->join('users', 'tb_kegiatan.id_user', '=', 'users.id_user')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $inovasi = DB::table('tb_kegiatan')    
            ->join('tb_inovasi', 'tb_kegiatan.id_inovasi', '=', 'tb_inovasi.id_inovasi')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/kegiatan.show', compact('kegiatan', 'inovasi', 'akun'));
    }

    public function mykegiatandelete(Request $request)
    {
        $kegiatan = Kegiatan::where('id_kegiatan', $request->id_kegiatan);
        $kegiatan->delete();
    
        if ($kegiatan) {
            return redirect()
                ->route('inovasiadmin.myinovasishow', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Data Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('inovasiadmin.myinovasishow', [$request->id_inovasi])
                ->with([
                    Alert::error('Gagal', 'Data Gagal Dihapus')
                ]);
        }
    }
}
