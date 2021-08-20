@extends('principal')

@section('conteudo')

<form class="bg-light mx-5" action="{{route('alimentations.update', $alimentation->id)}}" method="post">
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
    <h3 class="text-dark fw-bold">Refeição diária:</h3>
    <p>Sempre consulte um nutricionista ao criar sua refeição diária</p>
    <div name="cadastrar">

        <div class="form-group">
            <label for="breakfast">Café da manhã: </label>
            <input type="" name="breakfast" id="breakfast" class="form-control" value="{{$alimentation->breakfast}}">
        </div>

        <div class="form-group">
            <label for="lunch">Almoço: </label>
            <input type="text" name="lunch" id="lunch" class="form-control" value="{{$alimentation->lunch}}">
        </div>

        <div class="form-group">
            <label for="dinner">Janta:</label>
            <input type="text" name="dinner" id="dinner" class="form-control" value="{{$alimentation->dinner}}">

        </div>
        
    </div>

    <div>
        <input type="submit" value="Editar" class="btn btn-success" onclick="return confirm(`ao clicar em 'ok' o cardápio será salvo`)">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">
        <a href="{{route('alimentations.index')}}" class="btn btn-primary">Voltar</a>

    </div>


    @endsection