<?php

namespace App\Http\Controllers;

use App\Models\EstadoExamene;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EstadoExameneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EstadoExameneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $estadoExamenes = EstadoExamene::paginate();

        return view('estado-examene.index', compact('estadoExamenes'))
            ->with('i', ($request->input('page', 1) - 1) * $estadoExamenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $estadoExamene = new EstadoExamene();

        return view('estado-examene.create', compact('estadoExamene'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstadoExameneRequest $request): RedirectResponse
    {
        EstadoExamene::create($request->validated());

        return Redirect::route('estado-examenes.index')
            ->with('success', 'EstadoExamene created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $estadoExamene = EstadoExamene::find($id);

        return view('estado-examene.show', compact('estadoExamene'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $estadoExamene = EstadoExamene::find($id);

        return view('estado-examene.edit', compact('estadoExamene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstadoExameneRequest $request, EstadoExamene $estadoExamene): RedirectResponse
    {
        $estadoExamene->update($request->validated());

        return Redirect::route('estado-examenes.index')
            ->with('success', 'EstadoExamene updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        EstadoExamene::find($id)->delete();

        return Redirect::route('estado-examenes.index')
            ->with('success', 'EstadoExamene deleted successfully');
    }
}
