<?php

namespace App\Http\Controllers;
use App\Models\Listedespatients;
use Illuminate\Http\Request;

class DashboardDoctorController extends Controller
{
// Afficher le tableau de bord
public function index()
{
    // Récupérer les statistiques
    $totalPatients = Listedespatients::count();
    $totalAnomalies = 23; // Remplacez par une logique pour calculer les anomalies
    $totalReports = 45; // Remplacez par une logique pour calculer les rapports

    return view('dashboard', compact('totalPatients', 'totalAnomalies', 'totalReports'));
}}