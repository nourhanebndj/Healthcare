<?php
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\DashboardController;



Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('specialities', SpecialityController::class);
});

// Route de test MongoDB
Route::get('/test-mongodb', function () {
    try {
        DB::connection('mongodb')->getMongoClient()->listDatabases();
        return "Connecté avec succès à MongoDB Atlas!";
    } catch (\Exception $e) {
        return "Erreur de connexion à MongoDB Atlas: " . $e->getMessage();
    }
});

// Route pour la page d'accueil
Route::get('/', function () {
    return view('index');
});

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Fichiers d'authentification
require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/patient-auth.php';