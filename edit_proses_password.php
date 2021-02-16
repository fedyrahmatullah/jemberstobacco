<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title></title></head>
<body>
<?php
if(isset($_POST['simpan'])){
	include('admin/koneksi.php');
	$id=$_POST['id'];
	$password=$_POST['password'];
	$update=mysqli_query($koneksi,"UPDATE mhs SET password=MD5('$password') WHERE id_mhs='$id'")or die(mysql_error());
	if($update){
		echo'Password berhasil diedit!';
		echo'<a href="edit_password.php?id='.$id.'">Kembali</a>';
	}else{
		echo'Gagal mengedit password!';
		echo'<a href="edit_password.php?id='.$id.'">Kembali</a>';
	}
}else{
	echo'<script>window.history.back()</script>';
}
?>
</body>
</html>
<?php
}else{
	echo'<script>window.location="login.php"</script>';
}
?>