@extends('layouts.app')

@section('template_title')
    Detalle de Moneda
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white; min-height: 56px;">
                        <span class="card-title">Detalle de Moneda</span>
                        <a href="{{ route('monedas.index') }}"
                            class="btn btn-outline-light btn-sm d-flex align-items-center" style="height: 38px;">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white">
                        <div class="mb-3">
                            <strong>Nombre:</strong> {{ $moneda->nombre }}
                        </div>
                        <div class="mb-3">
                            <strong>Código:</strong> {{ $moneda->codigo }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
