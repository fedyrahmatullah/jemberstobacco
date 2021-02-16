<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id=$_GET['id'];
	$cek=mysqli_query($koneksi,"SELECT id_postingan FROM postingan where id_postingan='$id'")or die(mysql_error());
	if(mysqli_num_rows($cek)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$del=mysqli_query($koneksi,"DELETE FROM postingan WHERE id_postingan='$id'");
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