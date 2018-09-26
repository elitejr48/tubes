<html>
  <head>
    <title>Login</title>
  </head>
  <script>
    $(document).ready(function(){
        $("#myBt").click(function(){
            $("#myModal").modal();
        });
    });
    </script>
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="index.php">Home</a></li>
         <li class="active">Order</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
   <!--Modal-->
  <!--end modal-->

            <table class="table table-bordered">
               <tr>
                  <th class="info">Nama Pemesan</th>
                  <th class="info">Nama Kamar</th>
                  <th class="info">Tanggal Transaksi</th>
                  <th class="info">Tanggal Menginap</th>
                  <th class="info">Jumlah Hari</th>
                  <th class="info">Total Harga</th>
                  <th class="info">Status</th>
                  <th class="info" width="16%" colspan="2">Action</th>
               </tr>

               <?php
                include('D:\xampp\htdocs\tubes\koneksi.php');

                $sql = "SELECT user.first_name, user.last_name, user.email, pemesanan.tgl_transaksi, pemesanan.tgl_menginap, kamar.nama_kamar, pemesanan.hari_menginap, pemesanan.total_harga, pemesanan.status, pemesanan.id_pemesanan
                FROM pemesanan inner join user on pemesanan.id_pemesan = user.id inner join kamar on pemesanan.id_kamar = kamar.id_kamar order by pemesanan.tgl_transaksi DESC";

                if($result=mysqli_query($conn,$sql))
                {
                  if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
                  {
                  $no = 1;
                    while($data = mysqli_fetch_assoc($result))
                    {
                        echo '<tr>';
                          echo '<td>'.$data['first_name'].'&nbsp'.$data['last_name'].'</td>';
                          echo '<td>'.$data['nama_kamar'].'</td>';
                          echo '<td>'.$data['tgl_transaksi'].'</td>';
                          echo '<td>'.$data['tgl_menginap'].'</td>';
                          echo '<td>'.$data['hari_menginap'].' hari</td>';
                          echo '<td>Rp. '.$data['total_harga'].'</td>';
                          if($data['status'] == 1)
                          {
                            echo '<td>Sudah Verifikasi</td>';
                          }
                          else if($data['status'] == 0) {
                            echo '<td>Belum Verifikasi</td>';
                          }
                          else if($data['status'] == 2) {
                            echo '<td>Dibatalkan</td>';
                          }

                          if($data['status'] == '0')
                          {
                            echo '<td><a class="btn btn-primary" href="content/konfirmasi.php?id='.$data['id_pemesanan'].'&email='.$data['email'].'&nama='.$data['first_name'].' '.$data['last_name'].'&namakamar='.$data['nama_kamar'].'&tgl_transaksi='.$data['tgl_transaksi'].'&tgl_menginap='.$data['tgl_menginap'].'&hari_menginap='.$data['hari_menginap'].'
                            "onclick="return confirm(\'Apakah ingin melakukan verifikasi?\')">
                            Konfirmasi</a> <a class="btn btn-danger" href="content/batal.php?id='.$data['id_pemesanan'].'" onclick="return confirm(\'Batalkan pesanan?\')">Batalkan</a></td>';
                          }
                          else if($data['status'] == '1'){
                            echo '<td align="center"><a class="btn btn-success" href="content/sendemail.php?email='.$data['email'].'&nama='.$data['first_name'].' '.$data['last_name'].'&namakamar='.$data['nama_kamar'].'&tgl_transaksi='.$data['tgl_transaksi'].'&tgl_menginap='.$data['tgl_menginap'].'&hari_menginap='.$data['hari_menginap'].' "onclick="return confirm(\'Apakah ingin melakukan verifikasi?\')">
                            Send Email Info</a>';
                          }
                          else {
                            echo '<td></td>';
                          }
                          echo '</tr>';

                        $no++;
                    }
                  }
                  else
                  {
                    echo '<tr><td colspan="6">Tidak ada data!</td><tr>';
                  }
                }
              ?>

            </table>
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
   </div>
