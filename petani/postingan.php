<?php
session_start();
if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header.php';?>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="blue-one-page tos-desktop" id="body">
  <main class="site-content" role="main">
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="header-page">
            <h1><span> Informasi </span></h1>
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
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
                $rpp = 10; // jumlah record per halaman

                $db_link = mysqli_connect('localhost', 'root', '', 'tobacco'); // sesuaikan username dan password mysqli anda
                $sql = "SELECT * FROM pos_tani WHERE nama LIKE '%$q%' OR jenis_tembakau LIKE '%$q%' OR isi LIKE '%$q%' ORDER BY tgl_buat DESC"; // query silahkan disesuaikan
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
                  <!--form pencarian-->
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Nama Petani/Jenis Tembakau..." name="q" value="<?php echo $q ?>">
                        <span class="input-group-btn">
                          <?php
                          if ($q <> '')
                            {
                          ?>
                          <a class="btn btn-default" href="<?php echo $_SERVER['PHP_SELF'] ?>">Reset</a>
                          <?php
                            }
                          ?>
                          <button class="btn btn-primary" type="submit">Cari</button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <!--tabel-->
                  <div class="row">
                    <div class="col-md-12">
                      <a href="tambah_postingan.php">Tambah Postingan</a>
                      <div class="table-container">
                        <table class="demo-table" >
                          <thead>
                            <tr>
                              <th scope="col" class="column-primary"><center>No.</center></th>
                                <th scope="col"><center>Nama Petani</center></th>
                                <th scope="col"><center>Gambar</center></th>
                                <th scope="col"><center>Stok</center></th>
                                <th scope="col"><center>Tanggal Buat</center></th>
                                <th scope="col"><center>Tanggal Update</center></th>
                                <th scope="col"><center>Jenis Tembakau</center></th>                               
                                <th scope="col"><center>Isi</center></th>
                                
                                
                                <th scope="col"><center>Kunjungan</center></th>
                                <th scope="col" class="column-primary"><center>Opsi</center></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            while (($count < $rpp) && ($i < $tcount)) {
                                mysqli_data_seek($result, $i);
                                $data = mysqli_fetch_array($result);
                                ?>
                            <tr>
                              <td data-header="No" class="title"><center><?php echo ++$no_urut; ?></center><a href="#" class="more"><i class="fa fa-chevron-down"></i></a></td>
                              <td data-header="Nama" ><?php echo $data ['nama']; ?></td>
                              <td data-header="Gambar" ><?php echo $data ['gambar']; ?></td>
                              <td data-header="Stok" ><?php echo substr($data ['stok'],0,200).' ...'; ?></td>
                              <td data-header="Tanggal Buat" ><center><?php echo $data ['tgl_buat']; ?></center></td>
                              <td data-header="Tanggal Update" ><center><?php echo $data ['tgl_update']; ?></center></td>
                              
                              <td data-header="Isi" ><?php echo substr($data ['isi'],0,200).' ...'; ?></td>
                              
                              <td data-header="Jenis Tembakau" ><center><?php echo $data ['jenis_tembakau']; ?></center></td>
                              <td data-header="Kunjungan" ><center><?php echo $data ['kunjungan']; ?></center></td>
                              <td><center><?php echo '<a href="update_postingan.php?id='.$data ['id_pos'].'"><img src="../images/edit.png" height="25" width="25" title="Update"></a> <a href="hapus_postingan.php?id='.$data['id_pos'].'"onclick="return confirm(\'Yakin ingin menghapus id '.$data ['id_pos'].'?\')"><img src="../images/hapus.png" height="25" width="25" title="Hapus"></a>'?></center></td>
                            </tr>
                            <?php
                                $i++;
                                $count++;
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>

            <!--pagination-->
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