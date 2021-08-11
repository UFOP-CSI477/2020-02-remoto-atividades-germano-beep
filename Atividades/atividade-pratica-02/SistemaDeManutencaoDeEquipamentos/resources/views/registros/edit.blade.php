@extends('principal')

@section('conteudo')

<form action="{{route('registros.update', $registro->id)}}" method="post">
    @csrf
    @method('PUT')
    <div name="cadastrar">

        <div class="form-group">
            <label for="equipamento_id">Selecione o equipamento:</label>
            <select name="equipamento_id" id="equipamento_id" class="form-control">
                @foreach($equipamentos as $e)

                @if($registro->equipamento->id == $e->id)

                <option selected value="{{$e->id}}">{{$e->nome}}</option>
                @else
                <option value="{{$e->id}}">{{$e->nome}}</option>
                @endif

                @endforeach

            </select>

        </div>

        <div class="form-group">
            <label for="user_id">Selecione o cliente:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $u)

                @if($u->admin == 0)

                @if($registro->user->id == $u->id)
                <option selected value="{{$u->id}}">{{$u->name}}</option>
                @else
                <option value="{{$u->id}}">{{$u->name}}</option>

                @endif

                @endif

                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{$registro->descricao}}">

        </div>
        <div>
            <label for="datalimte">Data de entrega:</label>
            <input type="date" name="datalimite" id="datalimite" class="form-control" value="$requisito->datalimite">
        </div>

    </div>

    <div>
        <input type="submit" value="Editar" class="btn btn-success">
        <a class="btn btn-primary" href="{{route('registros.index')}}">Voltar</a>

        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


    @endsection