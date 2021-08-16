@extends('principal')

@section('conteudo')

<!-- @if($user->admin == 1)
  <a class="btn btn-primary" href="">Cadastrar</a>
@endif -->


@if($week != null)
<a class="btn btn-warning" href="{{route('weeks.edit', $week->id)}}">Editar semana de exercícios</a>

<table class="table caption-top">
  <caption>Exercícios semanais</caption>
  <tbody>
    <tr>
      <th scope="row">Segunda</th>
      <td>{{$week->segunda}}</td>

    </tr>
    <tr>
      <th scope="row">Terça</th>
      <td>{{$week->terca}}</td>

    </tr>
    <tr>
      <th scope="row">Quarta</th>
      <td>{{$week->quarta}}</td>
    </tr>
    <tr>
      <th scope="row">Quinta</th>
      <td>{{$week->quinta}}</td>
    </tr>
    <tr>
      <th scope="row">Sexta</th>
      <td>{{$week->sexta}}</td>
    </tr>
    <tr>
      <th scope="row">Sábado</th>
      <td>{{$week->sabado}}</td>
    </tr>
    <tr>
      <th scope="row">Domingo</th>
      <td>{{$week->domingo}}</td>
    </tr>
  </tbody>
</table>

@endif

@if($week == null)

<a class="btn btn-success" href="{{route('weeks.create')}}">Crie sua nova rotina de exercícios semanais aqui</a>

@endif


@endsection