<?php

include('database_connect.php');
include('admin_fetch_function.php');

if(isset($_POST["user_id"]))
{

	$statement = $conn->prepare(
		"DELETE FROM instructors WHERE id = :id "
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>