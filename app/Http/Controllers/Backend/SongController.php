<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::paginate(9);

        return view('backend.songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works = Work::all();

        return view('backend.songs.create', compact('works'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();

            if ($request->hasFile('sample')) {
                $data['sample'] = $request->file('sample')->store('public/songs');
            }

            $song = Song::create($data);

            DB::commit();

            return view('backend.works.songs.list', ['songs' => $song->work->songs])->render();
        } catch (\Throwable $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('backend.songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();

            if ($request->hasFile('sample')) {
                $data['sample'] = $request->file('sample')->store('public/songs');
            }

            $song->update($data);

            DB::commit();

            return redirect()->route('works.edit', ['work' => $song->work])->with('status-message', 'Canción editada correctamente')->with('status', 'success');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->route('works.edit', ['work' => $song->work])
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        try {
            DB::beginTransaction();

            $song->delete();

            DB::commit();
            return view('backend.works.songs.list', ['songs' => $song->work->songs])->render();
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('works.edit', ['work', $song->work])
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }
}
