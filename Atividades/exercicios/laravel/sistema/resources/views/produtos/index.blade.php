@extends('principal')

@section('conteudo')


<table class="table table-bordered table-hover table-striped">
    <caption>Sistemas Web I</caption>
    <thead>
        <tr class="table-dark">
            <th>Id</th>
            <th>Nome</th>
            <th>Unidade de Medida</th>


        </tr>
    </thead>
    <tbody>

        @foreach($produtos as $p)

        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->um}}</td>

        </tr>
        @endforeach

    </tbody>

</table>
@endsection