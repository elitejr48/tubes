<?php
  include "koneksi.php";

  $unique_id = $_GET['unique_id'];
	$username = $_GET['username'];

	$query = "UPDATE verifikasi_email SET aktif = 'Y' WHERE kode = '".$kode."'";

	if($conn->query($query) === TRUE)
  {
		echo "Member dengan username <strong>".$username."</strong> telah diaktifkan";
	}
  else
  {
		echo "Gagal diaktifkan";
	}
?>
