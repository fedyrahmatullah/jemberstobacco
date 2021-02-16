<?php

$user = "root";
$pass = "";
$host = "localhost";
$database = "tobacco";
$koneksi=mysqli_connect($host,$user,$pass,$database) or die ("koneksi ke database gagal!!");
//$con = mysqli_connect($localhost, $user, $password);

//if(!$con){
	//echo "error";
//}
//else {
//	mysqli_select_db($con, $database);
//	echo "";
//}

?>