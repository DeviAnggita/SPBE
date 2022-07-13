<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\NotIn;
use App\Models\Unit;

class ArtikelAdminController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $Artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->join('tb_unit', 'tb_artikel.id_unit', '=', 'tb_unit.id_unit')
            ->where('tb_artikel.id_unit', $user->id_unit)
            ->orderBy('judul_artikel', 'asc')
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/artikel.index', compact('Artikels', 'akun'));
    }

    public static function approved($id_artikel)
    {
        $artikel = Artikel::where('id_artikel', $id_artikel);
        $artikel->update([
            'approved' => "Yes",
        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::success('Disetujui', 'Artikel Telah Disetujui')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Disetujui')
                ]);
        }
    }

    public function reject(Request $request)
    {
        $this->validate($request, [
            'id_artikel' => 'required',
            'alasan_reject' => 'required',
        ]);

        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->update([
            'approved' => 'No',
            'alasan_reject' => $request->alasan_reject,
        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Ditolak')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Ditolak')
                ]);
        }
    }

    public function create()
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->get();
        $pegawais = User::where('id_unit', $user->id_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->get();
        $kategoris = Kategori::get();
        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('admin/artikel.create', compact('pegawais', 'artikels', 'kategoris', 'akun'));
    }

    public function show($id_artikel)
    {
        $artikel = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('id_artikel', $id_artikel)->first();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/artikel.show', compact('artikel', 'akun'));
    }

    public function getSubKategori(Request $request)
    {
        $subkategori = SubKategori::where("id_kategori", $request->katID)
            ->pluck('id_sub_kategori', 'nama_sub_kategori');
        return response()->json($subkategori);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
            'lampiran_artikel' => 'required',
            'cover' => 'required',
            'status' => 'required',
            'approved' => 'required',
            'publish_at' => 'required',
            'id_sub_kategori' => 'required',
        ]);

        $lampiran = $request->file('lampiran_artikel');
        $filename= $lampiran->getClientOriginalName();
        $lampiran-> move( public_path().'/assets/lampiran', $filename);
        $cover = $request->file('cover');
        $filename= $cover->getClientOriginalName();
        $cover-> move( public_path().'/assets/cover', $filename);
        
        $artikel = Artikel::create([
            'id_user' => $request->id_user,
            'id_unit' => Auth::user()->id_unit,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'lampiran_artikel' => $lampiran->getClientOriginalName(),
            'cover' => $cover->getClientOriginalName(),
            'status' => $request->status,
            'approved' => $request->approved,
            'publish_at' => $request->publish_at,
            'id_sub_kategori' => $request->id_sub_kategori,

        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Ditambahkan')
                ]);
        }
    }

    public function download($lampiran_artikel){
        $file = public_path('assets/lampiran/'.$lampiran_artikel);
        return response()->download($file);
    }

    public function edit($id_artikel)
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('tb_artikel.id_artikel', $id_artikel)->first();
        $kategoris = Kategori::get();
        $subkategoris = SubKategori::where('id_kategori', $artikels->id_kategori)
            ->get();
        $pegawais = User::where('id_unit', $user->id_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/artikel.edit', compact('artikels', 'pegawais', 'kategoris', 'subkategoris', 'akun'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
            'status' => 'required',
            'approved' => 'required',
            'publish_at' => 'required',
            'id_sub_kategori' => 'required',
        ]);

        $old = Artikel::where('id_artikel', $request->id_artikel)->first();

        $lampiran = $request->file('lampiran_artikel');
        $cover = $request->file('cover');

        function lampiran($lampiran, $old) {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_artikel;
            }
        }

        function cover($cover, $old) {
            if ($cover != null) {
                $filename = $cover->getClientOriginalName();
                $cover->move(public_path() . '/assets/cover', $filename);
                return $filename;
            } else {
                return $old->cover;
            }
        }
        
        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->update([
            'id_user' => $request->id_user,
            'id_unit' => Auth::user()->id_unit,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'lampiran_artikel' => lampiran($lampiran, $old),
            'cover' => cover($cover, $old),
            'status' => $request->status,
            'approved' => $request->approved,
            'publish_at' => $request->publish_at,
            'id_sub_kategori' => $request->id_sub_kategori,

        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Diubah')
                ]);
        }
    }

    public function delete(Request $request)
    {
        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->delete();

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Dihapus')
                ]);
        }
    }

    public function myArtikel() {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $Artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->join('tb_unit', 'tb_artikel.id_unit', '=', 'tb_unit.id_unit')
            ->where('tb_artikel.id_user', $user->id_user)
            ->orderBy('judul_artikel', 'asc')
            ->get();
            $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/artikel.myartikel', compact('Artikels', 'akun'));
    }

    public function myshow($id_artikel)
    {
        $artikel = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('id_artikel', $id_artikel)->first();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/artikel.myshow', compact('artikel', 'akun'));
    }

    public function mydelete(Request $request)
    {
        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->delete();

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.myartikel')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('artikeladmin.myartikel')
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Dihapus')
                ]);
        }
    }

    public function myedit($id_artikel)
    {
        $user = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        $artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('tb_artikel.id_artikel', $id_artikel)->first();
        $kategoris = Kategori::get();
        $subkategoris = SubKategori::where('id_kategori', $artikels->id_kategori)
            ->get();
        $pegawais = User::where('id_unit', $user->id_unit)
            ->whereNotIn('role', ['Super Admin'])
            ->get();
        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('admin/artikel.myedit', compact('artikels', 'pegawais', 'kategoris', 'subkategoris', 'akun'));
    }

    public function myupdate(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
            'status' => 'required',
            'approved' => 'required',
            'publish_at' => 'required',
            'id_sub_kategori' => 'required',
        ]);

        $old = Artikel::where('id_artikel', $request->id_artikel)->first();

        $lampiran = $request->file('lampiran_artikel');
        $cover = $request->file('cover');

        function mylampiran($lampiran, $old) {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_artikel;
            }
        }

        function mycover($cover, $old) {
            if ($cover != null) {
                $filename = $cover->getClientOriginalName();
                $cover->move(public_path() . '/assets/cover', $filename);
                return $filename;
            } else {
                return $old->cover;
            }
        }
        
        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->update([
            'id_user' => $request->id_user,
            'id_unit' => Auth::user()->id_unit,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'lampiran_artikel' => mylampiran($lampiran, $old),
            'cover' => mycover($cover, $old),
            'status' => $request->status,
            'approved' => $request->approved,
            'publish_at' => $request->publish_at,
            'id_sub_kategori' => $request->id_sub_kategori,

        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.index')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Diubah')
                ]);
        }
    }

    public static function myapproved($id_artikel)
    {
        $artikel = Artikel::where('id_artikel', $id_artikel);
        $artikel->update([
            'approved' => "Yes",
        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.myartikel')
                ->with([
                    Alert::success('Disetujui', 'Artikel Telah Disetujui')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Disetujui')
                ]);
        }
    }

    public function myreject(Request $request)
    {
        $this->validate($request, [
            'id_artikel' => 'required',
            'alasan_reject' => 'required',
        ]);

        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->update([
            'approved' => 'No',
            'alasan_reject' => $request->alasan_reject,
        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeladmin.myartikel')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Ditolak')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Ditolak')
                ]);
        }
    }

    
}