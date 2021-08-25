@extends('administrativo')

@section('conteudo')
<div>

    <form class="bg-light mx-5" action="{{route('registros.store')}}" method="post">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <h3 class="text-dark fw-bold">Cadastrar novo registro:</h3>
        <div name="cadastrar">

        

            <div class="form-group">
                <label for="pessoa_id">Pessoa:</label>
                <select name="pessoa_id" id="pessoa_id" class="form-control">
                    @foreach($pessoas as $u)
                        <option value="{{$u->id}}">{{$u->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="unidade_id">Unidade:</label>
                <select name="unidade_id" id="unidade_id" class="form-control">
                    @foreach($unidades as $u)
                        <option value="{{$u->id}}">{{$u->nome}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="vacina_id">Vacina:</label>
                <select name="vacina_id" id="vacina_id" class="form-control">
                    @foreach($vacinas as $v)
                        <option value="{{$v->id}}">{{$v->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="dose">Dose: </label>
                <select name="dose" id="dose" class="form-control">
                    <option value = 1 >1</option>
                    <option value = 2 >2</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" name="data" id="data" class="form-control">
            </div>
            
           


        </div>

        <div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input type="reset" value="Limpar formulário" class="btn btn-danger">
            <a href="{{route('registros.index')}}" class="btn btn-primary">Voltar</a>

        </div>
</div>




@endsection