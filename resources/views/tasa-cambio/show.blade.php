@extends('layouts.app')

@section('template_title')
    {{ $tasaCambio->name ?? __('Show') . " " . __('Tasa Cambio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tasa Cambio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tasa-cambios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Moneda Id:</strong>
                                    {{ $tasaCambio->moneda_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tasa:</strong>
                                    {{ $tasaCambio->tasa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $tasaCambio->fecha }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
