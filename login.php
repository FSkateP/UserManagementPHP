<?php
session_start();
include_once("dbcon.php");
if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['password']);
	
	$sql = "SELECT id, username, password, email FROM users WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);	
		
	if($row['password']==$user_password){				
		echo "ok";
		$_SESSION['user_session'] = $row['id'];
	} else {				
		echo "email or password does not exist."; // wrong details 
	}		
}
?>