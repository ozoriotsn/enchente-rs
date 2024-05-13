<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sb-admin/css/styles.css', 'resources/sb-admin/js/scripts.js', 'resources/sb-admin/assets/demo/chart-area-demo.js', 'resources/sb-admin/assets/demo/chart-bar-demo.js', 'resources/sb-admin/assets/demo/chart-pie-demo.js'])

    @if (app()->isLocal())
    @endif
    @livewireStyles


</head>


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Enchente RS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw">
                    </i> <span class="mt-4">Olá  {{ Auth::user()->name ?? '' }} </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Perfil</a></li>

                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li> <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>

                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Painel Administrativo</div>

                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="{{ route('admin.person.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                            Pessoas
                        </a>

                        <a class="nav-link" href="{{ route('admin.pet.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                            Animais
                        </a>


                        <a class="nav-link" href="{{ route('admin.user.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Usuários
                        </a>

                        <a class="nav-link" href="/" target="_blank">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
                            Ir para o site
                        </a>




                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{ Auth::user()->name ?? '' }}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid px-4">

                    <div class="row">
                        @yield('content')
                    </div>

                </div>
            </main>


            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; @github.com/ozoriotsn</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
