@extends('layouts.app')

@section('template_title')
    Módulo de Laboratorio
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="fw-bold text-primary mb-2">Módulo de Laboratorio</h2>
        <p class="text-muted mb-4">Gestiona todos los procesos relacionados con exámenes de laboratorio, desde la administración de muestras y pacientes hasta el control de tipos, estados y precios de exámenes.</p>
        <hr class="mb-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Exámenes -->
            <div class="col">
                <a href="{{ route('examenes.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-journal-medical text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Exámenes</h5>
                            <p class="card-text text-muted">Gestiona y registra los exámenes de laboratorio realizados.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Muestras -->
            <div class="col">
                <a href="{{ route('muestras.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-droplet-half text-success mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Muestras</h5>
                            <p class="card-text text-muted">Administra las muestras tomadas para los exámenes.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Pacientes -->
            <div class="col">
                <a href="{{ route('pacientes.index') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-person-vcard text-info mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Pacientes</h5>
                            <p class="card-text text-muted">Gestiona la información de los pacientes atendidos.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Estado de Exámenes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-clipboard2-check text-warning mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Estado de Exámenes</h5>
                            <p class="card-text text-muted">Consulta y actualiza el estado de los exámenes realizados.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Tipo de Exámenes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-list-ul text-secondary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Tipo de Exámenes</h5>
                            <p class="card-text text-muted">Administra los diferentes tipos de exámenes disponibles.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Precios de Exámenes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-cash-coin text-danger mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Precios de Exámenes</h5>
                            <p class="card-text text-muted">Gestiona los precios asociados a los exámenes de laboratorio.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
