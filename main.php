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

	<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
<!--===============================================================================================-->

 <!-- CSS -->
        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
       
        <link rel="stylesheet" href="css/register.css">

</head>
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
  letter-spacing: 2px;
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
  border: 2px solid #f0f0f0;
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
<body >
<div class="limiter">

		<div class="container-login100">


			<div class="wrap-login100">
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
    
				
				<form method="POST" action="fetch_subject_mobile.php" class="login100-form validate-form">
					



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button id="boton" name="spread" type="submit" class="login100-form-btn">
								AUTO SMS FOR HAVING CLASS
							</button>
						</div>
					</div> 
					

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
									


		
		
				</form>

				<form method="POST" action="fetching_subject_no_class.php" class="login100-form validate-form">
					



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button id="boton" name="spread" type="submit" class="login100-form-btn">
								AUTO SMS FOR HAVING NO CLASS
							</button>
						</div>
					</div> 
        </form>

          <form method="POST" action="fetching_generate_message.php" class="login100-form validate-form">
          



          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button id="boton" name="spread" type="submit" class="login100-form-btn">
                GENERATE YOUR OWN SMS
              </button>
            </div>
          </div> 
        </form>

		

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
									
					<br><br><br><br><br><br><br><br>

	<div class="social">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-linkedin"></i>
          <i class="fa fa-behance"></i>
          <i class="fa fa-youtube"></i>
      </div>		
		
					</div>
					
					</div>
				</form>
		

  </div>
  </main>
</div>
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
</body>
</html>