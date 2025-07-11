<?php

namespace App\Http\Controllers;

use App\Models\Cotizacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CotizacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CotizacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $cotizaciones = Cotizacione::paginate();

        return view('cotizacione.index', compact('cotizaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $cotizaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cotizacione = new Cotizacione();

        return view('cotizacione.create', compact('cotizacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CotizacioneRequest $request): RedirectResponse
    {
        Cotizacione::create($request->validated());

        return Redirect::route('cotizaciones.index')
            ->with('success', 'Cotizacione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cotizacione = Cotizacione::find($id);

        return view('cotizacione.show', compact('cotizacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cotizacione = Cotizacione::find($id);

        return view('cotizacione.edit', compact('cotizacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CotizacioneRequest $request, Cotizacione $cotizacione): RedirectResponse
    {
        $cotizacione->update($request->validated());

        return Redirect::route('cotizaciones.index')
            ->with('success', 'Cotizacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Cotizacione::find($id)->delete();

        return Redirect::route('cotizaciones.index')
            ->with('success', 'Cotizacione deleted successfully');
    }
}
