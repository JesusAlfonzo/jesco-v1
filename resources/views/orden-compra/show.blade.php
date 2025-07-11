@extends('layouts.app')

@section('template_title')
    {{ $ordenCompra->name ?? __('Show') . " " . __('Orden Compra') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Orden Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('orden-compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Cotizacion Id:</strong>
                                    {{ $ordenCompra->cotizacion_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Proveedor Id:</strong>
                                    {{ $ordenCompra->proveedor_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $ordenCompra->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $ordenCompra->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Subtotal:</strong>
                                    {{ $ordenCompra->subtotal }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Impuestos:</strong>
                                    {{ $ordenCompra->impuestos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total:</strong>
                                    {{ $ordenCompra->total }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Moneda Id:</strong>
                                    {{ $ordenCompra->moneda_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
