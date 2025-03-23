<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Speciality;
use App\Http\Controllers\Controller;

class SpecialityController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();
        return view('admin.specialities', compact('specialities'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Speciality::create($request->all());

        return redirect()->route('specialities.index')->with('success', 'Spécialité ajoutée avec succès.');
    }

    public function update(Request $request, Speciality $speciality)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $speciality->update($request->all());

        return redirect()->route('specialities.index')->with('success', 'Spécialité mise à jour.');
    }

    public function destroy(Speciality $speciality)
    {
        // Supprimer la spécialité
        $speciality->delete();

        // Rediriger avec un message de succès
        return redirect()->route('specialities.index')->with('success', 'Spécialité supprimée avec succès.');
    }
    public function countSpecialities()
        {
            $totalSpecialities = Speciality::count();
            return response()->json(['totalSpecialities' => $totalSpecialities]);
        }
}