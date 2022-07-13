<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\JenisUnit;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    public function index()
    {
        $units = DB::table('tb_unit')
            ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
            ->orderBy('nama_unit', 'asc')
            ->get();
        $jenisunits = JenisUnit::get();

        $akun = DB::table('users')
        ->join('tb_unit', 'users.id_unit', '=', 'tb_unit.id_unit')
        ->join('tb_jenis_unit', 'tb_unit.id_jenis_unit', '=', 'tb_jenis_unit.id_jenis_unit')
        ->where('id_user', Auth::user()->id_user)
        ->first();
        return view('superadmin/opd.index', compact('units', 'jenisunits', 'akun'));
    }

    public function store(Request $request)
    {
        $nama_unit = Unit::where('nama_unit', $request->nama_unit)->first();
        if ($nama_unit == true) {
            return redirect()
                ->route('opd.index')
                ->with([
                    Alert::error('Gagal', 'Nama OPD Sudah Ada')
                ]);
        } else {
            $this->validate($request, [
                'id_jenis_unit' => 'required',
                'nama_unit' => 'required',
                'email_unit' => 'required',
                'telepon_unit' => 'required|max:13',
                'alamat_unit' => 'required',
            ]);
    
            $unit = Unit::create([
                'id_jenis_unit' => $request->id_jenis_unit,
                'nama_unit' => $request->nama_unit,
                'email_unit' => $request->email_unit,
                'telepon_unit' => $request->telepon_unit,
                'alamat_unit' => $request->alamat_unit,
            ]);
    
            if ($unit) {
                return redirect()
                    ->route('opd.index')
                    ->with([
                        Alert::success('Berhasil', 'OPD Berhasil Ditambahkan')
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        Alert::error('Gagal', 'OPD Gagal Ditambahkan')
                    ]);
            }
        }
        
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id_jenis_unit' => 'required',
            'nama_unit' => 'required',
            'email_unit' => 'required',
            'telepon_unit' => 'required',
            'alamat_unit' => 'required',
        ]);

        $jenisunit = Unit::where('id_unit', $request->id_unit);
        $jenisunit->update([
            'id_jenis_unit' => $request->id_jenis_unit,
            'nama_unit' => $request->nama_unit,
            'email_unit' => $request->email_unit,
            'telepon_unit' => $request->telepon_unit,
            'alamat_unit' => $request->alamat_unit,
        ]);

        if ($jenisunit) {
            return redirect()
                ->route('opd.index')
                ->with([
                    Alert::success('Berhasil', 'OPD Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'OPD Gagal Ditambahkan')
                ]);
        }
    }

    public function delete(Request $request)
    {
        $unit = Unit::where('id_unit', $request->id_unit);
        $unit->delete();

        if ($unit) {
            return redirect()
                ->route('opd.index')
                ->with([
                    Alert::success('Berhasil', 'OPD Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('opd.index')
                ->with([
                    Alert::error('Gagal', 'OPD Gagal Dihapus')
                ]);
        }
    }

    public function destroy($id_unit)
    {
        $jenisunit = Unit::where('id_unit', $id_unit);
        $jenisunit->delete();

        if ($jenisunit) {
            return redirect()
                ->route('opd.index')
                ->with([
                    Alert::success('Berhasil', 'OPD Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('opd.index')
                ->with([
                    Alert::error('Gagal', 'OPD Gagal Ditambahkan')
                ]);
        }
    }
}