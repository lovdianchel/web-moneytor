<?php
  $host = "localhost";
  $db = "moneytor";
  $uname = "root";
  $pass = "";

  $connect = mysqli_connect($host, $uname, $pass, $db);

  if (!$connect) {
    echo "Koreksi ke database gagal : " . mysqli_connect_error();
  }
?>
