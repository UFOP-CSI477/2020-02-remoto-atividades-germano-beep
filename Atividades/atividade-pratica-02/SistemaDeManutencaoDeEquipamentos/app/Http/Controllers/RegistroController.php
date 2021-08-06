<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::orderBy('id')->get();
        $user = Auth::user();

        if (Auth::check()) {
            return view('registros.index', ['registros' => $registros], ['user' => $user]);
        } else {
            session()->flash('mensagem', 'necessário fazer login');
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

        $equipamentos = Equipamento::orderBy('nome')->get();
        $users = User::orderBy('name')->get();
        if (Auth::check()) {
            if (Auth::user()->admin == 1) {
                return view('registros.create', ['equipamentos' => $equipamentos, 'users'=> $users]);
            } else {
                session()->flash('mensagem', 'Não autorizado.');
                return redirect()->route('principal');
            }
        } else {
            session()->flash('mensagem', 'É necessário logar');
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registro::create($request->all());
        session()->flash('mensgem','Registro cadastrado');
        return redirect()->route('registros.idex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
