@extends('layouts.app')

@section('template_title')
    {{ $tipoExamene->name ?? __('Show') . " " . __('Tipo Examene') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Examene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipo-examenes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $tipoExamene->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $tipoExamene->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Area Id:</strong>
                                    {{ $tipoExamene->area_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
