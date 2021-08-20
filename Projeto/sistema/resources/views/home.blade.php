@extends('principal')

@section('conteudo')
<ol class="ms-5 bg-transparent text-light fw-bold shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Benefícios de praticar exercícios físicos:</h3>
    <li>Exercício ajuda a diminuir e controlar o peso.</li>
    <li>Diminui o risco de doenças no coração, pressão alta, osteoporose, diabetes e obesidade.</li>
    <li>Melhora os níveis de colesterol sanguíneo.</li>
    <li>Aumenta a resistência muscular.</li>
    <li>Exercício traz bem-estar mental e ajuda a tratar a depressão.</li>
</ol>
<ol class="ms-5 bg-transparent text-light fw-bold shadow-lg p-3 mb-5 bg-white rounded">
    <h3>Benefícios de uma boa alimentação:</h3>
    <li>Põe mais energia na sua rotina.</li>
    <li>Previne doenças.</li>
    <li>Favorece a qualidade do sono.</li>
    <li>Aumenta a capacidade de concentração.</li>
    <li>Retarda o envelhecimento.</li>
</ol>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection