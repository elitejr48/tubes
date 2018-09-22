<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>Administrator</title>
</head>
<?php
  session_start();
  if (!isset($_SESSION['admin']))
  {
    echo "<script type='text/javascript'>location='../../index.php';</script>";
  }
  ?>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="../assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center>Administrator</center></div>
         <?php include "menu.php"; ?>
   </div>

   <?php
         if (isset($_GET['user']))
         {
            include "content/user.php";
         }
         else if(isset($_GET['kamar']))
         {
               include "content/kamar.php";
         }
         else if(isset($_GET['order']))
         {
               include "content/order.php";
         }
         else if(isset($_GET['laporan']))
         {
               include "content/laporan.php";
         }
         else if(isset($_GET['logout']))
         {
              include "content/logout.php";
         }
         else
         {
            include "content/home.php";
         }

    ?>

   <div class="col-md-12" style="background:#1682ba;padding:8px;color:#fff;"><center>SUN HOTEL</center></div>
</body>
<html>
