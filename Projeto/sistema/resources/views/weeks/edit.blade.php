@extends('principal')

@section('conteudo')

<form class="text-light"action="{{route('weeks.update', $week->id)}}" method="post">

    @csrf
    @method('PUT')

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



    <div>

        <input type="submit" value="Editar" class="btn btn-success">
        <a class="btn btn-primary" href="{{route('weeks.index')}}">Voltar</a>

    </div>
</form>




@endsection