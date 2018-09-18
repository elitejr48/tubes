<?php
  include 'koneksi.php';
  include 'kirimverif.php';

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
    $unique_id = md5(rand(0,10000));
    $mail = new Mailer();

    //verification = 0 not yet verified, 1 already verified
    //1 = admin 2 = user
    $sql = "INSERT into user (first_name,last_name,username,no_identitas,no_telp,email,alamat,password,gender,status,unique_id,verification)
    VALUES ('$fname', '$lname','$username','$no_identitas','$no_telp','$email','$alamat','$password','$gender','2','$unique_id','0')";
    $sql_get_user = mysqli_query($conn,"SELECT * FROM user where username='$username' or email='$email'") or die (mysql_error());

    if(mysqli_num_rows($sql_get_user) == 0)
    {
      if ($conn->query($sql) === TRUE) {

        $mail->sendEmail($email,$unique_id);
        echo "<script type='text/javascript'>alert('Registrasi Sukses, silahkan cek email untuk melakukan verifikasi');location='register.php';</script>";
      }
      else
      {
        echo "Error updating record: " . mysqli_error($conn);
      }
    }
    else {
      echo "<script type='text/javascript'>alert('Username sudah terdaftar');location='register.php';</script>";
    }
      exit;
  }
?>
