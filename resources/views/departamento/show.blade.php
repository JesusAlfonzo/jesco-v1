@extends('layouts.app')

@section('template_title')
    {{ $departamento->name ?? 'Mostrar Departamento' }}
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-lg border-0">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white; min-height: 56px;">
                        <span class="card-title d-flex align-items-center gap-2" style="font-size: 1.25rem;">
                            <i class="bi bi-diagram-3"></i> Detalles del Departamento
                        </span>
                        <a class="btn btn-outline-light btn-sm d-flex align-items-center" href="{{ route('departamentos.index') }}">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-diagram-3 fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Nombre</div>
                                        <div>{{ $departamento->nombre }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-card-text fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Descripción</div>
                                        <div>{{ $departamento->descripcion }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
