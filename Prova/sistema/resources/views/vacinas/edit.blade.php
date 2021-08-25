@extends('administrativo')

@section('conteudo')
<div>

    <form class="bg-light mx-5" action="{{route('vacinas.update', $vacina->id)}}" method="post">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        @method('PUT')
        <h3 class="text-dark fw-bold">Editar vacina:</h3>
        <div name="cadastrar">

            <div class="form-group">
                <label for="nome">Name: </label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{$vacina->nome}}">
            </div>

            <div class="form-group">
                <label for="fabricante">Fabricante: </label>
                <input type="text" name="fabricante" id="fabricante" class="form-control" value="{{$vacina->fabricante}}">
            </div>

            <div class="form-group">
                <label for="doses">Quantidade de doses:</label>
                <input type="number" name="doses" id="doses" class="form-control" value="{{$vacina->doses}}">

            </div>
            <div class="form-group">
                <label for="doses">Quantidade de doses:</label>
                <select name="doses" id="doses" class="form-control">
                    <option value=1>1</option>
                    <option value=2>2</option>

                </select>

            </div>



        </div>

        <div>
            <input type="submit" value="Editar" class="btn btn-success">
            <a href="{{route('vacinas.index')}}" class="btn btn-primary">Voltar</a>
            <input type="reset" value="Excluir" class="btn btn-danger">

        </div>
</div>




@endsection