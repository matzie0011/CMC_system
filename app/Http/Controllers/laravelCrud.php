<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//for fetch
use App\Models\Post;
use App\Models\Crud;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Log;

class laravelCrud extends Controller
{
    function index()
    {
        return view('crud.index');
    }
    //FETCHING
    public function tables()
    {
        $post = Crud::all();
        return view('tables', compact('post'));
    }
    //END
    public function tbl()
    {
        $post = Post::all();
        return view('tables', compact('post'));
    }
    function add(Request $request)
    {
        // dd($request);
        //    $request->validate([
        //     'serial_number'         =>'required',
        //     'cgoc'                  =>'required',
        //     'unit_assignment'       =>'required',
        //     'lname'                 =>'required',
        //     'fname'                 =>'required',
        //     'mname'                 =>'required',
        //     'name_extention'        =>'required',
        //     'date_of_birth'         =>'required',
        //     'permanent_address'     =>'required',
        //     'contact_number'        =>'required',
        //     'college_school'        =>'required',
        //     'course'                =>'required',
        //     'date_of_attendance'    =>'required',
        //     'year_graduated'        =>'required',
        //     'certificate_of_eligibility'        =>'required',
        //     'date_of_last_promotion'=>'required',
        //     'date_of_cad'           =>'required',
        //     'picture' => 'required|file|mimes:pdf|max:2048', // Validate file type and size
        //     'rank'                  =>'required::crud'
        //    ]);
        Log::info('check registration');
        $encryptedPassword = md5($request->password);
        // Example of how to save data to database
        $file = $request->file('picture');
        //dd($file);
        //    $filePath = $file->store('attachments', 'public');
        //    $url = asset(str_replace('public', 'storage', $filePath));
        // Get the original file name
        //    $originalFilename = $file->getClientOriginalName();
        //    // Store the file with the original filename
        //    $filePath = $file->storeAs('attachments', $originalFilename, 'public'

        Log::info($request);
        $query = \DB::table('user_details')->insert([
            'serial_number'              => $request->input('serial_number'),
            'cgoc'                       => $request->input('cgoc'),
            'unit_assignment'            => $request->input('unit_assignment'),
            'lname'                      => $request->input('lname'),
            'fname'                      => $request->input('fname'),
            'mname'                      => $request->input('mname'),
            'email'                      => $request->input('email'),
            'name_extention'             => $request->input('name_extention'),
            'date_of_birth'              => $request->input('date_of_birth'),
            'permanent_address'          => $request->input('permanent_address'),
            'contact_number'             => $request->input('contact_number'),
            'college_school'             => $request->input('college_school'),
            'course'                     => $request->input('course'),
            'date_of_attendance'         => $request->input('date_of_attendance'),
            'year_graduated'             => $request->input('year_graduated'),
            'certificate_of_eligibility' => $request->input('certificate_of_eligibility'),
            'date_of_last_promotion'     => $request->input('date_of_last_promotion'),
            'date_of_cad'                => $request->input('date_of_cad'),
            'rank'                       => $request->input('rank')
        ]);


        Log::info('Serial Number:', ['serial_number' => $request->input('serial_number')]);

        // Fetch the data
        $data = UserDetail::where('user_details.serial_number', $request->input('serial_number'))
            // ->join('tbl_certificates', 'user_details.serial_number', '=', 'tbl_certificates.serial_number')
            // ->select('user_details.*', 'tbl_certificates.*') // Select columns from both tables
            ->first();

        // Log the result to debug
        Log::info('Query Result:', ['data' => $data]);

        // Check if data is found
        if ($data) {
            // Return or process the data as needed
            // For example, you could return it to a view or JSON response
            return view('profile', ['data' => $data]);
        } else {
            // Handle the case where no data is found
            return redirect()->back()->withErrors('No records found for the provided serial number.');
        }
        return view('profile', compact('data'));
        if ($query) {
            // Success message with SweetAlert
            return redirect()->route('add')->with('success', 'File uploaded successfully!');
        } else {
            // Error message with SweetAlert (optional)
            return redirect()->back()->with('error', 'Failed to upload file.');
        }
    }



