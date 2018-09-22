<?php
include 'D:\xampp\htdocs\tubes\koneksi.php';
    if(isset($_POST['upload'])){
    $ekstensi_diperbolehkan	= array('png','jpg');
    $namakamar = $_POST['namakamar'];
    $tipekamar = $_POST['tipekamar'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
  	$nama = $_FILES['berkas']['name'];
  	$x = explode('.', $nama);
  	$ekstensi = strtolower(end($x));
  	$ukuran	= $_FILES['berkas']['size'];
  	$file_tmp = $_FILES['berkas']['tmp_name'];

      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070)
        {
            $uniquesavename=time().uniqid(rand()).'.jpg';
            move_uploaded_file($file_tmp, 'D:/xampp/htdocs/tubes/admin/admin-tool/image/'.$uniquesavename);
            $sql = "INSERT INTO kamar (nama_kamar, tipe_kamar, gambar_kamar, deskripsi, harga_kamar) VALUES('$namakamar','$tipekamar','$uniquesavename','$deskripsi','$harga')";
              if($conn->query($sql) === TRUE)
              {
                  echo "<script type='text/javascript'>alert('Berhasil mengupload file');location='../index.php?kamar';</script>";
              }
              else
              {
                  echo 'GAGAL MENGUPLOAD GAMBAR'.mysqli_error($conn);
              }
        }
        else
        {
             echo "<script type='text/javascript'>alert('Ukuran file terlalu besar');location='../index.php?kamar';</script>";
        }
        }
          else
          {
          echo "<script type='text/javascript'>alert('Ektensi file yang di upload tidak diperbolehkan');location='../index.php?kamar';</script>";
          }
        }
    else
    {
      echo "<script type='text/javascript'>alert('Gagal Mengupload File');location='../index.php?kamar';</script>";
    }
?>
