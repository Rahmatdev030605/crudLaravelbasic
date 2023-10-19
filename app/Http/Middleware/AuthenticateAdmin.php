<?php

namespace App\Http\Middleware;
use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) : Response
    {
        if ($request->input('token') !== 'my-screet-token') {
            return redirect('homepage');
        }
        return $next($request);
    }
}
