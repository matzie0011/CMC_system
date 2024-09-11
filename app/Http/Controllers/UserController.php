<?php
namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
   //  ADMIN user viewing working 
    public function show(Request $request)
    {   
        // Retrieve the serial_number from the query string
        $serial_number = $request->query('serial_number');

        // Fetch the user data from the database
        $data = UserDetail::where('serial_number', $serial_number)->first();

        // Handle the case where no user is found
        if (!$data) {
            return redirect()->route('notfound');
        }

        // Return the view with the data
        return view('profilepage', compact('data'));
    }
}

// testing for login and fecth the users info  
//use App\Models\User;

//$userId =   2;
//$user_details     =   user_details;  
//$serial_number =   $user_details ->serial_number;
//$email   = ; 

//$user = User::find($userId);

//if ($email ==> $serial_number) { 
    // User found

    //$redirectUrl = route('profilepage');

//} else {
    // User not found
    //return view(['message' => 'User not found'], 404);
//}
