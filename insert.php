<?php

if(isset($_POST['submit'])){
	include 'connect.php';
	$sql = "INSERT INTO subject_number(subject,mobile) VALUES('$subject','$mobile');";
	if(mysqli_query($conn, $sql)){
		header("Location: insert_subject_number.php?==success");
		exit();
	}
}