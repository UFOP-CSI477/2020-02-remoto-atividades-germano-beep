@extends('administrativo')

@section('conteudo')
<div>

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
        <h3 class="text-dark fw-bold">Editar usuário:</h3>
        <div name="cadastrar">

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
                <input type="password" name="password" id="password" class="form-control" placeholder="password">

            </div>
            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control" value="{{$user->bairro}}">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control" value="{{$user->cidade}}">
            </div>
            <div>
                <label for="data_nascimento">Data de Nascimento: {{$user->data_nascimento}}</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">
            </div>
            <div class="form-group">
                <label for="admin">Administrador:</label>
                <input type="text" name="admin" id="admin" class="form-control" value="{{$user->admin}}">

            </div>




        </div>

        <div>
            <input type="submit" value="Editar" class="btn btn-success">
            <input type="reset" value="Limpar formulário" class="btn btn-danger">
            <a href="{{route('users.show', $user->id)}}" class="btn btn-primary">Voltar</a>

        </div>
</div>




@endsection