
<?php
include "config.php";

$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];

$masuk = mysqli_query($conn, "SELECT * FROM user where user_name='$user_name' and user_password='$user_password'") or die (mysqli_error($conn));
$cek = mysqli_num_rows($masuk);

if ($cek > 0) {
	echo "correct";
}
else{
	echo "wrong";
}

?>