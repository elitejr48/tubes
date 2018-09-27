<?php
include '../../../koneksi.php';

    $id = $_GET['id'];
    $sql = "UPDATE user set verification = 2 where id=$id";

    if($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('Sukses Melakukan Deaktivasi');location='../index.php?user';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Gagal');location='../index.php?user';</script>";
    }

?>
