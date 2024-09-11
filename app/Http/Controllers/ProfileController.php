<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Table; // Import your model
use App\Models\UserDetail;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

        $user = UserDetail::where('email', $request->user()->email)
            ->leftJoin('tbl_certificates', 'user_details.serial_number', '=', 'tbl_certificates.serial_number')
            ->select('user_details.*', 'tbl_certificates.*') // Select the columns you need
            ->first();

        // dd($user);
        return view('edit-profile', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::to('/');
    }

    // client individual viewing 
    public function show($email)
    {
        // Fetch the data from the database
        $data = UserDetail::where('email', $email)->first();

        // Check if data exists
        if (!$data) {
            abort(404); // or redirect to an error page or show a message
        }
        // Return a view with the data
        return view('profile', compact('data'));
    }

    // edit profilepage

}