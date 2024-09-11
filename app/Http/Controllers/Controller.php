<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
abstract class Controller
{
    //
}

class SerialNumberController extends Controller
{
    public function checkSerialNumber(Request $request)
    {
        // Login direct to profile page
        
        $serialNumber = $request->input('serial_number');

        $exists = DB::table('user_details')
                    ->where('serial_number', $serialNumber)
                    ->exists();

        if ($exists) {
            // Serial number exists
            return redirect('/profilepage');
        } else {
            // Serial number does not exist
            return redirect('/login'); // Redirect to a different 
        }
    }

// 28-05-24 




}