<?php
  include ('../koneksi.php');

  $id_pemesan = $_POST['idpemesan'];
  $id_kamar = $_POST['idkamar'];
  $tanggal = $_POST['tanggalnginap'];
  $hari = $_POST['haringinap'];
  $harga = $_POST['totalharga'];
  $datetoday = date('Y-m-d');

  $sql = "insert into pemesanan (id_pemesan, tgl_transaksi, tgl_menginap, id_kamar, hari_menginap, total_harga, status) VALUES ('$id_pemesan','$datetoday','$tanggal','$id_kamar','$hari','$harga','0')";

  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Pemesanan Sukses');location='reservation.php';</script>";
  }
  else
  {
    //echo "<script type='text/javascript'>alert('Gagal');location='reservation.php';</script>";
    echo "Error updating record: " . mysqli_error($conn);
  }

  ?>
