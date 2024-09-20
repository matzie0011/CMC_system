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

    <!-- Load Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .steps-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step-container {
            position: relative;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .step-container:not(:last-child):after {
            content: '';
            position: absolute;
            top: 30%;
            left: 100%;
            width: 100px;
            border-top: 2px solid #ccc;
        }

        .step {
            width: 25px;
            height: 25px;
            line-height: 25px;
            border-radius: 50%;
            background-color: #ddd;
            text-align: center;
            display: inline-block;
            margin-bottom: 5px;
            font-size: 18px;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
        }

        .step-label {
            font-size: 12px;
        }

        .profile-img {
            height: 200px;
            width: 200px;
        }

        .container {
            margin-bottom: 30px;
        }

        .embed-responsive iframe {
            width: 100%;
            height: 850px;
        }

        footer {
            margin-top: 40px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header class="bg-dark text-white text-center py-2">
  
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('attachments', ['data' => $data->serial_number]) }}">Attachments</a>
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
        text: '{{ session('message') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    </script>
    @endif

    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                @php($photo = CrudController::UserDetails2by2($data->serial_number))
                <img src="{{ asset('uploads/picture/'.$photo) }}" class="img-fluid rounded-circle profile-img mb-3">
                <h2>{{ $data->fname }}</h2>
            </div>
            <div class="col-md-8">
                <div class="steps-container mb-4">
                    <div class="step-container">
                        <a href="#section-profile" class="step">1</a>
                        <div class="step-label">Submission</div>
                    </div>
                    <div class="step-container">
                        <a href="#section-preferences" class="step">2</a>
                        <div class="step-label">Verified</div>
                    </div>
                    <div class="step-container">
                        <a href="#section-notifications" class="step">3</a>
                        <div class="step-label">Medical</div>
                    </div>
                    <div class="step-container">
                        <a href="#section-subscriptions" class="step">4</a>
                        <div class="step-label">PFT</div>
                    </div>
                    <div class="step-container">
                        <a href="#section-other" class="step">5</a>
                        <div class="step-label">Deliberation</div>
                    </div>
                </div>


                <section class="mb-4">
                    <h3>Personal Information</h3>
                    <div class="mb-3">
                        <label for="serial_number" class="form-label">Serial Number:</label>
                        <input type="text" id="serial_number" class="form-control" value="{{ $data->serial_number }}" readonly>
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
                        <input type="text" id="unit_assignment" class="form-control" value="{{ $data->unit_assignment }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_cad" class="form-label">Date of Call Active Duty:</label>
                        <input type="text" id="date_of_cad" class="form-control" value="{{ $data->date_of_cad }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_last_promotion" class="form-label">Date of Last Promotion:</label>
                        <input type="text" id="date_of_last_promotion" class="form-control" value="{{ $data->date_of_last_promotion }}" readonly>
                    </div>
                    <!-- Hidden Date of Birth Field -->
                    <div class="mb-3 d-none">
                        <label for="date_of_birth" class="form-label">Date of Birth:</label>
                        <input type="text" id="date_of_birth" class="form-control" value="{{ $data->date_of_birth }}" readonly>
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

                            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
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
                        <input type="text" id="permanent_address" class="form-control" value="{{ $data->permanent_address }}" readonly>
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
                        <input type="text" id="college_school" class="form-control" value="{{ $data->college_school }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Degree:</label>
                        <input type="text" id="course" class="form-control" value="{{ $data->course }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_attendance" class="form-label">College Date of Attendance:</label>
                        <input type="text" id="date_of_attendance" class="form-control" value="{{ $data->date_of_attendance }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="year_graduated" class="form-label">Year Graduated:</label>
                        <input type="text" id="year_graduated" class="form-control" value="{{ $data->year_graduated }}" readonly>
                    </div>
                </section>

                <section>
                    <h3>Attachment/Certificate</h3>
                    @php($photo = CrudController::UserDetails2by2($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">2by2 Picture:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/picture/'.$photo) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <label for="" class="form-label">Whole Body Picture:</label>
                        <div class="embed-responsive">
                            @php($whole_body = CrudController::UserDetailsWholeBody($data->serial_number))
                            <iframe src="{{ asset('uploads/whole_body/'.$whole_body) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($updated_soi = CrudController::updated_soi($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Updated Summary of Information:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/updated_soi/'.$updated_soi) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($nbi_clearance = CrudController::nbi_clearance($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">National Bureau of Investigation Clearance:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/nbi_clearance/'.$nbi_clearance) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($ombudsman_clearance = CrudController::ombudsman_clearance($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Ombudsman Clearance:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/ombudsman_clearance/'.$ombudsman_clearance) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($sandigan_bayan_clearance = CrudController::sandigan_bayan_clearance($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Sandigan Bayan Clearance:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/sandigan_bayan_clearance/'.$sandigan_bayan_clearance) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($ofrs1 = CrudController::ofrs1($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Latest Officer Fitness Report-1:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/ofrs1/'.$ofrs1) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($ofrs2 = CrudController::ofrs2($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Latest Officer Fitness Report-2:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/ofrs2/'.$ofrs2) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($ofrs3 = CrudController::ofrs3($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Latest Officer Fitness Report-3:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/ofrs3/'.$ofrs3) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($certificate_of_non_enlistment = CrudController::certificate_of_non_enlistment($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Certificate of Non-Enlistment:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/certificate_of_non_enlistment/'.$certificate_of_non_enlistment) }}" frameborder="0"></iframe>
                        </div>
                    </div>

                    @php($certificate_of_career_course = CrudController::certificate_of_career_course($data->serial_number))
                    <div class="container mt-5">
                        <label for="" class="form-label">Certificate of Career Course:</label>
                        <div class="embed-responsive">
                            <iframe src="{{ asset('uploads/certificate_of_career_course/'.$certificate_of_career_course) }}" frameborder="0"></iframe>
                        </div>
                    </div>
                </section>

                <section>
                    <form action="{{ route('profile.update', ['serial_number' => $data->serial_number]) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Update
                        </button>
                    </form>
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
