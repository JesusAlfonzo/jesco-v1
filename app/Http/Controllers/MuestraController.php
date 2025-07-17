<?php

namespace App\Http\Controllers;

use App\Models\Muestra;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MuestraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $muestras = Muestra::paginate();

        return view('muestra.index', compact('muestras'))
            ->with('i', ($request->input('page', 1) - 1) * $muestras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $muestra = new Muestra();

        return view('muestra.create', compact('muestra'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MuestraRequest $request): RedirectResponse
    {
        Muestra::create($request->validated());

        return Redirect::route('muestras.index')
            ->with('success', 'Muestra created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $muestra = Muestra::find($id);

        return view('muestra.show', compact('muestra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $muestra = Muestra::find($id);

        return view('muestra.edit', compact('muestra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MuestraRequest $request, Muestra $muestra): RedirectResponse
    {
        $muestra->update($request->validated());

        return Redirect::route('muestras.index')
            ->with('success', 'Muestra updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Muestra::find($id)->delete();

        return Redirect::route('muestras.index')
            ->with('success', 'Muestra deleted successfully');
    }
}
