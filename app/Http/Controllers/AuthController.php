<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthController extends Controller
{
    public function admin_login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('about'); // Redirect to a dashboard or another route
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'admin_login' => 'Invalid credentials. Please try again.',
        ]);
    }
}
