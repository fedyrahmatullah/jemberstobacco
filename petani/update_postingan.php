<?php
session_start();
if(isset($_SESSION['login'])){
?>
<?php
  include('koneksi.php');
  $id=$_GET['id'];
  $show=mysqli_query($koneksi,"SELECT * FROM postingan WHERE id_postingan='$id'");
  if(mysqli_num_rows($show)==0){
    echo'<script>window.history.back()</script>';
  }else{
    $hasil=mysqli_fetch_assoc($show);
  }
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
            <h1><span> Edit Postingan </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">

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
                      <center>Update Postingan</center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0" width="100%">
                        <form action="update_proses_postingan.php" method="POST" name="update">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Judul<font color="red">*</font></label>
                              <input name="judul" class="form-control" id="exampleFormControlInput1" required="" value="<?php echo $hasil['judul'];?>">
                            </div></td>
                          </tr>
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Gambar<font color="red">*</font></label><br>
                              <center><?php echo '<img src="../images/'.$hasil['gambar'].'">'; ?>
                              <input type="hidden" name="gambarawal" value="<?php echo $hasil['gambar']; ?>" /><br>
                              <input type="file" name="gambar" value="<?php echo $hasil['gambar']; ?>"/></center>
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="25%"><div class="form-group">
                              <label for="exampleFormControlInput1">Kategori<font color="red">*</font></label><select name="kategori" class="form-control" id="exampleFormControlInput1" required="">
                              <option value="">-Pilih Kategori-</option>
                              <option value="Berita" <?php if($hasil['kategori']=='Berita'){echo'selected';}?>>Berita</option>
                              <option value="Informasi" <?php if($hasil['kategori']=='Informasi'){echo'selected';}?>>Informasi</option>
                            </select>
                            </div></td><td></td><td></td>
                          </tr>
                          <tr>
                            <td colspan="3"><div class="form-group">
                              <label for="exampleFormControlInput1">Isi<font color="red">*</font></label>
                              <textarea class="ckeditor" cols="100" rows="20" name="isi" required=""><?php echo $hasil['isi'];?></textarea>
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3"></td></tr>
                          <tr><td colspan="3"><button class="btn btn-primary" type="reset">Reset</button> <button class="btn btn-primary" type="submit" name="update">Update</button></td></tr>
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