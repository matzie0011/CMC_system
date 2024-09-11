<!DOCTYPE html>
<html>
<head>
<style>

.bg {
  /* The image used */
  background-image: url("{{ asset('images/cmcbg.png') }}");
  background-attachment: fixed;
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;

  
}
body {

  
}



</style>




<script>
    
    function showWelcomeAlert() {
        Swal.fire({
            title: 'Welcome!',
            text: 'Please fill up all necessary requirment',
            icon: 'info',
            confirmButtonText: 'Close'
        });
    }
    
    // Call the function to show the welcome alert when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        showWelcomeAlert();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<hr> 
<div class="container bootstrap snippet">
    <div class="row">
    
    <div class="row">
      <div class="col-sm-2"><!--left col-->
              
<!-- Image PROFILE AVATAR-->
      <div class="text-center">
       
    


      
     
      </div></hr><br> <!--
      <center>  &nbsp&nbsp <img src="cmc.png" class="bg"> </center> -->
        </div><!--/col-3-->
      <div class="col-sm-9">
<h3><u>REGISTRATION </u></h3>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                <li><a data-toggle="tab" href="#messages">Educational Background</a></li>
                <li><a data-toggle="tab" href="#settings">Attachment</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="add method="post">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Serial Number* </h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name"  required placeholder="Serial Number" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Rank*</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name"required placeholder="Rank" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Unit Assignment*</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone"required placeholder="Unit Assignment" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Last Promotion*</h4></label>
                              <input type="date" class="form-control" name="mobile" id="mobile" placeholder="Date of Last Promotion" title="enter your mobile number if any.">
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Coast Guard Officers Class*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Coast Guard Officers Class" title="enter your mobile number if any.">
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Call Active Duty*</h4></label>
                              <input type="date" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Last Name*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Last Name" title="enter your mobile number if any.">
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>First Name*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="First Name" title="enter your mobile number if any.">
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Middle Name*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Middle Name" title="enter your mobile number if any.">
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Name Extension</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Name Extension" title="enter your mobile number if any.">
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Birth*</h4></label>
                              <input type="date" class="form-control" name="mobile" id="mobile" placeholder="Date of Birth" title="enter your mobile number if any.">
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Permanent Address*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Permanent Address" title="enter your mobile number if any.">
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Contact Number*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+63 000 000 000" title="enter your mobile number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>College School*</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="College School" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Course*</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Course" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Date of Attendance*</h4></label>
                              <input type="date" class="form-control" name="phone" id="phone" placeholder="Date of Attendance" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Year Graduated*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Year Graduated" title="enter your mobile number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Certificate of Eligibility*</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Certificate of Eligibility" title="enter your mobile number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
                
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                      <label for="first_name"><h4> 2by2 with WHITE background and name tag*</h4></label>
                              <input type="file" class="form-control" name="2by2picture">
                          </div>
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4>Whole Body Picture*</h4></label>
                              <input type="file" class="form-control" name="wholebody">
                      </div>
                      <div class="col-xs-6">
                      <label for="first_name"><h4>Updated Soi*</h4></label>
                              <input type="file" class="form-control" name="updated_soi">
                      </div>

                        <div class="col-xs-6">
                      <label for="first_name"><h4>NBI Clearance*</h4></label>
                              <input type="file" class="form-control" name="nbi_clearance">
                      </div>

                       <div class="col-xs-6">
                      <label for="first_name"><h4>Ombusdsman Clearance(For Officers Only)*</h4></label>
                              <input type="file" class="form-control" name="ombudsman_clearance">
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4>Sandigan Bayan Clearance(For Officers Only)*</h4></label>
                              <input type="file" class="form-control" name="sandigan_bayan_clearance">
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4>ofrs1*</h4></label>
                              <input type="file" class="form-control" name="ofrs1">
                      </div>
                      <div class="col-xs-6">
                      <label for="first_name"><h4>ofrs3*</h4></label>
                              <input type="file" class="form-control" name="ofrs3">
                      </div>
                      <div class="col-xs-6">
                      <label for="first_name"><h4>ofrs2*</h4></label>
                              <input type="file" class="form-control" name="ofrs2">
                      </div>
                      

                       <div class="col-xs-6">
                      <label for="first_name"><h4>Certificate Of Non Enlistment*</h4></label>
                              <input type="file" class="form-control" name="certificate_of_non_enlistment">
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4>Certificate Of Career Course Completion *</h4></label>
                              <input type="file" class="form-control" name="certificate_of_career_course">
                      </div>

                    <!--
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          
                           <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password"value="" id="myInput" id="password" placeholder="password" title="enter your password.">
                              <input type="checkbox" onclick="myFunction()">Show Password
                          </div>
                      </div>
                        -->
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save </button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    <script>
      $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
    </script>
                                                      </title>
</head>


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>