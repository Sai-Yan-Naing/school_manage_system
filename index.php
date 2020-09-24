<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  #one{
  width:100%;
  margin-left:0;
  }
  #two{
  background-color:#75a3a3;
  }
  #three{
  background-color:#ff8080;
  }
  h2{
  text-align:center;
  }
  #four{
  margin-left:130;
  }
 
  </style>
</head>
<body>
  
<div class="container mt-3">
  <nav class="navbar navbar-expand-sm bg-primary justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item bg-success">
      <a class="nav-link text-dark" href="index.php">Home Page</a>
    </li>
    <li class="nav-item bg-danger ml-3">
      <a class="nav-link text-dark" href="about.html">About Us</a>
    </li>
    <li class="nav-item bg-secondary ml-3">
      <a class="nav-link text-dark" href="contact.php">Contact Us</a>
    </li>
	
  </ul>
 </nav>
  <div class="mt-3">
    <img src="download.jpg" alt="not found" width="100%" height="70%"/>
  </div>
  
  <div class="row mt-3" id="one">
      <div class="col-sm-4" id="three">
	  <h2 class="mt-3">Admin Login</h2>
	  <form action="" method="post">
	  <div class="form-group">
	  <label>Admin:</label>
	  <input type="text" name="admin" class="form-control" required="required"/>
	  </div>
	  <div class="form-group">
	  <label>Password</label>
	  <input type="password" name="password" class="form-control" required="required"/>
	  </div>
	  <div class="form-group">
	  <input type="submit" name="submit" class="btn btn-primary" value="login" id="four"/>
	  </div>
	  </form>
	  </div>
    <div class="col-sm-4" id="two">
	<h2 class="mt-3">About Us</h2>
	<p>The following is a comprehensive list of 
	universities in Myanmar, categorised by state and region.[1][2] 
	Nearly all major and national universities in Myanmar are in Yangon 
	Region and Mandalay Region. The Burmese higher education system is 
	entirely state-run, and its universities and colleges are organised 
	along their fields of studies. The country's 150-plus universities and colleges
	are administered by various government ministries. 
	</p>
	</div>
    <div class="col-sm-4" id="three">
	<h2 class="mt-3"><a href="studentlogin.php">Student Login</a></h2>
	  <p>New User?</p>
	  <a href="studentregister.php">Register Here</a>
	</div>
 </div>
  
  
</div>

</body>
</html>
