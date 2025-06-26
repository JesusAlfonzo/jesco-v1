@extends('layouts.app')

@section('content')
<div>
    <h1>Productos</h1>
    <div>
        <x-card
            title="Modulo: Productos"
            cardClass="border-primary"
            wrapperClass="mb-4"
            >
            <p>Modulo de Productos</p>
            
            <x-slot name="button">
                <a href="{{ route('products.index') }}" class="btn btn-success">Entrar</a>
            </x-slot>
        </x-card>


        <x-card
            title="Modulo: Presentaciones"
            cardClass="border-primary"
            wrapperClass="mb-4 "
            >
            <p>Modulo de Presentaciones para productos</p>
            
            <x-slot name="button">
                <a href="{{ route('presentations.index') }}" class="btn btn-success">Entrar</a>
            </x-slot>
        </x-card>

        <x-card
            title="Modulo: Categorias"
            cardClass="border-primary"
            wrapperClass="mb-4"
            >
            <p>Modulo de Categorias para Productos</p>
            
            <x-slot name="button">
                <a href="{{ route('categories.index') }}" class="btn btn-success">Entrar</a>
        </x-slot>

        </x-card>


        <x-card
            title="Modulo: Marcas"
            cardClass="border-primary"
            wrapperClass="mb-4"
            >
            <p>Modulo de Marcas para Productos</p>
            
            <x-slot name="button">
                <a href="{{ route('brands.index') }}" class="btn btn-success">Entrar</a>
            </x-slot>
        </x-card>
    </div>
</div>
@endsection