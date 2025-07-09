@extends('layouts.app')

@section('template_title')
    Crear Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Empleado</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('empleados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
