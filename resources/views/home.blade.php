@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if (!auth()->check())
                    <!-- Background blureado y overlay solo para usuarios no autenticados -->
                    <div class="home-bg-blur"></div>
                    <div class="home-bg-overlay"></div>
                    <!-- Página de bienvenida para usuarios sin acceso -->
                    <div class="welcome-card position-relative mx-auto" style="z-index:2; max-width:500px;">
                        <div class="text-center">
                            <img src="{{ asset('logos/logo-tiny.svg') }}" alt="Logo Jesco" style="width:50px; margin-bottom: 1.2rem;">
                            <h1 class="fw-bold mb-2" style="font-size:2.2rem; letter-spacing:1px;">Bienvenido a Jesco</h1>
                            <h2 class="welcome-subtitle mb-3" style="font-size:1.15rem; color:#007bff; font-weight:500;">Tu gestión administrativa, más fácil y segura</h2>
                            <p class="welcome-desc mb-2">Sistema de gestión administrativa moderno y eficiente.<br>Inicia sesión para acceder a tus módulos y funcionalidades.</p>
                            <div class="row justify-content-center mb-3">
                                <div class="col-4 px-1">
                                    <div class="advantage-block py-2 px-1">
                                        <i class="bi bi-shield-lock text-primary" style="font-size:1.3rem;"></i>
                                        <div class="small mt-1">Tus datos siempre protegidos</div>
                                    </div>
                                </div>
                                <div class="col-4 px-1">
                                    <div class="advantage-block py-2 px-1">
                                        <i class="bi bi-lightning-charge text-warning" style="font-size:1.3rem;"></i>
                                        <div class="small mt-1">Acceso rápido y sin complicaciones</div>
                                    </div>
                                </div>
                                <div class="col-4 px-1">
                                    <div class="advantage-block py-2 px-1">
                                        <i class="bi bi-person-check text-success" style="font-size:1.3rem;"></i>
                                        <div class="small mt-1">Soporte para empleados IDI</div>
                                    </div>
                                </div>
                            </div>
                            <span class="idi-info d-block mb-2" style="font-size:0.95rem; color:#007bff; font-weight:500; margin-top:1.2rem; margin-bottom:0.5rem;">Si eres empleado del IDI inicia sesión</span>
                            <div class="mb-2" style="font-size:0.95rem; color:#555;">
                                <i class="bi bi-lock-fill me-1 text-secondary"></i>Tu acceso es privado y seguro
                            </div>
                            <div class="welcome-btn-outer mt-1">
                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg shadow-lg welcome-btn">
                                    <i class="bi bi-box-arrow-in-right me-1"></i> Iniciar sesión
                                </a>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row text-center g-3">
                            <div class="col-4">
                                <div class="feature-icon text-primary mb-2"><i class="bi bi-speedometer2" style="font-size:2rem;"></i></div>
                                <div class="small">Rápido y seguro</div>
                            </div>
                            <div class="col-4">
                                <div class="feature-icon text-success mb-2"><i class="bi bi-people" style="font-size:2rem;"></i></div>
                                <div class="small">Gestión de empleados</div>
                            </div>
                            <div class="col-4">
                                <div class="feature-icon text-warning mb-2"><i class="bi bi-building" style="font-size:2rem;"></i></div>
                                <div class="small">Departamentos y áreas</div>
                            </div>
                        </div>
                        <div class="mt-4 text-center d-flex justify-content-center align-items-center gap-2" style="gap:0.5rem; margin-top: 2rem;">
                            <span class="badge bg-info text-dark px-3 py-2 shadow-sm">Versión 1.0 • Actualizado {{ date('Y') }}</span>
                            <div class="welcome-btn-outer" style="display:inline-block;">
                                <a href="https://github.com/JesusAlfonzo/jesco-v1" target="_blank" class="badge bg-dark text-white px-3 py-2 shadow-sm" style="text-decoration:none; display:inline-flex; align-items:center; gap:0.4em;">
                                    <i class="bi bi-github" style="font-size:1.2em;"></i> GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Dashboard para usuarios autenticados con rol -->
                    <div class="mb-4" style="margin-top:0 !important; padding-top:0 !important;">
                        <h2 class="fw-bold" style="margin:0 !important;">¡Hola, {{ auth()->user()->name }}!</h2>
                        <p class="text-muted" style="margin-top:0 !important;">Panel de administración y estado del sistema</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">
                        <!-- Tarjetas de estadísticas -->
                        <div class="col">
                            <div class="card h-100 text-center shadow">
                                <div class="card-body">
                                    <div class="display-4 text-primary mb-2">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <h2 class="card-title mb-3">{{ $empleadosCount ?? 0 }}</h2>
                                    <p class="card-text text-muted">Empleados Registrados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 text-center shadow">
                                <div class="card-body">
                                    <div class="display-4 text-success mb-2">
                                        <i class="bi bi-building"></i>
                                    </div>
                                    <h2 class="card-title mb-3">{{ $departamentosCount ?? 0 }}</h2>
                                    <p class="card-text text-muted">Departamentos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 text-center shadow">
                                <div class="card-body">
                                    <div class="display-4 text-warning mb-2">
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <h2 class="card-title mb-3">4.8</h2>
                                    <p class="card-text text-muted">Calificación Promedio</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 text-center shadow">
                                <div class="card-body">
                                    <div class="display-4 text-danger mb-2">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <h2 class="card-title mb-3">98.3%</h2>
                                    <p class="card-text text-muted">Uptime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accesos rápidos a módulos -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <a href="{{ route('empleados.index') }}" class="btn btn-outline-primary w-100 mb-2">
                                <i class="bi bi-people me-1"></i> Empleados
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('departamentos.index') }}" class="btn btn-outline-success w-100 mb-2">
                                <i class="bi bi-building me-1"></i> Departamentos
                            </a>
                        </div>
                        <!-- Agrega más accesos según tus módulos -->
                    </div>
                    <!-- Estilos para el dashboard -->
                    <style>
                        .card { transition: all 0.3s ease; }
                        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06); }
                        .card-body .display-4 { transition: all 0.3s ease; }
                        .card:hover .card-body .display-4 { transform: scale(1.1); }
                    </style>
                @endif

            </div>
        </div>
    </div>
