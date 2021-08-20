<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WeekController extends Controller
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
            $week = Week::where('user_id', Auth::user()->id)->first();
            $user = Auth::user();
            $flag = true;

            if ($flag) {
                return view('weeks.index',['week'=>$week, 'user'=> $user]);   
                
            } else {
                if ($week != null) {
                    return view('weeks.index',['week'=>$week]);   
                } else {
                    return view('home');
                }
            }
            

            
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
            return view('weeks.create',['user' => $user]);
        } else {
            session()->flash('mensagem','É necessário logar');
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

        $user = Auth::user();
        $week = new Week();
        $week->segunda = $request->segunda;
        $week->terca = $request->terca;
        $week->quarta = $request->quarta;
        $week->quinta = $request->quinta;
        $week->sexta = $request->sexta;
        $week->sabado = $request->sabado;
        $week->domingo = $request->domingo;
        $week->user_id = $user->id;

        $week->save();


        session()->flash('mensagem', 'Exercícios semanais cadastrado com sucesso.');
        return redirect()->route('weeks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function show(Week $week)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function edit(Week $week)
    {
        return view('weeks.edit',['week' => $week]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Week $week)
    {
        $week->segunda = $request->segunda;
        $week->terca = $request->terca;
        $week->quarta = $request->quarta;
        $week->quinta = $request->quinta;
        $week->sexta = $request->sexta;
        $week->sabado = $request->sabado;
        $week->domingo = $request->domingo;
        $week->save();

        session()->flash('mensagem','Exercício semanal atualizado.');
        return redirect()->route('weeks.index', ['week' => $week]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Week  $week
     * @return \Illuminate\Http\Response
     */
    public function destroy(Week $week)
    {
        $week->delete();

        session()->flash('mensagem', 'Semana de exercícios excluída.');
        return redirect()->route('weeks.index');
    }
}
