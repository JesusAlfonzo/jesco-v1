<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg bd border">
            <div class="container-fluid ">
                <a class="navbar-brand">Jesco</a>

                @if (auth()->user())
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                            style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Modulos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('connectors.compras.index') }}">Compras</a></li>
                                    <li><a class="dropdown-item" href="#">Almacen</a></li>
                                    <li><a class="dropdown-item" href="#">Productos</a></li>
                                    <li><a class="dropdown-item" href="#">Empleados</a></li>
                                    <li><a class="dropdown-item" href="#">Departamentos</a></li>
                                    <li><a class="dropdown-item" href="#">Laboratorio</a></li>
                                    <li><a class="dropdown-item" href="#">Pacientes</a></li>
                                    <li><a class="dropdown-item" href="#">Reportes</a></li>
                                    <li><a class="dropdown-item" href="{{ route('connectors.catalogo.index') }}">Catalogos</a>
                                    </li>
                                </ul>
                            </li>

                            <form class="d-flex" role="search" id="navbar-search-form" onsubmit="return buscarModulo(event)">
                                <input class="form-control me-2" type="search" placeholder="Buscar módulo..."
                                    aria-label="Search" id="navbar-search-input" />
                                <button class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                @endif
                </ul>
                <ul class="navbar-nav">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registrarse</a> {{-- modulo que debe ocultarse --}}
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Cerrar Sesion
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

    <main class="py-4">
        @yield('content')
    </main>
    </div>

    <script>
        function buscarModulo(event) {
            event.preventDefault();
            const valor = document.getElementById('navbar-search-input').value.trim().toLowerCase();

            // Diccionario de rutas por nombre de módulo
            const rutas = {
                'empleados': "{{ route('empleados.index') }}",
                'departamentos': "{{ route('departamentos.index') }}",
                'monedas': "{{ route('monedas.index') }}",
                'compras': "{{ route('connectors.compras.index') }}", // Cambia por la ruta real
                'almacen': "#",
                'productos': "#",
                'laboratorio': "#",
                'pacientes': "#",
                'reportes': "#",
                'catalogo': "{{ route('connectors.catalogo.index') }}"
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
