<?php
  include '../koneksi.php';

  if(isset($_POST['edit']))
  {
    $id = $_POST['id'];
    $fname = $_POST['nama_depan'];
    $lname = $_POST['nama_belakang'];
    $no_identitas = $_POST['nomor_identitas'];
    $no_telp = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    $unique_id = md5(rand(0,10000));

    //verification = 0 not yet verified, 1 already verified
    //1 = admin 2 = user
    $sql = "UPDATE user set first_name = '$fname', last_name = '$lname', no_telp = '$no_telp' where id=$id";
    //$sql_get_user = mysqli_query($conn,"SELECT * FROM user where username='$username' or email='$email'") or die (mysql_error());

    if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Edit Profile Sukses');location='edit_profile.php';</script>";
    }
    else
    {
      echo "Error updating record: " . mysqli_error($conn);
    }
    exit;
  }
?>
