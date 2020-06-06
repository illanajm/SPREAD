<?php

	session_start();
	if(isset($_POST['submit'])){
		include 'connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" && $password == ""){
			header("Location: admin_index.php?login=empty");
			exit();
		}else{
			$sql = "SELECT * FROM admin WHERE username = '$username'";
			$result = mysqli_query($conn , $sql);
			$check = mysqli_num_rows($result);
			if($check < 1){
				header("Location: admin_index.php?login=error");
				exit();
			}else{
				if($row = mysqli_fetch_assoc($result)){
					$hashpass = password_verify($password, $row['password']);
					if($hashpass==false){
						header("Location: admin_index.php?password=error");
						exit();
					}elseif(hashpass == true){
						//login users
						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_username'] = $row['username'];
						header("Location: admin_add_school.php?success");
						exit();

					}
				}
			}
		}
	}else{
		header("Location: admin_index.php?error");
		exit();
	}