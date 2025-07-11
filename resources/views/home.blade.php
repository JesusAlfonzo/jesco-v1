@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if (!auth()->check())
                    <!-- Página de bienvenida para usuarios sin acceso -->
                    <div class="text-center py-5">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Jesco" style="width:120px;">
                        <h1 class="mt-4 mb-3">Bienvenido a Jesco</h1>
                        <p class="lead mb-4">Sistema de gestión administrativa. Inicia sesión para acceder a tus módulos y funcionalidades.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Iniciar sesión
                        </a>
                    </div>
                @else
                    <!-- Dashboard para usuarios autenticados con rol -->
                    <div class="mb-4">
                        <h2 class="fw-bold">¡Hola, {{ auth()->user()->name }}!</h2>
                        <p class="text-muted">Panel de administración y estado del sistema</p>
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
