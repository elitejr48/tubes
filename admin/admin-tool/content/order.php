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
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
   <!--Modal-->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content(untuk Tambah)-->
  <div class="modal-content">
    <form action="content/registeradmin.php" method="post">
        <div class="modal-header" style="padding:30px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><center>Tambah Kamar</center></h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
                <div class="form-group">
                  <label for="usrname">First Name</label>
                  <input type="text" name="fname" class="form-control" id="namakamar" placeholder="cth. Sriwijaya"/>
                </div>
                <div class="form-group">
                  <label for="psw">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="tipekamar" placeholder="cth. Superior"/>
                </div>
                <div class="form-group">
                  <label for="usrname">Username</label>
                  <input type="text" class="form-control" name="username" id="tipekamar" placeholder="cth. Superior"/>
                </div>
                <div class="form-group">
                  <label for="usrname">Nomor Identitas</label>
                  <input type="text" class="form-control" name="identitas" id="tipekamar" placeholder="cth. Superior"/>
                </div>
                <div class="form-group">
                  <label for="usrname">Nomor Telepon</label>
                  <input type="text" class="form-control" name="no_telp" id="tipekamar" placeholder="cth. Superior"/>
                </div>
                <div class="form-group">
                  <label for="usrname">Email</label>
                  <input type="text" class="form-control" name="email" id="tipekamar" placeholder="cth. Superior"/>
                </div>
                <div class="form-group">
                  <label for="usrname">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="tipekamar" placeholder="cth. Superior"/>
                </div>
                <div class="form-group">
                  <label for="usrname">Password</label>
                  <input type="text" class="form-control" name="password" id="tipekamar" placeholder="cth. Superior"/>
                </div>

                <br>
                <input type="submit" name="tambah" value="upload" />
        </div>
        <div class="modal-footer">
            <!-- <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
        </div>
      </form>
    </div>

  </div>
  </div>
  <!--end modal-->

         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <button class="btn btn-info" id="myBt">Tambah</button>
         </div>
            <table class="table table-bordered">
               <tr>
                  <th class="info">Nama Pemesan</th>
                  <th class="info">Nama Kamar</th>
                  <th class="info">Tanggal Transaksi</th>
                  <th class="info">Tanggal Menginap</th>
                  <th class="info">Jumlah Hari</th>
                  <th class="info">Total Harga</th>
                  <th class="info">Status</th>
                  <th class="info" colspan="2">Action</th>
               </tr>

               <?php
                include('D:\xampp\htdocs\tubes\koneksi.php');

                $sql = "SELECT user.first_name, user.last_name, pemesanan.tgl_transaksi, pemesanan.tgl_menginap, kamar.nama_kamar, pemesanan.hari_menginap, pemesanan.total_harga, pemesanan.status, pemesanan.id_pemesanan
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
                            echo '<td><a href="konfirmasi.php?id='.$data['id_pemesanan'].'">
                            Konfirmasi</a> / <a href="batal.php?id='.$data['id_pemesanan'].'" onclick="return confirm(\'Yakin?\')">Batalkan</a></td>';
                          }
                          else {

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
