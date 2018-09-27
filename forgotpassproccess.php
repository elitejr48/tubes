<?php
  include 'koneksi.php';
  include 'kirimlupapassword.php';

  if(isset($_POST['send']))
  {
    $email = $_POST['email'];
    $unique_id = md5(rand(0,10000));
    $mail = new Mailer();

    //verification = 0 not yet verified, 1 already verified
    //1 = admin 2 = user
    $sql = "UPDATE user SET unique_id = '$unique_id' where email = '$email'";
    $sql_get_user = mysqli_query($conn,"SELECT * FROM user where email='$email' or email='$email'") or die (mysql_error());

    if(mysqli_num_rows($sql_get_user) != 0)
    {
        if ($conn->query($sql) === TRUE) {
            $mail->sendEmail($email,$unique_id);
            echo "<script type='text/javascript'>alert('Lupa Password sukses, silahkan cek email');location='register.php';</script>";
        }
        else
        {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    else {
        echo "<script type='text/javascript'>alert('Email belum terdaftar');location='forgotpassword.php';</script>";
    }
    
      exit;
  }
?>
