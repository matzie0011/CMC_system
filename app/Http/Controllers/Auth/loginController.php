<?php

/// LoginController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Fetch the serial number from the user details table
            $user_details = $user->user_details; // Assuming you have a one-to-one relationship

            if ($user_details) {
                $serial_number = $user_details->serial_number;

                // Optionally, log or use the serial number as needed
                Log::info("User {$user->email} has serial number {$serial_number}");

                // Redirect to a specific route, e.g., dashboard
                return redirect()->route('Homepage_profile.blade.php');
            } else {
                // Handle the case where user details are not found
                Auth::logout();
                return redirect()->back()->withErrors(['error' => 'User details not found']);
            }
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }
    }
}
