@extends('principal')

@section('conteudo')

<h1>Dados do equipamento</h1>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$equipamento->id}}</td>
            <td>{{$equipamento->nome}}</td>

        </tr>
    </tbody>
</table>



<!-- edit -->

<!-- destroy -->

<form name="frmDelete" action="{{route('equipamentos.destroy', $equipamento->id)}}" method="post" onsubmit="return confirm('Certeza que deseja excluir o compra?')">

    <a class="btn btn-warning" href="{{route('equipamentos.edit', $equipamento->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{route('equipamentos.index')}}">Voltar</a>
    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
</form>



@endsection