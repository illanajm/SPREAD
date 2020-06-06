<?php
include('database_connect.php');
include('fetch_subject_function.php');
if(isset($_POST["operation"]))
{
	
	if($_POST["operation"] == "Edit")
	{
		require('textlocal.class.php');

         $textlocal = new Textlocal('allanahglaze@gmail.com', 'Mayfive2015');

        $numbers = array($_POST['mobile']);
        $sender = 'SPREAD';
        $name = $_POST['subject_code'];
       
        $message =  $name . ":We have class today";

            try {
                $result = $textlocal->sendSms($numbers, $message, $sender);
                echo '<script>alert("Verification code successfully send..")</script>';
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
		
	}
}




?>