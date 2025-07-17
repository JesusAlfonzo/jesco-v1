@extends('layouts.app')

@section('template_title')
    Ajustes de Módulos
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="mb-2 fw-bold text-primary">Ajustes de Módulos</h2>
        <p class="text-muted mb-4">En esta sección puedes configurar los módulos principales del sistema, como monedas, métodos de pago, impuestos, roles, tasas de cambio y reportes. Utiliza cada opción para personalizar el funcionamiento de la plataforma según las necesidades de tu organización.</p>
        <hr class="mb-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Monedas -->
            <div class="col">
                <a href="{{ route('monedas.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-currency-exchange text-warning mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Monedas</h5>
                            <p class="card-text text-muted">Configura y administra las monedas del sistema.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Métodos de Pago -->
            <div class="col">
                <a href="{{ route('metodo-pagos.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-credit-card text-info mb-2" style="font-size:2.8rem;"></i>
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
                            <i class="bi bi-percent text-danger mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Impuestos</h5>
                            <p class="card-text text-muted">Gestiona los tipos de impuestos del sistema.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Roles -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-person-badge text-secondary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Roles</h5>
                            <p class="card-text text-muted">Gestiona los roles y permisos de los usuarios.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Tasa de Cambios -->
            <div class="col">
                <a href="{{ route('tasa-cambios.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-graph-up-arrow text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Tasa de Cambios</h5>
                            <p class="card-text text-muted">Consulta y administra las tasas de cambio de monedas.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Reportes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-bar-chart-line text-success mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Reportes</h5>
                            <p class="card-text text-muted">Genera y visualiza reportes del sistema.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
