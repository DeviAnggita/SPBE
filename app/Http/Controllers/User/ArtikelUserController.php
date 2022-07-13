<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels_public = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('status', 'Public')
            ->where('approved', 'Yes')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        $artikels_all = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('approved', 'Yes')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        $artikels_no = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('approved', 'No')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        $artikels_req = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('approved', '-')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        return view('user/artikel.index', compact('artikels_public', 'artikels_all', 'artikels_no', 'artikels_req'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $artikels_public = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('judul_artikel', 'like', "%" . $search . "%")
            ->orWhere('nama_pegawai', 'like', "%" . $search . "%")
            ->orWhere('nama_kategori', 'like', "%" . $search . "%")
            ->where('status', 'Public')
            ->where('approved', 'Yes')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        $artikels_all = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('judul_artikel', 'like', "%" . $search . "%")
            ->orWhere('nama_pegawai', 'like', "%" . $search . "%")
            ->orWhere('nama_kategori', 'like', "%" . $search . "%")
            ->where('approved', 'Yes')
            ->orderBy('publish_at', 'desc')
            ->paginate(9);

        return view('user/artikel.search', compact('artikels_public', 'artikels_all', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->get();
        $pegawais = User::get();
        $kategoris = Kategori::get();
        return view('user/artikel.create', compact('pegawais', 'artikels', 'kategoris'));
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
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
            'lampiran_artikel' => 'required',
            'cover' => 'required',
            'status' => 'required',
            'publish_at' => 'required',
            'id_sub_kategori' => 'required',
        ]);

        $lampiran = $request->file('lampiran_artikel');
        $filename = $lampiran->getClientOriginalName();
        $lampiran->move(public_path() . '/assets/lampiran', $filename);
        $cover = $request->file('cover');
        $filename = $cover->getClientOriginalName();
        $cover->move(public_path() . '/assets/cover', $filename);
        // $lampiran-> move('assets/lampiran', $filename);

        $artikel = Artikel::create([
            'id_user' => Auth::user()->id_user,
            'id_unit' => Auth::user()->id_unit,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'lampiran_artikel' => $lampiran->getClientOriginalName(),
            'cover' => $cover->getClientOriginalName(),
            'status' => $request->status,
            'approved' => '-',
            'publish_at' => $request->publish_at,
            'id_sub_kategori' => $request->id_sub_kategori,

        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeluser.index')
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_artikel)
    {
        $artikel = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('id_artikel', $id_artikel)->first();

        $recent_post = DB::table('tb_artikel')
            ->where('status', 'Public')
            ->where('approved', 'Yes')
            ->orderByDesc('publish_at')
            ->limit(5)
            ->get();

        $recent_post_log = DB::table('tb_artikel')
            ->where('approved', 'Yes')
            ->orderByDesc('publish_at')
            ->limit(5)
            ->get();

        $related_post = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('tb_artikel.id_sub_kategori', $artikel->id_sub_kategori)
            ->where('status', 'Public')
            ->where('approved', 'Yes')
            ->whereNotIn('id_artikel', [$artikel->id_artikel])
            ->orderByDesc('publish_at')
            ->limit(2)
            ->get();

        $related_post_log = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('tb_artikel.id_sub_kategori', $artikel->id_sub_kategori)
            ->where('approved', 'Yes')
            ->whereNotIn('id_artikel', [$artikel->id_artikel])
            ->orderByDesc('publish_at')
            ->limit(2)
            ->get();

        return view('user/artikel.show', compact('artikel', 'recent_post', 'related_post', 'recent_post_log', 'related_post_log'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_artikel)
    {
        $artikels = DB::table('tb_artikel')
            ->join('users', 'tb_artikel.id_user', '=', 'users.id_user')
            ->join('tb_sub_kategori', 'tb_artikel.id_sub_kategori', '=', 'tb_sub_kategori.id_sub_kategori')
            ->join('tb_kategori', 'tb_sub_kategori.id_kategori', '=', 'tb_kategori.id_kategori')
            ->where('tb_artikel.id_artikel', $id_artikel)->first();
        $kategoris = Kategori::get();
        $subkategoris = SubKategori::where('id_kategori', $artikels->id_kategori)
            ->get();
        $pegawais = User::get();
        return view('user/artikel.edit', compact('artikels', 'pegawais', 'kategoris', 'subkategoris'));
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
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
            'status' => 'required',
            'publish_at' => 'required',
            'id_sub_kategori' => 'required',
        ]);

        $old = Artikel::where('id_artikel', $request->id_artikel)->first();

        $approved = $request->approved;
        $lampiran = $request->file('lampiran_artikel');
        $cover = $request->file('cover');

        function approved($approved, $old)
        {
            if ($old->approved == 'No') {
                return $approved;
            } else {
                return $old->approved;
            }
        }

        function lampiran($lampiran, $old)
        {
            if ($lampiran != null) {
                $filename = $lampiran->getClientOriginalName();
                $lampiran->move(public_path() . '/assets/lampiran', $filename);
                return $filename;
            } else {
                return $old->lampiran_artikel;
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

        $artikel = Artikel::where('id_artikel', $request->id_artikel);
        $artikel->update([
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'status' => $request->status,
            'publish_at' => $request->publish_at,
            'approved' => approved($approved, $old),
            'lampiran_artikel' => lampiran($lampiran, $old),
            'cover' => cover($cover, $old),
            'id_sub_kategori' => $request->id_sub_kategori,

        ]);

        if ($artikel) {
            return redirect()
                ->route('artikeluser.show', [$request->id_artikel])
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
                ->route('artikeluser.index')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Dihapus')
                ]);
        } else {
            return redirect()
                ->route('artikeluser.index')
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Dihapus')
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
