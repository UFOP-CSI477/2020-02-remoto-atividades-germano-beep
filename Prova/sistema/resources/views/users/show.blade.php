@extends('administrativo')

@section('conteudo')

<table class="table table-danger table-bordered table-hover caption-top table-striped">
    <caption class="fw-bold text-dark">Dados do usuário</caption>
    <thead>
        <tr class="table-dark">
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Data de nascimento</th>
            <th>Admin</th>



        </tr>
    </thead>
    <tbody>



        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->bairro}}</td>
            <td>{{$user->cidade}}</td>
            <td>{{$user->data_nascimento}}</td>
            <td>{{$user->admin}}</td>


        </tr>


    </tbody>

</table>

<form name="frmDelete" action="{{route('users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('Certeza que deseja excluir o usuário?')">
    <a class="btn btn-warning" href="{{route('users.edit', $user->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{route('users.index')}}">Voltar</a>


    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

</form>



@endsection