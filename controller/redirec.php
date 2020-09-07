<?php

  session_start();

  if($_SESSION['rol'] == 1){
    header('location: ../indexAdmin.php');
  }else if($_SESSION['rol'] == 2){
    header('location: ../socioindex.php');
  }

 ?>
