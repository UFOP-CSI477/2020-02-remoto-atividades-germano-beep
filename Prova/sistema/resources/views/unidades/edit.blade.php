@extends('administrativo')

@section('conteudo')
<div>

    <form class="bg-light mx-5" action="{{route('unidades.update', $unidade->id)}}" method="post">
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
        <h3 class="text-dark fw-bold">Editar unidade:</h3>
        <div name="cadastrar">

            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{$unidade->nome}}">
            </div>

            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control" value="{{$unidade->bairro}}">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control" value="{{$unidade->cidade}}">
            </div>
            <div>
                <label for="data_nascimento">Data de Fundação({{$unidade->data_nascimento}})</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">
            </div>
           


        </div>

        <div>
            <input type="submit" value="Editar" class="btn btn-success">
            <input type="reset" value="Limpar formulário" class="btn btn-danger">
            <a href="{{route('unidades.index')}}" class="btn btn-primary">Voltar</a>

        </div>
</div>




@endsection