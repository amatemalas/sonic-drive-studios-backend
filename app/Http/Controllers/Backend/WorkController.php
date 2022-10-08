<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    private $pagination = 10;

    public function pagination(Request $request, $page)
    {
        $user = auth()->user();
        $works = Work::paginate($this->pagination, ['*'], 'page', $page);

        return view('backend.works.index', compact('user', 'works'))->render();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate($this->pagination);

        return view('backend.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.works.create');
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

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('public');
            }

            $work = Work::create($data);

            DB::commit();

            return redirect()->route('works.edit', compact('work'))->with('status-message', 'Trabajo creado')->with('status', 'success');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('works.create')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        $available = Song::doesntHave('work')->get();
        return view('backend.works.edit', compact('work', 'available'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        try {
            $data = $request->all();

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('public');
            }

            $work->update($data);

            return redirect()->route('works.index')->with('status-message', 'Trabajo editado correctamente')->with('status', 'success');

        } catch (\Exception $e) {
            return redirect()->route('works.edit', ['work' => $work])
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        try {
            DB::beginTransaction();

            $work->delete();

            DB::commit();

            return redirect()->route('works.index')->with('status-message', 'Trabajo borrado correctamente')->with('status', 'success');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('works.index')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }
}
