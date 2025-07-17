@extends('layouts.app')

@section('template_title')
    Actualizar Área
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <span class="card-title d-flex align-items-center gap-2">
                            <i class="bi bi-pencil-square"></i> Actualizar Área
                        </span>
                        <a href="{{ route('areas.index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('areas.update', $area->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('area.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
