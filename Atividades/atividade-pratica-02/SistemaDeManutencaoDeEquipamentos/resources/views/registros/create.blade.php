@extends('principal')

@section('conteudo')

<form action="{{route('registros.store')}}" method="post">
    @csrf
    <div name="cadastrar">

        <div class="form-group">
            <label for="equipamento_id">Selecione o equipamento:</label>
            <select name="equipamento_id" id="equipamento_id" class="form-control">
                @foreach($equipamentos as $e)
                <option value="3">{{$e->nome}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="user_id">Selecione o cliente:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $u)
                @if($u->admin == 0)
                <option value="{{$u->id}}">{{$u->name}}</option>
                @endif
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="escreva uma descrição...">

        </div>
        <div>
            <label for="datalimte">Data de entrega:</label>
            <input type="date" name="datalimite" id="datalimite" class="form-control">
        </div>

    </div>

    <div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection