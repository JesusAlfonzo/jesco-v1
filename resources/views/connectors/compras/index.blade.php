@extends('layouts.app')

@section('template_title')
    Catálogo de Módulos
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="mb-4 fw-bold text-primary">Catálogo de Módulos</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Proveedores -->
            <div class="col">
                <a href="{{ route('proveedores.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-building fa-2x text-primary mb-2"></i>
                            <h5 class="card-title">Proveedores</h5>
                            <p class="card-text text-muted">Administra los proveedores de la empresa.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Empleados -->
            <div class="col">
                <a href="{{ route('empleados.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-2x text-success mb-2"></i>
                            <h5 class="card-title">Empleados</h5>
                            <p class="card-text text-muted">Gestión de empleados de la organización.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Monedas -->
            <div class="col">
                <a href="{{ route('monedas.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-coins fa-2x text-warning mb-2"></i>
                            <h5 class="card-title">Monedas</h5>
                            <p class="card-text text-muted">Configura las monedas del sistema.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Métodos de Pago -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-credit-card fa-2x text-info mb-2"></i>
                            <h5 class="card-title">Métodos de Pago</h5>
                            <p class="card-text text-muted">Administra los métodos de pago disponibles.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Impuestos -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-percentage fa-2x text-danger mb-2"></i>
                            <h5 class="card-title">Impuestos</h5>
                            <p class="card-text text-muted">Gestiona los tipos de impuestos del sistema.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Agrega más tarjetas según tus módulos -->
        </div>
    </div>
@endsection