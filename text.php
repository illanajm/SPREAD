<?php

if(isset($_POST['spread'])){
	include 'connect.php';
	require('textlocal.class.php');


        $textlocal = new Textlocal('allanahglaze@gmail.com', 'Mayfive2015');

        $numbers = array($_POST['mobile']);
        $sender = 'SPREAD';
        $name = array($_POST['instructor_name']);
       
        $message =  $name . ":We don't have class today";

            try {
                $result = $textlocal->sendSms($numbers, $message, $sender);
                echo '<script>alert("Verification code successfully send..")</script>';
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
}