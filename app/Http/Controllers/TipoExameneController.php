<?php

namespace App\Http\Controllers;

use App\Models\TipoExamene;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoExameneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoExameneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoExamenes = TipoExamene::paginate();

        return view('tipo-examene.index', compact('tipoExamenes'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoExamenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoExamene = new TipoExamene();

        return view('tipo-examene.create', compact('tipoExamene'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoExameneRequest $request): RedirectResponse
    {
        TipoExamene::create($request->validated());

        return Redirect::route('tipo-examenes.index')
            ->with('success', 'TipoExamene created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoExamene = TipoExamene::find($id);

        return view('tipo-examene.show', compact('tipoExamene'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoExamene = TipoExamene::find($id);

        return view('tipo-examene.edit', compact('tipoExamene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoExameneRequest $request, TipoExamene $tipoExamene): RedirectResponse
    {
        $tipoExamene->update($request->validated());

        return Redirect::route('tipo-examenes.index')
            ->with('success', 'TipoExamene updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoExamene::find($id)->delete();

        return Redirect::route('tipo-examenes.index')
            ->with('success', 'TipoExamene deleted successfully');
    }
}
