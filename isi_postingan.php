<?php
  include('admin/koneksi.php');
  $id=$_GET['id_postingan'];
  $show=mysqli_query($koneksi,"SELECT * FROM postingan WHERE id_postingan='$id'");
  //update kunjungan
  $suka=mysqli_query($koneksi,"UPDATE postingan SET kunjungan=kunjungan+1 WHERE id_postingan='$id'")or die(mysql_error());
  if(mysqli_num_rows($show)==0){
    echo'<script>window.history.back()</script>';
  }else{
    $hasil=mysqli_fetch_assoc($show);
  }
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header.php';?>
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
            <h1><span> Artikel </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">
                <div class="row">
                  <div class="col-md-12">
                    <!--tabel-->
                  <div class="row">
                    <div class="col-md-12">
                      <center><label for="exampleFormControlInput1" style="font-size: 35px;">
                        <?php
                        echo $hasil ['judul'];
                        ?></label></center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0" width="100%">
                        <tr><td><div class="form-group"><center><?php echo '<img src="img/'.$hasil['gambar'].'" class="img-circle img-thumbnail">'; ?></center></div></td></tr>
                        <tr><td><div class="form-group"></div></td></tr>
                        <tr><td><div class="form-group"><?php echo $hasil['isi'];?></div></td></tr>
                        <tr><td><div class="form-group">
                          <table border="0" align="right">
                            <tr><td colspan="3"><hr></td></tr>
                            <tr><td>Tanggal Posting</td><td width="25"><center>:</center></td><td><?php echo $hasil['tgl_buat'];?></td></tr>
                            <tr><td>Tanggal Update</td><td width="25"><center>:</center></td><td><?php echo $hasil['tgl_update'];?></td></tr>
                            <tr><td colspan="3"><hr></td></tr>
                            <tr><td colspan="3"><button class="btn btn-primary" type="submit" onclick="history.back(-1)">Kembali</button></td></tr>
                          </table></div></td></tr>
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