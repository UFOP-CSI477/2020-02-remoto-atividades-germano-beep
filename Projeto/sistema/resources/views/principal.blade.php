<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <title>Living better</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <div class="bg-dark bg-gradient d-grid gap-2 d-md-flex justify-content-md" role="group" aria-label="Basic outlined example">

        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="https://img.icons8.com/office/16/000000/running.png" />
            </svg>
        </a>
        <img src="https://cdn.iconscout.com/icon/free/png-64/jogging-30-1147551.png" />


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('home')}}" class="btn btn-outline-primary nav-link px-2 link-light fw-bold">Home</a></li>
            <li><a href="{{route('weeks.index')}}" class="btn btn-outline-primary nav-link px-2 link-light fw-bold">Exercícios</a></li>
            <li><a href="#" class="btn btn-outline-primary nav-link px-2 link-light fw-bold">Alimentação</a></li>

            @if(Auth::check())
            @if(Auth::user()->id == 1)
            <li><a href="{{route('users.index')}}" class="btn btn-outline-primary nav-link px-2 link-light fw-bold">Área administrativa</a></li>
            @endif
            @endif


            <li>

                @guest
                @if (Route::has('login'))

                <a class="btn btn-outline-danger fw-bold" href="{{ route('login') }}">Entrar</a>

                @endif

                @if (Route::has('register'))

                <a class="btn btn-outline-danger fw-bold" href="{{ route('register') }}">Criar nova conta</a>

                @endif
                @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="btn btn-outline-danger dropdown-toggle fw-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            </li>
        </ul>


        <!-- login e registro -->

    </div>


</head>

<body class="bg-image" style="background-image: url('https://images.pexels.com/photos/39308/runners-silhouettes-athletes-fitness-39308.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');">

    <div>
        @yield('conteudo')
    </div>


</body>
<!-- <footer class="bg-dark bg-gradient text-white text-center fw-bold" style="position: absolute;
  display: block;
  align-items: center;
  height: 2rem;
  right: 0;
  bottom:0px;
  left: 0;">Living better</footer> -->

<footer class="px-3 py-3 bg-dark bg-gradient text-center text-light" style="position: absolute;
 bottom: 0;
 width: 100%;">Living better </footer>

</html>