<?php
include('database_connect.php');
include('admin_school_function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM school ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE schoolname LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR schooladdress LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
		$image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
	}
	else
	{
		$image = '';
	}
	$sub_array = array();
	$sub_array[] = $image;
	$sub_array[] = $row["schoolname"];
	$sub_array[] = $row["schooladdress"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="fa fa-check btn btn-success btn-s update"></button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="fa fa-trash btn btn-warning btns- delete"></button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>