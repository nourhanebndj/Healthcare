<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié et a le rôle "admin"
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Redirige les utilisateurs non autorisés
        return redirect('/')->with('error', 'Vous n\'avez pas accès à cette page.');
    }
}