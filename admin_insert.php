<?php
include('database_connect.php');
include('admin_fetch_function.php');
if(isset($_POST["operation"]))
{
	
	if($_POST["operation"] == "Edit")
	{
       
		
		$statement = $conn->prepare(
			"UPDATE instructors 
			SET department = :department, firstname = :firstname, lastname = :lastname, address = :address, username = :username
			WHERE id = :id
			");
		$result = $statement->execute(
			array(
				
				':department'	    =>	$_POST["department"],
                ':firstname'	=>  $_POST["firstname"],
                ':lastname'            =>  $_POST["lastname"],
                ':address'            =>  $_POST["address"],
                ':username'            =>  $_POST["username"],
				':id'		        => 	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
    }




?>