    // UPDATE Profile 
    public function updateUser(Request $request, $serial_number)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'rank'                       => 'nullable|string',
            'lname'                      => 'nullable|string',
            'fname'                      => 'nullable|string',
            'mname'                      => 'nullable|string',
            'unit_assignment'            => 'nullable|string',
            'date_of_last_promotion'     => 'nullable|date',
            'date_of_birth'              => 'nullable|date',
            'permanent_address'          => 'nullable|string',
            'college_school'             => 'nullable|string',
            'course'                     => 'nullable|string',
            'date_of_attendance'         => 'nullable|date',
            'year_graduated'             => 'nullable|integer',
            'certificate_of_eligibility' => 'nullable|string',
            'date_of_cad'                => 'nullable|date',
            'picture'               => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Validate file type and size
        ]);
          // Retrieve the user from the database
       // $user = User::where('serial_number', $serial_number)->firstOrFail();

    // Update user fields
    // $user->rank = $validatedData['rank'] ?? $user->rank;
    // $user->lname = $validatedData['lname'] ?? $user->lname;
    // $user->fname = $validatedData['fname'] ?? $user->fname;
    // $user->mname = $validatedData['mname'] ?? $user->mname;
    // $user->unit_assignment = $validatedData['unit_assignment'] ?? $user->unit_assignment;
    // $user->date_of_last_promotion = $validatedData['date_of_last_promotion'] ?? $user->date_of_last_promotion;
    // $user->date_of_birth = $validatedData['date_of_birth'] ?? $user->date_of_birth;
    // $user->permanent_address = $validatedData['permanent_address'] ?? $user->permanent_address;
    // $user->college_school = $validatedData['college_school'] ?? $user->college_school;
    // $user->course = $validatedData['course'] ?? $user->course;
    // $user->date_of_attendance = $validatedData['date_of_attendance'] ?? $user->date_of_attendance;
    // $user->year_graduated = $validatedData['year_graduated'] ?? $user->year_graduated;
    // $user->certificate_of_eligibility = $validatedData['certificate_of_eligibility'] ?? $user->certificate_of_eligibility;
    // $user->date_of_cad = $validatedData['date_of_cad'] ?? $user->date_of_cad;


        


        // Fetch the existing user details
        $userDetail = UserDetail::where('serial_number', $serial_number)->first();

        if (!$userDetail) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Update the user details
        $updateData = $request->only([
            'rank',
            'lname',
            'fname',
            'mname',
            'unit_assignment',
            'date_of_last_promotion',
            'date_of_birth',
            'permanent_address',
            'college_school',
            'course',
            'date_of_attendance',
            'year_graduated',
            'certificate_of_eligibility',
            'date_of_cad'
        ]);





        
        // Handle file upload
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $originalFilename = $file->getClientOriginalName();
            $filePath = $file->storeAs('attachments', $originalFilename, 'public');
            $updateData['picture'] = $filePath; // Store file path in the update data
        }

        // Update the data in the database
        $updated = $userDetail->update($updateData);

        if ($updated) {
            return redirect()->route('profile')->with('success', 'Record updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update record.');
        }
    }

    //FILE UPLOADING ON ATTACHEMENTS
    public function edit($serial_number)
    {
        $data = UserDetail::where('serial_number', $serial_number)->first();

        if (!$data) {
            return redirect()->route('profile')->with('error', 'User not found.');
        }

        return view('edit-profile', compact('data'));
    }

    //FETCH WHOLE BODY



    //FILE UPLOADING ON ATTACHEMENTS
    public function store(Request $request)
    {
        $file = $request->file('picture');
        // Get the original file name
        $originalFilename = $file->getClientOriginalName();
        // Store the file with the original filename
        $filePath = $file->storeAs('attachments', $originalFilename, 'public');
        // Optionally, store $filePath in your database or perform other actions
        // return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}
