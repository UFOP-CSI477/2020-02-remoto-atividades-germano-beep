@extends('principal')

@section('conteudo')

<form class="bg-light mx-5" action="{{route('alimentations.store')}}" method="post">
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <h3 class="text-dark fw-bold">Refeição diária:</h3>
    <p>Sempre consulte um nutricionista ao criar sua refeição diária</p>
    <div name="cadastrar">

        <div class="form-group">
            <label for="breakfast">Café da manhã recomendado: </label>
            <input type="" name="breakfast" id="breakfast" class="form-control" value="2 fatias de pão integral, 1 fatia de queijo branco ou cottage, 1 fatia de peito de peru, 1 banana, 1 copo pequeno de suco.">
        </div>

        <div class="form-group">
            <label for="lunch">Almoço recomendado: </label>
            <input type="text" name="lunch" id="lunch" class="form-control" value="Peixe grelhado, arroz branco, feijão, salada de rúcula.">
        </div>

        <div class="form-group">
            <label for="dinner">Janta recomendada:</label>
            <input type="text" name="dinner" id="dinner" class="form-control" value="Frango cozido, arroz branco, feijão, salada de alface.">

        </div>
        


        <!-- <div class="form-group">
            <label for="admin">Administrador:</label>
            <select name="admin" id="admin" class="form-select">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div> -->

    </div>

    <div>
        <input type="submit" value="Cadastrar" class="btn btn-success" onclick="return confirm(`ao clicar em 'ok' o cardápio será salvo`)">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">
        <a href="{{route('alimentations.index')}}" class="btn btn-primary">Voltar</a>

    </div>


    @endsection