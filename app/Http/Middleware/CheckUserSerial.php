<?php

// CheckSerialNumberMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSerialNumberMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            $userDetails = $user->userDetails;

            if ($userDetails && $userDetails->serial_number === 'expected_serial_number') {
                return $next($request);
            } else {
                return redirect()->route('error.page')->with('message', 'Serial number mismatch');
            }
        }

        return redirect()->route('login');
    }
}
