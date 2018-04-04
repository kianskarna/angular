<?php
include 'config.php';

$output = array();
$query = mysqli_query($conn, "SELECT * FROM data_registration ORDER BY fullname ASC");
if (mysqli_num_rows($query) > 0 ) {
	while ($row = mysqli_fetch_array($query)) {
		$output[] = $row;
	}
	echo json_encode($output);
}


?>