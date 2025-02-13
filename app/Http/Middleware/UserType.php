<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserType
{
    public function handle($request, Closure $next, $userType)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login.from');
        }

        // Check user type
        $user = Auth::user();

        // Allow access if the user type matches
        if ($user->type === $userType) {
            return $next($request);
        }

        // Otherwise, deny access
        return redirect()->route('unauthorized');
    }
}

