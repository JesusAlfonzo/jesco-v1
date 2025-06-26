<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $patients = Patient::paginate();

        return view('patient.index', compact('patients'))
            ->with('i', ($request->input('page', 1) - 1) * $patients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $patient = new Patient();

        return view('patient.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request): RedirectResponse
    {
        Patient::create($request->validated());

        return Redirect::route('patients.index')
            ->with('success', 'Patient created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $patient = Patient::find($id);

        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $patient = Patient::find($id);

        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, Patient $patient): RedirectResponse
    {
        $patient->update($request->validated());

        return Redirect::route('patients.index')
            ->with('success', 'Patient updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Patient::find($id)->delete();

        return Redirect::route('patients.index')
            ->with('success', 'Patient deleted successfully');
    }
}
