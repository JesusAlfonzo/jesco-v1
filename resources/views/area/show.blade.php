@extends('layouts.app')

@section('template_title')
    {{ $area->name ?? __('Show') . " " . __('Area') }}
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="float-left">
                            <span class="card-title d-flex align-items-center gap-2">
                                <i class="bi bi-diagram-3"></i> Mostrar Área
                            </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-light d-flex align-items-center" href="{{ route('areas.index') }}">
                                <i class="bi bi-arrow-left-circle me-1"></i> Volver
                            </a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong><i class="bi bi-diagram-3 me-1"></i>Nombre:</strong>
                            {{ $area->nombre }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
