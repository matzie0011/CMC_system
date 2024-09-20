<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravelCrud;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\PdfUploadController;
use App\Http\Controllers\SerialNumberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDetail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', function() { 
    return redirect('login');
});

//admin controller
Route::get('/admins', [AdminController::class, 'admin_login']);


Route::get('/dashboard', function () {
    $user = Auth::user(); // Fetch the authenticated user

    // Fetch user details using the authenticated user's email
    $userDetails = UserDetail::where('email', $user->email)->first();

    // Pass both user and userDetails to the view
    return view('crud.index', [
        'user' => $user,
        'userDetails' => $userDetails,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::post('/admin_logout', [AuthenticatedSessionController::class, 'destroy_admin'])->name('admin_logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('user_details', [laravelCrud::class,'index' ]);
Route::get('crud', [laravelCrud::class,'index' ]);
Route::post('add', [laravelCrud::class, 'add']);
Route::get('/user_profile/{email}', [ProfileController::class, 'show'])->name('user_profile');

// fetching
Route::get('/tables', [CrudController::class,'tables' ])->name('tables');
// add another page client)
Route::get('/clientprofile', function () {
    return view('clientprofile');
});
// file uploading
Route::post('/upload', 'FileController@upload')->name('upload.file');
// add another new reg)
Route::get('/newreg', function () {
    return view('newreg');
})->name('newreg');

// ABOUT PAGE)
Route::get('/about', function () {
    return view('about');
})->name('about');  

// ADMIN_LOGIN PAGE)
Route::get('/admin_login', function () {
    return view('admin_login');
})->name('admin_login');  

// ADMIN dashboard)
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->name('admin_dashboard');  

// edit-profile.blade.php)
Route::get('/edit-profile', function () {
    return view('edit-profile');
})->name('edit-profile');

// update
route::put('/profile/{id}', [ProfileController::class, 'update'])->name('update-profile');
Route::post('/update-profile/{serial_number}', [LaravelCrud::class, 'updateProfile'])->name('update-profile');


// attachment)
Route::get('/attachments', function () {
    return view('attachments');
})->name('attachments');  
// profile PAGE new)
Route::get('/profilepage', function () {
    return view('profilepage');
})->name('profilepage');  

// file  upload
Route::get('/upload', function () {
    return view('upload');
})->middleware(['auth'])->name('upload.form');

Route::post('/upload-files', [PdfUploadController::class, 'upload'])->name('upload-files');
Route::post('/upload', [PdfUploadController::class, 'store'])
    ->middleware(['auth'])
    ->name('upload.pdf');
//
// homepage_profile user)
Route::get('/Homepage_profile', function () {
    return view('Homepage_profile');
})->name('Homepage_profile');  
Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');
Route::post('/check-serial', [SerialNumberController::class, 'checkSerialNumber']);
Route::get('/profile1/{serial_number}', [ProfileController::class, 'show'])->name('profilepage1');
Route::get('/profilepage', [UserController::class, 'show'])->name('profilepage');
Route::get('/check-user/{userId}', [logincontroller::class, 'checkUser']);
// In routes/web.php

// Route to show the edit profile form
Route::get('/profile/edit/{serial_number}', [LaravelCrudController::class, 'edit'])->name('profile.edit');

// Route to handle profile update
Route::GET('/profile/{serial_number}/update', [ProfileController::class, 'edit'])->name('profile.update');
    
Route::get('/certificate/{id}', [YourController::class, 'show']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// admin login
Route::get('/admin_login', function () {
    return view('admin_login');
})->name('admin_login');

Route::post('/admin_login', [AuthController::class, 'admin_login'])->name('admin_login.post');

Route::get('/admin_dashboard', function () {
    return view('admin_dashboard'); // Create a dashboard view
})->middleware('auth')->name('admin_dashboard');

// DELIBERATION
Route::get('/deliberation', function () {
    return view('deliberation');
})->name('deliberation');

// MEDICAL
Route::get('/medical', function () {
    return view('medical');
})->name('medical');
// PFT
Route::get('/pft', function () {
    return view('pft');
})->name('pft');
// Verified
Route::get('/verified', function () {
    return view('verified');
})->name('verified');
// incomplete_req
Route::get('/incomplete', function () {
    return view('incomplete');
})->name('incomplete');
