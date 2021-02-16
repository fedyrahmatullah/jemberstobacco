<?php
  include_once("../config/koneksi.php");
  $id = $_GET['id'];
  $result = "DELETE FROM feedback WHERE id=$id";
  if (mysqli_query($koneksi, $result)) {
    header('Location: daftar_feedback.php');
  }
?>