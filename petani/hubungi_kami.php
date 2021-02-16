<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header.php';?>
  <style>
  .mode7 {
    border-radius: 30px 0 30px 0;
    -moz-border-radius: 30px 0 30px 0;
    -webkit-border-radius: 30px 0 30px 0;
    -o-border-radius: 30px 0 30px 0;
    transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
  }
  .mode7:hover {
    box-shadow: 1px 1px 10px 3px rgba(0,0,0,0.5);
    border-radius:0;
    -moz-border-radius:0;
    -webkit-border-radius:0;
    -o-border-radius:0;
  }
  .wrap-input100 {
  width: 75%;
  position: relative;
  background-color: #f7f7f7;
  border: 1px solid #e6e6e6;
  border-radius: 10px;
}


/*---------------------------------------------*/
.input100 {
  font-family: Poppins-Regular;
  color: #333333;
  line-height: 1.2;
  font-size: 18px;

  display: block;
  width: 100%;
  background: transparent;
  height: 50px;
  padding: 0 20px;
}
  </style>
</head>
<body class="blue-one-page tos-desktop" id="body">
  <main class="site-content" role="main">
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">
          <div class="col-md-12 left-side" id="header-page">
            <h1><span> Hubungi Kami </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">
                <div class="row">
                  <div class="col-md-12">
                  </div>
                </div>
                Jika ada pesan, kesan, kritik dan saran atau ada artikel yang kurang layak dipublikasikan. Silahkan hubungi kami melalui kontak form atau telp, fax, dan email kami berikut.<br>
                <ol>
                  <br>
                  <p><img height="30px"  src="img/tlf.png" ><a>Tlp : 0331 - 999999</a>  </img></p>
                  <br><img height="30px" src="img/fax.png" ><a>Fax : 0331 - 999998</a> </img></p>
                  <br><img height="30px" src="img/pesan.png" ><a>jemberstobacco@gmail.com</a> </img></p>
                  
                </ol>
            <!--pagination-->
                <left>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="p-t-31 p-b-9">
                        <span class="txt1">
                          Email
                        </span>
                      </div>
                      <div class="wrap-input100">
                        <input class="input100" type="text" name="email_saran" required>
                        <span class="focus-input100"></span>
                      </div>
                      <div class="p-t-31 p-b-9">
                        <span class="txt1">
                          Nomor HP
                        </span>
                      </div>
                      <div class="wrap-input100">
                        <input class="input100" type="text" name="nomor_saran" required>
                        <span class="focus-input100"></span>
                      </div>
                      <div class="p-t-31 p-b-9">
                        <span class="txt1">
                          Saran dan Pembahasan
                        </span>
                      </div>
                      <div class="wrap-input100">
                        <input width="100%" class="input100" type="text" name="kotak_saran" required>
                        <span class="focus-input100"></span>
                      </div>
                      <button class="btn btn-primary" type="reset">Reset</button> 
                      <button class="btn btn-primary" type="submit" name="kirim">Kirim</button>
                    <!--silahkan di komen atau di hapus saja baris yang tidak ingin digunakan-->
                    </div>
                  </div>
                </left>
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