<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>


<body>
    <div id="app">
        <!-- NAVBAR PRINCIPAL -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border @guest home-navbar-blur @endguest">
            <div class="container-fluid align-items-center d-flex">
                <!-- Logo y Marca -->
                @guest
                    <div class="w-100 d-flex justify-content-center">
                        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                            Jesco
                            <img src="{{ asset('logos/logo-tiny.svg') }}" alt="Logo Jesco"
                                style="width:28px; margin-left:8px;">
                        </a>
                    </div>
                @else
                    <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                        Jesco
                        <img src="{{ asset('logos/logo-tiny.svg') }}" alt="Logo Jesco" style="width:28px; margin-left:8px;">
                    </a>
                @endguest
                <!-- Botón hamburguesa para usuarios autenticados -->
                @if (auth()->user())
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                @endif
                <!-- Contenido del navbar -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto align-items-center navbar-nav-scroll gap-0"
                        style="--bs-scroll-height: 100px;">
                        <!-- Menú principal para usuarios autenticados -->
                        @if (auth()->user())
                            <li class="nav-item me-0">
                                <a class="nav-link active d-flex align-items-center gap-2" aria-current="page"
                                    href="{{ url('home') }}">
                                    <i class="bi bi-house-door-fill"></i> Inicio
                                </a>
                            </li>
                            <li class="nav-item dropdown ms-0">
                                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-grid-1x2-fill"></i> Modulos
                                </a>
                                <ul class="dropdown-menu align-items-center">
                                    <li><a class="dropdown-item d-flex align-items-center gap-1"
                                            href="{{ route('connectors.Administrativo.index') }}"><i
                                                class="bi bi-person-badge"></i> Administrativo</a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-1"
                                            href="{{ route('connectors.Laboratorio.index') }}"><i
                                                class="bi bi-eyedropper"></i> Laboratorio</a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-1"
                                            href="{{ route('connectors.compras.index') }}"><i
                                                class="bi bi-bag-check"></i> Compras</a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-1"
                                            href="{{ route('connectors.Almacen.index') }}"><i
                                                class="bi bi-box-seam"></i> Almacen</a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-1"
                                            href="{{ route('connectors.Ajuste-Modulos.index') }}"><i
                                                class="bi bi-sliders"></i> Ajuste de Modulos</a></li>
                                </ul>
                            </li>
                            <!-- Buscador de módulos -->
                            <form class="d-flex align-items-center ms-2" role="search" id="navbar-search-form"
                                onsubmit="return buscarModulo(event)">
                                <input class="form-control me-2" type="search" placeholder="Buscar módulo..."
                                    aria-label="Buscar" id="navbar-search-input" />
                                <button class="btn btn-outline-success d-flex align-items-center gap-1" type="submit">
                                    <i class="bi bi-search"></i>
                                    Buscar
                                </button>
                            </form>
                        @endif
                    </ul>
                    <!-- Menú de usuario (login/register o usuario autenticado) -->
                    <ul class="navbar-nav align-items-center">
                        @guest
                            <!-- Enlaces de inicio de sesión y registro eliminados del navbar -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center gap-1"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item d-flex align-items-center gap-1" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i> Cerrar Sesion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- FIN NAVBAR -->
        <!-- FIN NAVBAR -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Estilos para navbar blureado en modo visitante -->
    @guest
        <style>
            .home-navbar-blur {
                background: #fff !important;
                z-index: 10;
                position: relative;
            }
        </style>
    @endguest

    <!-- Script buscador de módulos -->
    <script>
        function buscarModulo(event) {
            event.preventDefault();
            const valor = document.getElementById('navbar-search-input').value.trim().toLowerCase();
            const rutas = {
                'compras': "{{ route('connectors.compras.index') }}",
                'almacen': "#",
                'administrativo': "#",
                'laboratorio': "#",
                'catalogo': "{{ route('connectors.Ajuste-Modulos.index') }}"
            };
            if (rutas[valor]) {
                window.location.href = rutas[valor];
            } else {
                alert('No se encontró el módulo "' + valor + '".');
            }
            return false;
        }
    </script>
</body>

</html>
