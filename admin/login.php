<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="id-ID">
<head>
  <?php include'header_login.php';?>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="blue-one-page tos-desktop" id="body">
  <main class="site-content" role="main">
    <div class="section" id="main-konten">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="header-page">
            <h1><span> LOGIN </span></h1>
          </div>
          <div class="col-md-12 left-side">
            <div class="artikel">
              <div class="konten">
                <div class="row">
                  <div class="col-md-12">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">

                    <div class="login-wrap">
                      <div class="login-html">
                        <form action="ceklogin.php" method="POST" name="login">
                          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
                          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                          <div class="login-form">
                            <div class="sign-in-htm">
                              <div class="group">
                                <label for="user" class="label">Username</label>
                                <font face="calibri">
                                  <input id="user" type="text" class="input" name="user_login"></font>
                              </div>
                              <div class="group">
                                <label for="pass" class="label">Password</label>
                                <font face="calibri">
                                  <input id="pass" type="password" class="input" data-type="password" name="pass_login"></font>
                              </div>
                              <div class="group">
                                <input type="submit" class="button" value="Log In" name="login">
                              </div>
                              <div class="hr"></div>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>

                  </div>
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