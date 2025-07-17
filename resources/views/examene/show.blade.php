@extends('layouts.app')

@section('template_title')
    {{ $examene->name ?? __('Show') . " " . __('Examene') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Examene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('examenes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Muestra Id:</strong>
                                    {{ $examene->muestra_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Examen Id:</strong>
                                    {{ $examene->tipo_examen_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $examene->usuario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Examen Id:</strong>
                                    {{ $examene->estado_examen_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Solicitud:</strong>
                                    {{ $examene->fecha_solicitud }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Procesamiento:</strong>
                                    {{ $examene->fecha_procesamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Resultado:</strong>
                                    {{ $examene->resultado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
