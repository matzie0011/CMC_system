<!DOCTYPE html>
<html>
<head>
  <style>
body {

  background-image: url("{{ asset('images/cmcbg.png') }}");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-color: black;
}  
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
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
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>    </h6>

        <!--
        <input type="file" class="text-center center-block file-upload"> -->
      </div></hr>
      
        </div><!--/col-3-->
      <div class="col-sm-9"><h3>User Information</h3>
           <!-- <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
               
                <li><a data-toggle="tab" href="#messages">Educational Background</a></li>
                <li><a data-toggle="tab" href="#settings">Attachment</a></li>
                  </ul>
              -->
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr> 
                  <form class="form" action="##" method="post" id="registrationForm">

                      <div class="form-group">
                         
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Serial Number: 097876 </h4></label>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Rank: CGSN1</h4></label>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Unit Assignment: Career Management Center</h4></label>
                              
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Last Promotion: 01-June-2022</h4></label>
                             
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Coast Guard Officers Class: ALPHA</h4></label>
                              
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Call Active Duty 01-June-2023</h4></label>
                            
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Last Name: Dela Cruz</h4></label>
                             
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>First Name: Juan</h4></label>
                             
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Middle Name: Mendoza</h4></label>
                              
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Name Extension: N/A</h4></label>
                              
                          </div>
                      </div>
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Birth: 02-January-1998</h4></label>
                             
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Permanent Address: Taguig City, Quezon City</h4></label>
                             
                      </div>

                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Contact Number: 09986567472</h4></label>
                              
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                            
                               <th><h3><u>EDUCATIONAL BACKGROUND</u></h3>
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
                              <label for="first_name"><h4>College School: Don Mariano Marcos University</h4></label>
                             
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Course: Bachelor of Science in Information Systems</h4></label>
                              
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Date of Attendance: 04-June-2023</h4></label>
                             
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Year Graduated: 05-June-2024</h4></label>
                             
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Certificate of Eligibility: Profesional</h4></label>
                              
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                    
                                <th><h3><u>ATTACHMMENT</u></h3>
                            </div>
                      </div>
                </form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
                
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##"> 2by2 with WHITE background and name tag </a></h4></label>
                             
                          </div>
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">Whole Body Picture</a></h4></label>
                             
                      </div>
                      <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##"> Updated Summary of Information</a></h4></label>
                             
                      </div>

                        <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">NBI Clearance</a></h4></label>
                             
                      </div>

                       <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">Ombusdsman Clearance</a></h4></label>
                             
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">Sandigan Bayan Clearance</a></h4></label>
                             
                      </div>

                      <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##"><a href="##">ofrs1</a></h4></label>
                             
                      </div>
                      <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">ofrs3</a></h4></label>
                              
                      </div>
                      <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">ofrs2</a></h4></label>
                             
                      </div>
                      

                       <div class="col-xs-6">
                      <label for="first_name"><h4><a href="##">certificate_of_non_enlistment</a></h4></label>
                             
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Edit </button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    
                                                  
</head>
<body>




</body>
</html>