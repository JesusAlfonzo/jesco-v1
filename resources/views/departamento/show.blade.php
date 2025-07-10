@extends('layouts.app')

@section('template_title')
    {{ $departamento->name ?? 'Mostrar Departamento' }}
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="float-left">
                            <span class="card-title" style="font-size: 1.25rem;">Mostrar Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-light" href="{{ route('departamentos.index') }}">Volver</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $departamento->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripción:</strong>
                            {{ $departamento->descripcion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
