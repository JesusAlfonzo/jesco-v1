<?php

namespace App\Http\Controllers;

use App\Models\Examene;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExameneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExameneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $examenes = Examene::paginate();

        return view('examene.index', compact('examenes'))
            ->with('i', ($request->input('page', 1) - 1) * $examenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $examene = new Examene();

        return view('examene.create', compact('examene'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExameneRequest $request): RedirectResponse
    {
        Examene::create($request->validated());

        return Redirect::route('examenes.index')
            ->with('success', 'Examene created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $examene = Examene::find($id);

        return view('examene.show', compact('examene'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $examene = Examene::find($id);

        return view('examene.edit', compact('examene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExameneRequest $request, Examene $examene): RedirectResponse
    {
        $examene->update($request->validated());

        return Redirect::route('examenes.index')
            ->with('success', 'Examene updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Examene::find($id)->delete();

        return Redirect::route('examenes.index')
            ->with('success', 'Examene deleted successfully');
    }
}
