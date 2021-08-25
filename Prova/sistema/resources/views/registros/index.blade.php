@extends('administrativo')

@section('conteudo')

<a class="btn btn-primary" href="{{route('registros.create')}}">Cadastrar</a>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif

<div class="table-responsive mx-3">
    <table class="table-responsive table table-danger table-bordered table-hover caption-top table-striped">
        <caption class="fw-bold text-dark">registros</caption>
        <thead>
            <tr class="table-dark">
                <th>Id</th>
                <th>Nome da Pessoa</th>

                <th>Unidade de Saúde</th>
                <th>Vacina</th>
                <th>Dose</th>
                <th>Data</th>

                <th>Exibir</th>


            </tr>
        </thead>
        <tbody>

       
            @foreach($registros as $r)

            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->pessoa->name}}</td>
                
                <td>{{$r->unidade->nome}}</td>
                <td>{{$r->vacina->nome}}</td>
                <td>{{$r->dose}}</td>
                <td>{{$r->data}}</td>
                
                <td><a href="{{route('registros.show', $r->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </a></td>

            </tr>
            @endforeach

        </tbody>

    </table>
</div>

@endsection