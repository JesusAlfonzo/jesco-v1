@extends('layouts.app')

@section('template_title')
    Examenes
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
                    <a href="{{ route('connectors.Laboratorio.index') }}" class="text-decoration-none text-primary">
                        <i class="bi bi-collection-fill me-1"></i> Laboratorio
                    </a>
                </li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    <i class="bi bi-journal-medical me-1"></i> Exámenes
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <h6 class="m-0 font-weight-bold">
                            <i class="bi bi-journal-medical me-2"></i>Listado de Exámenes
                        </h6>
                        <a href="{{ route('examenes.create') }}" class="btn btn-outline-light d-flex align-items-center gap-2">
                            <i class="bi bi-plus-circle"></i> Nuevo Examen
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
                            <div class="col-md-8">
                                <form method="GET" action="{{ route('examenes.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Buscar exámenes..." value="{{ request('search') }}">
                                        <button class="btn btn-outline-primary d-flex align-items-center gap-1" type="submit">
                                            <i class="bi bi-search"></i> Buscar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end align-items-center gap-2 mt-2 mt-md-0">
                                <a href="{{ route('tipo-examenes.index') }}" class="btn btn-outline-secondary d-flex align-items-center gap-1">
                                    <i class="bi bi-list-ul"></i> Tipos de Examen
                                </a>
                                <a href="{{ route('tipo-examen-precios.index') }}" class="btn btn-outline-warning d-flex align-items-center gap-1">
                                    <i class="bi bi-cash-coin"></i> Precios de Examen
                                </a>
                                <a href="{{ route('estado-examenes.index') }}" class="btn btn-outline-primary d-flex align-items-center gap-1">
                                    <i class="bi bi-clipboard2-check"></i> Estados de Examen
                                </a>
                            </div>
                        </div>

                        <!-- Tabla de exámenes -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead style="background-color: #4e73df; color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th><i class="bi bi-droplet-half me-1"></i> Muestra</th>
                                        <th><i class="bi bi-list-ul me-1"></i> Tipo Examen</th>
                                        <th><i class="bi bi-person me-1"></i> Usuario</th>
                                        <th><i class="bi bi-clipboard2-check me-1"></i> Estado</th>
                                        <th><i class="bi bi-calendar me-1"></i> Fecha Solicitud</th>
                                        <th><i class="bi bi-calendar-check me-1"></i> Fecha Procesamiento</th>
                                        <th><i class="bi bi-file-earmark-text me-1"></i> Resultado</th>
                                        <th><i class="fas fa-cog me-1"></i> Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($examenes as $key => $examene)
                                        <tr>
                                            <td>{{ $examenes->firstItem() + $key }}</td>
                                            <td>{{ $examene->muestra_id }}</td>
                                            <td>{{ $examene->tipo_examen_id }}</td>
                                            <td>{{ $examene->usuario_id }}</td>
                                            <td>{{ $examene->estado_examen_id }}</td>
                                            <td>{{ $examene->fecha_solicitud }}</td>
                                            <td>{{ $examene->fecha_procesamiento }}</td>
                                            <td>{{ $examene->resultado }}</td>
                                            <td class="action-buttons">
                                                <a href="{{ route('examenes.show', $examene->id) }}"
                                                    class="btn btn-sm btn-primary me-1 mb-1" title="Ver">
                                                    <i class="fas fa-eye">Ver</i>
                                                </a>
                                                <a href="{{ route('examenes.edit', $examene->id) }}"
                                                    class="btn btn-sm btn-success me-1 mb-1" title="Editar">
                                                    <i class="fas fa-edit">Editar</i>
                                                </a>
                                                <form action="{{ route('examenes.destroy', $examene->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"
                                                        onclick="return confirm('¿Está seguro de eliminar este examen?')">
                                                        <i class="fas fa-trash">Eliminar</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No hay exámenes registrados.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $examenes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
