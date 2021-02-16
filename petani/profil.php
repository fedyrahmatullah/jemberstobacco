<?php
session_start();
if(isset($_SESSION['id'])){
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header.php';?>
</head>
<body class="blue-one-page tos-desktop" id="body">
  <main class="site-content" role="main">
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="header-page">
            <h1><span> Profil </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">
                      <div class="col-md-4 text-center">
                        <!--<img src="images/<?php //echo $data ['foto']; ?>" class="img-circle img-thumbnail" height="130">--> 
                      </div>
                      <div class="col-md-8 detail">
                        <?php
                        include '../config/koneksi.php';
                        $sql = "SELECT * FROM petani WHERE nama_petani ORDER BY Id_Tani DESC"; // query silahkan disesuaikan
                $result = mysqli_query($koneksi, $sql);
                 $data = mysqli_fetch_array($result);
                 ?>
                        <table>
                          <tr><td colspan="3"><h4><strong><font color="black"><?php echo $_SESSION ['nama_petani']; ?></font></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black"><a href="#.php?id=<?php echo $data ['Id_Tani']; ?>"><img src="../img/edit.png" height="25" width="25" title="Edit"></a></font></h4></td></tr>
                          <tr><td width="150"><p><font color="black">Email</font></td><td width="10"><center><font color="black">:</font></center></td><td width="500"><font color="black"><?php echo $_SESSION['email']; ?></font></p></td></tr>
                          <tr><td><p><font color="black">NO HP</font></td><td><center><font color="black">:</font></center></td><td><font color="black"><?php echo $data ['no_handphone']; ?></font></p></td></tr>
                          
                         
                        </table>
                      </div>
                <hr>

            <!--pagination-->
                <center>
                  <div class="row">
                    <div class="col-md-12">
                    </div>
                  </div>
                </center>
              </div>
            </div>
          </div> <!-- container -->  
        </div> <!--tutup class .row -->
      </div> <!--tutup class .container -->
    </div> <!--tutup id #main-konten -->
    <?php include'footer.php';?>
  </main>
</body>
</html>
<?php
}else{
  echo'<script>window.location="login.php"</script>';
}
?>