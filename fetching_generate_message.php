<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    
   	<meta name="viewport" content="width=device-width, initial-scale=1">>

   
		<script src="js/jquery/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>



</head>
		
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
				
				
                background-color: white;
                position: center;
				
			}
            td{
                text-align: center;
            }
            tr{
            	color: black;
            	background-color:lightgray;
            }

            .container{
            	color: white;
            	background:linear-gradient(to top left,#434343 0%, #000000 100%); 
            }

            <style type="text/css">
 * {
  box-sizing: border-box;
         margin: 0;
         padding: 0;
}

.page {
  
  background-color: #584e4a;
}
.content {
 
  transform-origin: top left;
  transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
  /*background inside the box white color*/background:linear-gradient(to top left,#434343 0%, #000000 100%);
}
.content_inner {
  height: 50%;
  overflow-y: auto;
  
}
/* basically all styling from now on */
.menu_toggle {
 
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  cursor: pointer;
  width: 100px;
  height: 80px;
  background-color: darkgreen;
  border-bottom-right-radius: 100%;
}
.menu_toggle:active i {
  opacity: 0.8;
}
.menu_toggle i {
  color: #f0f0f0;
}
.menu_toggle .menu_open, .menu_toggle .menu_close {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -15px;
  margin-left: -12px;
  transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
}
.menu_toggle .menu_open {
  transform-origin: -100px -100px;
}
.menu_toggle .menu_close {
  transform: rotate(20deg);
  transform-origin: -100px -160px;
}
.menu_items {
  position: fixed;
  bottom: 0;
  left: 50px;
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.menu_items li {
  height: 30px;
  margin-bottom: 30px;
  transform: translateX(-300px);
  transition: transform 0.7s 0s cubic-bezier(1, 0.005, 0.24, 1);
}
.menu_items li:nth-child(2) {
  margin-left: 40px;
}
.menu_items li:nth-child(3) {
  margin-left: 80px;
}
.menu_items a {
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #a4a4a4;
  transition: color 0.2s;
}
.menu_items a .icon {
  position: relative;
  display: inline-block;
  margin-right: 25px;
  color: #f0f0f0;
}
.menu_items a .icon:after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  display: block;
  width: 60px;
  height: 60px;
  margin-left: -33px;
  margin-top: -32px;
  border-radius: 100%;
  border: 1px solid #f0f0f0;
  transition: border-color 0.2s;
}
.menu_items a:hover {
  color: #f0f0f0;
}
.menu_items a:hover .icon:after {
  border-color: #f37272;
}
.menu_items a:active .icon {
  color: #f37272;
}
/* Let's open up the menu */
.shazam {
  /*.content_inner {
   height: 100%;
   }*/
}
.shazam .content {
  transform: rotate(-30deg);
}
.shazam .menu_open {
  transform: rotate(-20deg);
}
.shazam .menu_close {
  transform: rotate(0);
}
.shazam .menu_items li {
  transform: translateX(0);
  transition: transform 0.35s 0.45s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.shazam .menu_items li:nth-child(2) {
  transition-delay: 0.47s;
}
.shazam .menu_items li:nth-child(3) {
  transition-delay: 0.48s;
}

body {
  color: #584e4a;
}
        .social i{
        	margin-left: 15px;
            font-size: 20px;
            background-color: gray;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: white;
            border-radius: 50px;
        }
    

}

</style>
		</style>
	<body>

  

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
    	<div align="center">
      <a class="navbar-brand mr-1">SPREAD</a>
	  </nav>
	</div>

  

      <!-- Sidebar -->
 <body>
	<div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
   <ul class="menu_items">
    <li><a href="main.php"><i class="icon fa fa-home fa-2x"></i> Home</a></li>
    <li><a href="add_subject_and_mobile.php"><i class="icon fa fa-phone fa-2x"></i> Add subject</a></li>
    <li><a href="logout.php"><i class="icon fa fa-sign-out fa-2x"></i> logout</a></li>
  </ul>

   <main class="content">
    <div class="content_inner">
		<div class="container box">
			
				<div class="table-responsive table-hover">
				
				

				
			<table id="user_data" class="table table-bordered">
					<thead>
						<tr>
							<th width="50%">Subject Code</th>
							<th width="50%">Subject Name</th>
							<th width="50%">Mobile Number</th>
        

							<th width="10%">Send</th>
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
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<label>Mobile</label>
					<input type="text" name="mobile" id="mobile" class="form-control" readonly=""/>
					<br />
					<label>Subject Code</label>
					<input type="text" name="subject_code" id="subject_code" class="form-control" readonly="" />
					<br />
					<label>Generate Message</label>
					<!-- <input type="textarea" name="message" id="message" class="form-control" /> -->
					<textarea name="message" id="message" class="form-control"></textarea>
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
</div>
  </main>
</div>
<script>
    // elements
var $page = $('.page');

$('.menu_toggle').on('click', function(){
  $page.toggleClass('shazam');
});
$('.content').on('click', function(){
  $page.removeClass('shazam');
});
    
</script>

<script src="fetching_subject_mobile_generate_message.js" language="javascript" ></script>