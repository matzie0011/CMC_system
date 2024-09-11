<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        
    button {
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 5px;
          
        }

        button.delete-btn {
            background-color: #dc3545;
        }

        button.update-btn {
            background-color: #28a745;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
   
<title>Profile Page</title>
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Profile Page</h1>
    </header>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
 

    @if (isset($data))
       <!-- <p><strong>Serial Number:</strong> {{ $data->serial_number }}</p>
        <p><strong>Name:</strong> {{ $data->lname }}</p>
        <p><strong>Email:</strong> {{ $data->fname }}</p>-->
        <!-- Add more fields as necessary -->
    @else
       <!-- <h1>No user Found.</h1>-->
    @endif
</body>
</html>


    
    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="cmc.png" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="height:200px; width:200px;">
                <h2>{{$data->fname}}</h2>
                <p class="text-muted">Verified</p>
            </div>
            <div class="col-md-8">
                <section class="mb-4">
                    <h3>Personal Information</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Serial Number:</label>
                        <input type="text" id="name" class="form-control" value=" {{ $data->serial_number }} " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Rank:</label>
                        <input type="text" id="name" class="form-control" value="  {{ $data->rank }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Unit Assignment:</label>
                        <input type="text" id="name" class="form-control" value=" {{ $data->unit_assignment }} " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Last Name:</label>
                        <input type="text" id="name" class="form-control" value="{{ $data->lname }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">First Name:</label>
                        <input type="text" id="name" class="form-control" value="{{ $data->fname }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Extension:</label>
                        <input type="text" id="name" class="form-control" value=" " readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Middle Name:</label>
                        <input type="text" id="name" class="form-control" value="{{ $data->mname }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Date of Last Promotion:</label>
                        <input type="text" id=" " class="form-control" value="{{ $data->date_of_last_promotion }}" readonly>
                    </div>
                    <!--
                    <div class="mb-3">
                        <label for="age" class="form-label">Years of Service:</label>
                        <input type="text" id="3 MONTS" class="form-control" value=" " readonly>
                    </div>
                    -->
                    <div class="mb-3">
                        <label for="age" class="form-label">Date of Birth:</label>
                        <input type="text" id=" " class="form-control" value="{{ $data->date_of_birth }}" readonly>
                    </div>            
                    <div class="mb-3">
                        <label for="location" class="form-label">Permanent Address:</label>
                        <input type="text" id="location" class="form-control" value=" {{ $data->permanent_address }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Contact Number :</label>
                        <input type="text" id="location" class="form-control" value=" {{ $data->contact_number }}" readonly>
                    </div>

                </section>
                <section>
                    <h3>Educational Background</h3>
                    <div class="mb-3">
                        <label for="college" class="form-label">Name of School:</label>
                        <input type="text" id="college" class="form-control" value="{{ $data->college_school }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Degree:</label>
                        <input type="tel" id="phone" class="form-control" value="{{ $data->course }}" readonly>
                    </div>
                     <div class="mb-3">
                        <label for="college" class="form-label">College Date of Attendance:</label>
                        <input type="text" id="college" class="form-control" value="{{ $data->date_of_attendance }}" readonly>
                     <div class="mb-3">
                        <label for="college" class="form-label">Year Graduated:</label>
                        <input type="text" id="college" class="form-control" value="{{ $data->year_graduated }}" readonly>
                    </div>
                    </div>
                </section>
                <section>
                    <h3>Attachment</h3>
                     <div class="container mt-5"><label for="" class="form-label"><h4>Whole Body Picture:</h4></label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="whole.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>

                    <div class="container mt-5"><label for="" class="form-label"><h4>NBI CLEARANCE:</h4></label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="nbi.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>

                    <div class="container mt-5"><label for="" class="form-label"><h4>UPDATED SOI:</h4></label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="d2.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label"><h4>OMBUDSMAN CLEARANCE:</label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="d1.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label">SANDIGAN BAYAN CLEARANCE:</labe>                  
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="d2.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label">LATEST OFFICER FITNESS REPORT-1:</label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="d1.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label">LATEST OFFICER FITNESS REPORT-2:</label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="trial.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label">LATEST OFFICER FITNESS REPORT-3:</label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="trial.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label">CERTIFICATE OF NON-ENLISTMENT:</label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="trial.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
                    <div class="container mt-5"><label for="" class="form-label">CERTIFICATE OF CAREER COURSE COMPLETION:</label>                    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="trial.pdf" style="height:500px; width:70%;" frameborder="0"></iframe>
                    </div>
    </div>
                
                  
                </section>
                <section>
                <center>
     <div class="container mt-5">
      
        
           <!-- <i class="fas fa-edit"></i> Edit -->
            <button class="update-btn">Complete</button></td>
            <button class="delete-btn">Incomplete</button></td>

        </button>
    </div>

  
    

                </section>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 cmc. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
