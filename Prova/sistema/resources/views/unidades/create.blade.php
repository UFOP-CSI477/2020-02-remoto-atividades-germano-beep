@extends('administrativo')

@section('conteudo')
<div>

    <form class="bg-light mx-5" action="{{route('unidades.store')}}" method="post">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <h3 class="text-dark fw-bold">Cadastrar nova unidade:</h3>
        <div name="cadastrar">

            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Posto de Saúde São José">
            </div>

            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control" placeholder="São José">
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="João Monlewood">
            </div>
            <div>
                <label for="data_nascimento">Data de Fundação</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">
            </div>
           


        </div>

        <div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input type="reset" value="Limpar formulário" class="btn btn-danger">
            <a href="{{route('unidades.index')}}" class="btn btn-primary">Voltar</a>

        </div>
</div>




@endsection