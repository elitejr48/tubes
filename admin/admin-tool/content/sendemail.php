<?php
  include "../../../koneksi.php";
  include 'kiriminfo.php';

  $email = $_GET['email'];
  $nama = $_GET['nama'];
  $tgl_transaksi = $_GET['tgl_transaksi'];
  $namakamar = $_GET['namakamar'];
  $tgl_menginap = $_GET['hari_menginap'];
  $mail = new Mailer();

  $mail->sendEmail($email,$nama,$tgl_transaksi,$namakamar,$tgl_menginap);

  echo "<script type='text/javascript'> location='../index.php?order';</script>";

?>
