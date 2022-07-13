<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\InovasiPegawai;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class InovasiPegawaiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idPegawai = InovasiPegawai::where('id_inovasi', $request->id_inovasi)
            ->where('id_user', $request->get('id_user'))
            ->first();

        if ($idPegawai == true) {
            return redirect()
                ->route('membersuser.show', [$request->id_inovasi])
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
                    ->route('membersuser.show', [$request->id_inovasi])
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_inovasi)
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)
            ->where('keterangan', 'Member')
            ->paginate(10);
        $member = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $owner = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)
            ->where('keterangan', 'Owner')->first();
        $pegawais = User::orderBy('nama_pegawai', 'asc')
            ->get();
        return view('user/members.show', compact('inovasis', 'owner', 'pegawais', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function delete(Request $request)
    {
        $inovasipegawai = InovasiPegawai::where('id_inovasi_pegawai', $request->id_inovasi_pegawai);
        $inovasipegawai->delete();

        if ($inovasipegawai) {
            return redirect()
                ->route('membersuser.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Member Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('membersuser.show', [$request->id_inovasi])
                ->with([
                    Alert::error('Gagal', 'Member Gagal Dihapus')
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
