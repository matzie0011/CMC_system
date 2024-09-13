<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function admin_login(Request $request)
    {
        Log::info("Admin AuthController");

        // Validate the incoming request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        Log::info($request);
        // Extract credentials from the request
        $credentials = $request->only('username', 'password');

        Log::info($credentials);
        // Check if an admin record exists with the provided credentials
        $admin = Admin::where('username', $credentials['username'])->first();

        Log::info($admin);
        if ($admin) {
            // Authentication passed
            // Optionally, you can return the first admin record here if needed
            // return redirect()->intended('admin_dashboard'); // Redirect to the dashboard

            return view('admin_dashboard', ['admin' => $admin]);
        } else {

            // Authentication failed
            return redirect()->back()->withErrors([
                'admin_login' => 'Invalid credentials. Please try again.',
            ]);
        }
    }
}
