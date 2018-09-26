<?php
include '../../../koneksi.php';
include 'kiriminfo.php';

    $email = $_GET['email'];
    $nama = $_GET['nama'];
    $tgl_transaksi = $_GET['tgl_transaksi'];
    $namakamar = $_GET['namakamar'];
    $tgl_menginap = $_GET['hari_menginap'];
    $id = $_GET['id'];
    $mail = new Mailer();
    $sql = "UPDATE pemesanan set status = 1 where id_pemesanan=$id";

    if($conn->query($sql) === TRUE)
    {
        $mail->sendEmail($email,$nama,$tgl_transaksi,$namakamar,$tgl_menginap);
        echo "<script type='text/javascript'>alert('Sukses melakukan verifikasi');location='../index.php?order';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Gagal melakukan verifikasi');location='../index.php?order';</script>";
    }

?>
