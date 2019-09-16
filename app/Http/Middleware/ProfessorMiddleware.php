<?php

namespace App\Http\Middleware;

use Closure;

class ProfessorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Permite acesso somente para professores
        if (!Auth::user()->professor) {
            return redirect('home');
        }

        return $next($request);
    }
}
