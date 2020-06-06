<?php

	session_start();
	if(isset($_POST['login'])){
		include 'connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" && $password == ""){
			header("Location: login.php?login=empty");
			exit();
		}else{
			$sql = "SELECT * FROM instructors WHERE username = '$username'";
			$result = mysqli_query($conn , $sql);
			$check = mysqli_num_rows($result);
			if($check < 1){
				header("Location: login.php?login=error");
				exit();
			}else{
				if($row = mysqli_fetch_assoc($result)){
					$hashpass = password_verify($password, $row['password']);
					if($hashpass==false){
						header("Location: login.php?password=error");
						exit();
					}elseif(hashpass == true){
						//login users
						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_first'] = $row['firstname'];
						$_SESSION['u_middle'] = $row['middlename'];
						$_SESSION['u_last'] = $row['lastname'];
						$_SESSION['u_age'] = $row['age'];
						$_SESSION['u_address'] = $row['address'];
						$_SESSION['u_department'] = $row['department'];
						$_SESSION['u_username'] = $row['username'];
						header("Location: main.php?success");
						exit();

					}
				}
			}
		}
	}else{
		header("Location: login.php?error");
		exit();
	}