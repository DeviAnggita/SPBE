<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use App\Models\ForumDiskusi;
use RealRashid\SweetAlert\Facades\Alert;

class ForumDiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = DB::table('tb_forum')
            ->join('tb_artikel', 'tb_forum.id_artikel', '=', 'tb_artikel.id_artikel')
            ->join('users', 'tb_forum.id_user', '=', 'users.id_user')
            ->get();

        $kategoris = Kategori::get();

        return view('forum.index', compact('forums', 'kategoris'));
    }

    public function getArtikel(Request $request)
    {
        $artikel = Artikel::where("id_sub_kategori", $request->subkatID)
            ->pluck('id_artikel', 'judul_artikel');
        return response()->json($artikel);
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
        $this->validate($request, [
            'id_artikel' => 'required',
            'id_user' => 'required',
        ]);

        $forum = ForumDiskusi::create([
            'id_artikel' => $request->id_artikel,
            'id_user' => Auth::user()->id_user,
        ]);

        if ($forum) {
            return redirect()
                ->route('forum-diskusi.index')
                ->with([
                    Alert::success('Berhasil', 'Forum Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Forum Gagal Ditambahkan')
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_forum)
    {
        $topiks = DB::table('tb_topik')
            ->join('users', 'tb_topik.id_user', '=', 'users.id_user')
            ->where('id_forum', $id_forum)
            ->get();
        $id = $id_forum;
        return view('forum.topic', compact('topiks', 'id'));
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
