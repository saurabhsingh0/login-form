<?php
echo "3" . "\n";
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	echo "4" ."\n";
if (empty($_POST['username']) || empty($_POST['password'])) {
	echo "5"."\n";
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
	echo "6"."\n";
$username=$_POST['username'];
$password=$_POST['password'];

echo "<br>" ."user name is " .$username ."<br>";
echo "<br>" ."password is " .$password ."<br>";

echo "<br>" ."user name is " .$username ."<br>";
echo "<br>" ."password is " .$password ."<br>";
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "", "company");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
include 'connection.php';
echo "<br>" ."user name is " .$username ."<br>";
echo "<br>" ."password is " .$password ."<br>";
$sql="select * from `login` where `password`='$password' AND `username`='$username'";
echo "\n" ."select * from login where password=" .$password ."AND username=".$username."\n";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($result);
print_r($rows);
$rowsofresult = mysqli_num_rows($result);
echo "\n" .$rows ." is the no of rows";
if ($rowsofresult == 1) {
	echo "7" ."\n";
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
	echo "8"."\n";
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>