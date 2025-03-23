<?php

namespace App\Http\Controllers;

use App\Models\Listedespatients;
use Illuminate\Http\Request;

class ListedespatientsController extends Controller
{
    // Afficher la liste des patients
    public function index()
    {
        $patients = Listedespatients::all();
        return view('listedespatients.index', compact('patients'));
    }

    // Enregistrer un nouveau patient
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'phone' => 'required|string',
            'city' => 'required|string',
            'temperature' => 'required|numeric',
            'heart_rate' => 'required|integer',
            'oxygen_saturation' => 'required|integer',
        ]);

        Listedespatients::create($request->all());
        return redirect()->route('listedespatients.index')->with('success', 'Patient ajouté avec succès.');
    }

    // Mettre à jour un patient
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'phone' => 'required|string',
            'city' => 'required|string',
            'temperature' => 'required|numeric',
            'heart_rate' => 'required|integer',
            'oxygen_saturation' => 'required|integer',
        ]);

        $patient = Listedespatients::findOrFail($id);
        $patient->update($request->all());
        return redirect()->route('listedespatients.index')->with('success', 'Patient mis à jour avec succès.');
    }

    // Supprimer un patient
    public function destroy($id)
    {
        $patient = Listedespatients::findOrFail($id);
        $patient->delete();
        return redirect()->route('listedespatients.index')->with('success', 'Patient supprimé avec succès.');
    }
}