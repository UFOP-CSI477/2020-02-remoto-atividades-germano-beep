@extends('principal')

@section('conteudo')

<form action="{{route('compras.update', $compra->id)}}" method="post">
    @csrf
    @method('PUT')


    <div class="form-group">
        <label for="user_id">Comprador:</label>
        <select name="user_id" id="user_id" class="form-select">
            @foreach($users as $u)

            <option value="{{$u->id}}" @if($compra->user_id == $u->id)
                selected
                @endif
                >{{$u->name}}</option>

            @endforeach

        </select>

        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id" class="form-select">

            @foreach($produtos as $p)

            <option value="{{$p->id}}" @if($compra->produto_id == $p->id)
                selected
                @endif
                >{{$p->nome}}</option>

            @endforeach

        </select>

    </div>





    <div>
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">
        .
    </div>


    @endsection