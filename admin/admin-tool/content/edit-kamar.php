<?php
include '../../../koneksi.php';
    if(isset($_POST['upload']))
    {
        $idkamar = $_POST['idkamarz'];
        $namakamar = $_POST['namakamar'];
        $tipekamar = $_POST['tipekamar'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['hargakamar'];
        if($_FILES["berkas"]["error"] == 4) {
            $sql = "UPDATE kamar set nama_kamar='$namakamar', tipe_kamar='$tipekamar', deskripsi='$deskripsi', harga_kamar='$harga' where id_kamar=$idkamar";
            if($conn->query($sql) === TRUE)
            {
                echo "<script type='text/javascript'>location='../index.php?kamar';</script>";
            }
            else
            {
                echo 'GAGAL MENGUPLOAD FILE'.mysqli_error($conn);
            }
        }
        else
        {
            $nama = $_FILES['berkas']['name'];

            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $ekstensi_diperbolehkan	= array('png','jpg');
            
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
            {
                $ukuran	= $_FILES['berkas']['size'];
                $file_tmp = $_FILES['berkas']['tmp_name'];
                if($ukuran < 1044070)
                {
                    $uniquesavename=time().uniqid(rand()).'.jpg';
                    move_uploaded_file($file_tmp, '../image/'.$uniquesavename);
                    $sql = "UPDATE kamar set nama_kamar='$namakamar', tipe_kamar='$tipekamar', gambar_kamar='$uniquesavename', deskripsi='$deskripsi', harga_kamar='$harga' where id_kamar=$idkamar";
                    if($conn->query($sql) === TRUE)
                    {
                        echo "<script type='text/javascript'>location='../index.php?kamar';</script>";
                    }
                    else
                    {
                        echo 'GAGAL MENGUPLOAD FILE'.mysqli_error($conn);
                    }
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Ukuran file terlalu besar');location='../index.php?kamar';</script>";
                }
            }
            else
            {
                //echo "<script type='text/javascript'>alert('Ektensi file yang di upload tidak diperbolehkan');location='../index.php?kamar';</script>";
            }
        }
    }
    else
    {
      echo "<script type='text/javascript'>alert('Gagal Mengupload File');location='../index.php?kamar';</script>";
    }
?>
