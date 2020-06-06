<?php
include('database_connect.php');
include('admin_school_function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $conn->prepare("
			INSERT INTO school (schoolname, schooladdress, image) 
			VALUES (:schoolname, :schooladdress, :image)
		");
		$result = $statement->execute(
			array(
				':schoolname'	=>	$_POST["schoolname"],
				':schooladdress'	=>	$_POST["schooladdress"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
        $image = '';
        if($_FILES["user_image"]["name"] != '')
        {
            $image = upload_image();
        }
        else
        {
            $image = $_POST["hidden_user_image"];
        }
		
		$statement = $conn->prepare(
			"UPDATE school 
			SET schoolname = :schoolname, schooladdress = :schooladdress, image = :image
			WHERE id = :id
			");
		$result = $statement->execute(
			array(
				
				':schoolname'	    =>	$_POST["schoolname"],
                ':schooladdress'	=>  $_POST["schooladdress"],
                ':image'            =>  $image,
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