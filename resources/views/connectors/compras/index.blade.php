@extends('layouts.app')

@section('template_title')
    Módulo de Compras
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="mb-4 fw-bold text-primary">Módulo de Compras</h2>
        <p class="text-muted mb-4">Gestiona todos los procesos relacionados con compras: solicitudes, cotizaciones, proveedores, órdenes de compra, recepciones y conciliaciones. Utiliza cada módulo para optimizar y controlar el ciclo de compras de tu organización.</p>
        <hr class="mb-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Solicitudes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-clipboard-data text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Solicitudes</h5>
                            <p class="card-text text-muted">Gestiona las solicitudes de compra realizadas por los usuarios.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Cotizaciones -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-receipt text-success mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Cotizaciones</h5>
                            <p class="card-text text-muted">Administra y revisa las cotizaciones recibidas de proveedores.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Proveedores -->
            <div class="col">
                <a href="{{ route('proveedores.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-people text-info mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Proveedores</h5>
                            <p class="card-text text-muted">Administra los proveedores de la empresa.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Orden de Compra -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-cart-check text-warning mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Orden de Compra</h5>
                            <p class="card-text text-muted">Gestiona y controla las órdenes de compra emitidas.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Recepciones -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-truck text-secondary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Recepciones</h5>
                            <p class="card-text text-muted">Registra y gestiona la recepción de productos y servicios.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Conciliaciones -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-diagram-3 text-danger mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Conciliaciones</h5>
                            <p class="card-text text-muted">Realiza la conciliación de facturas y pagos con proveedores.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection