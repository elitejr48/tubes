<?php
  unset($_SESSION['admin']);
  session_destroy();
  echo "<script type='text/javascript'>location='../../index.php';</script>";
?>
