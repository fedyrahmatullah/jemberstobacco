<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
if(isset($_GET['nama_petani'])){
	include('../config/koneksi.php');
	$nama_petani=$_GET['nama_petani'];
	$cek=mysqli_query($koneksi,"SELECT nama_petani FROM petani where nama_petani='$nama_petani'")or die(mysql_error());
	if(mysqli_num_rows($cek)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$del=mysqli_query($koneksi,"DELETE FROM petani WHERE nama_petani='$nama_petani'");
		if($del){
			echo'Data berhasil dihapus!';
			echo'<script>window.history.back()</script>';
		}else{
			echo'Gagal menghapus data!';
			echo'<script>window.history.back()</script>';
		}
	}
}else{
	echo'<script>window.history.back()</script>';
}
?>
<?php
}else{
	echo'<script>window.location="login.php"</script>';
}
?>