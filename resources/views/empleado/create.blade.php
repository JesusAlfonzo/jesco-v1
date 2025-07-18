@extends('layouts.app')

@section('template_title')
    <i class="bi bi-person-plus me-2"></i> Crear Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                        <span class="card-title float d-flex align-items-center gap-2">
                            <i class="bi bi-person-plus"></i> Crear Empleado
                        </span>
                        <a href="{{ route('empleados.index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center rounded-pill px-3">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white p-4 rounded-bottom-4">
                        <form method="POST" action="{{ route('empleados.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('empleado.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
