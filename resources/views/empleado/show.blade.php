@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? __('Show') . " " . __('Empleado') }}
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6"> <!-- Cambia el ancho aquí (ej: col-md-6 para la mitad) -->
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="float-left">
                            <span class="card-title">Mostrar Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-light" href="{{ route('empleados.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido:</strong>
                            {{ $empleado->apellido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Departamento Id:</strong>
                            {{ $empleado->departamento_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cargo:</strong>
                            {{ $empleado->cargo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado:</strong>
                            {{ $empleado->estado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Ingreso:</strong>
                            {{ $empleado->fecha_ingreso }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
