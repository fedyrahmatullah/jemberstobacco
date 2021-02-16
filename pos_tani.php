<!DOCTYPE html>
<html>
<head>
  <?php include'header.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}


/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
}

/* Clear floats after the columns */
.row1:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
.button{
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}
.column-33{
  float: left;
  width: 33.33333%;
  padding: 20px;
}
.column-66{
  float: left;
  width: 66.66666%;
  padding: 20px;
}
</style>
</head>
<body class="blue-one-page tos-desktop" id="body" style="margin-top: 60px;">
  <main class="site-content" role="main">
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">


<h2>Data-data</h2>

<p>Data Petani</p>



<div id="btnContainer">
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<?php
include 'pagination3.php';

$q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : '';
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
                $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
                $rpp = 5; // jumlah record per halaman

                include 'config/koneksi.php';
                $sql = "SELECT * FROM postingan WHERE ((judul LIKE '%$q%') OR (isi LIKE '%$q%')) AND kategori='Informasi' ORDER BY tgl_buat DESC"; // query silahkan disesuaikan
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
                          <a class="btn btn-default" style="background-color: red;" href="<?php echo $_SERVER['PHP_SELF'] ?>">Reset</a>
                          <?php
                            }
                          ?>
                          <button class="btn btn-primary" type="submit" style="background-color: red;">Cari</button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>

<div class="row1">
 
  <div class="column" style="background-color:#aaa;">
    <div class="column-33">
      <img src="img/back.jpg" width="150px">
    </div>
    <div class="column-66">
      <p>Nama</p>
      <p>Stok</p> 
      <p>Jenis Tembakau</p>
      <button class="button" style="background-color: blue"><b>Selengkapnya</b></button>
    </div> 
    
  </div>
  <div class="column" style="background-color:#bbb;">
    <div class="column-33">
      <img src="img/back.jpg" width="150px">
    </div>
    <div class="column-66">
      <p>Nama</p>
      <p>Stok</p> 
      <p>Jenis Tembakau</p>
      <button class="button" style="background-color: blue"><b>Selengkapnya</b></button>
    </div> 
  </div>
</div>

<div class="row1">
  <div class="column" style="background-color:#ccc;">
    <div class="column-33">
      <img src="img/back.jpg" width="150px">
    </div>
    <div class="column-66">
      <p>Nama</p>
      <p>Stok</p> 
      <p>Jenis Tembakau</p>
      <button class="button" style="background-color: blue"><b>Selengkapnya</b></button>
    </div> 
  </div>
  
  <div class="column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>

<div class="row1">
 
  <div class="column" style="background-color:#aaa;">
    <div class="column-33">
      <img src="img/back.jpg" width="150px">
    </div>
    <div class="column-66">
      <p>Nama</p>
      <p>Stok</p> 
      <p>Jenis Tembakau</p>
      <button class="button" style="background-color: blue"><b>Selengkapnya</b></button>
    </div> 
    
  </div>
  <div class="column" style="background-color:#bbb;">
    <div class="column-33">
      <img src="img/back.jpg" width="150px">
    </div>
    <div class="column-66">
      <p>Nama</p>
      <p>Stok</p> 
      <p>Jenis Tembakau</p>
      <button class="button" style="background-color: blue"><b>Selengkapnya</b></button>
    </div> 
  </div>
</div>

<div class="row1">
  <div class="column" style="background-color:#ccc;">
    <div class="column-33">
      <img src="img/back.jpg" width="150px">
    </div>
    <div class="column-66">
      <p>Nama</p>
      <p>Stok</p> 
      <p>Jenis Tembakau</p>
      <button class="button" style="background-color: blue"><b>Selengkapnya</b></button>
    </div> 
  </div>
  
  <div class="column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>

<center>
                  <div class="row">
                    <div class="col-md-12">
                    <!--silahkan di komen atau di hapus saja baris yang tidak ingin digunakan-->
                      <?php echo paginate_three($reload, $page, $tpages, $adjacents); ?>
                    </div>
                  </div>
                </center>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</div>
</div>
</div>
<?php include'footer.php';?>
</main>
</body>

</html>
