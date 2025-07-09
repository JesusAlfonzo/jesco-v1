@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                {{-- Título y Descripción --}}
                <h1 class="text-center mb-2">Catalogo</h1>
                <p class="text-center mb-1">En esta sección encontrará paginas a modulos de poco uso en el sistema.</p>
                <p class="text-center mb-4">Si deseas agregar un módulo a esta sección, por favor contacta al administrador
                    del sistema.</p>
                <div class="row mt-4">

                    {{-- Tarjeta: Tipos Examen --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Tipos Examen" cardClass="border-primary h-100">
                            <p>Administra y configura los diferentes tipos de exámenes disponibles en el sistema.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>

                    {{-- Tarjeta: Áreas --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Áreas" cardClass="border-primary h-100">
                            <p>Gestiona las áreas o divisiones internas de la organización para su clasificación.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>

                    {{-- Tarjeta: Departamentos --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Departamentos" cardClass="border-primary h-100">
                            <p>Permite crear y administrar los departamentos que conforman la empresa.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>

                    {{-- Tarjeta: Empleados --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Empleados" cardClass="border-primary h-100">
                            <p>Registra y gestiona la información de los empleados de la organización.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>

                    {{-- Tarjeta: Monedas --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Monedas" cardClass="border-primary h-100">
                            <p>Configura las monedas aceptadas y utilizadas en las transacciones del sistema.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>

                    {{-- Tarjeta: Métodos de Pago --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Métodos de Pago" cardClass="border-primary h-100">
                            <p>Administra los diferentes métodos de pago disponibles para operaciones financieras.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>
                    
                    {{-- Tarjeta: Impuestos --}}
                    <div class="col-md-6 mb-4">
                        <x-card title="Modulo: Impuestos" cardClass="border-primary h-100">
                            <p>Gestiona los tipos de impuestos aplicables a productos y servicios en el sistema.</p>
                            <x-slot name="button">
                                <a href="#" class="btn btn-success">Entrar</a>
                            </x-slot>
                        </x-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