@endsection

        @if (!auth()->check())
        <style>
            .home-bg-blur {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-image: url('{{ asset('background/background.jpg') }}');
                background-size: cover;
                background-position: center;
                filter: blur(7px);
                z-index: 0;
            }
            .home-bg-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(255,255,255,0.45);
                z-index: 1;
            }
            .welcome-card {
                background: rgba(255,255,255,0.95);
                border-radius: 1.5rem;
                box-shadow: 0 8px 32px rgba(0,0,0,0.18);
                padding: 3.5rem 2rem 3rem 2rem;
                margin-top: 7vh;
                margin-bottom: 7vh;
            }
            .welcome-desc {
                font-size: 1rem;
                color: #444;
                font-weight: 400;
                line-height: 1.5;
            }
            .welcome-btn-outer {
                display: inline-block;
                transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            }
            .welcome-btn-outer:hover {
                transform: scale(1.08) rotate(-1.5deg);
                box-shadow: 0 8px 32px rgba(0,123,255,0.18);
            }
            .welcome-btn {
                transition: background 0.3s, color 0.3s, box-shadow 0.3s;
            }
            .welcome-btn:hover {
                background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
                color: #fff;
                box-shadow: 0 6px 24px rgba(0,123,255,0.22);
            }
            .feature-icon {
                transition: all 0.2s;
            }
            .feature-icon:hover {
                transform: scale(1.2) rotate(-5deg);
            }
            .advantage-block {
                background: rgba(245,245,255,0.7);
                border-radius: 0.7rem;
                box-shadow: 0 2px 8px rgba(0,0,0,0.07);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 70px;
            }
            .welcome-subtitle {
                font-size: 1.15rem;
                color: #007bff;
                font-weight: 500;
                margin-bottom: 0.7rem;
            }
            @media (max-width: 600px) {
                .welcome-card { padding: 1.2rem 0.5rem; }
                .welcome-card img { width: 120px !important; }
            }
        </style>
        @endif

