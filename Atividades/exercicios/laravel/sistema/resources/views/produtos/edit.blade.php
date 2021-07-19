@extends('principal')

@section('conteudo')

<form action="{{route('produtos.update', $produto->id)}}" method="post">
    @csrf
    @method('PUT')
    <div name="cadastrar">

        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$produto->nome}}">
        </div>

        <div class="form-group">
            <label for="um">Unidade de medida: </label>
            <input type="text" name="um" id="um" class="form-control" value="{{$produto->um}}">
        </div>

    </div>

    <div>
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection 