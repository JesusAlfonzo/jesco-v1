@extends('layouts.app')

@section('template_title')
    Empleados
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
                    <i class="bi bi-people-fill me-1"></i> Empleados
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                            <span style="font-size: 1.5rem; font-weight: bold; letter-spacing: 1px; text-shadow: 1px 1px 2px #223a7a33;">Listado de Empleados</span>
                        </div>
                        <a href="{{ route('empleados.create') }}" class="btn btn-outline-light">
                            <i class="bi bi-person-plus me-1"></i> Nuevo Empleado
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
                                <form method="GET" action="{{ route('empleados.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Buscar empleados..." value="{{ request('search') }}">
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

                        <!-- Tabla de empleados -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead style="background-color: #4e73df; color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th><i class="bi bi-person me-1"></i> Nombre</th>
                                        <th><i class="bi bi-person me-1"></i> Apellido</th>
                                        <th><i class="bi bi-building me-1"></i> Departamento</th>
                                        <th><i class="bi bi-briefcase me-1"></i> Cargo</th>
                                        <th><i class="bi bi-calendar-date me-1"></i> Fecha Ingreso</th>
                                        <th><i class="bi bi-circle-fill me-1"></i> Estado</th>
                                        <th><i class="bi bi-gear me-1"></i> Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($empleados as $key => $empleado)
                                        <tr>
                                            <td>{{ $empleados->firstItem() + $key }}</td>
                                            <td>{{ $empleado->nombre }}</td>
                                            <td>{{ $empleado->apellido }}</td>
                                            <td>{{ $empleado->departamento->nombre ?? '-' }}</td>
                                            <td>{{ $empleado->cargo ?? '-' }}</td>
                                            <td>{{ $empleado->fecha_ingreso ? \Carbon\Carbon::parse($empleado->fecha_ingreso)->format('d/m/Y') : '-' }}
                                            </td>
                                            <td>
                                                @if ($empleado->estado === 'activo')
                                                    <span class="badge bg-success">Activo</span>
                                                @elseif($empleado->estado === 'vacaciones')
                                                    <span class="badge bg-warning text-dark">Vacaciones</span>
                                                @else
                                                    <span class="badge bg-secondary">Inactivo</span>
                                                @endif
                                            </td>
                                            <td class="action-buttons">
                                                <a href="{{ route('empleados.show', $empleado->id) }}"
                                                    class="btn btn-sm btn-primary me-1 mb-1" title="Ver">
                                                    <i class="bi bi-eye"></i> Mostrar
                                                </a>
                                                <a href="{{ route('empleados.edit', $empleado->id) }}"
                                                    class="btn btn-sm btn-success me-1 mb-1" title="Editar">
                                                    <i class="bi bi-pencil-square"></i> Editar
                                                </a>
                                                <form action="{{ route('empleados.destroy', $empleado->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"
                                                        onclick="return confirm('¿Está seguro de eliminar este empleado?')">
                                                        <i class="bi bi-trash"></i> Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No hay empleados registrados.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Paginación -->
                        <div class="d-flex justify-content-center">
                            {!! $empleados->withQueryString()->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
