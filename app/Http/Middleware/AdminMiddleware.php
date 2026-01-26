<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Si l'utilisateur n'est pas connecté
        if (!Auth::check()) {
            return redirect()->route('login'); // jamais /admin !
        }

        // Si l'utilisateur n'est pas admin
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Accès réservé aux administrateurs.');
        }

        return $next($request);
    }
}
