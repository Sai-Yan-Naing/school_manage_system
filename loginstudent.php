<?php
 
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['pass'])) {
$error = "Name or Password is invalid";
}
else
{
// Define $username and $password
$name=$_POST['name'];
$pass=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$name = stripslashes($name);
$pass= stripslashes($pass);
$name= mysql_real_escape_string($name);
$pass= mysql_real_escape_string($pass);
// Selecting Database
$db = mysql_select_db("sms", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from registertable where pass='$pass' AND name='$name'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$name; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Name or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>