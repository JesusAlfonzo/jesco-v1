@extends('layouts.app')

@section('template_title')
    {{ $muestra->name ?? __('Show') . " " . __('Muestra') }}
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="float-left">
                            <span class="card-title">Mostrar Muestra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-light" href="{{ route('muestras.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong><i class="bi bi-person me-1"></i>Paciente:</strong>
                            {{ $muestra->paciente_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong><i class="bi bi-upc-scan me-1"></i>Código de Muestra:</strong>
                            {{ $muestra->codigo_muestra }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong><i class="bi bi-calendar me-1"></i>Fecha de Toma:</strong>
                            {{ $muestra->fecha_toma }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong><i class="bi bi-droplet-half me-1"></i>Tipo de Muestra:</strong>
                            {{ $muestra->tipo_muestra }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong><i class="bi bi-chat-left-text me-1"></i>Observaciones:</strong>
                            {{ $muestra->observaciones }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
