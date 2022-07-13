<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Inovasi;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class KegiatanUserController extends Controller
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
    public function create($id_inovasi)
    {
        $inovasi = Inovasi::where('id_inovasi', $id_inovasi)->first();
        $pegawais = User::get();
        return view('user/kegiatan.create', compact('inovasi', 'pegawais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'cover' => 'required',
            'publish_at' => 'required',
        ]);

        $lampiran = $request->file('lampiran_kegiatan');
        $filename = $lampiran->getClientOriginalName();
        $lampiran->move(public_path() . '/assets/lampiran', $filename);

        $cover = $request->file('cover');
        $filename = $cover->getClientOriginalName();
        $cover->move(public_path() . '/assets/cover', $filename);

        $kegiatan = Kegiatan::create([
            'id_inovasi' => $request->id_inovasi,
            'id_user' => $request->id_user,
            'judul_kegiatan' => $request->judul_kegiatan,
            'latar_belakang_kegiatan' => $request->latar_belakang_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'tujuan_kegiatan' => $request->tujuan_kegiatan,
            'lampiran_kegiatan' => $lampiran->getClientOriginalName(),
            'cover' => $cover->getClientOriginalName(),
            'publish_at' => $request->publish_at,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('inovasiuser.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Kegiatan Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Kegiatan Gagal Ditambahkan')
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kegiatan)
    {
        $kegiatan = DB::table('tb_kegiatan')
            ->join('users', 'tb_kegiatan.id_user', '=', 'users.id_user')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $inovasi = DB::table('tb_kegiatan')
            ->join('tb_inovasi', 'tb_kegiatan.id_inovasi', '=', 'tb_inovasi.id_inovasi')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)->first();
        $member = DB::table('users')
            ->join('tb_inovasi_pegawai', 'users.id_user', '=', 'tb_inovasi_pegawai.id_user')
            ->where('id_inovasi', $inovasi->id_inovasi)
            ->where('users.id_user', Auth::user()->id_user)
            ->first();
        return view('user/kegiatan.show', compact('kegiatan', 'inovasi', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kegiatan)
    {
        $kegiatan = DB::table('tb_kegiatan')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)
            ->first();
        $inovasi = DB::table('tb_kegiatan')
            ->join('tb_inovasi', 'tb_kegiatan.id_inovasi', '=', 'tb_inovasi.id_inovasi')
            ->where('tb_kegiatan.id_kegiatan', $id_kegiatan)
            ->first();
        $pegawai = DB::table('tb_kegiatan')
            ->join('users', 'tb_kegiatan.id_user', '=', 'users.id_user')
            ->where('id_kegiatan', $id_kegiatan)
            ->first();
        return view('user/kegiatan.edit', compact('kegiatan', 'inovasi', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
                ->route('inovasiuser.show', [$request->id_inovasi])
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
                ->route('inovasiuser.show', [$request->id_inovasi])
                ->with([
                    Alert::success('Berhasil', 'Kegiatan Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('inovasi.show', [$request->id_inovasi])
                ->with([
                    Alert::error('Gagal', 'Kegiatan Gagal Dihapus')
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
