@extends('layouts.app')

@section('template_title')
    {{ $solicitudCompra->name ?? __('Show') . " " . __('Solicitud Compra') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Solicitud Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('solicitud-compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Departamento Id:</strong>
                                    {{ $solicitudCompra->departamento_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $solicitudCompra->usuario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Solicitud:</strong>
                                    {{ $solicitudCompra->fecha_solicitud }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $solicitudCompra->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $solicitudCompra->observaciones }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
