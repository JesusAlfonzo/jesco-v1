@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Muestra
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <span class="card-title float">Crear Muestra</span>
                        <a href="{{ route('muestras.index') }}" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('muestras.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('muestra.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
