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
            <h1><span> Alumni JTI </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">
                <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan
                include 'pagination3.php';

//        pagination config start
                $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : ''; // untuk keyword pencarian
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
                $rpp = 10; // jumlah record per halaman

                include 'admin/koneksi.php';
                $sql = "SELECT * FROM mhs WHERE ((nim LIKE '%$q%') OR (nama LIKE '%$q%') OR (angkatan LIKE '%$q%')) AND prodi='Teknik Komputer' ORDER BY th_lulus DESC"; // query silahkan disesuaikan
                $result = mysqli_query($koneksi, $sql); // eksekusi query

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
                        <input type="text" class="form-control" placeholder="Cari Nama/NIM..." name="q" value="<?php echo $q ?>">
                        <select name="q">
                          <option>Pilih Tahun Angkatan</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                        </select>
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
                <!-- dropdown menu program studi -->
                <div class="row">
                  <div class="col-md-4">
                    <div style="position: absolute;">
                      <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Pilih Program Studi<span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="index.php">Semua Program Studi</a></li>
                        <li><a href="data_alumni_mhs_tkk.php">Teknik Komputer (TKK)</a></li>
                        <li><a href="data_alumni_mhs_mif.php">Manajemen Informatika (MIF)</a></li>
                        <li><a href="data_alumni_mhs_tif.php">Teknik Informatika (TIF)</li>
                      </ul>
                    </div>
                    <div class="col-md-8"></div>
                  </div>
                </div>
                <br> <!-- tag <br> untuk mencegah tumpang tindih antara dropdown dengan kolom data alumni -->
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <?php
                    while (($count < $rpp) && ($i < $tcount)) {
                      mysqli_data_seek($result, $i);
                      $data = mysqli_fetch_array($result);
                    ?>
                    <div class="col-md-6 thumbnail dosen">
                      <div class="col-md-4 text-center">
                        <img src="images/<?php echo $data ['foto']; ?>" class="img-circle img-thumbnail" height="130"> 
                      </div>
                      <div class="col-md-8 detail">
                        <h4><strong><a href="detail_data_mhs.php?id_mhs=<?php echo $data ['id_mhs']; ?>"><?php echo $data ['nama']; ?></a></strong></</h4>
                        <p>NIM : <?php echo $data ['nim']; ?></p>
                        <p>Prodi : <?php echo $data ['prodi']; ?></p>
                        <p>Angkatan : <?php echo $data ['angkatan']; ?></p>
                      </div>
                    </div>
                    <?php
                    $i++;
                    $count++;
                    }
                    ?>
                  </div>
                </div>

            <!--pagination-->
                <center>
                  <div class="row">
                    <div class="col-md-12">
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