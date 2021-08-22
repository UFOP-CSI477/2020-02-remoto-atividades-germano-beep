<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Vacinação</title>

    <div class="bg-danger bg-gradient">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li>
                <a href="https://icons8.com/icon/uR76IG2xWAIk/syringe">
                    <img class="w-50" src="https://img.icons8.com/glyph-neue/64/000000/syringe.png" />
                </a>

            <li>
                <a class="btn btn-outline-light fw-bold" href="/">Área Geral</a>
            </li>

            </li>
            <li>
                <a href="" class="btn btn-outline-light fw-bold">Vacinas</a>
            </li>
            <li>
                <a href="{{route('users.index')}}" class="btn btn-outline-light fw-bold">Pessoas</a>
            </li>
            <li>
                <a href="{{route('unidades.index')}}" class="btn btn-outline-light fw-bold">Unidades</a>
            </li>


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

<footer class="py-3 bg-danger bg-gradient text-light text-center fw-bold" style="position: absolute;
 bottom: 0;
 width: 100%;"> Vaccine

</footer>

</html>