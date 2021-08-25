@extends('administrativo')

@section('conteudo')

<a class="btn btn-primary" href="{{route('unidades.create')}}">Cadastrar</a>



<div class="table-responsive mx-3">
    <table class="table-responsive table table-light table-bordered table-hover caption-top table-striped">
        <caption class="fw-bold text-dark">Unidades</caption>
        <thead>
            <tr class="table-dark">
                <th>Id</th>
                <th>Nome</th>

                <th>Bairro</th>
                <th>Cidade</th>
                <th>Data de nascimento</th>

                <th>Exibir</th>


            </tr>
        </thead>
        <tbody>



            <tr>
                <td>{{$unidade->id}}</td>
                <td>{{$unidade->nome}}</td>

                <td>{{$unidade->bairro}}</td>
                <td>{{$unidade->cidade}}</td>
                <td>{{$unidade->data_nascimento}}</td>

                <td><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </a></td>

            </tr>


        </tbody>

    </table>
</div>
<form name="frmDelete" action="{{route('unidades.destroy', $unidade->id)}}" method="POST" onsubmit="return confirm('Certeza que deseja excluir o Unidade?')">
    <a class="btn btn-warning" href="{{route('unidades.edit', $unidade->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{route('unidades.index')}}">Voltar</a>


    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

</form>


@endsection