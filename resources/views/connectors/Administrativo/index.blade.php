@extends('layouts.app')

@section('template_title')
    Módulo Administrativo
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="fw-bold text-primary">Modulos Administrativo</h2>
        <p class="text-muted" style="margin-top:0 !important;">Gestiona los módulos administrativos de la empresa.</p>
        <hr class="mb-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Departamentos -->
            <div class="col">
                <a href="{{ route('departamentos.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-building text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Departamentos</h5>
                            <p class="card-text text-muted">Administra los departamentos de la empresa.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Empleados -->
            <div class="col">
                <a href="{{ route('empleados.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-people text-success mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Empleados</h5>
                            <p class="card-text text-muted">Gestión de empleados de la organización.</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Tarjeta: Areas -->
            <div class="col">
                <a href="{{ route('areas.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-diagram-3 text-danger mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Areas</h5>
                            <p class="card-text text-muted">Gestiona las áreas de la empresa.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Agrega más tarjetas según tus módulos -->
        </div>
    </div>
@endsection
