<?php
require_once  'config.php';

$data =json_decode(file_get_contents("php://input"));
if(count($data) > 0) 
{
$fullname = mysqli_real_escape_string($conn, $data->fullname);
$email = mysqli_real_escape_string($conn, $data->email);
$phone = mysqli_real_escape_string($conn, $data->phone);
$address = mysqli_real_escape_string($conn, $data->address);
$btn_name = $data->btnName;
if($btn_name == "ADD") 
{
$cekdulu= mysqli_query($conn, "SELECT * FROM data_registration WHERE email='$email'"); //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan

if (mysqli_num_rows($cekdulu) > 0) { //proses mengingatkan data sudah ada
    echo "Email has been used";
}
else
{
$query = mysqli_query($conn, "INSERT INTO data_registration (fullname, email, phone, address) VALUES ('$fullname', '$email' , '$phone', '$address') ");

if($query) {
	echo 'Insert Data Successfully';
		}
	else
		{
	echo "Error";
	}
}
}
if($btn_name == "Update") {

	$regis_id = $data->regis_id;
	$query = mysqli_query($conn, "UPDATE data_registration SET fullname='$fullname' , email='$email', phone='$phone', address='$address' WHERE regis_id ='$regis_id' ");
	if ($query) {
		echo "Update Data Successfully";
	}
	else{
		echo "Error";
	}
}

}

?>

