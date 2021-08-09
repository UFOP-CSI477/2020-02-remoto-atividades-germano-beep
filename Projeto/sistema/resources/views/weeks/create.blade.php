@extends('principal')

@section('conteudo')

<form action="{{route('weeks.store')}}" method="post">
    @csrf
    <h3>Marque os dias da semana que gostaria de exercitar:</h3>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="segunda" id="segunda" value="correr">
        <label class="form-check-label" for="segunda">Segunda</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="terca" id="terca" value="correr">
        <label class="form-check-label" for="terca">Terça</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="quarta" id="quarta" value="correr">
        <label class="form-check-label" for="quarta">Quarta</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="quinta" id="quinta" value="correr">
        <label class="form-check-label" for="quinta">Quinta</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="sexta" id="sexta" value="correr">
        <label class="form-check-label" for="sexta">Sexta</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="sabado" id="sabado" value="correr">
        <label class="form-check-label" for="sabado">Sábado</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="domingo" id="domingo" value="correr">
        <label class="form-check-label" for="domingo">Domingo</label>
    </div>
    <div class="visually-hidden form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="user_id" id="user_id" value="{{$user->id}}">
        <label class="form-check-label" for="user_id"></label>
    </div>
    


    <div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar formulário" class="btn btn-danger">

    </div>


@endsection