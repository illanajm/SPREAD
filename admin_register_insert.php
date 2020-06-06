
<?php

if(isset($_POST['submit'])){
	include('connect.php');
	
	$username = $_POST['username'];
	$pass = $_POST['password'];

	if($username=="" && $pass==""){
		header("Location: admin_register.php?registration=empty");
		exit();

		}else{
			//check if username is taken;
			$sql = "SELECT * FROM admin WHERE username ='$username';";
			$result = mysqli_query($conn, $sql);
			$check = mysqli_num_rows($result);

			if($check > 0){
				header("Location: admin_register.php");
				echo '<script>alert("Username Taken")</script>';
				exit();

			}else{

				//insert with hash password;
				$hashpass = password_hash($pass, PASSWORD_DEFAULT);
					$sql = "INSERT INTO admin(username,password) VALUES('$username','$hashpass');";
					if(mysqli_query($conn, $sql)){
					header("Location: admin_register.php?register=success");
					exit();
					}else{
						header("Location: admin_register.php?boom");
						exit();
					}

				}
		}
	}else{
		header("Location: admin_register.php?registration=error");
	}
