<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna memiliki rolwebe_id = 1 (Admin)
        if ($request->user() && $request->user()->role_id != 1) {
            abort(403, 'Unauthorized.'); // Akses ditolak jika bukan Admin
        }

        return $next($request);
    }
}
