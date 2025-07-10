@extends('layouts.app')

@section('template_title')
    Crear Departamento
@endsection

@section('content')
    <!-- Sección principal del contenido -->
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <!-- Tarjeta principal -->
                <div class="card card-default">
                    <!-- Header de la tarjeta: Título y botón Volver -->
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white; min-height: 56px;">
                        <span class="card-title" style="font-size: 1.25rem;">Crear Departamento</span>
                        <a href="{{ route('departamentos.index') }}"
                            class="btn btn-outline-light btn-sm d-flex align-items-center" style="height: 38px;">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a>
                    </div>

                    <!-- Cuerpo de la tarjeta: Formulario -->
                    // ...código existente...
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('departamentos.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            {{-- Incluye el formulario y pasa $departamento como null para evitar el error --}}
@include('departamento.form', ['departamento' => $departamento ?? null])
                        </form>
                    </div>
                    // ...código existente...
                    <!-- Fin de la tarjeta principal -->

                </div>
            </div>
    </section>

    <!-- Fin de la sección principal del contenido -->
@endsection
