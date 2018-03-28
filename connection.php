<?php  
	$servername="localhost";
	$uname="root";
	$pword="";
	$db_name="company";

	//create new connection
	$conn = mysqli_connect($servername,$uname,$pword,$db_name);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

	// $sql1="SELECT * FROM `login`";
	// $result1=mysqli_query($conn,$sql1);
	// $row=mysqli_fetch_assoc($result1);
	// echo "<br>";
	// print_r($row);
	// $sql="SELECT * FROM `students`";
	// $result=mysqli_query($conn,$sql);

	// $row=mysqli_fetch_assoc($result);
	// print_r($row);

	//mysqli_close($conn);


?>