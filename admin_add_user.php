



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     
		<script src="js/jquery/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>

		
		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:50px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
                background-color: white;
                position: center;
				
			}
            td{
                text-align: center;
            }
		</style>
	</head>

    <title>Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

  
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    


  <body id="page-top">
  
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">SPREAD</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>
         
        
 

      <!-- Navbar -->
    

       
        

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="admin_add_school.php">
            <i class="fa fa-fw fa-tachometer"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_add_school.php">
            <i class="fa fa-building"></i>
            <span>Partnered Schools</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_main.php">
            <i class="fa fa-users"></i>
            <span>Registered Users</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="admin_records.php">
            <i class="fa fa-users"></i>
            <span>Records</span></a>
        </li>
       

      
         <li class="nav-item">
          <a class="nav-link" href="admin_add_user.php">
            <i class="fa fa-users"></i>
            <span>Add User</span></a>
        </li>
            <li class="nav-item">
          <a class="nav-link"  href="admin_logout.php">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span></a>         
        </li>
      </ul>
	<body>
		<div class="container box">
			<form method="POST" style="font-family: arial;padding-top: 80px" action="admin_add_user_registration.php"> 
				<label style="padding-right: 50px">Department:</label>
				<input type="text" name="department" id="department"><br><br>
				<label style="padding-right: 55px">First Name:</label>
				<input type="text" name="first" id="first">
				<label style="padding-right: 20px;padding-left: 10px">Middle Name:</label>
				<input type="text" name=middle" id="middle">
				<label style="padding-right: 30px;padding-left: 10px">Last Name:</label>
				<input type="text" name="last" id="last"><br><br>
				<label style="padding-right: 75px">Address:</label>
				<input type="text" name="address" id="address">
				<label style="padding-right: 25px;padding-left: 70px">Age:</label>
				<input type="Age" name="age" id="age"><br><br>
				<label style="padding-right: 60px">Username:</label>
				<input type="text" name="username" id="username"><br><br>
				<label style="padding-right: 65px">Password:</label>
				<input type="password" name="password" id="password"><br><br>
				<button type="submit" id="boton" name="submit" class="btn btn-success" style="width: 500px;margin-top: 20px;margin-left: 50px">Submit</button>
			</form>
				
		</div>
	




<script src="fetch_subject_mobile_indexes.js" language="javascript" ></script>