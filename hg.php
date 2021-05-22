<?php
session_start();

  if($_POST["email"]=="b201210080@sakarya.edu.tr" && $_POST["sifre"]=="b201210080")
  {
    $_SESSION["kullanıcı"]=$_POST["email"];
    echo "<script>alert('Hoşgeldiniz b201210080')</script>";
  }

  else
  {
    header("location:giris.php");
  }
?>