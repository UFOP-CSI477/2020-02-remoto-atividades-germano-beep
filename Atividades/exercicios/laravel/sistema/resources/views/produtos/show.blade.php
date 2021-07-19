@extends('principal')

@section('conteudo')

<h1>Dados do produto</h1>

<p>Id:{{$produto->id}}</p>
<p>nome:{{$produto->nome}}</p>
<p>Unidade de medida:{{$produto->um}}</p>

<a class="btn btn-warning" href="{{route('produtos.edit',$produto->id)}}">Editar</a>
<a class="btn btn-primary" href="{{route('produtos.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('produtos.destroy', $produto->id)}}" method="post"
    onsubmit="return confirm('Certeza que deseja excluir o produto?')">

@csrf
@method('DELETE')

<input class="btn btn-danger"type="submit" value="Excluir">
</form>


@endsection