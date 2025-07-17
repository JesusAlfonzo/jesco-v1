@extends('layouts.app')

@section('template_title')
    Muestras
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i> Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('connectors.Laboratorio.index') }}"><i class="fas fa-flask"></i> Laboratorio</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-droplet-half"></i> Muestras</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <h6 class="m-0 font-weight-bold">
                            <i class="bi bi-droplet-half me-2"></i>Listado de Muestras
                        </h6>
                        <a href="{{ route('muestras.create') }}" class="btn btn-outline-light">
                            <i class="fas fa-plus me-1"></i> Nueva Muestra
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
                                <form method="GET" action="{{ route('muestras.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Buscar muestras..." value="{{ request('search') }}">
                                        <button class="btn btn-outline-primary" type="submit">
                                            <i class="fas fa-search">Buscar</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <!-- Aquí puedes agregar filtros adicionales si lo deseas -->
                            </div>
                        </div>

                        <!-- Tabla de muestras -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead style="background-color: #4e73df; color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th><i class="bi bi-person me-1"></i> Paciente</th>
                                        <th><i class="bi bi-upc-scan me-1"></i> Código</th>
                                        <th><i class="bi bi-calendar me-1"></i> Fecha Toma</th>
                                        <th><i class="bi bi-droplet-half me-1"></i> Tipo</th>
                                        <th><i class="bi bi-chat-left-text me-1"></i> Observaciones</th>
                                        <th><i class="fas fa-cog me-1"></i> Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($muestras as $key => $muestra)
                                        <tr>
                                            <td>{{ $muestras->firstItem() + $key }}</td>
                                            <td>{{ $muestra->paciente_id }}</td>
                                            <td>{{ $muestra->codigo_muestra }}</td>
                                            <td>{{ $muestra->fecha_toma }}</td>
                                            <td>{{ $muestra->tipo_muestra }}</td>
                                            <td>{{ $muestra->observaciones }}</td>
                                            <td class="action-buttons">
                                                <a href="{{ route('muestras.show', $muestra->id) }}"
                                                    class="btn btn-sm btn-primary me-1 mb-1" title="Ver">
                                                    <i class="fas fa-eye">Ver</i>
                                                </a>
                                                <a href="{{ route('muestras.edit', $muestra->id) }}"
                                                    class="btn btn-sm btn-success me-1 mb-1" title="Editar">
                                                    <i class="fas fa-edit">Editar</i>
                                                </a>
                                                <form action="{{ route('muestras.destroy', $muestra->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"
                                                        onclick="return confirm('¿Está seguro de eliminar esta muestra?')">
                                                        <i class="fas fa-trash">Eliminar</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No hay muestras registradas.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $muestras->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
