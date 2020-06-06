<?php
include('database_connect.php');
include('admin_fetch_function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM instructors 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["department"] = $row["department"];
		$output["firstname"] = $row["firstname"];
		$output["lastname"] = $row["lastname"];
		$output["address"] = $row["address"];
		$output["username"] = $row["username"];
	}
	echo json_encode($output);
}
?>