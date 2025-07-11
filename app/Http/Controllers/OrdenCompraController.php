<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrdenCompraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrdenCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ordenCompras = OrdenCompra::paginate();

        return view('orden-compra.index', compact('ordenCompras'))
            ->with('i', ($request->input('page', 1) - 1) * $ordenCompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ordenCompra = new OrdenCompra();

        return view('orden-compra.create', compact('ordenCompra'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdenCompraRequest $request): RedirectResponse
    {
        OrdenCompra::create($request->validated());

        return Redirect::route('orden-compras.index')
            ->with('success', 'OrdenCompra created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ordenCompra = OrdenCompra::find($id);

        return view('orden-compra.show', compact('ordenCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ordenCompra = OrdenCompra::find($id);

        return view('orden-compra.edit', compact('ordenCompra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrdenCompraRequest $request, OrdenCompra $ordenCompra): RedirectResponse
    {
        $ordenCompra->update($request->validated());

        return Redirect::route('orden-compras.index')
            ->with('success', 'OrdenCompra updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        OrdenCompra::find($id)->delete();

        return Redirect::route('orden-compras.index')
            ->with('success', 'OrdenCompra deleted successfully');
    }
}
