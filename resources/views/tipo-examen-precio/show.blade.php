@extends('layouts.app')

@section('template_title')
    {{ $tipoExamenPrecio->name ?? __('Show') . " " . __('Tipo Examen Precio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Examen Precio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipo-examen-precios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Examen Id:</strong>
                                    {{ $tipoExamenPrecio->tipo_examen_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Moneda Id:</strong>
                                    {{ $tipoExamenPrecio->moneda_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $tipoExamenPrecio->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Vigencia:</strong>
                                    {{ $tipoExamenPrecio->fecha_vigencia }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
