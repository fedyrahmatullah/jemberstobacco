<?php
	session_start();
if(isset($_POST['login'])){
	$user=$_POST['user_login'];
	$pass=$_POST['pass_login'];
	$db_link = mysqli_connect('localhost', 'root', '', 'tobacco'); // sesuaikan username dan password mysqli anda
    $sql = "SELECT * FROM petani WHERE nama_petani='$user' and password='$pass'"; // query silahkan disesuaikan
    $result = mysqli_query($db_link, $sql); // eksekusi query
	$jml=mysqli_num_rows($result);

	if($jml==1){
		$_SESSION['login']=$user;
		echo '<script>window.location="postingan.php?username='.$user.'"</script>';
	}elseif ($jml==1){
		echo '<script>window.location="header_login.php?username='.$user.'"</script>';
	}else{
		echo '<script>window.location="login.php"</script>';
	}
	
	// if($jml==1){
	//$status= 1;
	//$db_link = mysqli_connect('localhost', 'root', '', 'tobacco');
	//$update=mysqli_query($db_link,"UPDATE petani SET status='$status' WHERE nim='$user'")or die(mysql_error());
	//$_SESSION['login']=$user;
    //$hasil=mysqli_fetch_assoc($result);
    //if($hasil['status']=='0'){
    //	$id=$hasil['id_mhs'];
    //	echo '<script>window.location="edit_password1.php?id='.$id.'"</script>';
    //}else{
    //	echo '<script>window.location="profil.php?nim='.$user.'"</script>';
    //}
	//}else{
	//	echo '<script>window.location="login.php"</script>';
	//} 
}

?>
<script >
//	window.location="halbaru.php"
</script>