@extends('administrativo')

@section('conteudo')





<div class="table-responsive mx-3">
    <table class="table-responsive table table-danger table-bordered table-hover caption-top table-striped">
        <caption class="fw-bold text-dark">Vacinas</caption>
        <thead>
            <tr class="table-dark">
                <th>Id</th>
                <th>Nome</th>

                <th>Fabricante</th>
                <th>Doses</th>



            </tr>
        </thead>
        <tbody>



            <tr>
                <td>{{$vacina->id}}</td>
                <td>{{$vacina->nome}}</td>

                <td>{{$vacina->fabricante}}</td>
                <td>{{$vacina->doses}}</td>

            </tr>


        </tbody>

    </table>

    <form name="frmDelete" action="{{route('vacinas.destroy', $vacina->id)}}" method="POST" onsubmit="return  confirm('Certeza que deseja excluir a vacina?')">
        <a href="{{route('vacinas.edit', $vacina->id)}}" class="btn btn-warning">Editar</a>
        <a href="{{route('vacinas.index')}}" class="btn btn-primary">Voltar</a>

        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir" class="btn btn-danger">
    </form>
</div>

@endsection