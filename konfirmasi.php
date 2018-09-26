<?php
  include 'koneksi.php';
  include 'kirimverif.php';

    $kode = $_GET['kode'];
    $email = $_GET['email'];

    //verification = 0 not yet verified, 1 already verified
    //1 = admin 2 = user
    $sql = "select * from user where email ='$email' and verification = '$kode'";

    if($result=mysqli_query($conn,$sql))
    {
      if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
      {
        $sql1 = "update user set verification=1,unique_id="sunhotel10929192" where email='$email'";

        if ($conn->query($sql1) === TRUE) {
          echo "<script type='text/javascript'>alert('Sukses Melakukan Verifikasi');location='index.php';</script>";
        }
        else
        {
          echo "<script type='text/javascript'>alert('Gagal Melakukan Verifikasi');location='index.php';</script>";
        }

      }
      else
      {
        echo "<script type='text/javascript'>alert('Data salah');location='index.php';</script>";
      }
      exit;
  }
?>
