<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MonedaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = Moneda::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use($search) {
                $q->where('id', 'like', "%{$search}%")
                  ->orWhere('nombre', 'like', "%{$search}%")
                  ->orWhere('codigo', 'like', "%{$search}%")
                  ->orWhere('simbolo', 'like', "%{$search}%")
                  ->orWhere('pais', 'like', "%{$search}%");
            });
        }

        $monedas = $query->paginate();

        return view('moneda.index', compact('monedas'))
            ->with('i', ($request->input('page', 1) - 1) * $monedas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $moneda = new Moneda();

        return view('moneda.create', compact('moneda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MonedaRequest $request): RedirectResponse
    {
        Moneda::create($request->validated());

        return Redirect::route('monedas.index')
            ->with('success', 'Moneda created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $moneda = Moneda::find($id);

        return view('moneda.show', compact('moneda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $moneda = Moneda::find($id);

        return view('moneda.edit', compact('moneda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MonedaRequest $request, Moneda $moneda): RedirectResponse
    {
        $moneda->update($request->validated());

        return Redirect::route('monedas.index')
            ->with('success', 'Moneda updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Moneda::find($id)->delete();

        return Redirect::route('monedas.index')
            ->with('success', 'Moneda deleted successfully');
    }
}
