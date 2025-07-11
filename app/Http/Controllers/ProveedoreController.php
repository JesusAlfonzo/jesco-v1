<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $proveedores = Proveedore::paginate();

        return view('proveedore.index', compact('proveedores'))
            ->with('i', ($request->input('page', 1) - 1) * $proveedores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $proveedore = new Proveedore();

        return view('proveedore.create', compact('proveedore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProveedoreRequest $request): RedirectResponse
    {
        Proveedore::create($request->validated());

        return Redirect::route('proveedores.index')
            ->with('success', 'Proveedore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $proveedore = Proveedore::find($id);

        return view('proveedore.show', compact('proveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $proveedore = Proveedore::find($id);

        return view('proveedore.edit', compact('proveedore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProveedoreRequest $request, Proveedore $proveedore): RedirectResponse
    {
        $proveedore->update($request->validated());

        return Redirect::route('proveedores.index')
            ->with('success', 'Proveedore updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Proveedore::find($id)->delete();

        return Redirect::route('proveedores.index')
            ->with('success', 'Proveedore deleted successfully');
    }
}
