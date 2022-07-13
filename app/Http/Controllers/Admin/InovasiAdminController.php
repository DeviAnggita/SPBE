<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inovasi;
use App\Models\User;
use App\Models\Kegiatan;
use App\Models\InovasiPegawai;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\Unit;
use Illuminate\Validation\Rules\NotIn;

class InovasiAdminController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->join('tb_unit', 'tb_inovasi.id_unit', '=', 'tb_unit.id_unit')
            ->where('keterangan', 'Owner')
            ->where('nama_unit', $user->nama_unit)
            ->orderBy('judul_inovasi', 'asc')
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
            'id_user' => 'required',
            'judul_inovasi' => 'required',
            'latar_belakang' => 'required',
            'deskripsi_inovasi' => 'required',
            'tujuan_inovasi' => 'required',
            'lampiran_inovasi' => 'required',
            'cover' => 'required',
            'kategori_inovasi' => 'required',
            'publish_at' => 'required',
        ]);
        $id_inovasi = DB::table('tb_inovasi')->max('id_inovasi');
        $max = $id_inovasi + 1;
        DB::update("ALTER TABLE tb_inovasi AUTO_INCREMENT = $max;");
        $lampiran = $request->file('lampiran_inovasi');
        $filename = $lampiran->getClientOriginalName();
        $lampiran->move(public_path() . '/assets/lampiran', $filename);
        $cover = $request->file('cover');
        $filename = $cover->getClientOriginalName();
        $cover->move(public_path() . '/assets/cover', $filename);
        $inovasi = Inovasi::create([
            'id_unit' => Auth::user()->id_unit,
            'judul_inovasi' => $request->judul_inovasi,
            'latar_belakang' => $request->latar_belakang,
            'deskripsi_inovasi' => $request->deskripsi_inovasi,
            'tujuan_inovasi' => $request->tujuan_inovasi,
            'lampiran_inovasi' => $lampiran->getClientOriginalName(),
            'cover' => $cover->getClientOriginalName(),
            'kategori_inovasi' => $request->kategori_inovasi,
            'publish_at' => $request->publish_at,
        ]);

        $inovasipegawai = InovasiPegawai::create([
            'id_inovasi' => $max,
            'id_user' => $request->id_user,
            'keterangan' => "Owner",
        ]);

        if ($inovasi && $inovasipegawai) {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    Alert::success('Berhasil', 'Inovasi Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Inovasi Gagal Ditambahkan')
                ]);
        }
    }

    public function viewLampiran($id_inovasi)
    {
        $inovasi = Inovasi::where('id_inovasi', $id_inovasi)->first();
        return view('admin/inovasi.image', compact('inovasi'));
    }

    public function download($lampiran_inovasi)
    {
        $file = public_path('assets/lampiran/' . $lampiran_inovasi);
        return response()->download($file);
    }

    public function create()
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->get();
        $pegawais = User::where('id_unit', $user->id_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/inovasi.create', compact('inovasis', 'pegawais', 'akun'));
    }

    public function show($id_inovasi)
    {
        $inovasi = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $kegiatans = Kegiatan::where('id_inovasi', $id_inovasi)->get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/inovasi.show', compact('inovasi', 'kegiatans', 'akun'));
    }

    public function delete(Request $request)
    {
        $inovasi = Inovasi::where('id_inovasi', $request->id_inovasi);
        $inovasi->delete();

        if ($inovasi) {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    Alert::success('Berhasil', 'Inovasi Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    Alert::error('Gagal', 'Inovasi Gagal Dihapus')
                ]);
        }
    }

    public function destroy($id_inovasi)
    {
        $inovasi = Inovasi::where('id_inovasi', $id_inovasi);
        $inovasi->delete();

        if ($inovasi) {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    'error' => 'Inovasi Inovasi Berhasil Dihapus'
                ]);
        } else {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    'error' => 'Inovasi Inovasi Gagal Dihapus'
                ]);
        }
    }

    public function edit($id_inovasi)
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $pegawais = User::where('id_unit', Auth::user()->id_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        // $inovasi = Inovasi::where('id_inovasi', $id_inovasi) -> first();
        return view('admin/inovasi.edit', compact('inovasis', 'pegawais', 'akun'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul_inovasi' => 'required',
            'latar_belakang' => 'required',
            'deskripsi_inovasi' => 'required',
            'tujuan_inovasi' => 'required',
            'kategori_inovasi' => 'required',
            'publish_at' => 'required',
        ]);

        $old = Inovasi::where('id_inovasi', $request->id_inovasi)->first();

        $lampiran = $request->file('lampiran_inovasi');
        $cover = $request->file('cover');

        function lampiran($lampiran, $old)
        {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_inovasi;
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

        $inovasi = Inovasi::where('id_inovasi', $request->id_inovasi);
        $inovasi->update([
            'id_unit' => Auth::user()->id_unit,
            'judul_inovasi' => $request->judul_inovasi,
            'latar_belakang' => $request->latar_belakang,
            'deskripsi_inovasi' => $request->deskripsi_inovasi,
            'tujuan_inovasi' => $request->tujuan_inovasi,
            'lampiran_inovasi' => lampiran($lampiran, $old),
            'cover' => cover($cover, $old),
            'kategori_inovasi' => $request->kategori_inovasi,
            'publish_at' => $request->publish_at,
        ]);

        $inovasipegawai = InovasiPegawai::where('id_inovasi_pegawai', $request->id_inovasi_pegawai);
        $inovasipegawai->update([
            'id_inovasi' => $request->id_inovasi,
            'id_user' => $request->id_user,
        ]);

        if ($inovasi && $inovasipegawai) {
            return redirect()
                ->route('inovasiadmin.index')
                ->with([
                    Alert::success('Berhasil', 'Inovasi Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Inovasi Gagal Diubah')
                ]);
        }
    }

    public function myinovasi()
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->join('tb_unit', 'tb_inovasi.id_unit', '=', 'tb_unit.id_unit')
            ->where('tb_inovasi_pegawai.id_user', $user->id_user)
            ->orderBy('judul_inovasi', 'asc')
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/inovasi.myinovasi', compact('inovasis', 'akun'));
    }

    public function myinovasishow($id_inovasi)
    {
        $inovasi = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $kegiatans = Kegiatan::where('id_inovasi', $id_inovasi)->get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/inovasi.myinovasishow', compact('inovasi', 'kegiatans', 'akun'));
    }

    public function myinovasiedit($id_inovasi)
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $pegawais = User::where('id_unit', Auth::user()->id_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->get();
        // $inovasi = Inovasi::where('id_inovasi', $id_inovasi) -> first();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/inovasi.myinovasiedit', compact('inovasis', 'pegawais', 'akun'));
    }

    public function myinovasiupdate(Request $request)
    {
        $this->validate($request, [
            'judul_inovasi' => 'required',
            'latar_belakang' => 'required',
            'deskripsi_inovasi' => 'required',
            'tujuan_inovasi' => 'required',
            'kategori_inovasi' => 'required',
            'publish_at' => 'required',
        ]);

        $old = Inovasi::where('id_inovasi', $request->id_inovasi)->first();

        $lampiran = $request->file('lampiran_inovasi');
        $cover = $request->file('cover');

        function mylampiran($lampiran, $old)
        {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_inovasi;
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

        $inovasi = Inovasi::where('id_inovasi', $request->id_inovasi);
        $inovasi->update([
            'id_unit' => Auth::user()->id_unit,
            'judul_inovasi' => $request->judul_inovasi,
            'latar_belakang' => $request->latar_belakang,
            'deskripsi_inovasi' => $request->deskripsi_inovasi,
            'tujuan_inovasi' => $request->tujuan_inovasi,
            'lampiran_inovasi' => mylampiran($lampiran, $old),
            'cover' => mycover($cover, $old),
            'kategori_inovasi' => $request->kategori_inovasi,
            'publish_at' => $request->publish_at,
        ]);

        if ($inovasi) {
            return redirect()
                ->route('inovasiadmin.myinovasi')
                ->with([
                    Alert::success('Berhasil', 'Inovasi Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Inovasi Gagal Diubah')
                ]);
        }
    }

    public function myinovasidelete(Request $request)
    {
        $inovasi = Inovasi::where('id_inovasi', $request->id_inovasi);
        $inovasi->delete();

        if ($inovasi) {
            return redirect()
                ->route('inovasiadmin.myinovasi')
                ->with([
                    Alert::success('Berhasil', 'Inovasi Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('inovasiadmin.myinovasi')
                ->with([
                    Alert::error('Gagal', 'Inovasi Gagal Dihapus')
                ]);
        }
    }
}
