
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
                    <tr><td colspan="3"><button class="btn btn-primary" type="submit" onclick="history.back(-1)">Kembali</button></td></tr>
                    <div class="col-md-12">
                      <?php 
                      include 'pagination3.php';

                 $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3;
                include 'config/koneksi.php';
                $sql = "SELECT * FROM postingan WHERE id_postingan ORDER BY tgl_buat DESC"; // query silahkan disesuaikan
                $result = mysqli_query($koneksi, $sql);
                 $data = mysqli_fetch_array($result);
                 $rpp = 1;
                 $tcount = mysqli_num_rows($result); // jumlah total baris
                $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
                $count = 0; // untuk paginasi
                $i = ($page - 1 ) * $rpp; // batas paginasi
                $no_urut = ($page -1 ) * $rpp; // nomor no_urut
                $reload = $_SERVER['PHP_SELF'] . "?q=" . $q . "&amp;adjacents=" . $adjacents;

                 
                 ?>
                 <?php
                    while (($count < $rpp) && ($i < $tcount)) {
                      mysqli_data_seek($result, $i);
                      $data = mysqli_fetch_array($result);
                    ?>
                      <center><label for="exampleFormControlInput1" style="font-size: 35px;">
                        <h1 style="word-spacing: 2px;">
                        <?php
                        echo $data ['judul'];
                        ?></h1></label>
                      <tr><td colspan="3"><hr></td></tr>
                            <tr><td>Tanggal Posting</td><td width="25">&nbsp;</td><td><?php echo $data['tgl_buat'];?></td></tr>
                           </center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0" width="100%">
                        <tr><td><div class="form-group"><center><?php echo '<img src="img/'.$data['gambar'].'" class="img-square img-thumbnail">'; ?></center></div></td></tr>
                         <table border="0" align="right">
                             
                            
                            
                          </table>
                        <tr><td><div class="form-group"></div></td></tr>
                        <tr><td><div class="form-group"><?php echo $data['isi'];?></div></td></tr>
                        <?php
                    $i++;
                    $count++; 
                    }
                    echo'<div><div><img><h><p></p></h></img></div></div></div>';
                    ?>
                        <tr><td><div class="form-group">
                          
                         </div></td></tr>
                      </table></center>
                      </div>
                  </div>
                  <center>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                    <!--silahkan di komen atau di hapus saja baris yang tidak ingin digunakan-->
                      <?php echo paginate_three($reload, $page, $tpages, $adjacents); ?>
                    </div>
                  </div>
                </center>
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
  </div>
    <?php include'footer.php';?>
  </main>
</body>
</html>