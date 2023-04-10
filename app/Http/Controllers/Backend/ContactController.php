<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    private $pagination = 10;

    public function count()
    {
        return Contact::where('is_read', 0)->get()->count();
    }

    public function pagination(Request $request, $page)
    {
        $user = auth()->user();
        $contacts = Contact::orderByDesc('created_at')->paginate($this->pagination, ['*'], 'page', $page);

        return view('backend.pages.contacts.index', compact('user', 'contacts'))->render();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $contacts = Contact::orderByDesc('created_at')->paginate($this->pagination);

        return view('backend.pages.contacts.index', compact('user', 'contacts'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        if (!$contact->is_read) {
            $contact->is_read = 1;
            $contact->save();
        }

        $user = auth()->user();

        return view('backend.pages.contacts.show', compact('user', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        try {
            DB::beginTransaction();

            $contact->delete();

            DB::commit();
            return redirect('contacts.index')
                ->with('status-message', 'Contacto borrado')->with('status', 'success');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('contacts.index')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }
}
