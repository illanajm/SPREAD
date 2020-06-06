<?php
include('database_connect.php');
include('fetch_subject_function.php');
if(isset($_POST["operation"]))
{
	
	if($_POST["operation"] == "Edit")
	{
		require_once "vendor/autoload.php";

        $basic  = new \Nexmo\Client\Credentials\Basic('0dd34ff9', 'QqLh0Js5zRBhiNC6');
        $client = new \Nexmo\Client($basic);

        $numbers = array($_POST['mobile']);
        $sender = 'SPREAD';
        $name = $_POST['subject_code'];

            try {
            $message = $client->message()->send([
                'to' => $numbers,
                'from' => $sender,
                'text' => $name.':We dont have class today'
            ]);
            $response = $message->getResponseData();

            if($response['messages'][0]['status'] == 0) {
                echo "<script>alert('Verification code successfully send..')</script>\n";
            } else {
                echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
            }
        } catch (Exception $e) {
            echo "The message was not sent. Error: " . $e->getMessage() . "\n";
        }
		
// 	

    }
}

