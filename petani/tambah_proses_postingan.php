<?php
$user = "root";
$pass = "";
$host = "localhost";
$database = "tobacco";
$koneksi=mysqli_connect($host,$user,$pass,$database) or die ("koneksi ke database gagal!!");

if(isset($_POST['tambah'])){
	
	$nama=$_POST['nama'];
	$type = array("jpg","png", "gif", "JPG", "PNG", "gif");
	$gambar = $_FILES['gambar']['name']; 
	$imgtmp = $_FILES['gambar']['tmp_name'];
	
	$isi=$_POST['isi'];
	$tgl_buat=date("Y-m-d");
	
	$kunjungan='0';
// move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$gambar);
// $input = mysqli_query($koneksi,"INSERT INTO postingan VALUES('$judul','$tgl_buat','$tgl_buat','$gambar','$isi','$kategori','$kunjungan')");
	$tempat = '../img/'.$gambar;
	
	$coba = move_uploaded_file($imgtmp, $tempat);
	if ($coba) {
		$input = mysqli_query($koneksi,"INSERT INTO pos_tani (nama,gambar,tgl_buat,tgl_update,isi,kunjungan ) VALUES('$nama','$gambar','$tgl_buat','$tgl_buat','$isi',$kunjungan)");
		if ($input) {
			echo'Data berhasil ditambahkan!';
			echo'<a href="tambah_postingan.php">Kembali</a>';
		} else {
			echo'Gagal menambahkan data!';
			echo'<a href="tambah_postingan.php">Kembali</a>';
		}
	} else {
		echo 'gagal';
	}
}else{
	echo'<script>window.history.back()</script>';
 }
?>