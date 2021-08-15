@extends('principal')

@section('conteudo')

<script src="./validar.js"></script>

<form name="cadastrar" action="{{route('equipamentos.store')}}" method="post">
    @csrf

    @if(count($errors)> 0)
    
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach</ul>
    </div>
    @endif
    <div>

        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="nome do equipamento">
        </div>


    </div>

    <div>
        <input type="submit" value="Cadastrar" class="btn btn-success" onclick="carregarDados()">
        <a class="btn btn-primary" href="{{route('equipamentos.index')}}">Voltar</a>
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>

</form>


@endsection