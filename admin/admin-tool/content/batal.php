<?php
include '../../../koneksi.php';

    $id = $_GET['id'];
    $sql = "UPDATE pemesanan set status = 2 where id_pemesanan=$id";

    if($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('Sukses membatalkan pesanan');location='../index.php?order';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Gagal membatalkan pesanan');location='../index.php?order';</script>";
    }

?>
