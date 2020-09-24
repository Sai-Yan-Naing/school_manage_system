<?php
 
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['admin']) || empty($_POST['password'])) {
$error = "adminname or Password is invalid";
}
else
{
// Define $username and $password
$admin=$_POST['admin'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$admin = stripslashes($admin);
$password = stripslashes($password);
$admin = mysql_real_escape_string($admin);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("sms", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from admin where password='$password' AND admin='$admin'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$admin; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Adminname or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>