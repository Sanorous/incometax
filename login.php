<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("50.62.209.123", "vidhansabha", "vidhan@123") or die(mysql_error()) ;
mysqli_select_db($conn, "arrear") or die(mysql_error()) ;
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
// Selecting Database
//$db = mysql_select_db("vijay", $connection);
// SQL query to fetch information of registerd users and finds user match.
$result = mysqli_query($conn,  "SELECT * FROM login WHERE password='$password' AND username='$username'");
$rows = mysqli_num_rows($result);
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
//$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: welcome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
//mysql_close($connection); // Closing Connection
}
}
?>
