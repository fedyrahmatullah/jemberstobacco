<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title></title></head>
<body>
<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$prodi=$_POST['prodi'];
	$angkatan=$_POST['angkatan'];
	$th_masuk=$_POST['th_masuk'];
	$th_lulus=$_POST['th_lulus'];
	$jkel=$_POST['jkel'];
	$foto=$_POST['foto'];
	$pekerjaan=$_POST['pekerjaan'];
	$email=$_POST['email'];
	$jdl_TA=$_POST['jdl_TA'];
	$no_telp=$_POST['no_telp'];
	$status='0';
	$input=mysqli_query($koneksi,"INSERT INTO mhs VALUES(NULL,'$nim','$nama','$nim','$prodi','$angkatan','$th_masuk','$th_lulus','$jkel','$no_telp','$email','$foto','$pekerjaan','$jdl_TA','$status')")or
	die(mysql_error());
	if($input){
		$convert=mysqli_query($koneksi,"UPDATE mhs SET password=MD5('$nim') where nim='$nim'");
		echo'Data berhasil ditambahkan!';
		echo'<a href="tambah_data_mhs.php">Kembali</a>';
	}else{
		echo'Gagal menambahkan data!';
		echo'<a href="tambah_data_mhs.php">Kembali</a>';
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