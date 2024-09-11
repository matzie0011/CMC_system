<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\UserDetail;
use App\Models\TblCertificate;

class CrudController extends Controller
{
    //
    public function tables(){

        $tables = UserDetail ::all();
         //dd($post);
          return view('tables', compact('tables'));
     
       } 
       
        public function index()
    {
        return view('crud.index');  // Assuming the view is located at resources/views/crud/index.blade.php
    }
    public static function UserDetailsWholeBody($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->whole_body;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function UserDetails2by2($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->picture;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function updated_soi($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->updated_soi;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function nbi_clearance($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->nbi_clearance;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function ombudsman_clearance($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->ombudsman_clearance;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function sandigan_bayan_clearance($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->sandigan_bayan_clearance;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function ofrs1($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->ofrs1;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function ofrs2($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->ofrs2;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function ofrs3($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->ofrs3;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function certificate_of_non_enlistment($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->certificate_of_non_enlistment;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }
    public static function certificate_of_career_course($serial_number)
    {
        $data = TblCertificate::where('serial_number', $serial_number)
            ->first();
        if (!empty($data)) {
            $value = $data->certificate_of_career_course;
            return $value;
        } else {
            $value = '';
            return $value;
        }
    }

    public function edit($serial_number)
{
    $data = UserDetail::where('serial_number', $serial_number)->first();
    
    if (!$data) {
        return redirect()->route('profile')->with('error', 'User not found.');
    }
    
    return view('edit-profile', compact('data'));
}

}
