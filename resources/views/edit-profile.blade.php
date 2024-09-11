<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{  asset('uploads/picture/photo.png') }}" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="height:200px; width:200px;">
                <p class="text-muted">Verified</p>
            </div>
            <div class="col-md-8">
                <h2>Edit Profile</h2>
                <form id="updateProfileForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Form fields (now populated) -->
                    <div class="mb-3">
                        <label for="serial_number" class="form-label">Serial Number:</label>
                        <input type="text" id="serial_number" name="serial_number" class="form-control" value="{{ $user->serial_number ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="rank" class="form-label">Rank:</label>
                        <input type="text" id="rank" name="rank" class="form-control" value="{{ $user->rank ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" id="lname" name="lname" class="form-control" value="{{ $user->lname ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" id="fname" name="fname" class="form-control" value="{{ $user->fname ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Middle Name:</label>
                        <input type="text" id="mname" name="mname" class="form-control" value="{{ $user->mname ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="unit_assignment" class="form-label">Unit Assignment:</label>
                        <input type="text" id="unit_assignment" name="unit_assignment" class="form-control" value="{{ $user->unit_assignment ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_last_promotion" class="form-label">Date of Last Promotion:</label>
                        <input type="text" id="date_of_last_promotion" name="date_of_last_promotion" class="form-control" value="{{ $user->date_of_last_promotion ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth:</label>
                        <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ $user->date_of_birth ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="permanent_address" class="form-label">Permanent Address:</label>
                        <input type="text" id="permanent_address" name="permanent_address" class="form-control" value="{{ $user->permanent_address ?? '' }}">
                    </div>

                    <!-- Educational Background Section -->
                    <section>
                        <h3>Educational Background</h3>
                        <div class="mb-3">
                            <label for="college_school" class="form-label">Name of School:</label>
                            <input type="text" id="college_school" name="college_school" class="form-control" value="{{ $user->college_school ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Degree:</label>
                            <input type="text" id="course" name="course" class="form-control" value="{{ $user->course ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="date_of_attendance" class="form-label">College Date of Attendance:</label>
                            <input type="text" id="date_of_attendance" name="date_of_attendance" class="form-control" value="{{ $user->date_of_attendance ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="year_graduated" class="form-label">Year Graduated:</label>
                            <input type="text" id="year_graduated" name="year_graduated" class="form-control" value="{{ $user->year_graduated ?? '' }}">
                        </div>
                    </section>

                    <!-- Attachments Section -->
                    <section>
                        <h3>Attachment</h3>

                            <!-- 2x2 Picture -->
                            <div class="mb-3">
                                <label for="" class="form-label">2x2 Picture</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/picture/' . $user->picture) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="two_by_two_picture">
                            </div>

                            <!-- Whole Body Picture -->
                            <div class="mb-3">
                                <label for="" class="form-label">Whole Body Picture</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/whole_body/' . $user->whole_body) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="whole_body">
                            </div>

                            <!-- NBI Clearance -->
                            <div class="mb-3">
                                <label for="" class="form-label">NBI Clearance</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/nbi_clearance/' . $user->nbi_clearance) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="nbi_clearance">
                            </div>

                            <!-- Ombudsman Clearance -->
                            <div class="mb-3">
                                <label for="" class="form-label">Ombudsman Clearance</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/ombudsman_clearance/' . $user->ombudsman_clearance) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="ombudsman_clearance">
                            </div>

                            <!-- Sandigan Bayan Clearance -->
                            <div class="mb-3">
                                <label for="" class="form-label">Sandigan Bayan Clearance</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/sandigan_bayan_clearance/' . $user->sandigan_bayan_clearance) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="sandigan_bayan_clearance">
                            </div>
                             <!-- Latest Officer Fitness Report1 -->
                             <div class="mb-3">
                                <label for="" class="form-label">Latest Officer Fitness Report</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/ofrs1/' . $user->ofrs1) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="ofrs1">
                            </div>
                             <!-- Latest Officer Fitness Report2 -->
                             <div class="mb-3">
                                <label for="" class="form-label">Latest Officer Fitness Report</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/ofrs2/' . $user->ofrs2) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="ofrs2">
                            </div>
                             <!-- Latest Officer Fitness Report3 -->
                             <div class="mb-3">
                                <label for="" class="form-label">Latest Officer Fitness Report</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/ofrs3/' . $user->ofrs3) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="ofrs3">
                            </div>
                            <!-- Certificate of Non-Enlistment -->
                            <div class="mb-3">
                                <label for="" class="form-label">Certificate of Non-Enlistment</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/certificate_of_non_enlistment/' . $user->certificate_of_non_enlistment) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="certificate_of_non_enlistment">
                            </div>
                            <!-- Certificate of Non-Enlistment -->
                            <div class="mb-3">
                                <label for="" class="form-label">Certificate of Career Course</label>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="pdf-viewer" src="{{  asset('uploads/certificate_of_career_course/' . $user->certificate_of_career_course) }}" frameborder="0" style="width:100%; height:750px;"></iframe>
                                </div>
                                <input type="file" class="form-control mt-2" name="certificate_of_career_course">
                            </div>




                            
                            <!-- Add other attachments here in the same manner -->
                        </section>
                        <!-- Attachments code -->
                    </section>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 MyApp. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#updateProfileForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                let formData = new FormData(this); // Create a FormData object with the form's data

                $.ajax({
                    method: "POST",
                    data: formData,
                    contentType: false, // Required for FormData
                    processData: false, // Required for FormData
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Profile Updated',
                            text: 'Your profile has been successfully updated!',
                        });
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = 'Failed to update profile.';

                        if (errors) {
                            errorMessage += '\n' + Object.values(errors).join('\n');
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMessage,
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>