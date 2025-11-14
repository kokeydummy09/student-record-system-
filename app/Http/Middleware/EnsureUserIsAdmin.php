<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if (! $user || ! ($user->is_admin ?? false)) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            
            return redirect()
                ->route('login') 
                ->with('error', 'You were signed out because you do not have admin access.');
        }
        return $next($request);
    }
}
