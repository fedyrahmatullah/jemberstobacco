<?php
session_start();
if(isset($_SESSION['login'])){
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
                    <h3><p align="left"><a href="index.php">Kembali</a></p></h3>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <!--tabel-->
                  <div class="row">
                    <div class="col-md-12">
                      <center>Tambah Data Mahasiswa</center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0">
                        <form action="tambah_proses_data_mhs.php" method="POST" name="tambah">
                          <tr>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">NIM<font color="red">*</font></label>
                              <input name="nim" class="form-control" id="exampleFormControlInput1" required="">
                            </div></td>
                            <td width="10"></td>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Foto<font color="red">*</font></label>
                              <input type="file" name="foto" required="">
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Nama<font color="red">*</font></label>
                              <input name="nama" class="form-control" id="exampleFormControlInput1" required="">
                            </div></td>
                            <td width="10"></td>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Pekerjaan</label>
                              <input name="pekerjaan" class="form-control" id="exampleFormControlInput1">
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Prodi<font color="red">*</font></label><select name="prodi" class="form-control" id="exampleFormControlInput1" required="">
                              <option value="">-Pilih Prodi-</option>
                              <option value="Manajemen Informatika">Manajemen Informatika</option>
                              <option value="Teknik Komputer">Teknik Komputer</option>
                              <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                            </div></td>
                            <td width="10"></td>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Email</label>
                              <input name="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Angkatan<font color="red">*</font></label>
                              <input name="angkatan" class="form-control" id="exampleFormControlInput1" required="">
                            </div></td>
                            <td width="10"></td>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Judul TA</label>
                              <input name="jdl_TA" class="form-control" id="exampleFormControlInput1">
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Tahun Masuk<font color="red">*</font></label>
                              <input name="th_masuk" class="form-control" id="exampleFormControlInput1" required="">
                            </div></td>
                            <td width="10"></td>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Tahun Lulus<font color="red">*</font></label>
                              <input name="th_lulus" class="form-control" id="exampleFormControlInput1" required="">
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">Jenis Kelamin<font color="red">*</font></label><br>
                              <input name="jkel" type="radio" value="L" required="">Laki-Laki <input name="jkel" type="radio" value="P" required="">Perempuan
                            </div></td>
                            <td width="10"></td>
                            <td><div class="form-group">
                              <label for="exampleFormControlInput1">No. HP/Telp.</label>
                              <input name="no_telp" class="form-control" id="exampleFormControlInput1">
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3"></td></tr>
                          <tr><td colspan="3"><button class="btn btn-primary" type="reset">Reset</button> <button class="btn btn-primary" type="submit" name="tambah">Tambah</button></td></tr>
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