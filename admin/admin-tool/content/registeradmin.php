<?php
  include '../../../koneksi.php';

  if(isset($_POST['tambah']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $no_identitas = $_POST['identitas'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];

    $sql = "INSERT into user (first_name,last_name,username,no_identitas,no_telp,email,alamat,password,gender,status)
    VALUES ('$fname', '$lname','$username','$no_identitas','$no_telp','$alamat','$email','$password','$gender','2')"; //1 = admin 2 = user
    $sql_get_user = mysqli_query($conn,"SELECT * FROM user where username='$username'") or die (mysql_error());

    if(mysqli_num_rows($sql_get_user) == 0)
    {
      if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Daftar Sukses');location='../index.php?user';</script>";
      }
      else
      {
        echo "Error updating record: " . mysqli_error($conn);
      }
    }
    else {
      echo "<script type='text/javascript'>alert('Username sudah terdaftar');location='../index.php?user';</script>";
    }
      exit;
  }
  else if(isset($_POST['edit']))
  {
    $id = $_POST['id'];
    $fname = $_POST['namadepan'];
    $lname = $_POST['namabelakang'];
    $no_identitas = $_POST['identitas'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE user set first_name='$fname', last_name='$lname', no_identitas='$no_identitas',no_telp='$no_telp', alamat='$alamat'
    WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Daftar Sukses');location='../index.php?user';</script>";
    }
    else
    {
      echo "Error updating record: " . mysqli_error($conn);
    }
    exit;
  }

?>
