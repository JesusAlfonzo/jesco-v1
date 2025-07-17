@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? __('Show') . " " . __('Empleado') }}
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-lg border-0">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white; min-height: 56px;">
                        <span class="card-title d-flex align-items-center gap-2" style="font-size: 1.25rem;">
                            <i class="bi bi-person-vcard"></i> Detalles del Empleado
                        </span>
                        <a class="btn btn-outline-light btn-sm d-flex align-items-center" href="{{ route('empleados.index') }}">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-person fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Nombre</div>
                                        <div>{{ $empleado->nombre }}</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-person fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Apellido</div>
                                        <div>{{ $empleado->apellido }}</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-building fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Departamento</div>
                                        <div>{{ $empleado->departamento_id }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-briefcase fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Cargo</div>
                                        <div>{{ $empleado->cargo }}</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-circle-fill fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Estado</div>
                                        <div>{{ $empleado->estado }}</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-calendar-date fs-4 text-primary me-2"></i>
                                    <div>
                                        <div class="fw-bold">Fecha Ingreso</div>
                                        <div>{{ $empleado->fecha_ingreso }}</div>
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
