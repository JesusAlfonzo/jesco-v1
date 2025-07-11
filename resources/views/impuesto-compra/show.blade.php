@extends('layouts.app')

@section('template_title')
    {{ $impuestoCompra->name ?? __('Show') . " " . __('Impuesto Compra') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Impuesto Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('impuesto-compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Orden Compra Id:</strong>
                                    {{ $impuestoCompra->orden_compra_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Impuesto Id:</strong>
                                    {{ $impuestoCompra->tipo_impuesto_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto:</strong>
                                    {{ $impuestoCompra->monto }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
