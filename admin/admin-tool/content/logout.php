<?php
  session_start();
  unset($_SESSION['admin']);
  session_destroy();
  echo "<script type='text/javascript'>alert('Terima Kasih');location='../../index.php';</script>";
?>
