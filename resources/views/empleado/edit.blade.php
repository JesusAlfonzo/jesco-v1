@extends('layouts.app')

@section('template_title')
    Actualizar Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(to right, #4e73df, #224abe); color: white; min-height: 56px;">
                        <span class="card-title d-flex align-items-center gap-2" style="font-size: 1.25rem;">
                            <i class="bi bi-pencil-square"></i> Actualizar Empleado
                        </span>
                        <a href="{{ route('empleados.index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver
                        </a>
                    </div>

                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('empleados.update', $empleado->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
