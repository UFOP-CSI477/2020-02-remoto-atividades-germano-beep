<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Vacinação</title>

    <div class="bg-light shadow-lg bg-gradient">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item col-6 col-md-auto">
                <a href="https://icons8.com/icon/uR76IG2xWAIk/syringe">
                    <img class="w-50" src="https://img.icons8.com/glyph-neue/64/000000/syringe.png" />
                </a>


            </li>
            <li>
                <a href="" class="nav-link p-2 fw-bold">Área Geral</a>
            </li>
            <li>
                <a class="nav-link p-2 fw-bold" href="./administrativo.blade.php" class="btn btn-outline-light fw-bold">Área Administrativa</a>
            </li>
            @guest
    @if (Route::has('login'))

    <a class="btn btn-outline-primary" href="{{ route('login') }}">Entrar</a>

    @endif

    @if (Route::has('register'))

    <a class="btn btn-outline-primary" href="{{ route('register') }}">Criar nova conta</a>

    @endif
    @else
    <!-- <div class="nav-item dropdown"> -->
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
    <!-- </div> -->
    @endguest

        </ul>
    </div>
</head>

<body style="background-image: url('https://images.pexels.com/photos/3952241/pexels-photo-3952241.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    position: relative;
    height: 100vh;
    width: 100vw;
    background-size: cover;">
    @yield('conteudo')
</body>

<!-- <footer class="bg-danger bg-gradient text-light text-center fw-bold" style="position: absolute;
 bottom: 0;
 width: 100%;"> Vaccine

</footer> -->

</html>