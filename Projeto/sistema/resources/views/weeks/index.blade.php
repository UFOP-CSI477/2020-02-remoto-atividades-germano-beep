@extends('principal')

@section('conteudo')

<!-- @if($user->admin == 1)
  <a class="btn btn-primary" href="">Cadastrar</a>
@endif -->


@if($week != null)
<div class="mx-3">
  <table class=" table table-dark table-hover caption-top text-light table-striped">
    <caption class="fw-bold text-white">Exercícios semanais</caption>
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
  <form action="{{route('weeks.destroy', $week->id)}}" method="post" onsubmit="return confirm('deseja mesmo excluir?')">
    <a class="btn btn-warning" href="{{route('weeks.edit', $week->id)}}">Editar</a>
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Excluir" onsubmit="return confirm('Certeza que deseja excluir?')">

  </form>

  @endif

  @if($week == null)

  <a class="btn btn-success" href="{{route('weeks.create')}}">Criar nova rotina de exercícios</a>

  @endif
</div>



@endsection