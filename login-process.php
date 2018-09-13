<?php
  include ('koneksi.php');

  session_start();
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  $sql = "SELECT * FROM user where username = '$user' and password ='$pass'";

  if ($result=mysqli_query($conn,$sql))
  {
    if (mysqli_num_rows(mysqli_query($conn,$sql)) == 0)
    {
      echo "<script type='text/javascript'>alert('Username & Password Salah');location='index.php';</script>";
    }
    else {
      $_SESSION['username'] = $_POST['username'];
      echo "<script type='text/javascript'>alert('Selamat Datang');location='home.php';</script>";
    }
  }

?>
