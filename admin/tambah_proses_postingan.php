
<?php
$user = "root";
$pass = "";
$host = "localhost";
$database = "tobacco";
$koneksi=mysqli_connect($host,$user,$pass,$database) or die ("koneksi ke database gagal!!");
//$con = mysqli_connect($localhost, $user, $password);


if(isset($_POST['tambah'])){
	
	$judul=$_POST['judul'];
	$type = array("jpg","png", "gif", "JPG", "PNG", "gif");
	$gambar = $_FILES['gambar']['name']; 
	$imgtmp = $_FILES['gambar']['tmp_name'];
	 
	$isi=$_POST['isi'];
	$tgl_buat=date("Y-m-d");
	$kategori=$_POST['kategori'];
	$kunjungan='0';
// move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$gambar);
// $input = mysqli_query($koneksi,"INSERT INTO postingan VALUES('$judul','$tgl_buat','$tgl_buat','$gambar','$isi','$kategori','$kunjungan')");
	$tempat = '../img/'.$gambar;
	
	$coba = move_uploaded_file($imgtmp, $tempat);
	if ($coba) {
		$input = mysqli_query($koneksi,"INSERT INTO postingan (judul,tgl_buat,tgl_update,gambar,isi,kategori,kunjungan ) VALUES('$judul','$tgl_buat','$tgl_buat','$gambar','$isi','$kategori',$kunjungan)");
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