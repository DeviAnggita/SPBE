<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
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
        $this->validate($request, [
            'id_forum' => 'required',
            'judul_topik' => 'required',
        ]);

        $forum = Topic::create([
            'id_forum' => $request->id_forum,
            'id_user' => Auth::user()->id_user,
            'judul_topik' => $request->judul_topik,
        ]);

        if ($forum) {
            return redirect()
                ->route('forum-diskusi.show', [$request->id_forum])
                ->with([
                    Alert::success('Berhasil', 'Topic Berhasil Ditambahkan')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Topic Gagal Ditambahkan')
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_topik)
    {
        $komentars = DB::table('tb_komentar')
            ->join('users', 'tb_komentar.id_user', '=', 'users.id_user')
            ->where('id_topik', $id_topik)
            ->get();
        $id = $id_topik;
        return view('forum.komentar', compact('komentars', 'id'));
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
