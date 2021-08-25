<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaFormRequest;
use App\Models\Pessoa;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::orderBy('name')->get();
        if (Auth::check()) {
            return view('pessoas.index', ['pessoas' => $pessoas]);
        } else {
            return redirect()->route('login')->with('alert', 'É necessário logar.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaFormRequest $request)
    {
        Pessoa::create($request->all());

        return redirect()->route('pessoas.index')->with('alert', 'Pessoa cadastrada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show', ['pessoa' => $pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', ['pessoa' => $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaFormRequest $request, Pessoa $pessoa)
    {
        $pessoa->fill($request->all());
        $pessoa->save();
        return redirect()->route('pessoas.index')->with('alert', 'Pessoa editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $registro = Registro::where('pessoa_id', $pessoa->id)->first();
        if ($registro) {
            return redirect()->route('pessoas.index')
                ->with('Integrity constraint violation', 'Não foi possível deletar esta pessoa pelo fato dela estar cadastrada em ou mais registros.');
        } else {
            $pessoa->delete();
            return redirect()->route('pessoas.index')->with('alert', 'Pessoa deletada');
        }
    }
}
