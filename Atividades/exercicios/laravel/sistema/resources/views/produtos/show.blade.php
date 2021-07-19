@extends('principal')

@section('conteudo')

<h1>Dados do produto</h1>

<p>Id:{{$produto->id}}</p>
<p>nome:{{$produto->nome}}</p>
<p>Unidade de medida:{{$produto->um}}</p>

<a class="btn btn-primary"href="{{route('produtos.index')}}">Voltar</a>


@endsection