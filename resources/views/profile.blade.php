<?php

use App\Http\Controllers\CrudController;
use App\Models\UserDetail;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    .navbar-brand {
        font-weight: bold;
    }

    .btn-logout {
        color: #fff;
        border: none;
        background: none;
    }

    .btn-logout:hover {
        color: #dc3545;
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header class="bg-dark text-white text-center py-0">
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">MyApp</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">


                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"
                            href="{{ route('attachments', ['data' => $data->serial_number]) }}">Attachments</a>
                    </li>
                    <!-- Add more navigation items here -->
                </ul>

                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    @if (session('message'))
    <script>
    Swal.fire({
        title: 'Attachment Success!',
        text: '{{ session('
        message ') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    </script>
    @endif
    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
            @php($photo = CrudController::UserDetails2by2($data->serial_number))

                <img src="{{ asset('uploads/picture/'.$photo) }}" class="img-fluid rounded-circle mb-3"
                    style="height:200px; width:200px;">
                <h2>{{ $data->fname }}</h2>
                <p class="text-muted">Verified</p>
            </div>
            <div class="col-md-8">
                <section class="mb-4">
                    <h3>Personal Information</h3>
                    <div class="mb-3">
                        <label for="serial_number" class="form-label">Serial Number:</label>
                        <input type="text" id="serial_number" class="form-control" value="{{ $data->serial_number }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label for="rank" class="form-label">Rank:</label>
                        <input type="text" id="rank" class="form-control" value="{{ $data->rank }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" id="lname" class="form-control" value="{{ $data->lname }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" id="fname" class="form-control" value="{{ $data->fname }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Middle Name:</label>
                        <input type="text" id="mname" class="form-control" value="{{ $data->mname }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="unit_assignment" class="form-label">Unit Assignment:</label>
                        <input type="text" id="unit_assignment" class="form-control"
                            value="{{ $data->unit_assignment }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="date_of_cad" class="form-label">Date of Call Active Duty:</label>
                        <input type="text" id="date_of_cad" class="form-control" value="{{ $data->date_of_cad}}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_last_promotion" class="form-label">Date of Last Promotion:</label>
                        <input type="text" id="date_of_last_promotion" class="form-control"
                            value="{{ $data->date_of_last_promotion }}" readonly>
                    </div>
                    <!-- Hidden Date of Birth Field -->
                    <div class="mb-3 d-none">
                        <label for="date_of_birth" class="form-label">Date of Birth:</label>
                        <input type="text" id="date_of_birth" class="form-control" value="{{ $data->date_of_birth }}"
                            readonly>
                    </div>

                    <!-- Field for displaying the age -->
                    <div class="mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input id="age" class="form-control" type="text" readonly />
                    </div>

                    <!-- Script for age calculation -->
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const dateOfBirthInput = document.getElementById('date_of_birth');
                        const ageInput = document.getElementById('age');

                        function calculateAge(dateOfBirth) {
                            const today = new Date();
                            const dob = new Date(dateOfBirth);
                            let age = today.getFullYear() - dob.getFullYear();
                            const monthDifference = today.getMonth() - dob.getMonth();

                            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob
                                .getDate())) {
                                age--;
                            }

                            return age;
                        }

                        function updateAge() {
                            const dobValue = dateOfBirthInput.value;
                            if (dobValue) {
                                const age = calculateAge(dobValue);
                                ageInput.value = age;
                            } else {
                                ageInput.value = '';
                            }
                        }

                        // Trigger age calculation on page load
                        updateAge();
                    });
                    </script>

                    <div class="mb-3">
                        <label for="permanent_address" class="form-label">Permanent Address:</label>
                        <input type="text" id="permanent_address" class="form-control"
                            value="{{ $data->permanent_address }}" readonly>
                    </div>

                    <h3>Contact Details</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" value="{{ $data->email }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="tel" id="phone" class="form-control" value="{{ $data->contact_number }}" readonly>
                    </div>
                </section>
                <section>
                    <h3>Educational Background</h3>
                    <div class="mb-3">
                        <label for="college_school" class="form-label">Name of School:</label>
                        <input type="text" id="college_school" class="form-control" value="{{ $data->college_school }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Degree:</label>
                        <input type="text" id="course" class="form-control" value="{{ $data->course }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_attendance" class="form-label">College Date of Attendance:</label>
                        <input type="text" id="date_of_attendance" class="form-control"
                            value="{{ $data->date_of_attendance }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="year_graduated" class="form-label">Year Graduated:</label>
                        <input type="text" id="year_graduated" class="form-control" value="{{ $data->year_graduated }}"
                            readonly>
                    </div>
                </section>
                <section>
                    <h3>Attachment/Certificate</h3>
                    <div class="container mt-5">
                        @php($photo = CrudController::UserDetails2by2($data->serial_number))


                        <label for="" class="form-label">2by2 Picture:</label>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="{{ asset('uploads/picture/'.$photo) }}" width="600" height="850"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <label for="" class="form-label">Whole Body Picture:</label>
                        <div class="embed-responsive embed-responsive-16by9">

                            @php($whole_body = CrudController::UserDetailsWholeBody($data->serial_number))
                            <iframe src="{{ asset('uploads/whole_body/'.$whole_body) }}" width="600" height="850"
                                frameborder="0"></iframe>
                            <!-- <iframe class="pdf-viewer" src="{{ asset('storage/uploads/whole_body/CGDRAFTEE_01_Whole Body Picture.pdf') }}" frameborder="0" width="100%" height="600"></iframe> -->
                        </div>
                    </div>
                    @php($updated_soi = CrudController::updated_soi($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Updated Summary of Information:</label>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="{{ asset('uploads/updated_soi/'.$updated_soi) }}" width="600" height="850"
                                frameborder="0"></iframe>
                            <!--  <iframe src="{{ asset('images/whole.pdf') }}" width="600" height="850" frameborder="0"></iframe> -->
                        </div>

                        <div class="container mt-5">
                            @php($nbi_clearance = CrudController::nbi_clearance($data->serial_number))
                            <label for="" class="form-label"> National Beaureu of Investigation Clearance:</label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ asset('uploads/nbi_clearance/'.$nbi_clearance) }}" width="600"
                                    height="850" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="container mt-5">
                            @php($ombudsman_clearance = CrudController::ombudsman_clearance($data->serial_number))
                            <label for="" class="form-label"> Ombudsman Clearance:</label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ asset('uploads/ombudsman_clearance/'.$ombudsman_clearance) }}"
                                    width="600" height="850" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="container mt-5">
                            @php($sandigan_bayan_clearance =
                            CrudController::sandigan_bayan_clearance($data->serial_number))
                            <label for="" class="form-label"> Sandigan Bayan Clearance:</label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ asset('uploads/sandigan_bayan_clearance/'.$sandigan_bayan_clearance) }}"
                                    width="600" height="850" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="container mt-5">
                            @php($ofrs1 = CrudController::ofrs1($data->serial_number))
                            <label for="" class="form-label">Latest Officer Fitness Report-1: </label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ asset('uploads/ofrs1/'.$ofrs1) }}" width="600" height="850"
                                    frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="container mt-5">
                            @php($ofrs2 = CrudController::ofrs2($data->serial_number))
                            <label for="" class="form-label"> Latest Officer Fitness Report-2:</label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ asset('uploads/ofrs2/'.$ofrs2) }}" width="600" height="850"
                                    frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="container mt-5">
                            @php($ofrs3 = CrudController::ofrs3($data->serial_number))
                            <label for="" class="form-label">Latest Officer Fitness Report-3: </label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe src="{{ asset('uploads/ofrs3/'.$ofrs3) }}" width="600" height="850"
                                    frameborder="0"></iframe>
                            </div>
                        </div>

                        <div class="container mt-5">
                            @php($certificate_of_non_enlistment =
                            CrudController::certificate_of_non_enlistment($data->serial_number))
                            <label for="" class="form-label"> Certificate of_Non-Enlistment:</label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe
                                    src="{{ asset('uploads/certificate_of_non_enlistment/'.$certificate_of_non_enlistment) }}"
                                    width="600" height="850" frameborder="0"></iframe>
                            </div>
                        </div>

                        <div class="container mt-5">
                            @php($certificate_of_career_course =
                            CrudController::certificate_of_career_course($data->serial_number))
                            <label for="" class="form-label">Certificate of Career Course: </label>
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe
                                    src="{{ asset('uploads/certificate_of_career_course/'.$certificate_of_career_course) }}"
                                    width="600" height="850" frameborder="0"></iframe>
                            </div>
                        </div>



                        <!-- Add other sections similarly -->
                </section>
                <section>


                    <form action="{{ route('profile.update', ['serial_number' => $data->serial_number]) }}"
                        method="POST">
                        @csrf
                        @method('GET')
                        <!-- Spoof the PUT method -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Update
                        </button>
                    </form>

            </div>
            </section>
        </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 cmc. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>