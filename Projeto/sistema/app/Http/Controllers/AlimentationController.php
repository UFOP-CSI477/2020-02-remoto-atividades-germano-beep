<?php

namespace App\Http\Controllers;

use App\Models\Alimentation;
use App\Http\Requests\ValidarFormAlimentationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AlimentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            // caso já exista uma semana de exercícios do usuário cadastrado
            $alimentation = Alimentation::where('user_id', Auth::user()->id)->first();
            $user = Auth::user();
            $flag = true;


            return view('alimentations.index', ['alimentation' => $alimentation, 'user' => $user]);
        } else {
            session()->flash('mensagem', 'É necessário logar');
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
            $user = Auth::user();
            return view('alimentations.create', ['user' => $user]);
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
    public function store(ValidarFormAlimentationRequest $request)
    {
        $alimentation = new Alimentation();
        $alimentation->breakfast = $request->breakfast;
        $alimentation->lunch = $request->lunch;
        $alimentation->dinner = $request->dinner;
        $alimentation->user_id = Auth::user()->id;

        $alimentation->save();


        session()->flash('mensagem', 'Cardápio cadastrado com sucesso.');
        return redirect()->route('alimentations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimentation  $alimentation
     * @return \Illuminate\Http\Response
     */
    public function show(Alimentation $alimentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimentation  $alimentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimentation $alimentation)
    {
        return view('alimentations.edit',['alimentation' => $alimentation]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimentation  $alimentation
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarFormAlimentationRequest $request, Alimentation $alimentation)
    {
        $alimentation->breakfast = $request->breakfast;
        $alimentation->lunch = $request->lunch;
        $alimentation->dinner = $request->dinner;

        $alimentation->save();

        session()->flash('mensagem','Exercício semanal atualizado.');
        return redirect()->route('alimentations.index', ['alimentation' => $alimentation]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimentation  $alimentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimentation $alimentation)
    {
        $alimentation->delete();
        session()->flash('mensagem', 'Alimentação excluída.');
        return redirect()->route('alimentations.index');

    }
}
