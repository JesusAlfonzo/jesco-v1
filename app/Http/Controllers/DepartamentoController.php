<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DepartamentoController extends Controller
{
/**
 * Display a listing of the resource.
 */
public function index(Request $request)
{
    $query = Departamento::query();

    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function($q) use($search) {
            $q->where('nombre', 'like', "%{$search}%")
                ->orWhere('descripcion', 'like', "%{$search}%");
        });
    }

    $departamentos = $query->paginate(10); // Eliminado el with('Departamento')

    return view('departamento.index', compact('departamentos')) // Corregido el nombre de la variable
        ->with('i', ($request->input('page', 1) - 1) * $departamentos->perPage());
}

    /**
     * Show the form for creating a new resource.
     */

public function create(): View
{
    $departamento = new Departamento();
    return view('departamento.create', compact('departamento'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartamentoRequest $request): RedirectResponse
    {
        Departamento::create($request->validated());

        return Redirect::route('departamentos.index')
            ->with('success', 'El departamento ha sido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $departamento = Departamento::find($id);

        return view('departamento.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $departamento = Departamento::find($id);

        return view('departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartamentoRequest $request, Departamento $departamento): RedirectResponse
    {
        $departamento->update($request->validated());

        return Redirect::route('departamentos.index')
            ->with('success', 'El departamento ha sido actualizado exitosamente.');
    }

    public function destroy($id): RedirectResponse
    {
        Departamento::find($id)->delete();

        return Redirect::route('departamentos.index')
            ->with('success', 'El departamento ha sido eliminado exitosamente.');
    }
}
