@extends('principal')

@section('conteudo')

<form class="bg-light mx-5" action="{{route('users.store')}}" method="post">
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <h3 class="text-dark fw-bold">Cadastrar novo usuário:</h3>
    <div name="cadastrar">

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control" placeholder="João da Silva">
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" class="form-control" placeholder="joao@email.com">
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password">

        </div>
        <div class="form-group">
            <label for="admin">Administrador:</label>
            <input type="text" name="admin" id="admin" class="form-control" placeholder="0 ou 1">

        </div>


        <!-- <div class="form-group">
            <label for="admin">Administrador:</label>
            <select name="admin" id="admin" class="form-select">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div> -->

    </div>

    <div>
        <input type="submit" value="Cadastrar" class="btn btn-success" onclick="return confirm(`ao clicar em 'ok' o usuário será salvo`)">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">
        <a href="{{route('users.index')}}" class="btn btn-primary">Voltar</a>

    </div>


    @endsection