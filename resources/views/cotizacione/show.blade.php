@extends('layouts.app')

@section('template_title')
    {{ $cotizacione->name ?? __('Show') . " " . __('Cotizacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cotizacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cotizaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Solicitud Compra Id:</strong>
                                    {{ $cotizacione->solicitud_compra_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Proveedor Id:</strong>
                                    {{ $cotizacione->proveedor_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $cotizacione->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total:</strong>
                                    {{ $cotizacione->total }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $cotizacione->observaciones }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
