<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

class Mailer
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer\PHPMailer\PHPMailer(true);
    }

    public function sendEmail($email, $unique_id){
    $this->mail->IsSMTP();
    $this->mail->Host = 'smtp.gmail.com';
    $this->mail->Port = 587;
    $this->mail->SMTPSecure = 'tls';
    $this->mail->SMTPAuth = true;
    $this->mail->Username = 'sunhotelreplier@gmail.com';
    $this->mail->Password = 'sunhotel45919';
    $this->mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    $this->mail->setFrom('sunhotelreplier@gmail.com','Sun Hotel');
    $this->mail->addAddress($email);

    $this->mail->isHTML(true);
    $this->mail->Subject = 'Reset Your Account Password';
    $this->mail->Body = 'Please Click on Link Below to reset your password:<br><br>
            <a href="http://localhost:8080/tubes/resetpass.php?email=' . $email . '&kode=' . $unique_id . '">
            Click Here to Reset your password</a>';

    if($this->mail->send()) {
      echo "ya";
      return true;
    }
    else{
      echo "tidak";
      return false;
    }

  }
}
?>
