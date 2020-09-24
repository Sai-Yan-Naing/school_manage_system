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
    $("#four").slideToggle();
  });
});
$(document).ready(function(){
  $("#two").click(function(){
    $("#three").slideToggle();
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
                     <h6 class="mt-2">Add Course</h6>
                    </div>
                    <div class="panel-body mt-2">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
								<label>Course Short Name</label>
             <input class="form-control" name="shortname" type="text" autofocus autocomplete="off" required="required" onblur="coursefullAvail()">
                                </div>
                                <div class="form-group">
								<label>Course Full Name</label>
                                    <input class="form-control" name="fullname" required="required" type="text">
                                </div>
								<div class="form-group">
								<label>Creation Date</label>
                                    <input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="cdate">
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
								<div>
                                <button type="submit" class="btn btn-primary" name="submit">Add Course</button>
								</div>
                            </fieldset>
                        </form>	
					</div>
				</div>
			</div>
		</div>
          
			 
	</div> 		
  </div>
  
</div>
 
</body>
</html>


