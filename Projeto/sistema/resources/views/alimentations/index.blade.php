@extends('principal')

@section('conteudo')

<!-- @if($user->admin == 1)
  <a class="btn btn-primary" href="">Cadastrar</a>
@endif -->


@if($alimentation != null)
<div class="mx-3">
    <table class=" table table-dark table-hover caption-top text-light table-striped table-bordered">
        <caption class="fw-bold text-white">Alimentação diária</caption>
        <tbody>
            <tr>
                <th scope="row">Café da manhã</th>
                <td>{{$alimentation->breakfast}}</td>

            </tr>
            <tr>
                <th scope="row">Almoço</th>
                <td>{{$alimentation->lunch}}</td>

            </tr>
            <tr>
                <th scope="row">Janta</th>
                <td>{{$alimentation->dinner}}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{route('alimentations.destroy', $alimentation->id)}}" method="post" onsubmit="return confirm('deseja mesmo excluir?')">
        <a class="btn btn-warning" href="{{route('alimentations.edit', $alimentation->id)}}">Editar</a>
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Excluir" onsubmit="return confirm('Certeza que deseja excluir?')">

    </form>

    @endif

    @if($alimentation == null)

    <a class="btn btn-success" href="{{route('alimentations.create')}}">Criar plano alimentar</a>

    @endif
</div>



@endsection