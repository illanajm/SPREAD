<?php

if(isset($_POST['submit'])){
	include('connect.php');
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$last = $_POST['last'];
	$age = $_POST['age']; 
	$address = $_POST['address'];
	$department = $_POST['department'];
	$username = $_POST['username'];
	$pass = $_POST['password'];

	if($first == "" && $middle=="" && $lastname=="" && $age=="" && $department=="" && $address=="" && $username=="" && $pass==""){
		header("Location: register.php?registration=empty");
		exit();

		}else{
			//check if username is taken;
			$sql = "SELECT * FROM instructors WHERE username ='$username';";
			$result = mysqli_query($conn, $sql);
			$check = mysqli_num_rows($result);

			if($check > 0){
				header("Location: register.php");
				echo '<script>alert("Username Taken")</script>';
				exit();

			}else{

				//insert with hash password;
				$hashpass = password_hash($pass, PASSWORD_DEFAULT);
					$sql = "INSERT INTO instructors(firstname,middlename,lastname,age,address,department,username,password) VALUES('$first','$middle','$last','$age','$address','$department','$username','$hashpass');";
					if(mysqli_query($conn, $sql)){
					header("Location: register.php?register=success");
					exit();
					}else{
						header("Location: register.php?boom");
						exit();
					}

				}
		}
	}else{
		header("Location: register.php?registration=error");
	}
