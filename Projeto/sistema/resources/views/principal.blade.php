<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <title>Exercise app</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



</head>

<body class="bg-light py-0 px-0">


    <div class="d-grid gap-2 d-md-flex justify-content-md" role="group" aria-label="Basic outlined example">


    <img src="https://img.icons8.com/ios-glyphs/30/000000/walking--v1.png"/>

        <a href="{{route('principal')}}" class="btn btn-outline-dark">Home</a>
        <a href="{{route('weeks.index')}}" class="btn btn-outline-dark">Acessar meus
            exercícios da semana</a>








        <!-- login e registro -->

        @guest
        @if (Route::has('login'))

        <a class="btn btn-outline-primary" href="{{ route('login') }}">Entrar</a>

        @endif

        @if (Route::has('register'))

        <a class="btn btn-outline-primary" href="{{ route('register') }}">Criar nova conta</a>

        @endif
        @else
        <div class="nav-item dropdown">
            <a id="navbarDropdown" class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        @endguest


    </div>
    <div>
        @yield('conteudo')
    </div>


</body>
<footer class="p-3 mb-2 bg-dark text-white text-center">Produzido por Arthur Germano</footer>

</html>