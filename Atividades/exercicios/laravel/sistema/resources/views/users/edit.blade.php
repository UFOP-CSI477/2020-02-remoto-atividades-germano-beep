@extends('principal')

@section('conteudo')

<form action="{{route('users.update', $user->id)}}" method="post">
    @csrf
    @method('PUT')

    <div name="cadastrar">

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password">

        </div>
 

    </div>

    <div>
        <input type="submit" value="Editar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection