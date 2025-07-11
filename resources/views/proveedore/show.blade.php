@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? __('Show') . " " . __('Proveedore') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proveedores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Empresa:</strong>
                                    {{ $proveedore->nombre_empresa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rif:</strong>
                                    {{ $proveedore->rif }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $proveedore->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pais:</strong>
                                    {{ $proveedore->pais }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
