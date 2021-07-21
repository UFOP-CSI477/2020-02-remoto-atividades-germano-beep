@extends('principal')

@section('conteudo')

<h1>Dados do usuário</h1>

<p>Id:{{$user->id}}</p>
<p>nome:{{$user->name}}</p>
<p>email:{{$user->email}}</p>


<a class="btn btn-primary" href="{{route('users.index')}}">Voltar</a>


<form name="frmDelete" action="{{route('users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('Certeza que deseja excluir o usuário?')">
    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

</form>



@endsection