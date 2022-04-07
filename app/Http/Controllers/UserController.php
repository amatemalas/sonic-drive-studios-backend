<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        return view('backend.profile', compact('user'));
    }

    public function settings()
    {
        return view('backend.settings');
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {

            DB::beginTransaction();

            $request->validate([
                'email' => 'required|email',
            ]);

            $data = $request->all();

            if ($data['password'] && !$data['confirm_password']) {
                throw new \Exception('Por favor, confirme la contraseña');
            }

            if ($data['password'] && $data['confirm_password']) {
                if ($data['password'] !== $data['confirm_password']) {
                    throw new \Exception('Los campos de contraseña no coinciden');
                }

                $data['password'] = bcrypt($data['password']);
                unset($data['confirm_password']);

            }

            if (!$data['password']) {
                unset($data['password']);
            }

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('public');
            }


            $user->update($data);

            DB::commit();

            return redirect("profile")->with('status-message', 'Usuario editado')->with('status', 'success');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('profile')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
