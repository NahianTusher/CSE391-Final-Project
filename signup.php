<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) && isset($_POST['add']) && isset($_POST['cell']) && isset($_POST['pass'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['fname'];
	$b = $_POST['cell'];
	$c = $_POST['add'];
	$d = $_POST['pass'];
	
	$sql = " INSERT INTO user_signin VALUES( '$a', '$b', '$c', '$d') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: login.html");
	}
	else{
		//echo "Insertion Failed";
		header("Location: signup.php");
	}
	
}


?>
