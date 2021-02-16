
	<?php
 
	// Check If form submitted, insert form data into users table.


$user = "root";
$pass = "";
$host = "localhost";
$database = "tobacco";
$koneksi=mysqli_connect($host,$user,$pass,$database) or die ("koneksi ke database gagal!!");

	if(isset($_POST['Submit'])) {
		$type = array("jpg","png", "gif", "JPG", "PNG", "gif");
		$nama_petani = $_POST['nama_petani'];
		$class = $_POST['class'];
		$email = $_POST['email'];
		$no_handphone = $_POST['no_handphone'];
		$gambar = $_FILES['gambar']['name']; 
		$imgtmp = $_FILES['gambar']['tmp_name'];
		$password = $_POST['password'];
		$retype_password = $_POST['retype_password'];
		
		$tempat = 'img/'.$gambar;
				

				$coba = move_uploaded_file($imgtmp, $tempat);
				if ($coba) {
					$input = mysqli_query($koneksi, "INSERT INTO petani(nama_petani,class,email,no_handphone,foto_profil,password,retype_password) 
	 								VALUES('$nama_petani','$class','$email','$no_handphone','$gambar','$password','$retype_password')");
		if ($input) {
			echo'Data berhasil ditambahkan!';
			echo'<a href="profile.php">Menuju Edit Profile</a>';
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
				
	// 	if ($_POST["password"] == $_POST["retype_password"]){
	// 		$result = mysqli_query($koneksi, "INSERT INTO petani(nama_petani,class,email,no_handphone,foto_profil,password,retype_password) 
	// 								VALUES('$nama_petani','$class','$email','$no_handphone','$gambar','$password','$retype_password')");
	// 		echo "<script type= 'text/javascript'>alert('Register Success')</script>";
			
	// 	}
	// 	else {
	// 		echo "<script type= 'text/javascript'>alert('Password harus sama')</script>";
	// 	}
	// 	//echo "<a href="register_petani.php">Ulangi lagi!!</a>";	
	// }		


// if ($coba) {
// 					echo "<script type= 'text/javascript'>alert('Password harus sama')</script>";
// 				} else if ($coba && $_POST["password"] == $_POST["retype_password"]){
// 					$result = mysqli_query($koneksi, "INSERT INTO petani(nama_petani,class,email,no_handphone,foto_profil,password,retype_password) 
// 	 								VALUES('$nama_petani','$class','$email','$no_handphone','$gambar','$password','$retype_password')");
// 	 				echo "<script type= 'text/javascript'>alert('Register Success')</script>";
// 				}



		// Insert user data into table
		//$result = mysqli_query($koneksi, "INSERT INTO petani(nama_petani,email,no_handphone,class,password,retype_password) 
		//							VALUES('$nama_petani','$email','$no_handphone','$class','$password','$retype_password')");
		// Show message when user added
		//echo "<script type='text/javascript'>alert('Register Success')</script>";
		
	
	?>
