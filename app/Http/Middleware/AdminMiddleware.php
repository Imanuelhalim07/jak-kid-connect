<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login DAN role-nya adalah 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect atau hentikan akses
        abort(403, 'Akses Ditolak. Anda bukan Admin.');
        // return redirect('/')->with('error', 'Anda tidak memiliki akses admin.');
    }
}
