<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroFormRequest;
use App\Models\Registro;
use App\Models\User;
use App\Models\Unidade;
use App\Models\Vacina;
use Illuminate\Http\Request;

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
        return view('registros.index', ['registros' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name')->get();
        $unidades = Unidade::orderBy('nome')->get();
        $vacinas = Vacina::orderBy('nome')->get();

        return view('registros.create', [
            'users' => $users,
            'unidades' => $unidades,
            'vacinas' => $vacinas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroFormRequest $request)
    {
        $registro = new Registro;
        $registro->user_id = $request->user_id;
        $registro->unidade_id = $request->unidade_id;
        $registro->vacina_id = $request->vacina_id;
        $registro->data = $request->data;
        $registro->dose = $request->dose;

        $registro->save();

        return redirect()->route('registros.index')->with('alert','Registro cadastrado!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        return view('registros.show',['registro'=> $registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $users = User::orderBy('name')->get();
        $unidades = Unidade::orderBy('nome')->get();
        $vacinas = Vacina::orderBy('nome')->get();
        return view('registros.edit', 
        ['registro'=>$registro,
        'users'=> $users,
        'unidades'=>$unidades,
        'vacinas'=>$vacinas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroFormRequest $request, Registro $registro)
    {
        $registro->user_id = $request->user_id;
        $registro->unidade_id = $request->unidade_id;
        $registro->vacina_id = $request->vacina_id;
        $registro->data = $request->data;
        $registro->dose = $request->dose;

        $registro->save();

        return redirect()->route('registros.index')->with('alert','Registro editado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();

        return redirect()->route('registros.index')->with('alert','Registro deletado.');
    }
}
