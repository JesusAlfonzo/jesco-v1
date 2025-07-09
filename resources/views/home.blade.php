@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (auth()->user())
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
                    <div class="container py-5 w-auto">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            <div class="col">
                                <div class="card h-100 text-center shadow">
                                    <div class="card-body">
                                        <div class="display-4 text-primary mb-2">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <h2 class="card-title mb-3">{{ auth()->user()->count() }}</h2>
                                        <p class="card-text text-muted">Empleados Registrados</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 text-center shadow">
                                    <div class="card-body">
                                        <div class="display-4 text-success mb-2">
                                            <i class="bi bi-graph-up"></i>
                                        </div>
                                        <h2 class="card-title mb-3">56%</h2>
                                        <p class="card-text text-muted">Growth Rate</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 text-center shadow">
                                    <div class="card-body">
                                        <div class="display-4 text-warning mb-2">
                                            <i class="bi bi-star"></i>
                                        </div>
                                        <h2 class="card-title mb-3">4.8</h2>
                                        <p class="card-text text-muted">Average Rating</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 text-center shadow">
                                    <div class="card-body">
                                        <div class="display-4 text-danger mb-2">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                        <h2 class="card-title mb-3">98.3%</h2>
                                        <p class="card-text text-muted">Uptime</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .card {
                            transition: all 0.3s ease;
                        }

                        .card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
                        }

                        .card-body .display-4 {
                            transition: all 0.3s ease;
                        }

                        .card:hover .card-body .display-4 {
                            transform: scale(1.1);
                        }
                    </style>
                @else
                    <h1>Sistema Jesco</h1>
                @endif


            </div>
        </div>
    </div>
@endsection
