<?php

// app/Http/Middleware/CheckUserType.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    public function handle($request, Closure $next, $userType)
    {
        if (!Auth::check() || Auth::user()->user_type !== $userType) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}

