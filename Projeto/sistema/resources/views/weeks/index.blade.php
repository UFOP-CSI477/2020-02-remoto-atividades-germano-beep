@extends('principal')

@section('conteudo')

<a class="btn btn-primary" href="">Cadastrar</a>


<table class="table">
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
@endsection