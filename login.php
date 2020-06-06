<?php
	session_start();
?>

	



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">

	<!--design--><link rel="stylesheet" type="text/css" href="css/final_main.css">
<!--===============================================================================================-->

 <!-- CSS -->
        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
       
        <link rel="stylesheet" href="css/register.css">

</head>
<style type="text/css">
	



.data{
	position: absolute;
	top:calc(150px);
	left: calc(50% - 55px);
	top: calc(60% - 280px);
	}

.form-group{
position: absolute;
left: calc(50% - 130px);


}


</style>
<body >

	<div class="limiter" align="center">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="fetch_login.php" class="login100-form validate-form">
					
					
					
            		<img width="200" height="200" src="images/spread2.png" align="center">
        						
					
					<div class="form-group">
					<label style="padding-right: 168px;color: white">Username:</label>
					<input style="background-color: lightgray;opacity: 1;"  type="Username" class="form-control" name="username" placeholder="Username"><br>
					<label style="padding-right: 168px;color: white">Password:</label>
					<input style="background-color: lightgray;opacity: 1;"  type="Password" class="form-control" name="password" placeholder="Password">
					</div>
					<br><br><br><br><br><br><br><br><br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button id="boton" name="login" type="submit" class="login100-form-btn">
								login
							</button>
						</div>
					</div> 
					<div align="center">
					<span style="color: white" class="txt1">
							<a style="color: white"  class="txt2" href="register.php">SignUp?</a>
						</span>	<br><br>
				
						<span style="color: white" class="txt1">
							Back to main page?
							<a style="color: white"  class="txt2" href="login.php">Click Me</a>
						</span>			
					</div>
					</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>

	 
	
<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>
</html>