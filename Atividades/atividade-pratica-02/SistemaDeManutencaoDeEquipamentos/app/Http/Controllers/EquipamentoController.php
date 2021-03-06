<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipamentoValidacaoRequest;
use App\Models\Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $equipamentos = Equipamento::orderBy('nome')->get();
            $user = Auth::user();
            return view('equipamentos.index', ['equipamentos' => $equipamentos, 'user'=>$user]);
    
        } else {
            session()->flash('mensagem','Necessário logar');
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
        if (Auth::check()) {
            if (Auth::user()->admin == 1) {
                return view('equipamentos.create');
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
    public function store(EquipamentoValidacaoRequest $request)
    {
        Equipamento::create($request->all());
        session()->flash('mensagem', 'Equipamento cadastrado com sucesso');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {   

        if (Auth::check()) {
            if (Auth::user()->admin == 1) {
                return view('equipamentos.show', ['equipamento' => $equipamento]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        return view('equipamentos.edit', ['equipamento' => $equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(EquipamentoValidacaoRequest $request, Equipamento $equipamento)
    {
        $equipamento->fill($request->all());
        $equipamento->save();

        session()->flash('mensagem', 'Equipamento atualizado');

        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        $equipamento->delete();
        session()->flash('mensagem', 'Equipamento excluído.');
        return redirect()->route('equipamentos.index');
    }
}
