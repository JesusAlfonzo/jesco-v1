@extends('layouts.app')

@section('template_title')
    Módulo de Almacén
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="fw-bold text-primary mb-2">Módulo de Almacén</h2>
        <p class="text-muted mb-4">Gestiona todos los procesos relacionados con el almacén: inventarios, lotes, productos, ubicaciones físicas, solicitudes, reabastecimientos y módulos auxiliares. Optimiza el control y la organización de tus existencias.</p>
        <hr class="mb-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Inventarios -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-box-seam text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Inventarios</h5>
                            <p class="card-text text-muted">Controla y gestiona el inventario de productos en almacén.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Lotes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-qr-code-scan text-success mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Lotes</h5>
                            <p class="card-text text-muted">Administra los lotes de productos y su trazabilidad.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tarjeta: Productos -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-bag-check text-info mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text text-muted">Gestiona los productos disponibles en el almacén.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tarjeta: Ubicaciones Físicas -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-geo-alt text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Ubicaciones Físicas</h5>
                            <p class="card-text text-muted">Administra y organiza las ubicaciones físicas dentro del
                                almacén.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tarjeta: Solicitudes -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-clipboard-data text-success mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Solicitudes</h5>
                            <p class="card-text text-muted">Gestiona las solicitudes de productos realizadas por los
                                usuarios.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tarjeta: Reabastecimientos -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-arrow-repeat text-warning mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Reabastecimientos</h5>
                            <p class="card-text text-muted">Controla y gestiona los procesos de reabastecimiento de
                                inventario.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Divisor para módulos auxiliares de productos -->
        </div> <!-- Cierre de la fila de cards principales -->
        <hr class="my-4">
        <div class="text-center mb-4">
            <h5 class="fw-bold text-secondary mb-1">Módulos auxiliares para la creación de productos</h5>
            <p class="text-muted mb-0">Las siguientes secciones te permiten gestionar las marcas, categorías y
                presentaciones necesarias para registrar un producto correctamente en el sistema.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta: Categorías -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-tags text-warning mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Categorías</h5>
                            <p class="card-text text-muted">Clasifica los productos en diferentes categorías.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Marcas -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-patch-check text-secondary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Marcas</h5>
                            <p class="card-text text-muted">Gestiona las marcas de los productos almacenados.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Presentaciones -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-boxes text-danger mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Presentaciones</h5>
                            <p class="card-text text-muted">Administra las presentaciones y empaques de los productos.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tarjeta: Unidad de Medida -->
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-rulers text-primary mb-2" style="font-size:2.8rem;"></i>
                            <h5 class="card-title">Unidad de Medida</h5>
                            <p class="card-text text-muted">Gestiona las unidades de medida utilizadas para los productos.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
