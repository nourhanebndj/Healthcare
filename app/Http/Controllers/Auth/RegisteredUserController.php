<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Afficher la page d'inscription.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Gérer la requête d'inscription.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:doctors,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:20'],
            'specialty' => ['required', 'string', 'max:100'], 
            'opening_time' => ['required', 'date_format:H:i'], 
            'closing_time' => ['required', 'date_format:H:i'], 
            'working_days' => ['required', 'array'], // Validation des jours de travail
            'working_days.*' => ['in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday'], 
        ]);

        // Créer un nouvel utilisateur
        $user = Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'specialty' => $request->specialty, 
            'working_hours' => json_encode([
                'opening_time' => $request->opening_time,
                'closing_time' => $request->closing_time
            ]), 
            'working_days' => json_encode($request->working_days), // Stocker les jours en JSON
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}