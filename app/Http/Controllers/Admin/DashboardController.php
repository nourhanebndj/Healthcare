<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Récupérer le nombre total de spécialités
        $totalSpecialities = Speciality::count();
        dd($totalSpecialities);

        // Passer les données à la vue
        return view('admin.dashboard', compact('totalSpecialities'));

    }
}