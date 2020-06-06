<?php
include('database_connect.php');
include('fetch_subject_function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM subject 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["mobile"] = $row["mobile"];
		$output["subject_code"] = $row["subject_code"];
	}
	echo json_encode($output);
}
?>