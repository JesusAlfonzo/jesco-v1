@extends('layouts.app')

@section('template_title')
    Actualizar Departamento
@endsection

@section('content')
    <section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="row w-100 justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-lg border-0">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(to right, #4e73df, #224abe); color: white; min-height: 56px;">
                        <span class="card-title d-flex align-items-center gap-2" style="font-size: 1.25rem;">
                            <i class="bi bi-pencil-square"></i> Actualizar Departamento
                        </span>
                        <a href="{{ route('departamentos.index') }}" class="btn btn-outline-light btn-sm d-flex align-items-center">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver
                        </a>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('departamentos.update', $departamento->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="nombre" class="form-label"><i class="bi bi-diagram-3 me-1"></i>Nombre</label>
                                        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $departamento->nombre) }}" id="nombre" placeholder="Ingrese el nombre">
                                        {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="descripcion" class="form-label"><i class="bi bi-card-text me-1"></i>Descripción</label>
                                        <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $departamento->descripcion) }}" id="descripcion" placeholder="Ingrese la descripción">
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
