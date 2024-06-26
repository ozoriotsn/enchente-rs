<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="ozoriotsn" />

    <title>{{ $title ?? config()->get('app.name') }}</title>
    <meta name="description" content="{{ $description ?? config()->get('app.description') }}" />
    <meta name="keywords" content="{{ $keywords ?? config()->get('app.keywords') }}" />

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if (app()->isLocal())
    @endif
    @livewireStyles

</head>


<body class="d-flex flex-column h-100">

    <main>

        <nav class="navbar navbar-expand-lg"  style="background: #eee; box-shadow: 1px 1px 1px 1px #ccc;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('page.home') }}" style="position: relative; top: 5px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Bras%C3%A3o_rio_grande_do_sul.png"
                        alt="" width="40" height="40" style="position: relative; top: -10px;"
                        class="d-inline-block align-text-top">
                    Enchente RS
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample09" style="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('page.home') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://app.ospa.place/sos-rs" target="_blank">Mapa de Abrigos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://sos-rs.com/" target="_blank">SOS Rio Grande do Sul</a>
                        </li>

                        <li class="nav-item">
                            <a href="https://www.google.com/maps/d/u/0/viewer?hl=pt-BR&ll=-29.941084809548254%2C-51.21041786334941&z=12&mid=1ZlKA__gK8tH-WY6mbDeQzltsiwao7Q8" class="nav-link" target="_blank">Estradas</a>

                        </li>


                        <li class="nav-item">
                            <a href="https://abrigars.com.br/" class="nav-link" target="_blank">Abrigos</a>

                        </li>


                        <li class="nav-item">
                            <a href="https://bento.me/ajudars" class="nav-link" target="_blank">Ajuda</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.terms') }}" >Termos de Uso</a>
                        </li>


                        <li class="nav-item">

                            <div class="dropdown">
                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-plus"></i> Cadastrar
                                </a>

                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('person.create') }}">Pessoas Resgatadas</a></li>
                                  <li><a class="dropdown-item" href="{{ route('pet.create') }}">Animais Resgatados</a></li>
                                  <li><a class="dropdown-item" href="{{ route('pet.create') }}?donation=1">Animais para doação</a></li>
                                </ul>
                              </div>
                        </li>



                    </ul>

                </div>
            </div>
        </nav>



        <div class="container-fluid px-4" style="margin-top: 1em;" id="wrap">

            <div class="row">
                @yield('content')
            </div>
        </div>


        <footer class="footer  py-3 ">
            <div class="container">
                <span class="text-body-secondary">copyright @ 2024 by <a href="https://linkme.bio/ozoriotsn">ozoriotsn</a>
                </span>
            </div>
        </footer>


    </main>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    @livewireScripts



</body>

</html>
