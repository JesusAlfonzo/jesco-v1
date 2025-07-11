<?php

namespace App\Http\Controllers;

use App\Models\SolicitudCompra;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitudCompraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SolicitudCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $solicitudCompras = SolicitudCompra::paginate();

        return view('solicitud-compra.index', compact('solicitudCompras'))
            ->with('i', ($request->input('page', 1) - 1) * $solicitudCompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $solicitudCompra = new SolicitudCompra();

        return view('solicitud-compra.create', compact('solicitudCompra'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SolicitudCompraRequest $request): RedirectResponse
    {
        SolicitudCompra::create($request->validated());

        return Redirect::route('solicitud-compras.index')
            ->with('success', 'SolicitudCompra created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $solicitudCompra = SolicitudCompra::find($id);

        return view('solicitud-compra.show', compact('solicitudCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $solicitudCompra = SolicitudCompra::find($id);

        return view('solicitud-compra.edit', compact('solicitudCompra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SolicitudCompraRequest $request, SolicitudCompra $solicitudCompra): RedirectResponse
    {
        $solicitudCompra->update($request->validated());

        return Redirect::route('solicitud-compras.index')
            ->with('success', 'SolicitudCompra updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        SolicitudCompra::find($id)->delete();

        return Redirect::route('solicitud-compras.index')
            ->with('success', 'SolicitudCompra deleted successfully');
    }
}
