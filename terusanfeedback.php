<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		include_once("config/koneksi.php");
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date("Y-m-d H:i:s");
		
		$email = 			$_POST['email'];
		$no_hp = 	$_POST['no_hp'];
		$pesan = 			$_POST['pesan'];
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO feedback VALUES('','$tanggal','$email','$no_hp','$pesan')");
		}
	?>

<script>	
window.location="index.php";
</script>

  