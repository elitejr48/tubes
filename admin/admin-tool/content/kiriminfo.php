<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require '../../../phpmailer/src/PHPMailer.php';
require '../../../phpmailer/src/Exception.php';
require '../../../phpmailer/src/SMTP.php';

class Mailer
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer\PHPMailer\PHPMailer(true);
    }

    public function sendEmail($email,$nama,$tgl_transaksi,$namakamar,$tgl_menginap){
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
    $this->mail->Subject = 'Informasi Pemesanan Kamar Hotel';
    $this->mail->Body = '<h4>Yth. Bapak / Ibu '.$nama.'</h4>
          Berikut adalah pesanan anda<br><br>
          Nama Kamar : '.$namakamar.'<br>
          Tanggal Pemesanan : '.$tgl_transaksi.'<br>
          Tanggal Menginap : '.$tgl_menginap.'<br>
          Jam Check-in : 12.00 WIB<br>
          Pesanan anda telah terkonfirmasi. Silahkan cek history transaksi anda. Terima kasih<br><br>
          Hormat Kami,<br>
          Sun Hotel';

    if($this->mail->send()) {
      return true;
    }
    else{
      return false;
    }

  }
}
?>
