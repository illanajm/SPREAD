<?php

if(isset($_POST['inside'])){
	include 'database_connect.php';
	$subject_code = $_POST['subject_code'];
	$subject_name = $_POST['subject_name'];
	$mobile = $_POST['mobile'];
	$sql = "INSERT INTO subject(subject_code,subject_name,mobile) VALUES('$subject_code','$subject_name','$mobile');";
	if(mysqli_query($conn, $sql)){
		// header("Location:  admin_add_user.php?register=success");
		// exit();
		
		echo "success";
	}

}