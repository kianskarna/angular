
<?php
include "config.php";
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0) {
$name = mysqli_real_escape_string($conn, $info->name);
$password = mysqli_real_escape_string($conn, $info->password);


$cekdulu= mysqli_query($conn, "SELECT * FROM user WHERE user_name='$name'"); //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan

if (mysqli_num_rows($cekdulu) > 0) { //proses mengingatkan data sudah ada
    echo "Username has been used";
}
else { 
$query = mysqli_query($conn, "INSERT INTO user (user_name, user_password) VALUES ('$name','$password')");
if($query) {
echo "Insert Data Successfully";
}
else {
echo "Failed";
}
 
}
}

?>
