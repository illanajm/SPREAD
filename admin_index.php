<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<body>
	<div align="center" class="container" style="border: 1px solid black;width: 300px;padding-bottom: 20px;padding-top: 20px">
		<form method="POST" action="admin_index_fetch_login.php">
		<img src="images/spread2.png" width="80px" height="80px" align="center"><br>
		<label>Username:</label>
		<input type="text" name="username" id="username"><br><br>
		<label style="padding-right: 5px">Password:</label>
		<input type="password" name="password" id="password"><br><br>
		<button type="submit" name="submit" id="button" class="btn btn-success">Submit</button>
	</form>
	</div>
	<script src="js/jquery/jquery-3.3.1.min.js"></script>
	<script src="admin_indexes_login.js"></script>
</body>
</html>