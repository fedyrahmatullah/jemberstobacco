<?php
  include('admin/koneksi.php');
  $id=$_GET['id_mhs'];
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
                      <center><label for="exampleFormControlInput1">
                                <?php
                                if($hasil['status']=='1'){ echo'<font color="green">'.$hasil ['nama']; echo'</font>';}else{
                                  echo $hasil ['nama'];
                              }; ?></label></center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0">
                        <tr><td colspan="3"><div class="form-group"><center><?php echo '<img src="images/'.$hasil['foto'].'" class="img-circle img-thumbnail">'; ?></center></div></td></tr>
                        <tr><td colspan="3"><div class="form-group"></div></td></tr>
                        <tr><td><label for="exampleFormControlInput1">NIM</label></td><td width="50"></td><td><label for="exampleFormControlInput1">Pekerjaan</label></td></tr>
                        <tr><td><?php echo $hasil['nim'];?></td><td width="50"></td><td><?php echo $hasil['pekerjaan'];?></td></tr>
                        <tr><td colspan="3"><div class="form-group"></div></td></tr>
                        <tr><td><label for="exampleFormControlInput1">Prodi</label></td><td width="50"></td><td><label for="exampleFormControlInput1">Email</label></td></tr>
                        <tr><td><?php echo $hasil['prodi'];?></td><td width="50"></td><td><?php echo $hasil['email'];?></td></tr>
                        <tr><td colspan="3"><div class="form-group"></div></td></tr>
                        <tr><td><label for="exampleFormControlInput1">Angkatan</label></td><td width="50"></td><td><label for="exampleFormControlInput1">Judul TA</label></td></tr>
                        <tr><td><?php echo $hasil['angkatan'];?></td><td width="50"></td><td><div class="form-group"><?php echo $hasil['jdl_TA'];?></div></td></tr>
                        <tr><td colspan="3"><div class="form-group"></div></td></tr>
                        <tr><td><label for="exampleFormControlInput1">Tahun Masuk</label></td><td width="50"></td><td><label for="exampleFormControlInput1">Tahun Lulus</label></td></tr>
                        <tr><td><?php echo $hasil['th_masuk'];?></td><td width="50"></td><td><?php echo $hasil['th_lulus'];?></td></tr>
                        <tr><td colspan="3"><div class="form-group"></div></td></tr>
                        <tr><td><label for="exampleFormControlInput1">Jenis Kelamin</label></td><td width="50"></td><td><label for="exampleFormControlInput1">No. HP/Telp.</label></td></tr>
                        <tr><td><?php echo $hasil['jkel'];?></td><td width="50"></td><td><?php echo $hasil['no_telp'];?></td></tr>
                        <tr><td colspan="3"><div class="form-group"></div></td></tr>
                        <tr><td colspan="3"><label for="exampleFormControlInput1">Status</label><br><?php if($hasil['status']=='1'){ echo'<font color="green">Akun Aktif'; echo'</font>';}else{ echo '<font color="red">Akun Belum Aktif</font>'; }; ?></td></tr>
                      </table></center>
                      <button class="btn btn-primary" type="submit" onclick="history.back(-1)">Kembali</button>
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