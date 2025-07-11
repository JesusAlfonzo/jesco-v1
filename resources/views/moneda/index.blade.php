@extends('layouts.app')

@section('template_title')
    Monedas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center"
                        style="background: linear-gradient(to right, #4e73df, #224abe); color: white;">
                        <h6 class="m-0 font-weight-bold" style="font-size: 1.25rem;">
                            <i class="fas fa-coins me-2"></i>Listado de Monedas
                        </h6>
                        <a href="{{ route('monedas.create') }}" class="btn btn-outline-light">
                            <i class="fas fa-plus me-1"></i> Nueva Moneda
                        </a>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
                                <strong>Éxito! - </strong> {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Barra de búsqueda -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <form method="GET" action="{{ route('monedas.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Buscar monedas..." value="{{ request('search') }}">
                                        <button class="btn btn-outline-primary" type="submit">
                                            <i class="fas fa-search"></i> Buscar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <!-- Filtros adicionales si los necesitas -->
                            </div>
                        </div>

                        <!-- Tabla de monedas -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead style="background-color: #4e73df; color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Código</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($monedas as $moneda)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $moneda->nombre }}</td>
                                            <td>{{ $moneda->codigo }}</td>
                                            <td>
                                                <a href="{{ route('monedas.show', $moneda->id) }}" class="btn btn-sm btn-primary me-1 mb-1">Ver</a>
                                                <a href="{{ route('monedas.edit', $moneda->id) }}" class="btn btn-sm btn-success me-1 mb-1">Editar</a>
                                                <form action="{{ route('monedas.destroy', $moneda->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger mb-1" onclick="return confirm('¿Está seguro de eliminar esta moneda?')">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Paginación -->
                        <div class="d-flex justify-content-center">
                            {!! $monedas->withQueryString()->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
