<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
	<head><title></title></head>
<body>
<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id=$_POST['id'];
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
	$fotoawal= $_POST['fotoawal'];
	$foto= $_POST['foto'];
	if(empty($foto)) {
		$foto=$fotoawal;
	}else {
		$foto=$foto;
	}
	$update=mysqli_query($koneksi,"UPDATE mhs SET nama='$nama',nim='$nim',prodi='$prodi',angkatan='$angkatan',th_masuk='$th_masuk',th_lulus='$th_lulus',jkel='$jkel',no_telp='$no_telp',email='$email',foto='$foto',pekerjaan='$pekerjaan',jdl_TA='$jdl_TA' WHERE id_mhs='$id'")or die(mysql_error());
	if($update){
		echo'Data berhasil disimpan!';
		echo'<a href="index.php">Kembali</a>';
	}else{
		echo'Gagal menyimpan data!';
		echo'<a href="edit_data_mhs.php?id='.$id.'">Kembali</a>';
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