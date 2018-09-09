<?php
  include 'koneksi.php';

  if(isset($_POST['tambah']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $no_identitas = $_POST['no_identitas'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($_POST['gender'] == "Male")
    {
      $gender = $_POST['m'];
    }
    else {
      $gender = $_POST['f'];
    }

    $sql = "INSERT into siswa (nis,first_name,last_name,username,no_identitas,no_telp,email,alamat,password,gender,status)
    VALUES ('$fname', '$lname','$username','$no_identitas','$no_telp','$alamat','$email','$password','$gender','2')"; //1 = admin 2 = user

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    }
    else
    {
      echo "Error updating record: " . mysqli_error($conn);
    }
    header("Location: index.php");
    exit;
  }
?>
