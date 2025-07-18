@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Proveedore
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-white px-3 py-2 shadow-sm rounded align-items-center" style="--bs-breadcrumb-divider: '›'; font-size:1.05rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-house-door-fill me-1"></i> Inicio
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('connectors.compras.index') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-collection-fill me-1"></i> Módulo Compras
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('proveedores.index') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-truck me-1"></i> Proveedores
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-plus-circle me-1"></i> Crear Proveedor
                </li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header d-flex align-items-center gap-2" style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <i class="bi bi-plus-circle" style="font-size: 2rem;"></i>
                        <span style="font-size: 1.5rem; font-weight: bold; letter-spacing: 1px; text-shadow: 1px 1px 2px #223a7a33;">Crear Proveedor</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('proveedores.store') }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @include('proveedore.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
