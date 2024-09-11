<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\UserDetail;
use Illuminate\Support\Facades\File;

class PdfUploadController extends Controller
{
    public function upload(Request $request)
    {
        Log::info('Serial Number:', ['serial_number' => $request->input('serial_number')]);
        $request->validate([
            'picture' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'whole_body' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'updated_soi' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'nbi_clearance' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'ombudsman_clearance' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'sandigan_bayan_clearance' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'ofrs1' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'ofrs2' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'ofrs3' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'certificate_of_non_enlistment' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'certificate_of_career_course' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $fileUrls = [];

        foreach ($request->allFiles() as $key => $file) {
            if ($file) {
                $fileName = $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');
                $fileUrls[$key] = asset('storage/' . $filePath);
            }
        }
        $existingRecord = DB::table('tbl_certificates')->where('serial_number', $request->input('serial_number'))->first();

        if (!$existingRecord) {
            // Insert into tbl_certificate if record does not exist
            // Retrieve the serial number from the request
            $serialNumber = $request->input('serial_number');

            // Initialize an array to hold the file URLs
            $fileUrls = [];

            // List of all file inputs
            $fileInputs = [
                'picture',
                'whole_body',
                'updated_soi',
                'nbi_clearance',
                'ombudsman_clearance',
                'sandigan_bayan_clearance',
                'ofrs1',
                'ofrs2',
                'ofrs3',
                'certificate_of_non_enlistment',
                'certificate_of_career_course'
            ];

            // Loop through each file input
            // foreach ($fileInputs as $input) {
            //  if ($request->hasFile($input)) {
            //  $file = $request->file($input);
            //  $fileName = $serialNumber . '_' . $file->getClientOriginalName(); // Prepend serial number to the file name
            //  $filePath = $file->storeAs('uploads/' . $input, $fileName, 'public'); // Save the file in a folder named after the input
            //$fileUrls[$input] = Storage::url($filePath); // Get the URL to store in the database
            //}
            //  }

            // Loop through each file input
            $fileUrls = []; // Array to store file URLs

            foreach ($fileInputs as $input) {
                if ($request->hasFile($input)) {
                    $file = $request->file($input);
                    $fileName = $serialNumber . '_' . $file->getClientOriginalName(); // Prepend serial number to the file name

                    // Define the path to store in 'C:\Users\PC\cmc_system\public\uploads/[input]'
                    $destinationPath = public_path('uploads/' . $input);

                    // Create the directory if it doesn't exist
                    if (!File::exists($destinationPath)) {
                        File::makeDirectory($destinationPath, 0755, true);
                    }

                    // Move the file to 'public/uploads/[input]'
                    $file->move($destinationPath, $fileName);

                    // Generate the URL for the file to save into the database
                    $fileUrls[$input] = $fileName;
                }
            }

            // Insert the data into the database
            DB::table('tbl_certificates')->insert([
                'serial_number' => $serialNumber,
                'picture' => $fileUrls['picture'] ?? null,
                'whole_body' => $fileUrls['whole_body'] ?? null,
                'updated_soi' => $fileUrls['updated_soi'] ?? null,
                'nbi_clearance' => $fileUrls['nbi_clearance'] ?? null,
                'ombudsman_clearance' => $fileUrls['ombudsman_clearance'] ?? null,
                'sandigan_bayan_clearance' => $fileUrls['sandigan_bayan_clearance'] ?? null,
                'ofrs1' => $fileUrls['ofrs1'] ?? null,
                'ofrs2' => $fileUrls['ofrs2'] ?? null,
                'ofrs3' => $fileUrls['ofrs3'] ?? null,
                'certificate_of_non_enlistment' => $fileUrls['certificate_of_non_enlistment'] ?? null,
                'certificate_of_career_course' => $fileUrls['certificate_of_career_course'] ?? null,
            ]);

            $data = UserDetail::where('serial_number', $serialNumber)->first();
            $viewContent = view('profile', compact('data'))->render();

            Log::info('Saved', ['serial_number' => $request->input('serial_number')]);

            return response()->json([
                'message' => 'Files uploaded successfully!',
                'html' => $viewContent // Optionally include HTML content if needed
            ]);
        } else {
            Log::info('Record already exists in tbl_certificate', ['serial_number' => $request->input('serial_number')]);
            return back()->with('warning', 'Record already exists.');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf,jpeg,png,jpg,gif|max:9048', // Validate file type and size
        ]);

        if ($request->file('pdf')->isValid()) {
            $fileName = $request->file('pdf')->getClientOriginalName();
            $pdfPath = $request->file('pdf')->storeAs('pdfs', $fileName, 'public'); // Store the file with its original name

            return redirect()->back()->with('success', 'PDF uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Error uploading PDF.');
    }
}
