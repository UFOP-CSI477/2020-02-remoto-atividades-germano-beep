@extends('principal')

@section('conteudo')

<form action="{{route('equipamentos.update', $equipamento->id)}}" method="post">
    @csrf
    @method('PUT')
    @if(count($errors)> 0)
    
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach</ul>
    </div>
    @endif

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>





    <div>
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">
    </div>


    @endsection