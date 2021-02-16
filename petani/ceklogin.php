<?php
	session_start();
if(isset($_POST['login'])){
	$user=$_POST['user_login'];
	$pass=$_POST['pass_login'];
	$db_link = mysqli_connect('localhost', 'root', '', 'tobacco'); // sesuaikan username dan password mysqli anda
    $sql = "SELECT * FROM petani WHERE nama_petani='$user' and password='$pass'"; // query silahkan disesuaikan
    $result = mysqli_query($db_link, $sql); // eksekusi query
	$jml=mysqli_num_rows($result);
	
	while ($row= mysqli_fetch_array($result)) {

		$_SESSION['id'] = $row['Id_Tani'];
		$_SESSION['foto_profil'] = $row['foto_profil'];
		$_SESSION['nama_petani'] = $row['nama_petani'];
		$_SESSION['class'] = $row['class'];
		$_SESSION['no_handphone'] = $row['no_handphone'];
		$_SESSION['email'] = $row['email'];
	}

	if (mysqli_num_rows($result) == 1 ){
		header('Location: halBaru_petani.php');
	} else {
		echo '<script>window.location="login.php"</script>';
	}

}
?>