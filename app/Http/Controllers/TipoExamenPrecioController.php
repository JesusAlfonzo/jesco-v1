<?php

namespace App\Http\Controllers;

use App\Models\TipoExamenPrecio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoExamenPrecioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoExamenPrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoExamenPrecios = TipoExamenPrecio::paginate();

        return view('tipo-examen-precio.index', compact('tipoExamenPrecios'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoExamenPrecios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoExamenPrecio = new TipoExamenPrecio();

        return view('tipo-examen-precio.create', compact('tipoExamenPrecio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoExamenPrecioRequest $request): RedirectResponse
    {
        TipoExamenPrecio::create($request->validated());

        return Redirect::route('tipo-examen-precios.index')
            ->with('success', 'TipoExamenPrecio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoExamenPrecio = TipoExamenPrecio::find($id);

        return view('tipo-examen-precio.show', compact('tipoExamenPrecio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoExamenPrecio = TipoExamenPrecio::find($id);

        return view('tipo-examen-precio.edit', compact('tipoExamenPrecio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoExamenPrecioRequest $request, TipoExamenPrecio $tipoExamenPrecio): RedirectResponse
    {
        $tipoExamenPrecio->update($request->validated());

        return Redirect::route('tipo-examen-precios.index')
            ->with('success', 'TipoExamenPrecio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoExamenPrecio::find($id)->delete();

        return Redirect::route('tipo-examen-precios.index')
            ->with('success', 'TipoExamenPrecio deleted successfully');
    }
}
