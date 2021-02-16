<?php
session_start();
if(isset($_SESSION['id'])){
?>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery1.min.js"></script>
<!-- Include the above in your HEAD tag -->
<?php include'header.php';?>

<br>
<head>
  <title>Jember's Tobacco</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<hr>
<div class="container bootstrap snippet">

    <div class="row" style="margin-top: 50px;"> 
  		<div class="col-sm-10"><h1 style="margin-left: 75px;"><?php echo $_SESSION ['nama_petani']; ?></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img src="img/" title="Foto Profile" ></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="img/<?php echo $_SESSION ['foto_profil']; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>

          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
        <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>
            
               <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'profile')">Profil</button>
                <button class="tablinks" onclick="openCity(event, 'ganti')">Ganti Password</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Kembali</button>
              </div>





      <!-- edit -->

            <div id="profile" class="tabcontent">
              <div class="tab-pane active" id="home">
                  <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Nama Lengkap</h4></label>
                                <input type="text" class="form-control" name="nama_lengkap" id="first_name" placeholder="nama lengkap" title="Masukkan nama panjang anda." value="<?php echo $_SESSION ['nama_petani']; ?>">
                            </div>
                        </div>

                      <div class="form-group">
                            <div class="col-xs-6">
                             <label for="last_name"><h4>Nomor KTP</h4></label>
                                <input type="number" class="form-control" name="no_ktp" id="last_name" placeholder="nomor ktp" title="Masukkan nomor ktp anda." value="<?php echo $_SESSION ['class']; ?>">
                            </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Nomor Telepon</h4></label>
                              <input type="text" class="form-control" name="no_handphone" id="phone" placeholder="nomor telepon" title="Masukkan nomor telepon anda." value="<?php echo $_SESSION ['no_handphone']; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" name="Alamat" id="mobile" placeholder="Masukkan Alamat Lengkap" title="enter your mobile number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email anda" title="Masukkan email anda." value="<?php echo $_SESSION ['email']; ?>">
                          </div>
                      </div>

                    <!--  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>

                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>-->

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div>
           </div>

             <div id="ganti" class="tabcontent">
              <div class="tab-pane active" id="home">
                  <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Password Lama</h4></label>
                                <input type="password" class="form-control" name="pass_lama" id="first_name" placeholder="Masukkan Password lama anda" title="">
                            </div>
                        </div>

                      <div class="form-group">
                            <div class="col-xs-6">
                             <label for="last_name"><h4>Password Baru</h4></label>
                                <input type="password" class="form-control" name="pass_baru" id="last_name" placeholder="Masukkan Password baru anda" title="">
                            </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                      </form>
              
              <hr>
              
             </div></div>
           </div>

            <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>







          
  </div>

    <!-- Footer Start -->
     
    <!-- Footer End -->
    
        </div><!--/col-9-->
    </div><!--/row-->
         <?php Include'footer.php';?>    

         <?php

}else{
  echo'<script>window.location="login.php"</script>';
}
?>                                       