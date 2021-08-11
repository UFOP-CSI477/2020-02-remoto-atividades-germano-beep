@extends('principal')

@section('conteudo')
<a href="{{route('equipamentos.index')}}" class="btn btn-warning">Equipamentos</a>
<a href="{{route('registros.index')}}" class="btn btn-warning">Manutenções</a>
@endsection