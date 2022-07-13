<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kegiatan;
use App\Models\User;
use App\Models\Inovasi;
use App\Models\InovasiPegawai;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class InovasiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('keterangan', 'Owner')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        $inovasismember = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('keterangan', 'Member')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        return view('user/inovasi.index', compact('inovasis', 'inovasismember'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $inovasis = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('keterangan', 'Owner')
            ->where('judul_inovasi', 'like', "%" . $search . "%")
            ->orWhere('nama_pegawai', 'like', "%" . $search . "%")
            ->orWhere('kategori_inovasi', 'like', "%" . $search . "%")
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        $inovasismember = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('keterangan', 'Member')
            ->where('judul_inovasi', 'like', "%" . $search . "%")
            ->orWhere('nama_pegawai', 'like', "%" . $search . "%")
            ->orWhere('kategori_inovasi', 'like', "%" . $search . "%")
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        return view('user/inovasi.search', compact('inovasis', 'inovasismember', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/inovasi.create');
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
            'id_unit' => Auth::user(),
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
                ->route('inovasiuser.index')
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_inovasi)
    {
        $inovasi = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('keterangan', 'Owner')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        $kegiatans = Kegiatan::where('id_inovasi', $id_inovasi)
            ->orderBy('publish_at', 'desc')
            ->paginate(3);
        $member = DB::table('users')
            ->join('tb_inovasi_pegawai', 'users.id_user', '=', 'tb_inovasi_pegawai.id_user')
            ->where('id_inovasi', $id_inovasi)
            ->where('users.id_user', Auth::user()->id_user)
            ->first();
        return view('user/inovasi.show', compact('inovasi', 'kegiatans', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_inovasi)
    {
        $inovasi = DB::table('tb_inovasi')
            ->join('tb_inovasi_pegawai', 'tb_inovasi.id_inovasi', '=', 'tb_inovasi_pegawai.id_inovasi')
            ->join('users', 'tb_inovasi_pegawai.id_user', '=', 'users.id_user')
            ->where('tb_inovasi.id_inovasi', $id_inovasi)->first();
        return view('user/inovasi.edit', compact('inovasi'));
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
            'judul_inovasi' => $request->judul_inovasi,
            'latar_belakang' => $request->latar_belakang,
            'deskripsi_inovasi' => $request->deskripsi_inovasi,
            'tujuan_inovasi' => $request->tujuan_inovasi,
            'lampiran_inovasi' => lampiran($lampiran, $old),
            'cover' => cover($cover, $old),
            'kategori_inovasi' => $request->kategori_inovasi,
            'publish_at' => $request->publish_at,
        ]);

        if ($inovasi) {
            return redirect()
                ->route('inovasiuser.show', [$request->id_inovasi])
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

    public function delete(Request $request)
    {
        $inovasi = Inovasi::where('id_inovasi', $request->id_inovasi);
        $inovasi->delete();

        if ($inovasi) {
            return redirect()
                ->route('inovasiuser.index')
                ->with([
                    Alert::success('Berhasil', 'Inovasi Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('inovasi.index')
                ->with([
                    Alert::error('Gagal', 'Inovasi Gagal Dihapus')
                ]);
        }
    }
    
    public function download($lampiran_artikel)
    {
        $file = public_path('assets/lampiran/' . $lampiran_artikel);
        return response()->download($file);
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
