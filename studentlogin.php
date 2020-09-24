<?php
include('loginstudent.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<html>
<head>
<title>Student Record management</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
  <style>
  #one{
  font-size:30px;
  }
  </style>
</head>
   
   <body>
				<div class="top-nav">
					<ul>
						<li><a href="home.php">Home</a></li>
					
						<li class="active"><a href="contact.php">Contact</a></li>
					</ul>					
				</div>
	<div>			
 
 </div>
    <div class="container" align="center">
        <br><br>

            <div class="col-md-4 col-md-offset-4 border bg-primary">
             
                <div class="panel">

                    <div class="panel-heading">
					<img src="login.jpg" alt="not found" width="100%" height="30%" class="mt-3"/>
                     <h3 class="panel-title text-dark" id="one">Student Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
             <input class="form-control" placeholder="Username"  id="name" name="name" type="text" autofocus autocomplete="off" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="pass" type="password" value="" required="required">
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
								<div class="form-group">
                                <input type="submit" value="login" name="submit" class="btn btn-md btn-success btn-block text-dark">
                              
								</div>
                            </fieldset>
                        </form>
					</div>
				</div>
			</div>
		</div>  	
</body>
</html>

