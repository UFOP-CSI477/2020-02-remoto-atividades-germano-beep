@extends('principal')

@section('conteudo')

<form action="{{route('equipamentos.store')}}" method="post">
    @csrf
    <div name="cadastrar">

        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="nome do equipamento">
        </div>


    </div>

    <div>
        <input type="submit" value="Cadastrar" class="btn btn-success">
        <a class="btn btn-primary" href="{{route('equipamentos.index')}}">Voltar</a>
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection