



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

      <a class="navbar-brand mr-1" href="admin_add_school.php">SPREAD</a>

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
          <a class="nav-link" href="admin_main.php">
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
            <i class="fa fa-sign-out  "></i>
            <span>Logout</span></a>         
        </li>
      </ul>
	<body>

    <div class="container box">
      <div align="right">
          <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-warning btn-m">+ Add School</button>
        </div>
        <div class="table-responsive">
        
        

        
        <table id="user_data" class="table table-bordered table-hover">
          <thead>
            <tr align="center">
              <th width="500px">School Image</th>
              <th width="20%">School Name</th>
              <th width="20%">School Address</th>

              <th width="10%">Update</th>
              <th width="10%">Delete</th>
            </tr>
          </thead>
        </table>
        
      </div>
    </div>
  


<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="user_form" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add School</h4>
        </div>
        <div class="modal-body">
          <label>Enter School Name</label>
          <input type="text" name="schoolname" id="schoolname" class="form-control" />
          <br />
          <label>Enter School Address</label>
          <input type="text" name="schooladdress" id="schooladdress" class="form-control" />
          <br />
          
          <label>Select School Image</label>
          <input type="file" name="user_image" id="user_image" />
          <span id="user_uploaded_image"></span>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="user_id" id="user_id" />
          <input type="hidden" name="operation" id="operation" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>

	




<script src="admin_add_school.js" language="javascript" ></script>