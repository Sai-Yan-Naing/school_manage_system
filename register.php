<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
  $("#one").click(function(){
    $("#four").toggle();
  });
});
$(document).ready(function(){
  $("#two").click(function(){
    $("#three").toggle();
  });
});

</script>
<style>
#main{
	background:#d1e0e0;
}
h6{
	text-align:left;
}

.short,.full,input[type=text],input[type=email],
#gender,input[type=tel],#country,#city,
input[type=date],input[type=number]{
width:50%;
}
</style>
</head>
<body id="main">
<h4 class="mt-3">Student Management System</h4>
<div class="container-fluid mt-5 ml-10">
       <div class="row">
         <div class="col-sm-3" id="main">
             <div>
		       <a href="?"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
		     </div>
		     <div class="mt-5">
		       <a href="#" id="one"><i class="fa fa-bar-chart-o fa-fw"></i> Course<span class="fa arrow"></span></a>
		       <div class="ml-4" id="four">
			      <p class="mt-2"><a href="profile.php" class="mt-2">Add Course</a></p>
		          <p><a href="#">View</a></p>
			   </div>
		     </div>
		   <div class="mt-5">
		      <a href="#" id="two"><i class="fa fa-bar-chart-o fa-fw"></i>Subject<span class="fa arrow"></span></a>
		       <div class="ml-4" id="three">
			      <p class="mt-2"><a href="addsub.html" target="_parent">Add Subject</a></p>
		          <p><a href="#">View</a></p>
			   </div>
		   </div>
		   <div class="mt-5">
		   <a href="register.php"><i class="fa fa-bar-chart-o fa-fw"></i>Register<span class="fa arrow"></span></a>
		   </div>
		   <div class="mt-5">
		   <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>View Students<span class="fa arrow"></span></a>
		   </div>
		   <div class="mt-5">
		   <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Session<span class="fa arrow"></span></a>
		   </div>
		   <div class="mt-5">
		   <a href="logout.php"><i class="fa fa-bar-chart-o fa-fw"></i>Logout<span class="fa arrow"></span></a>
		   </div>
      </div>
		 
		 
         <div class="col-sm-9 bg-light text-center">
           <h4 class="mt-3 text-dark">Welcome Admin</h4>
		          
            <div class="container mt-4" id="one" align="center">
            

            <div class="col-sm-12 col-sm-offset-12 border bg-light">

                <div class="panel">

                    <div class="panel-heading">
                     <h6 class="mt-2">Register</h6>
                    </div>
                    <div class="panel-body mt-2">
                        <form action="/action_page.php">
  <div class="short">
    <label for="course">Select Course</label>
    <select name="course" class="form-control" required="required">
	  <option>B.Tech</option>
	  <option>AGTI</option>
	  <option>BE</option>
	  <option>ME</option>
	  <option>PH.D</option>
	  <option>B.Com</option>
	  <option>M.Tech</option>
	  <option>M.BA</option>
	  <option>M.C.A</option>
	  <option>M.S.C</option>
	  <option selected>Select</option>
	</select>  
  </div>
  
  <div class="form-group">
    <label for="subject">Select Subject</label>
       <input type="text" name="subject" class="form-control " required="required"> 
  </div>
  <div class="form-group">
		<label>Current Session</label>
            <input type="text" class="form-control" value="<?php echo date('Y');?>" readonly="readonly" name="cyear">
   </div>
  
</form>

          
		          
            <div class="container mt-4" id="one" align="center">
            

            <div class="col-sm-12 col-sm-offset-12 border bg-light">

                <div class="panel">

                    <div class="panel-heading">
                     <h6 class="mt-2">Personal Information</h6>
                    </div>
                    <div class="panel-body mt-2">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
								<label>First Name</label>
             <input class="form-control" name="fname" type="text" autofocus autocomplete="off" required="required" onblur="coursefullAvail()">
                                </div>
                                <div class="form-group">
								<label>Last Name</label>
                                    <input class="form-control" name="lname" required="required" type="text">
                                </div>
								<div class="form-group">
								<label>Occupation</label>
                                    <input class="form-control" name="occupation" required="required" type="text">
                                </div>
								<div class="form-group">
								<label>Gender</label>
                                    <select name="gender" id="gender" class="form-control" required="required">
									<option>Male</option>
									<option>Female</option>
									</select>
                                </div>
								<div class="form-group">
								<label>Nationality</label>
                                    <input class="form-control" name="nationality" required="required" type="text">
                                </div>
                            </fieldset>
                        </form>	
					</div>
				</div>
			</div>
		</div>

               
		          
            <div class="container mt-4" id="one" align="center">
            

            <div class="col-sm-12 col-sm-offset-12 border bg-light">

                <div class="panel">

                    <div class="panel-heading">
                     <h6 class="mt-2">Contact Informations</h6>
                    </div>
                    <div class="panel-body mt-2">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
								<label>Phone Number</label>
             <input class="form-control" name="phone" type="tel" autofocus autocomplete="off" required="required" onblur="coursefullAvail()">
                                </div>
                                <div class="form-group" id="country">
								<label>Country</label>
                                    <select name="country" class="form-control" required="required">
									<option>Myanmar</option>
									<option selected>Select Country</option>
									</select>
								</div>
								<div class="form-group" id="city">
								<label>City</label>
                                    <select name="city" class="form-control" required="required">
									<option>Shwebo</option>
									<option selected>Select City</option>
									</select>
								</div>
                              <div class="form-group">
								<label>Email</label>
             <input class="form-control" name="email" type="email" autofocus autocomplete="off" required="required" onblur="coursefullAvail()">
                                </div>
								<div class="form-group">
								<label>Address</label>
             <input class="form-control" name="address" type="text" autofocus autocomplete="off" required="required" onblur="coursefullAvail()">
                                </div>
                                
                            </fieldset>
                        </form>	
					</div>
				</div>
			</div>
		</div>
		
		
		          
            <div class="container mt-4" id="one" align="center">
            

            <div class="col-sm-12 col-sm-offset-12 border bg-light">

                <div class="panel">

                    <div class="panel-heading">
                     <h6 class="mt-2">Academic Information</h6>
                    </div>
                    <div class="panel-body mt-2">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
								<label>Board***</boardlabel>
             <input class="form-control" name="" type="text" autofocus autocomplete="off" required="required" onblur="coursefullAvail()">
                                </div>
                                <div class="form-group">
								<label>Roll Number**</label>
                                    <input class="form-control" name="rollno" required="required" type="number">
                                </div>
								<div class="form-group">
								<label>Register Date</label>
                                    <input class="form-control" name="rdate" type="date" required="required">
                                </div>
                            </fieldset>
                        </form>	
					</div>
				</div>
			</div>
		</div>


     <div class="mt-3">
       <button type="submit" class="btn btn-primary" name="submit">Register</button>
	 </div>



					</div>
				</div>
			</div>
		</div>
          
			 
	</div> 		
  </div>
  
</div>
 
</body>
</html>


