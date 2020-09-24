<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$city=$_POST['city'];
$hobby=$_POST['hobby'];
$address=$_POST['address'];
$query=mysqli_query($con,"insert into registertable(name,email,gender,pass,age,phone,country,city,hobby,address) value('$name','$email','$gender','$pass','$age','$phone','$country','$city','$hobby','$address')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='studentregister.php'</script>";
}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  input[type=email],[type=text],[type=password],[type=tel],#two,[type=submit]{
  border-radius:30px;
  }
  
  #register{
  border-radius:30px;
  }
  img{
  position:absolute;
  }
  
  </style>
</head>
<body>
  <div class="container mt-5 ml-10">
       <div class="row">
         <div class="col-sm-5">
           <img src="register.jpg" alt="not found" height="100%" width="100%"/> 
         </div>
         <div class="col-sm-7 text-center bg-light">
           <h4 class="mt-3 text-dark">Registration Form</h4>
           <form action="" method="post">
             <div class="form-group my-4">
                <input type="text" class="form-control" placeholder="Enter Name" name="name" required="required">
             </div>
			 <div class="form-group my-4">
                <input type="email" class="form-control" placeholder="Enter Email" name="email" required="required">
             </div>
             <div class="form-group" >
			 <select name="gender"  id="two" class="custom-select" required="required">
			 <option>Male</option>
			 <option>Female</option>
			 </select>  
             </div>
			 
			 
			<div class="row">
			  <div class="col-sm-6">
			     <div class="form-group">
                   <input type="password" class="form-control" placeholder="Enter Password" name="pass" required="required">
                 </div>
			  </div>
			  <div class="col-sm-6">
			      <div class="form-group">
				  <input type="password" class="form-control" placeholder="Enter Confirm Password" name="pass" required="required">
                  </div>
			  </div>
		  </div> 
		  
			 <div class="row">
			  <div class="col-sm-6">
			     <div class="form-group">
                   <input type="text" class="form-control" placeholder="Enter Age" name="age" required="required">
                 </div>
			  </div>
			  <div class="col-sm-6">
			      <div class="form-group">
				  <input type="tel" class="form-control" placeholder="Enter Phone Number" name="phone" required="required">
                  </div>
			  </div>
		  </div> 
			 
			 
			 
			 <div class="row">
			  <div class="col-sm-6">
			     <div class="form-group s-md">
                   <input type="text" class="form-control" placeholder="Enter Country" name="country" required="required">
                 </div>
			  </div>
			  <div class="col-sm-6">
			      
				  <div class="form-group s-md">
                   <input type="text" class="form-control" placeholder="Enter City" name="city" required="required">
                 </div>
		       </div>
            </div>			   
		  
		  
			 <div class="form-group" >
			 <select name="hobby"  id="two" class="custom-select" required="required">
			 <option selected>Select Hobby</option>
			 <option>Reading</option>
			 <option>Singing</option>
			 <option>Dancing</option>
			 <option>Travelling</option>
			 <option>Listening Songs</option>
			 </select>  
             </div>
			 
			 
			 
			 
			 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter address" name="address" required="required">
			 </div>
			 
			 <div class="form-group">
                   <input type="submit" class="btn btn-primary form-control" name="submit">
			 </div>
			 <div>
			 <a href="index.php" class="text-primary">Go To Home Page</a>
			 </div>
			
			 
			 
</form>
  </div>
  
</div>
   
</body>
</html>