<?php

namespace App\Http\Controllers;

use App\Models\TasaCambio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TasaCambioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TasaCambioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tasaCambios = TasaCambio::paginate();

        return view('tasa-cambio.index', compact('tasaCambios'))
            ->with('i', ($request->input('page', 1) - 1) * $tasaCambios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tasaCambio = new TasaCambio();

        return view('tasa-cambio.create', compact('tasaCambio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TasaCambioRequest $request): RedirectResponse
    {
        TasaCambio::create($request->validated());

        return Redirect::route('tasa-cambios.index')
            ->with('success', 'TasaCambio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tasaCambio = TasaCambio::find($id);

        return view('tasa-cambio.show', compact('tasaCambio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tasaCambio = TasaCambio::find($id);

        return view('tasa-cambio.edit', compact('tasaCambio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TasaCambioRequest $request, TasaCambio $tasaCambio): RedirectResponse
    {
        $tasaCambio->update($request->validated());

        return Redirect::route('tasa-cambios.index')
            ->with('success', 'TasaCambio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TasaCambio::find($id)->delete();

        return Redirect::route('tasa-cambios.index')
            ->with('success', 'TasaCambio deleted successfully');
    }
}
