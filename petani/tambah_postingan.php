<?php
session_start();
if(isset($_SESSION['id'])){
?>



<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
            <h1><span> Tambah Informasi </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">

                <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan
                include '../pagination3.php';

//        pagination config start
                $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : ''; // untuk keyword pencarian
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 1; // khusus style pagination 2 dan 3
                $rpp = 1; // jumlah record per halaman

                $db_link = mysqli_connect('localhost', 'root', '', 'tobacco'); // sesuaikan username dan password mysqli anda
                $sql = "SELECT * FROM petani WHERE nama_petani LIKE '%$q%'  ORDER BY Id_Tani "; // query silahkan disesuaikan
                $result = mysqli_query($db_link, $sql); // eksekusi query

                $tcount = mysqli_num_rows($result); // jumlah total baris
                $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
                $count = 0; // untuk paginasi
                $i = ($page - 1) * $rpp; // batas paginasi
                $no_urut = ($page - 1) * $rpp; // nomor urut
                $reload = $_SERVER['PHP_SELF'] . "?q=" . $q . "&amp;adjacents=" . $adjacents; // untuk link ke halaman lain
//        pagination config end
                ?>

                <div class="row">
                  <div class="col-md-12">
                    <h3><p align="left"><a href="postingan.php">Kembali</a></p></h3>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <!--tabel-->
                  <div class="row">
                    <div class="col-md-12">
                      <center>Tambah Data Postingan</center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <?php
  
    
    $data=mysqli_fetch_assoc($result);
?>
                      <table border="0" width="100%">
                        <form action="tambah_proses_postingan.php" method="POST" name="tambah" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?php echo $id;?>">
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Nama Petani<font color="red">*</font></label>
                              <input name="nama_tani" class="form-control" id="exampleFormControlInput1" required="" value="<?php echo $_SESSION ['nama_petani']; ?>" disabled>
                            </div></td>
                          </tr>
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Gambar<font color="red">*</font></label>
                              <input type="file" name="gambar_tembakau" >
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Stok<font color="red">*</font></label>
                              <input name="stok" class="form-control" id="exampleFormControlInput1" required="">
                            </div></td>
                          </tr>
                          <tr>
                            <td width="25%"><div class="form-group">
                              <label for="exampleFormControlInput1">Jenis Tembakau<font color="red">*</font></label><select name="jenis_tembakau" class="form-control" id="exampleFormControlInput1" required="">
                              <option value="">-Pilih Kategori-</option>
                              <option value="Berita">----</option>
                              <option value="Informasi">Informasi</option>
                            </select>
                            </div></td><td></td><td></td>
                          </tr>
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Isi<font color="red">*</font></label>
                              <textarea class="ckeditor" cols="100" rows="20" name="isi" required=""></textarea>
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