<?php
include "config.php";
$data = json_decode(file_get_contents("php://input"));
if (count($data) > 0) 
{
	$regis_id = $data->regis_id;
	$query = mysqli_query($conn, "DELETE FROM data_registration WHERE regis_id='$regis_id'");

	if ($query) {
		echo "Data Deleted";
	}
	else
	{
		echo "Error";
	}


}

?>