<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
  include('admin/koneksi.php');
  $id=$_GET['id'];
  $show=mysqli_query($koneksi,"SELECT * FROM mhs WHERE id_mhs='$id'");
  if(mysqli_num_rows($show)==0){
    echo'<script>window.history.back()</script>';
  }else{
    $hasil=mysqli_fetch_assoc($show);
  }
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header_profil.php';?>
  <style>
  form {
  width: 80vw;
  margin: 20px auto;
}
.form-control {     color: #495057;     ... } 
</style>
</head>
<body class="blue-one-page tos-desktop" id="body">
  <main class="site-content" role="main">
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="header-page">
            <h1><span> Alumni JTI </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">
                <div class="row">
                  <div class="col-md-12">
                    <!--tabel-->
                  <div class="row">
                    <div class="col-md-12">
                      <center>Edit Password</center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0">
                        <form action="edit_proses_password.php" method="POST" name="simpan">
                        <input type="hidden" name="id" value="<?php echo $id;?>">

                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Password<font color="red">*</font></label>
                              <input name="password" class="form-control" id="exampleFormControlInput1" required="" value="">
                            </div></td>
                          </tr>
                          <tr><td colspan="3"></td></tr>
                          <tr><td colspan="3"><button class="btn btn-primary" type="reset">Reset</button> <button class="btn btn-primary" type="submit" name="simpan">Edit</button></td></tr>
                        </form>
                    </table></center>
                      </div>
                  </div>
                </div>

            <!--pagination-->
                <center>
                  <div class="row">
                    <div class="col-md-12">
                      <br>

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