@extends('layouts.app')

@section('template_title')
    Proveedores
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
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-truck me-1"></i> Proveedores
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-truck" style="font-size: 2rem;"></i>
                            <span style="font-size: 1.5rem; font-weight: bold; letter-spacing: 1px; text-shadow: 1px 1px 2px #223a7a33;">Listado de Proveedores</span>
                        </div>
                        <a href="{{ route('proveedores.create') }}" class="btn btn-outline-light d-flex align-items-center gap-2">
                            <i class="bi bi-person-plus"></i> Nuevo Proveedor
                        </a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
                            <strong>Éxito! - </strong> {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <!-- Barra de búsqueda -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <form method="GET" action="{{ route('proveedores.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Buscar proveedores..." value="{{ request('search') }}">
                                        <button class="btn btn-outline-primary" type="submit">
                                            <i class="bi bi-search"></i> Buscar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead style="background-color: #4e73df; color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th><i class="bi bi-building me-1"></i> Nombre Empresa</th>
                                        <th><i class="bi bi-file-earmark-text me-1"></i> Rif</th>
                                        <th><i class="bi bi-geo-alt me-1"></i> Dirección</th>
                                        <th><i class="bi bi-globe me-1"></i> País</th>
                                        <th><i class="fas fa-cog me-1"></i> Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($proveedores as $key => $proveedore)
                                        <tr>
                                            <td>{{ $proveedores->firstItem() + $key }}</td>
                                            <td>{{ $proveedore->nombre_empresa }}</td>
                                            <td>{{ $proveedore->rif }}</td>
                                            <td>{{ $proveedore->direccion }}</td>
                                            <td>{{ $proveedore->pais }}</td>
                                            <td class="action-buttons">
                                                <a href="{{ route('proveedores.show', $proveedore->id) }}"
                                                    class="btn btn-sm btn-primary me-1 mb-1" title="Ver">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('proveedores.edit', $proveedore->id) }}"
                                                    class="btn btn-sm btn-success me-1 mb-1" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('proveedores.destroy', $proveedore->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"
                                                        onclick="return confirm('¿Está seguro de eliminar este proveedor?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No hay proveedores registrados.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedores->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
