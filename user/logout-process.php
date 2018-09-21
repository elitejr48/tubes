<?php
  session_start();
  unset($_SESSION['username']);
  session_destroy();
  echo "<script type='text/javascript'>location='../index.php';</script>";
?>
