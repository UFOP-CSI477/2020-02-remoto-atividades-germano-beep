@extends('principal')

@section('conteudo')

<form action="{{route('compras.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="user_id">Comprador:</label>
        <select name="user_id" id="user_id" class="form-select">

            @foreach($users as $u)

            <option  value="{{$u->id}}">{{$u->name}}</option>

            @endforeach

        </select>

        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id" class="form-select" id="">

            @foreach($produtos as $p)

            <option  value="{{$p->id}}">{{$p->nome}}</option>

            @endforeach

        </select>

    </div>





    <div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection