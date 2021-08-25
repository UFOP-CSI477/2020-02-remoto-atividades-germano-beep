<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\Jobs\RedisJob;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->get();
        if(Auth::check()){
            if(Auth::user()->admin == 1){

                return view('users.index', ['users' => $users]);
            }
            else{
                return redirect()->route('administrativo')->with('alert','Somente Administradores.');

            }
        }else{
            return redirect()->route('login')->with('alert','É necessário logar.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        
        $user->admin = $request->admin;

        $user->save();


        
        return redirect()->route('users.index')->with('alert','Pessoa cadastrada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        
        $user->admin = $request->admin;

        $user->save();


        
        return redirect()->route('users.index')->with('alert','Pessoa editada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        
        return redirect()->route('users.index')->with('alert','Pessoa cancelada.');
    }
}
