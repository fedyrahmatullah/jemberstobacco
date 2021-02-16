	<?php
	include'header.php';
?>

<!DOCTYPE html>
<style type="text/css">
	



  


/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Montserrat-Medium;
  src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
}

@font-face {
  font-family: Montserrat-SemiBold;
  src: url('../fonts/montserrat/Montserrat-SemiBold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Poppins-Regular, sans-serif;
  background-color: white;
}

/*---------------------------------------------*/
a {
  text-decoration: none;
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: blue;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #fc00ff;
  border-color: #fc00ff;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #555555;}
input:-moz-placeholder { color: #555555;}
input::-moz-placeholder { color: #555555;}
input:-ms-input-placeholder { color: #555555;}

textarea::-webkit-input-placeholder { color: #555555;}
textarea:-moz-placeholder { color: #555555;}
textarea::-moz-placeholder { color: #555555;}
textarea:-ms-input-placeholder { color: #555555;}

label {
  display: block;
  margin: 0;
}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Montserrat-SemiBold;
  font-size: 16px;
  color: #555555;
  line-height: 1.5;
}

.txt2 {
  font-family: Poppins-Regular;
  font-size: 14px;
  color: #999999;
  line-height: 1.5;
}

.bo1 {border-bottom: 1px solid #999999;}

/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 85px;
  
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;;
}


.wrap-login100 {
  width: 580px;
  background: #fff;
  border-rightadius: 10px;
  position: relative;
}

.login100-word{

  padding-top:25px; 
  font-family: Montserrat-Medium;
  font-size: 11px; 
  color: #555555;
}

/*==================================================================
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-title {
  width: 100%;
  display: block;
  font-family: Montserrat-Medium;
  font-size: 39px;
  color: #555555;
  line-height: 1.2;
  text-align: center;
}

/*------------------------------------------------------------------
[ Button sign in with ]*/
.btn-face,
.btn-google {
  font-family: Montserrat-SemiBold;
  font-size: 18px;
  line-height: 1.2;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;
  width: calc((100% - 20px) / 2);
  height: 70px;
  border-radius: 10px;
  box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}

.btn-google::before,
.btn-face::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  top: 0;
  left: 0;
  background: #a64bf4;
  background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
  background: linear-gradient(45deg, #00dbde, #fc00ff);
  opacity: 0;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.btn-face {
  color: #fff;
  background-color: #555555;
  margin:0.5px;
 
}

.btn-face img {
  width: 30px;
  margin-right: 17px;
  padding-bottom: 3px;
}

.btn-google {
  color: #555555;
  background-color: #fff;
  margin:0.5px; 
}

.btn-google img {
  width: 30px;
  margin-right: 15px;
  padding-bottom: 3px;
}

.btn-face:hover:before,
.btn-google:hover:before {
  opacity: 1;
}

.btn-face:hover,
.btn-google:hover {
  color: #fff;
}


/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #f7f7f7;
  border: 1px solid #e6e6e6;
  border-radius: 10px;
}


/*---------------------------------------------*/
.input100 {
  font-family: Poppins-Regular;
  color: #333333;
  line-height: 1.2;
  font-size: 18px;

  display: block;
  width: 100%;
  background: transparent;
  height: 50px;
  padding: 0 20px;
}
/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100 {
  position: absolute;
  display: block;
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  top: -1px;
  left: -1px;
  pointer-events: none;
  border: 1px solid #fc00ff;
  border-radius: 10px;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  -webkit-transform: scaleX(1.1) scaleY(1.3);
  -moz-transform: scaleX(1.1) scaleY(1.3);
  -ms-transform: scaleX(1.1) scaleY(1.3);
  -o-transform: scaleX(1.1) scaleY(1.3);
  transform: scaleX(1.1) scaleY(1.3);
}

.input100:focus + .focus-input100 {
  visibility: visible;
  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.eff-focus-selection {
  visibility: visible;
  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 60px;
  background-color: #333333;
  border-radius: 10px;

  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  top: 0;
  left: 0;
  background: #a64bf4;
  background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
  background: linear-gradient(45deg, #00dbde, #fc00ff);
  opacity: 0;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover:before {
  opacity: 1;
}


/*//////////////////////////////////////////////////////////////////
[ Responsive ]*/
@media (max-width: 768px) {
  .wrap-login100 {
    padding-left: 60px;
    padding-right: 60px;
  }

@media (max-width: 576px) {
  .wrap-login100 {
    padding-left: 15px;
    padding-right: 15px;
  }

  .btn-face,
  .btn-google {
    width: 100%;
  }
}
	
   
</style>
<html lang="en">
<head>
	<title>Login Siswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->

</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="cek_register.php" method="post" class="login100-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Register Petani
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nama Petani
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="nama_petani" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="email" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							No Handphone
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="no_handphone" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Class
						</span>
					</div>
					<div class="wrap-input100">
						<Select class="input100" name="class" required>
							<option>--Select Class--</option>
							<option>Class 1</option>
							<option>Class 2</option>
							<option>Class 3</option>
							<option>Class 4</option>
							<option>Class 5</option>
							<option>Class 6</option>
						</Select>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="Password" name="password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Re-type Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="Password" name="retype_password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="Submit" value="Sign In" class="login100-form-btn">
					</div>

					<div class="w-full text-center p-t-55">
					
						<span class="txt2">
							Already have account?
						</span>

						<a href="login.php" class="txt2 bo1">
							Login
						</a>
					
					</div>

				</form>
			</div>
		</div>
	</div>

	<?php
		include'footer.php';
	?>
</body>

</html>

