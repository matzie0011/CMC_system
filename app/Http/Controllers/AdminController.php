<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all admin records from the database
        $admins = Admin::all();

        // Pass the data to the view
        return view('admin.index', ['admins' => $admins]);
    }
}
