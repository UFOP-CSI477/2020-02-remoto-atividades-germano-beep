@extends('administrativo')

@section('conteudo')
<div>

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
                <input type="email" name="email" id="email" class="form-control" placeholder="joao@email.com">
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password">

            </div>
            
            <div class="form-group">
                <label for="admin">Administrador:</label>
                <input type="text" name="admin" id="admin" class="form-control" placeholder="0 ou 1">

            </div>




        </div>

        <div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input type="reset" value="Limpar formulário" class="btn btn-danger">
            <a href="{{route('users.index')}}" class="btn btn-primary">Voltar</a>

        </div>
</div>




@endsection