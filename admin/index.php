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
<body>
  <?php include'login.php';?>
  
  <?php include'footer.php';?>
</body>
</html>
<?php
}else{
  echo'<script>window.location="login.php"</script>';
}
?>