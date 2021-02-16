<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include'header.php';?>
  <style type="text/css">
    .konten img {vertical-align: middle;}
    .konten .isiArtikel{
      position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0); /* Fallback color */
      background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
      color: #f1f1f1;
      width: 680px;
      padding: 10px;
      margin-bottom: 90px;}


      .col-md-12 right-side .search {
        float: right;
        padding-right:10px;
        }

.col-md-12 right-side input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.col-md-12 right-side .search button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.col-md-12 right-side .search button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .col-md-12 right-side .search {
    float: none;
  }
  .col-md-12 right-side a, .col-md-12 right-side input[type=text], .col-md-12 right-side .search button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .col-md-12 right-side input[type=text] {
    border: 1px solid #ccc;  
  }


    }


* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.text h{
  font-size: 30px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
    
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.slideshow-container .text {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.mySlides .fade img{
  vertical-align: middle;
}
* {
  box-sizing: border-box;
}
.top-right {

  padding: 30px 35px;
  position: absolute;
  top: 0;
    position: absolute;
    top: 8px;
    right: 16px;
}

.block {
    display: block;
    width: 100%;
    border: none;
    background-color: #0066ff;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

.block:hover {
    background-color: #0039e6;
    color: white;}
* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}
.column-11 {
    float: left;
    width: 100%;
    padding: 5px;
    height: 280px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/*scroll*/
div.scrollmenu {
    background-color: #333;
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}

div.scrollmenu a:hover {
    background-color: #777;
}

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
          <div style="margin-top: 20px; margin-bottom: 50px;"></div>
          <div class="col-md-12 left-side" style=" width: 65%">
            <div class="artikel">
              <div class="konten">
               <div class="slideshow-container">

                <?php 


                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                include 'config/koneksi.php';
                $sql = "SELECT * FROM postingan WHERE id_postingan ORDER BY tgl_buat DESC"; // query silahkan disesuaikan
                $result = mysqli_query($koneksi, $sql);
                 $data = mysqli_fetch_array($result);
                 $rpp = 3;
                 $tcount = mysqli_num_rows($result); // jumlah total baris
                $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
                $count = 0; // untuk paginasi
                $i = ($page - 1 ) * $rpp; // batas paginasi
                $no_urut = ($page -1 ) * $rpp; // nomor no_urut

                 
                 ?>
                 
                <div style="text-align:right; ">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>  
<?php
                    while (($count < $rpp) && ($i < $tcount)) {
                      mysqli_data_seek($result, $i);
                      $data = mysqli_fetch_array($result);
                    ?>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/<?php echo $data ['gambar']; ?>" style="width:100%">
  <div class="text">
   <h><?php echo $data['judul']; ?> </h></a>
    <p><?php echo substr($data['isi'],0,20);?> ...</p>
  </div>
</div>
 <?php
                    $i++;
                    $count++; 
                    }
                    echo'<div><div><img><h><p></p></h></img></div></div></div>';
                    ?>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i ;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
                  
                

                
                
            
              </div>
            </div>
            <div class="artikel" style="margin-bottom: 25px; margin-top: 5px;">
             <?php 
                      

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
                      <center><label for="exampleFormControlInput1" style="font-size: 35px; ">
                        <h1 style="word-spacing: 2px;">
                        <b><?php
                        echo $data ['judul'];
                        ?></h1></b></label>
                      <tr><td colspan="3"><hr></td></tr>
                            <tr><td>Tanggal Posting</td><td width="25">&nbsp;</td><td><?php echo $data['tgl_buat'];?></td></tr>
                           </center><br>
                      <div class="table-container">
                    <!--form-->
                    <center>
                      <table border="0" width="100%">
                        <tr><td><div class="form-group"><?php echo '<img src="img/'.$data['gambar'].'" class="img-square img-thumbnail">'; ?></div></td></tr>
                         <table border="0" align="right">
                             
                            
                            
                          </table>
                        <tr><td><div class="form-group"></div></td></tr>
                        <tr><td><div class="form-group"><?php echo substr ($data['isi'],0,500);?></div></td></tr>
                        <p align="right"><a href="isi_postingan.php?id_postingan=<?php echo $data ['id_postingan']; ?>"><button class="btn btn-primary" type="submit">Baca Selengkapnya</button></a></p></td></tr><br><br>  
                        <?php
                    $i++;
                    $count++; 
                    }
                    echo'<div><div><img><h><p></p></h></img></div></div></div>';
                    ?>
          </div>
          </div>



           <div class="col-md-12 right-side" style="width: 35%;">
            <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan 
                include 'pagination3.php';

//        pagination config start
                $Cari = isset($_REQUEST['Cari']) ? urldecode($_REQUEST['Cari']) : ''; // untuk keyword pencarian
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
                $rpp = 3; // jumlah record per halaman

                include 'config/koneksi.php';
                $sql = "SELECT * FROM postingan WHERE ((judul LIKE '%$Cari%') OR (isi LIKE '%$Cari%'))  ORDER BY kunjungan DESC"; // query silahkan disesuaikan
                $result = mysqli_query($koneksi, $sql); // eksekusi query

                $tcount = mysqli_num_rows($result); // jumlah total baris
                $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
                $count = 0; // untuk paginasi
                $i = ($page - 1) * $rpp; // batas paginasi
                $no_urut = ($page - 1) * $rpp; // nomor urut
                $reload = $_SERVER['PHP_SELF'] . "?Cari=" . $Cari . "&amp;adjacents=" . $adjacents; // untuk link ke halaman lain
//        pagination config end
                ?>
            
            <div class="artikel">
              <div class="konten">
                <div class="search">
                  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                    <input type="text" placeholder="cari...." name="Cari" value="<?php echo $Cari ?>">
                    <button type="submit"><i class="fa fa-search"></i> </button>


                  </form>
                 </div><br>
              

          
            <button class="block">Terpopuler</button>
            </br>
           
              
                


                    
                  
                    <table border="0" width="100%">
                    <?php
                    while (($count < $rpp) && ($i < $tcount)) {
                      mysqli_data_seek($result, $i);
                      $data = mysqli_fetch_array($result);
                    ?>
                    <div class="col-md-6 ">
                      <tr><td colspan="2"><h4><strong><a href="isi_postingan.php?id_postingan=<?php echo $data['id_postingan']; ?>"><?php echo substr ($data['judul'],0,15);?>..</a></strong></h4></td></tr>
                      <tr><td><center><img src="img/<?php echo $data ['gambar']; ?>" title="<?php echo $data ['gambar']; ?>" alt="<?php echo $data ['gambar']; ?>" height="80" width="80"></center></td><td><?php 
                      echo substr($data['isi'],0,20);?> ...<p align="right"><a href="isi_postingan.php?id_postingan=<?php echo $data ['id_postingan']; ?>"><button class="btn btn-primary" type="submit">Baca Selengkapnya</button></a></p></td></tr>
                    </div>
                    <?php
                    $i++;
                    $count++; 
                    }
                    echo'<tr><td colspan="2"></td></tr></table>';
                    ?>
                  </div>
                  </div>
            </div>
          </div>
                
             


          
           

          <div class="col-md-12 left-side" style=" width: 100%">
            <center><span style="color: black; font-size: 40px;"> S A R A N</span></center>
            <br>
            <br>
            

             
                <?php 


                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                include 'config/koneksi.php';
                $sql = "SELECT * FROM feedback WHERE id ORDER BY tanggal DESC"; // query silahkan disesuaikan
                $result = mysqli_query($koneksi, $sql);
                 $data = mysqli_fetch_array($result);
                 $rpp = 4;
                 $tcount = mysqli_num_rows($result); // jumlah total baris
                $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
                $count = 0; // untuk paginasi
                $i = ($page - 1 ) * $rpp; // batas paginasi
                $no_urut = ($page -1 ) * $rpp; // nomor no_urut

                 
                 ?>
                 <?php
                    while (($count < $rpp) && ($i < $tcount)) {
                      mysqli_data_seek($result, $i);
                      $data = mysqli_fetch_array($result);
                    ?>
                
                  <div class="row">
  <div class="column" style="background-color:#aaa;">
    <div class="column-11" style="background-color:#bbb;">
    <h2 style="font-size: 20px"><?php echo $data['email']; ?></h2>
    <p><?php echo $data['pesan']; ?></p>
  </div>
  </div>
   <?php
                    $i++;
                    $count++; 
                    }
                    echo'<div><div><img><h><p></p></h></img></div></div></div>';
                    ?>
  
                

                
                
            
              </div>
            </div>
          </div>
           </div>
           <!-- container -->  
        </div> <!--tutup class .row -->
      </div> <!--tutup class .container -->
    </div> <!--tutup id #main-konten -->
    <?php include'footer.php';?>
  </main>
</body>
</html>