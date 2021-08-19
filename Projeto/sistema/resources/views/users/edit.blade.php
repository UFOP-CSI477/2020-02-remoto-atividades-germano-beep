@extends('principal')

@section('conteudo')

<form class="bg-light mx-5" action="{{route('users.update', $user->id)}}" method="post">
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
    <div name="cadastrar">
        <h3 class="text-dark fw-bold">Editar usuário:</h3>

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="senha">

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
        <input type="submit" value="Editar" class="btn btn-success" onclick="return confirm(`ao clicar em 'ok' o usuário será editado`)">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">
        <a href="{{route('users.show', $user->id)}}" class="btn btn-primary">Voltar</a>

    </div>


    @endsection