@extends('layouts.app')

@section('template_title')
    Areas
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
                    <a href="{{ route('connectors.Administrativo.index') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-collection-fill me-1"></i> Modulo Administrativo
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-diagram-3-fill me-1"></i> Áreas
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-layer-group" style="font-size: 2rem;"></i>
                            <span style="font-size: 1.5rem; font-weight: bold; letter-spacing: 1px; text-shadow: 1px 1px 2px #223a7a33;">Listado de Áreas</span>
                        </div>
                        <a href="{{ route('areas.create') }}" class="btn btn-outline-light">
                            <i class="bi bi-plus-circle me-1"></i> Nueva Área
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
                                <form method="GET" action="{{ route('areas.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Buscar áreas..." value="{{ request('search') }}">
                                        <button class="btn btn-outline-primary" type="submit">
                                            <i class="bi bi-search"></i> Buscar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <!-- Aquí puedes agregar filtros adicionales si lo deseas -->
                            </div>
                        </div>

                        <!-- Tabla de áreas -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead style="background-color: #4e73df; color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th><i class="bi bi-diagram-3 me-1"></i> Nombre</th>
                                        <th><i class="bi bi-gear me-1"></i> Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($areas as $key => $area)
                                        <tr>
                                            <td>{{ $areas->firstItem() + $key }}</td>
                                            <td>{{ $area->nombre }}</td>
                                            <td class="action-buttons">
                                                <a href="{{ route('areas.show', $area->id) }}"
                                                    class="btn btn-sm btn-primary me-1 mb-1" title="Ver">
                                                    <i class="bi bi-eye"></i> Ver
                                                </a>
                                                <a href="{{ route('areas.edit', $area->id) }}"
                                                    class="btn btn-sm btn-success me-1 mb-1" title="Editar">
                                                    <i class="bi bi-pencil-square"></i> Editar
                                                </a>
                                                <form action="{{ route('areas.destroy', $area->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"
                                                        onclick="return confirm('¿Está seguro de eliminar esta área?')">
                                                        <i class="bi bi-trash"></i> Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No hay áreas registradas.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $areas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
