<?php
$basic  = new \Nexmo\Client\Credentials\Basic('0dd34ff9', 'QqLh0Js5zRBhiNC6');
$client = new \Nexmo\Client($basic);

try {
    $message = $client->message()->send([
        'to' => 639203340470,
        'from' => 'SPREAD',
        'text' => 'Due to Covid-19, We dont have class today'
    ]);
    $response = $message->getResponseData();

    if($response['messages'][0]['status'] == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    }
} catch (Exception $e) {
    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
}