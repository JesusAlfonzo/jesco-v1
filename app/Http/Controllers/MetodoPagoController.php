<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MetodoPagoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $metodoPagos = MetodoPago::paginate();

        return view('metodo-pago.index', compact('metodoPagos'))
            ->with('i', ($request->input('page', 1) - 1) * $metodoPagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $metodoPago = new MetodoPago();

        return view('metodo-pago.create', compact('metodoPago'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MetodoPagoRequest $request): RedirectResponse
    {
        MetodoPago::create($request->validated());

        return Redirect::route('metodo-pagos.index')
            ->with('success', 'MetodoPago created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $metodoPago = MetodoPago::find($id);

        return view('metodo-pago.show', compact('metodoPago'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $metodoPago = MetodoPago::find($id);

        return view('metodo-pago.edit', compact('metodoPago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MetodoPagoRequest $request, MetodoPago $metodoPago): RedirectResponse
    {
        $metodoPago->update($request->validated());

        return Redirect::route('metodo-pagos.index')
            ->with('success', 'MetodoPago updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MetodoPago::find($id)->delete();

        return Redirect::route('metodo-pagos.index')
            ->with('success', 'MetodoPago deleted successfully');
    }
}
