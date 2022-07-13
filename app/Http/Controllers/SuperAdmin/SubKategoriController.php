<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubKategori;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class SubKategoriController extends Controller
{
    public function index()
    {
        $subkategoris = SubKategori::orderBy('nama_sub_kategori', 'asc')->get();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/kategori.index', compact('subkategoris', 'akun'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_sub_kategori' => 'required',
            'id_kategori' => 'required'
        ]);

        $subkategori = SubKategori::create([
            'nama_sub_kategori' => $request->nama_sub_kategori,
            'id_kategori' => $request->id_kategori,
        ]);

        if ($subkategori) {
            return redirect()
                ->route('kategori.show', [$request->id_kategori])
                ->with([
                    Alert::success('Berhasil', 'Sub Kategori Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Sub Kategori Gagal Ditambahkan')
                ]);
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_sub_kategori' => 'required',
        ]);

        $subkategori = SubKategori::where('id_sub_kategori', $request->id_sub_kategori);
        $subkategori->update([
            'nama_sub_kategori' => $request->nama_sub_kategori,
        ]);

        if ($subkategori) {
            return redirect()
                ->route('kategori.show', [$request->id_kategori])
                ->with([
                    Alert::success('Berhasil', 'Sub Kategori Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Sub Kategori Gagal Diubah')
                ]);
        }
    }

    public function delete(Request $request)
    {
        $subkategori = SubKategori::where('id_sub_kategori', $request->id_sub_kategori);
        $subkategori->delete();

        if ($subkategori) {
            return redirect()
                ->route('kategori.show', [$request->id_kategori])
                ->with([
                    Alert::success('Berhasil', 'Sub Kategori Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::error('Gagal', 'Sub Kategori Gagal Dihapus')
                ]);
        }
    }

    public function destroy(Request $request, $id_sub_kategori)
    {
        $subkategori = SubKategori::where('id_sub_kategori', $id_sub_kategori);
        $subkategori->delete();

        if ($subkategori) {
            return redirect()
                ->route('kategori.show', [$request->id_kategori])
                ->with([
                    Alert::success('Berhasil', 'Sub Kategori Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('kategori.index')
                ->with([
                    Alert::error('Gagal', 'Sub Kategori Gagal Dihapus')
                ]);
        }
    }
}
