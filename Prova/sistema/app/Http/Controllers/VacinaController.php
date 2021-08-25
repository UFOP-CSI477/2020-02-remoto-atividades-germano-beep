<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacinaFormRequest;
use App\Models\Vacina;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacinas = Vacina::orderBy('nome')->get();
        if(Auth::check()){
            return view('vacinas.index', ['vacinas' => $vacinas]);
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
        return view('vacinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacinaFormRequest $request)
    {
        Vacina::create($request->all());

        
        return redirect()->route('vacinas.index')->with('alert','Vacina cadastrada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function show(Vacina $vacina)
    {
        return view('vacinas.show',['vacina'=> $vacina]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacina $vacina)
    {
        return view('vacinas.edit',['vacina'=>$vacina]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function update(VacinaFormRequest $request, Vacina $vacina)
    {
        $vacina->fill($request->all());
        $vacina->save();
       
        return redirect()->route('vacinas.index')->with('alert','Vacina atulizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacina  $vacina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacina $vacina)
    {
        $registro = Registro::where('vacina_id', $vacina->id)->first();
        if ($registro) {
            return redirect()->route('vacinas.index')
                ->with('Integrity constraint violation', 'Não foi possível deletar esta vacina pelo fato dela estar cadastrada em um ou mais registros.');
        } else {
            $vacina->delete();
            return redirect()->route('vacinas.index')->with('alert', 'vacina deletada');
        }
    }
}
