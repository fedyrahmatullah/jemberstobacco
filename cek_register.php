
	<?php
 
	// Check If form submitted, insert form data into users table.
	include_once("config/koneksi.php");
	if(isset($_POST['Submit'])) {
		$nama_petani = $_POST['nama_petani'];
		$email = $_POST['email'];
		$no_handphone = $_POST['no_handphone'];
		$class = $_POST['class'];
		$password = $_POST['password'];
		$retype_password = $_POST['retype_password'];
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO petani(nama_petani,email,no_handphone,class,password,retype_password) 
									VALUES('$nama_petani','$email','$no_handphone','$class','$password','$retype_password')");
		// Show message when user added
		echo "<script type='text/javascript'>alert('Register Success')</script>";
		
	}
	?>

<script>
	window.location="login.php";
</script>