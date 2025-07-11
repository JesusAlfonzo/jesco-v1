<?php

namespace App\Http\Controllers;

use App\Models\ImpuestoCompra;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ImpuestoCompraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ImpuestoCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $impuestoCompras = ImpuestoCompra::paginate();

        return view('impuesto-compra.index', compact('impuestoCompras'))
            ->with('i', ($request->input('page', 1) - 1) * $impuestoCompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $impuestoCompra = new ImpuestoCompra();

        return view('impuesto-compra.create', compact('impuestoCompra'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImpuestoCompraRequest $request): RedirectResponse
    {
        ImpuestoCompra::create($request->validated());

        return Redirect::route('impuesto-compras.index')
            ->with('success', 'ImpuestoCompra created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $impuestoCompra = ImpuestoCompra::find($id);

        return view('impuesto-compra.show', compact('impuestoCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $impuestoCompra = ImpuestoCompra::find($id);

        return view('impuesto-compra.edit', compact('impuestoCompra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImpuestoCompraRequest $request, ImpuestoCompra $impuestoCompra): RedirectResponse
    {
        $impuestoCompra->update($request->validated());

        return Redirect::route('impuesto-compras.index')
            ->with('success', 'ImpuestoCompra updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ImpuestoCompra::find($id)->delete();

        return Redirect::route('impuesto-compras.index')
            ->with('success', 'ImpuestoCompra deleted successfully');
    }
}
