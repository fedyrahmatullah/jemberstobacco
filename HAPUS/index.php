<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header.php';?>
</head>
<body class="blue-one-page tos-desktop" id="body">
  <main class="site-content" role="main">
    <!-- slider -->
    <div class="section" id="slider" style="height: 650px;"><iframe class="slider" src="admin/JTIPOLIJE_files/carousel.htm" __idm_frm__="17179869191"></iframe></div>
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="header-page">
            <h1><span> Berita Alumni JTI </span></h1>
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
                $sql = "SELECT * FROM postingan WHERE ((judul LIKE '%$q%') OR (isi LIKE '%$q%')) AND kategori='berita' ORDER BY tgl_buat DESC"; // query silahkan disesuaikan
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
                        <input type="text" class="form-control" placeholder="Cari Judul/Isi..." name="q" value="<?php echo $q ?>">
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

                <div class="row">
                  <div class="col-md-12">
                    <table border="0" width="100%">
                    <?php
                    while (($count < $rpp) && ($i < $tcount)) {
                      mysqli_data_seek($result, $i);
                      $data = mysqli_fetch_array($result);
                    ?>
                    <div class="col-md-6 thumbnail dosen">
                      <tr><td colspan="2"><h4><strong><a href="isi_postingan.php?id_postingan=<?php echo $data['id_postingan']; ?>"><?php echo $data['judul']; ?></a></strong></h4></td></tr>
                      <tr><td><center><img src="images/<?php echo $data ['gambar']; ?>" title="<?php echo $data ['gambar']; ?>" alt="<?php echo $data ['gambar']; ?>" height="130" width="130"></center></td><td><?php include "kunjungan.php";
                      echo substr($data['isi'],0,250);?> ...<p align="right"><a href="isi_postingan.php?id_postingan=<?php echo $data ['id_postingan']; ?>"><button class="btn btn-primary" type="submit">Baca Selengkapnya</button></a></p></td></tr>
                    </div>
                    <?php
                    $i++;
                    $count++;
                    }
                    echo'<tr><td colspan="2"></td></tr></table>';
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