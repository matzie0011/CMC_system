<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Models\UserDetail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // $request->authenticate();

        // $request->session()->regenerate();
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        $credentials = $request->only('email', 'password');
        Log::info($credentials);
        if (Auth::attempt($credentials)) {
            Log::info("true");  
            $user = Auth::user();
            $email = $user->email;
        
            // Check if user exists in UserDetails table
            $userDetails = UserDetail::where('email', $user->email)->first();
            if ($userDetails) {
                // User exists in UserDetails table, proceed
                $request->session()->regenerate();     
                return redirect()->route('user_profile', ['email' => $email]);
            } else {
                Log::info("false");
                return redirect()->route('crud.index');
                // Alternatively, you can handle the case where user details are not found:
                // Auth::logout();
                // return redirect()->back()->withErrors([
                //     'email' => 'User details not found.',
                // ]);
            }
        } else {
            // Wrong credentials, display error with Swal
            return back()->with('error', 'Wrong credentials.');
        }
        
        // return redirect()->route('crud.index');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function destroy_admin(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin_login');
    }
}
