<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title></title></head>
<body>
<?php
if(isset($_POST['update'])){
	include('koneksi.php');
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$tgl_update=date("Y-m-d");
	$gambarawal= $_POST['gambarawal'];
	$gambar= $_POST['gambar'];
	if(empty($gambar)) {
		$gambar=$gambarawal;
	}else {
		$gambar=$gambar;
	}
	$stok=$_POST['stok'];
	$isi= $_POST['isi'];
	$jenis_tembakau= $_POST['jenis_tembakau'];
	$update=mysqli_query($koneksi,"UPDATE pos_tani SET nama='$nama',tgl_update='$tgl_update',gambar='$gambar',isi='$isi',stok='$stok',jenis_tembakau='$jenis_tembakau' WHERE id_postingan='$id'")or die(mysql_error());
	if($update){
		echo'Data berhasil disimpan!';
		echo'<a href="postingan.php">Kembali</a>';
	}else{
		echo'Gagal menyimpan data!';
		echo'<a href="update_postingan.php?id='.$id.'">Kembali</a>';
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