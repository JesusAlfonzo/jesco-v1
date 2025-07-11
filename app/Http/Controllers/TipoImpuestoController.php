<?php

namespace App\Http\Controllers;

use App\Models\TipoImpuesto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoImpuestoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoImpuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoImpuestos = TipoImpuesto::paginate();

        return view('tipo-impuesto.index', compact('tipoImpuestos'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoImpuestos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoImpuesto = new TipoImpuesto();

        return view('tipo-impuesto.create', compact('tipoImpuesto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoImpuestoRequest $request): RedirectResponse
    {
        TipoImpuesto::create($request->validated());

        return Redirect::route('tipo-impuestos.index')
            ->with('success', 'TipoImpuesto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoImpuesto = TipoImpuesto::find($id);

        return view('tipo-impuesto.show', compact('tipoImpuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoImpuesto = TipoImpuesto::find($id);

        return view('tipo-impuesto.edit', compact('tipoImpuesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoImpuestoRequest $request, TipoImpuesto $tipoImpuesto): RedirectResponse
    {
        $tipoImpuesto->update($request->validated());

        return Redirect::route('tipo-impuestos.index')
            ->with('success', 'TipoImpuesto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoImpuesto::find($id)->delete();

        return Redirect::route('tipo-impuestos.index')
            ->with('success', 'TipoImpuesto deleted successfully');
    }
}
