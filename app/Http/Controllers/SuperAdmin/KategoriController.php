<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::orderBy('nama_kategori', 'asc')->get();
        $subkategoris = SubKategori::get();

        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('superadmin/kategori.index', compact('kategoris', 'subkategoris', 'akun'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        if ($kategori) {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::success('Berhasil', 'Kategori Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Kategori Gagal Ditambahkan')
                ]);
        }
    }

    public function show($id_kategori)
    {
        $kategoris = Kategori::where('id_kategori', $id_kategori)->first();
        $subkategoris = DB::table('tb_sub_kategori')
            ->where('id_kategori', $id_kategori)
            ->get();

        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('superadmin/kategori.show', compact('kategoris', 'subkategoris', 'akun'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::where('id_kategori', $request->id_kategori);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        if ($kategori) {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::success('Berhasil', 'Kategori Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Kategori Gagal Diubah')
                ]);
        }
    }

    public function delete(Request $request)
    {
        $kategori = Kategori::where('id_kategori', $request->id_kategori);
        $kategori->delete();

        if ($kategori) {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::success('Berhasil', 'Kategori Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::error('Gagal', 'Kategori Gagal Dihapus')
                ]);
        }
    }

    public function destroy($id_kategori)
    {
        $kategori = Kategori::where('id_kategori', $id_kategori);
        $kategori->delete();

        if ($kategori) {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::success('Berhasil', 'Kategori Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::error('Gagal', 'Kategori Gagal Dihapus')
                ]);
        }
    }
}
