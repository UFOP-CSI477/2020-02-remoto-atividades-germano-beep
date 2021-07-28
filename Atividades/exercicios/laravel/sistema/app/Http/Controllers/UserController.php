<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){

            if(Auth::user()->admin == 1){
                $users = User::orderBy('name')->get();
                return view('users.index',['users'=>$users]);

            }else{
                session()->flash('mensagem','Somente administradores');
                return redirect()->route('principal');
            }
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
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
    public function store(Request $request)
    {
        User::create($request->all());
        session()->flash('mensagem', 'Usuário cadastrado com sucesso!!!');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::check()){

            if(Auth::user()->admin == 1){
                return view('users.show', ['user'=>$user]);

            }else{
                session()->flash('mensagem','Somente administradores');
                return redirect()->route('principal');
            }
        }else{
            session()->flash('mensagem', 'Operação não permitida');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       return view('users.edit',['user' => $user]);   
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
        $user->fill($request->all());
        $user->save();
        
        session()->flash('mensagem', 'Usuário atualizado com sucesso');

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('mensagem','Usuário excluído com sucesso');
        return redirect()->route('users.index');
    }
}
