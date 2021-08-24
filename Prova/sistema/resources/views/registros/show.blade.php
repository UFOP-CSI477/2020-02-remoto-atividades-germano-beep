@extends('administrativo')

@section('conteudo')


<div class="table-responsive mx-3">
    <table class="table-responsive table table-danger table-bordered table-hover caption-top table-striped">
        <caption class="fw-bold text-dark">Unidades</caption>
        <thead>
            <tr class="table-dark">
            <th>Id</th>
                <th>Nome da Pessoa</th>

                <th>Unidade de Saúde</th>
                <th>Vacina</th>
                <th>Dose</th>
                <th>Data</th>



            </tr>
        </thead>
        <tbody>

           

            <tr>
            <td>{{$registro->id}}</td>
                <td>{{$registro->user->name}}</td>
                
                <td>{{$registro->unidade->nome}}</td>
                <td>{{$registro->vacina->nome}}</td>
                <td>{{$registro->dose}}</td>
                <td>{{$registro->data}}</td>
                

            </tr>
            

        </tbody>

    </table>
</div>
<form name="frmDelete" action="{{route('registros.destroy', $registro->id)}}" method="POST" onsubmit="return confirm('Certeza que deseja excluir o usuário?')">
    <a class="btn btn-warning" href="{{route('registros.edit', $registro->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{route('registros.index')}}">Voltar</a>


    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

</form>


@endsection