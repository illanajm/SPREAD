<?php
include('database_connect.php');
include('admin_fetch_function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM instructors ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE firstname LIKE "%'.$_POST["search"]["value"].'%" ';
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

	$sub_array = array();
    $sub_array[] = $row["department"];
	$sub_array[] = $row["firstname"];
	$sub_array[] = $row["lastname"];
    $sub_array[] = $row["address"];
      $sub_array[] = $row["username"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="fa fa-check btn btn-success btn-s update"></button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="fa fa-trash btn btn-warning btn-s delete"></button>';
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