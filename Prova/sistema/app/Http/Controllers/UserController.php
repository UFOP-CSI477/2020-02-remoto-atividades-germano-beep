<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

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

        return view('users.index', ['users' => $users]);
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
        $user->bairro = $request->bairro;
        $user->cidade = $request->cidade;
        $user->data_nascimento = $request->data_nascimento;
        $user->admin = $request->admin;

        $user->save();


        session()->flash('mensagem', 'pessoa cadastrada com sucesso');
        return redirect()->route('users.index');
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
        $user->bairro = $request->bairro;
        $user->cidade = $request->cidade;
        $user->data_nascimento = $request->data_nascimento;
        $user->admin = $request->admin;

        $user->save();


        session()->flash('mensagem', 'edições de usuário salvas.');
        return redirect()->route('users.index');
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

        $users = User::orderBy('name')->get();
        session()->flash('message', 'Usuário deletado.');
        return view('users.index', ['users' => $users]);
    }
}
