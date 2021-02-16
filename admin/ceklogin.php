<?php
	session_start();
if(isset($_POST['login'])){
	$user=$_POST['user_login'];
	$pass=$_POST['pass_login'];
	$db_link = mysqli_connect('localhost', 'root', '', 'tobacco'); // sesuaikan username dan password mysqli anda
    $sql = "SELECT * FROM admin WHERE username='$user' and password=('$pass')"; // query silahkan disesuaikan
    $result = mysqli_query($db_link, $sql); // eksekusi query
	$jml=mysqli_num_rows($result);
	
	if($jml==1){
		$_SESSION['login']=$user;
		echo '<script>window.location="postingan.php?username='.$user.'"</script>';
	}else{
		echo '<script>window.location="login.php"</script>';
	}
	if($jml==1){
		$_SESSION['login']=$user;
		echo '<script>window.location="header_login.php?username='.$user.'"</script>';
	}else{
		echo '<script>window.location="header.php"</script>';
	}

}
?>