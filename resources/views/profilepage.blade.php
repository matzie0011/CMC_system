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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .header {
        background-color: #343a40;
        color: #ffffff;
        padding: 0.5rem 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header .navbar-brand {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .profile-img {
        height: 200px;
        width: 200px;
        object-fit: cover;
    }

    .btn-custom {
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 14px;
        margin-left: 5px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-complete {
        background: linear-gradient(90deg, #28a745, #218838);
        color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .btn-complete:hover {
        background: linear-gradient(90deg, #218838, #28a745);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
    }

    .btn-incomplete {
        background: linear-gradient(90deg, #dc3545, #c82333);
        color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .btn-incomplete:hover {
        background: linear-gradient(90deg, #c82333, #dc3545);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
    }

    .embed-responsive {
        position: relative;
        height: 0;
        padding-bottom: 56.25%;
        overflow: hidden;
        max-width: 100%;
        background-color: #000;
        border: 1px solid #ddd;
    }

    .embed-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .section-header {
        margin-bottom: 1.5rem;
        border-bottom: 2px solid #007bff;
        padding-bottom: .5rem;
        font-weight: bold;
    }

    .section {
        margin-bottom: 2rem;
        background: #ffffff;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: bold;
    }

    .footer {
        background-color: #343a40;
        color: #ffffff;
        padding: 1rem;
        box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
    }

    .footer .social-icons a {
        color: #ffffff;
        margin: 0 10px;
        font-size: 1.5rem;
    }

    .footer .social-icons a:hover {
        opacity: 0.8;
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
        text-decoration: none;
        color: white;
    }

    .step-label {
        font-size: 12px;
    }
    .remarks-container {
    margin-top: 20px;
    font-weight: bold;
}

.remarks-input {
    width: 50%;

    padding: 1px;
    border: 1px solid #ccc;
    border-radius: 4px;

}

.footer {
    background-color: #000;
    /* Set footer background color to black */
    color: #ffffff;
    /* Set text color to white */
    padding: 1rem;
    /* Adjust padding as needed */
    font-family: 'Arial', sans-serif;
    /* Change font family */
    font-size: 14px;
    /* Set font size */
}

.social-icons a {
    color: #ffffff;
    /* Set social icon color to white */
    margin: 0 10px;
    /* Adjust spacing between icons */
    font-size: 1.5rem;
    /* Adjust size as needed */
}

.social-icons .gmail-icon {
    color: #DB4437;
    /* Gmail color */
}

.social-icons a:hover {
    opacity: 0.8;
    /* Slight hover effect */
}
.embed-responsive {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
    border: 1px solid #ccc; /* Optional: Add a border */
}

.responsive-iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none; /* Remove default border */
}

    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Profile </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('admin_dashboard') }}">Dash Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('tables') }}">Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                @php($photo = CrudController::UserDetails2by2($data->serial_number))
                <img src="{{ asset('uploads/picture/'.$photo) }}" class="img-fluid rounded-circle profile-img mb-3">
                <h2>{{$data->fname}}</h2>
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

                <section id="section-profile" class="section">
                    <h3 class="section-header">Personal Information</h3>
                    @if (isset($data))
                    <div class="row">
                        @foreach ([
                        'Serial Number' => $data->serial_number,
                        'Rank' => $data->rank,
                        'Unit Assignment' => $data->unit_assignment,
                        'Coast Guard Officers Class' => $data->cgoc,
                        'Date of Call Active Duty' => $data->date_of_cad,
                        'Date of Last Promotion' => $data->date_of_last_promotion,
                        'Last Name' => $data->lname,
                        'First Name' => $data->fname,
                        'Middle Name' => $data->mname,
                        'Name Extension' => '',
                        'Date of Birth' => $data->date_of_birth,
                        'Age' => $data->age,
                        'Permanent Address' => $data->permanent_address,
                        'Contact Number' => $data->contact_number,
                        'Email' => $data->email
                        ] as $label => $value)
                        <div class="col-md-4 mb-3">
                            <label class="form-label">{{$label}}:</label>
                            @if ($label === 'Date of Birth')
                            <input type="date" id="date_of_birth" class="form-control" value="{{ $value }}" readonly>
                            @elseif ($label === 'Age')
                            <input type="text" id="age" class="form-control" value="{{ $value }}" readonly>
                            @else
                            <input type="text" class="form-control" value="{{ $value }}" readonly>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    @else
                    <h1>No user found.</h1>
                    @endif

                </section>

                </section>

                <section id="section-preferences" class="section">
                    <h3 class="section-header">Educational Background</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">School/University:</label>
                            <input type="text" class="form-control" value="{{ $data->college_school }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Degree:</label>
                            <input type="text" class="form-control" value="{{ $data->course }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Date of Attendance:</label>
                            <input type="text" class="form-control" value="{{ $data->date_of_attendance }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Year Graduated:</label>
                            <input type="text" class="form-control" value="{{ $data->year_graduated }}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Eligibility:</label>
                            <input type="text" class="form-control" value="{{ $data->certificate_of_eligibility }}"
                                readonly>
                        </div>
                    </div>
                </section>

                <section id="section-attachments" class="section">
                <h3 class="section-header">Attachments</h3>
<div class="container mt-4">
    <div class="mb-1">
        <label for="whole_body" class="form-label">
            <h4>Whole Body Picture:</h4>
        </label>
        <input type="checkbox" id="whole_body" name="whole_body" class="custom-checkbox">
        <label>Incorrect Attachment</label>
       
    
        <div class="embed-responsive">
            @php($whole_body = CrudController::UserDetailsWholeBody($data->serial_number))
            <iframe src="{{ asset('uploads/whole_body/'.$whole_body) }}" frameborder="0" class="responsive-iframe"></iframe>
        </div>
    </div>
</div>

                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>National Bureau of Investigation Clearance:</h4>
                            </label>
                                <input type="checkbox" id="nbi_clearance" name="nbi_clearance" class="custom-checkbox">
                                <label>Incorrect Attachment</label>
                                <div class="embed-responsive">
                                @php($nbi_clearance = CrudController::nbi_clearance($data->serial_number))
                                <iframe class="embed-responsive-item"
                                    src="{{ asset('uploads/nbi_clearance/'.$nbi_clearance) }}"class="responsive-iframe"
                                    frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>Updated Summary of Information:</h4>
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($updated_soi = CrudController::updated_soi($data->serial_number))
                                <iframe class="embed-responsive-item"
                                    src="{{ asset('uploads/updated_soi/'.$updated_soi) }}" class="responsive-iframe"
                                    frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>Ombudsman Clearance:</h4>
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($ombudsman_clearance = CrudController::ombudsman_clearance($data->serial_number))
                                <iframe class="embed-responsive-item"
                                    src="{{ asset('uploads/ombudsman_clearance/'.$ombudsman_clearance) }}"
                                    class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>Sandigan Bayan Clearance:</h4>
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($sandigan_bayan_clearance =
                                CrudController::sandigan_bayan_clearance($data->serial_number))
                                <iframe class="embed-responsive-item"
                                    src="{{ asset('uploads/sandigan_bayan_clearance/'.$sandigan_bayan_clearance) }}"
                                    class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>Latest Officer Fitness Report-1:</h4>
                                
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($ofrs1 = CrudController::ofrs1($data->serial_number))
                                <iframe class="embed-responsive-item" src="{{ asset('uploads/ofrs1/'.$ofrs1) }}"
                                class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>Latest Officer Fitness Report-2:</h4>
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($ofrs2 = CrudController::ofrs2($data->serial_number))
                                <iframe class="embed-responsive-item" src="{{ asset('uploads/ofrs2/'.$ofrs2) }}"
                                class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                            
                                <h4>Latest Officer Fitness Report-3:</h4>
                             
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($ofrs3 = CrudController::ofrs3($data->serial_number))
                                <iframe class="embed-responsive-item" src="{{ asset('uploads/ofrs3/'.$ofrs3) }}"
                                class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                         
                                <h4>Certificate of Non-Enlistment:</h4>
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($certificate_of_non_enlistment =
                                CrudController::certificate_of_non_enlistment($data->serial_number))
                                <iframe class="embed-responsive-item"
                                    src="{{ asset('uploads/certificate_of_non_enlistment/'.$certificate_of_non_enlistment) }}"
                                    class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">
                                <h4>Certificate of Career Course Completion:</h4>
                              
                            </label>
                            <input type="checkbox" id="" name="" class="custom-checkbox">
                            <label>Incorrect Attachment</label>
                            <div class="embed-responsive">
                                @php($certificate_of_career_course =
                                CrudController::certificate_of_career_course($data->serial_number))
                                <iframe class="embed-responsive-item"
                                    src="{{ asset('uploads/certificate_of_career_course/'.$certificate_of_career_course) }}"
                                    class="responsive-iframe" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section text-center">
                    <div class="remarks-container">
                        <label for="remarks">Remarks:</label>
                        <textarea id="remarks" rows="4" placeholder="Enter your remarks here..."
                            class="remarks-input"></textarea>
                            
                    </div>
                    
                    <button class="btn-custom btn-complete">Approved</button>
                    <button class="btn-custom btn-incomplete">Disapproved</button>

                </section>
            </div>
        </div>
    </main>
    <footer class="footer text-center">
        © 2023 CMC. All Rights Reserved.
        <div class="social-icons mt-2">
            <!-- <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-instagram"></a>-->
            <a href="mailto:contact@cmc.com" class="fab fa-google"></a> <!-- Added Gmail icon -->
            <a href="mailto:contact@cmc.com" class="fas fa-phone"></a>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

        // Update age when date of birth changes
        dateOfBirthInput.addEventListener('change', updateAge);
    });
    </script>
</body>

</html>