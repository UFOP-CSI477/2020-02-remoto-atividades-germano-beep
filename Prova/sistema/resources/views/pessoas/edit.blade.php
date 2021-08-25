@extends('administrativo')

@section('conteudo')
<div>

    <form class="bg-light mx-5" action="{{route('pessoas.update', $pessoa->id)}}" method="post">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        @method('PUT')
        <h3 class="text-dark fw-bold">Editar pessoa:</h3>
        <div name="cadastrar">

            <div class="form-group">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name" class="form-control" value="{{$pessoa->name}}">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro: </label>
                <input type="bairro" name="bairro" id="bairro" class="form-control" value="{{$pessoa->bairro}}">
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control" value="{{$pessoa->cidade}}">

            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de nascimento({{$pessoa->data_nascimento}}):</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">

            </div>




        </div>

        <div>
            <input type="submit" value="Editar" class="btn btn-success">
            <input type="reset" value="Limpar formulário" class="btn btn-danger">
            <a href="{{route('pessoas.index')}}" class="btn btn-primary">Voltar</a>

        </div>
</div>




@endsection