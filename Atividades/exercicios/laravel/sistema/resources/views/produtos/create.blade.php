@extends('principal')

@section('conteudo')

<form action="{{route('produtos.store')}}" method="post">
    @csrf
    <div name="cadastrar">

        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="nome do produto">
        </div>

        <div class="form-group">
            <label for="um">Unidade de medida: </label>
            <input type="text" name="um" id="um" class="form-control" placeholder="unidade de medida do produto">
        </div>

    </div>

    <div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection