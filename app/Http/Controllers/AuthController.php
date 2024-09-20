<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;

class AuthController extends Controller
{
    public function admin_login(Request $request)
    {
        Log::info("Admin AuthController - Login attempt");

        // Validate the incoming request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Extract credentials from the request
        $credentials = $request->only('username', 'password');
        
        Log::info('Login credentials', $credentials);

        // Find the admin by username
        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Password matches
            // Log the admin in and redirect
            Auth::login($admin);
            return redirect()->intended('admin_dashboard')->with([
                'swal' => [
                    'title' => 'Success!',
                    'text' => 'You are now logged in.',
                    'icon' => 'success'
                ]
            ]);
        } else {
            // Authentication failed
            return redirect()->back()->withErrors([
                'admin_login' => 'Invalid credentials. Please try again.',
            ])->with([
                'swal' => [
                    'title' => 'Error!',
                    'text' => 'Invalid credentials. Please try again.',
                    'icon' => 'error'
                ]
            ]);
        }
    }
}
