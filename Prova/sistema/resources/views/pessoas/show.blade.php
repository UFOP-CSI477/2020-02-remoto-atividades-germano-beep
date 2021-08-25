@extends('administrativo')

@section('conteudo')

<table class="table table-light table-bordered table-hover caption-top table-striped">
    <caption class="fw-bold text-dark">Dados do usuário</caption>
    <thead>
        <tr class="table-dark">
            <th>Id</th>
            <th>Nome</th>
            <th>Bairro</th>

            <th>Cidade</th>
            <th>Data de nascimento</th>
        </tr>
    </thead>
    <tbody>



        <tr>
            <td>{{$pessoa->id}}</td>
            <td>{{$pessoa->name}}</td>
            <td>{{$pessoa->bairro}}</td>
            <td>{{$pessoa->cidade}}</td>

            <td>{{$pessoa->data_nascimento}}</td>


        </tr>


    </tbody>

</table>

<form name="frmDelete" action="{{route('pessoas.destroy', $pessoa->id)}}" method="POST" onsubmit="return confirm('Certeza que deseja excluir pessoa?')">
    <a class="btn btn-warning" href="{{route('pessoas.edit', $pessoa->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{route('pessoas.index')}}">Voltar</a>


    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

</form>



@endsection