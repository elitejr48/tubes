<?php
include '../../../koneksi.php';

    $id = $_GET['id'];
    $sql = "UPDATE kamar set is_deleted = 1 where id_kamar=$id";

    if($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('Berhasil');location='../index.php?kamar';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Gagal');location='../index.php?kamar';</script>";
    }

?>
