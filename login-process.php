<?php
  include ('koneksi.php');

  session_start();
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  $sql = "SELECT * FROM user where (username = '$user' or email = '$user') and password ='$pass'";

  if ($result=mysqli_query($conn,$sql))
  {

    if (mysqli_num_rows(mysqli_query($conn,$sql)) == 0)
    {
      echo "<script type='text/javascript'>alert('Username & Password Salah');location='index.php';</script>";
    }
    else {
      $row=mysqli_fetch_array($result);

      if($row['verification']==1)
      {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id'] = $row['id'];

        if ($row['status']==1){
          $_SESSION['admin'] = $user;
          echo "<script type='text/javascript'>location='admin/admin-tool/index.php';</script>";
        }
        elseif ($row['status']==2) {
        $_SESSION['user'] = $user;
        echo "<script type='text/javascript'>alert('Selamat Datang');location='user/home.php';</script>";
        }
      }
      else
      {
        echo "<script type='text/javascript'>alert('Verifikasi Email Terlebih Dahulu');location='index.php';</script>";

      }
    }

  }
  else {
    echo 'gagal';
  }

?>
