<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisUnit;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Auth;

class JenisUnitController extends Controller
{
    public function index()
    {
        $jenisunits = DB::table('tb_jenis_unit')
            ->orderBy('nama_jenis_unit', 'asc')
            ->get();

        $akun = DB::table('users')
            ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->where('id_user', Auth::user()->id_user)
            ->first();
        return view('superadmin/jenisopd.index', compact('jenisunits', 'akun'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_jenis_unit' => 'required',
        ]);

        $jenisunit = JenisUnit::create([
            'nama_jenis_unit' => $request->nama_jenis_unit,
        ]);

        if ($jenisunit) {
            return redirect()
                ->route('jenisopd.index')
                ->with([
                    Alert::success('Berhasil', 'Jenis OPD Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Jenis OPD Gagal Dihapus')
                ]);
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_jenis_unit' => 'required',
        ]);

        $jenisunit = JenisUnit::where('id_jenis_unit', $request->id_jenis_unit);
        $jenisunit->update([
            'nama_jenis_unit' => $request->nama_jenis_unit,
        ]);

        if ($jenisunit) {
            return redirect()
                ->route('jenisopd.index')
                ->with([
                    Alert::success('Berhasil', 'Jenis OPD Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Jenis OPD Gagal Diubah')
                ]);
        }
    }

    public function delete(Request $request)
    {
        $jenisunit = JenisUnit::where('id_jenis_unit', $request->id_jenis_unit);
        $jenisunit->delete();

        if ($jenisunit) {
            return redirect()
                ->route('jenisopd.index')
                ->with([
                    Alert::success('Berhasil', 'Jenis OPD Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('jenisopd.index')
                ->with([
                    Alert::error('Gagal', 'Jenis OPD Gagal Dihapus')
                ]);
        }
    }

    public function destroy($id_jenis_unit)
    {
        $jenisunit = JenisUnit::where('id_jenis_unit', $id_jenis_unit);
        $jenisunit->delete();

        if ($jenisunit) {
            return redirect()
                ->route('jenisopd.index')
                ->with([
                    Alert::success('Berhasil', 'Jenis OPD Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('jenisopd.index')
                ->with([
                    Alert::error('Gagal', 'Jenis OPD Gagal Dihapus')
                ]);
        }
    }
}
