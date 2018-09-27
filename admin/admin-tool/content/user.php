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
                  <th class="info">Nama</th>
                  <th class="info">Nomor Identitas</th>
                  <th class="info">Nomor Telepon</th>
                  <th class="info">Email</th>
                  <th class="info">Alamat</th>
                  <th class="info">Gender</th>
                  <th class="info">Status</th>
                  <th class="info" colspan="2">Action</th>
               </tr>

               <?php
                include('../../koneksi.php');
                $halaman = 5;
                $pages = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($pages>1) ? ($pages * $halaman) - $halaman : 0;
                $sql = "SELECT * FROM user where status='2' ORDER BY id ASC LIMIT $mulai, $halaman";
                $result1 = mysqli_query($conn,"SELECT * FROM user where status='2' ORDER BY id ASC");
                $no = $mulai + 1;
                if($result=mysqli_query($conn,$sql))
                {
                  $total = mysqli_num_rows($result1);
                  $pages = ceil($total/$halaman);
                  if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
                  {
                  $no = 1;
                    while($data = mysqli_fetch_assoc($result))
                    {
                        echo '<tr id="somerow">';
                          echo '<td class="id" style="display:none;">'.$data['id'].'</td>';
                          echo '<td class="name">'.$data['first_name'].' '.$data['last_name'].'</td>';
                          echo '<td style="display:none;" class="username">'.$data['username'].'</td>';
                          echo '<td style="display:none;" class="firstname">'.$data['first_name'].'</td>';
                          echo '<td style="display:none;" class="lastname">'.$data['last_name'].'</td>';
                          echo '<td class="identitas">'.$data['no_identitas'].'</td>';
                          echo '<td class="notelp">'.$data['no_telp'].'</td>';
                          echo '<td class="email">'.$data['email'].'</td>';
                          echo '<td class="alamat">'.$data['alamat'].'</td>';
                          if($data['gender']=='M'){
                            echo '<td>Pria</td>';
                          }
                          else
                          {
                            echo '<td>Wanita</td>';
                          }
                          if($data['verification'] == 1)
                          {
                            echo '<td>Aktif</td>';
                          }
                          else if($data['verification'] == 2) {
                            echo '<td>Tidak Aktif</td>';
                          }
                          else
                          {
                            echo '<td>Belum Aktif</td>';
                          }
                          if($data['verification'] == 1)
                          {
                          echo '<td><button class="btn btn-warning edit">Edit</button> <a class="btn btn-danger" href="content/deactivate.php?id='.$data['id'].'" onclick="return confirm(\'Deactivate Account?\')">Deactivate</a></td>';
                          }
                          else
                          {
                            echo '<td><button class="btn btn-warning edit">Edit</button> <a class="btn btn-success" href="content/activate.php?id='.$data['id'].'" onclick="return confirm(\'Activate Account?\')">Activate</a></td>';
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
                 <?php for ($i=1; $i<=$pages ; $i++){ ?>
                  <li><a href="?user&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                  <?php } ?>
               </ul>
             </nav>
          </div>
   </div>
   
   <div class="modal fade" id="myModalEdit" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content(untuk Tambah)-->
    <div class="modal-content">
      <form action="content/registeradmin.php" method="post">
          <div class="modal-header" style="padding:30px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><center>Edit User</center></h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
                  <div class="form-group">
                    <label for="usrname">Nama Depan</label>
                    <input type="text" name="namadepan" class="form-control" id="namadepan"/>
                  </div>
                  <div class="form-group">
                    <label for="usrname">Nama Belakang</label>
                    <input type="hidden" name="id" class="form-control" id="id"/>
                    <input type="text" name="namabelakang" class="form-control" id="namabelakang"/>
                  </div>
                  <div class="form-group">
                    <label for="usrname">Nomor Identitas</label>
                    <input type="text" class="form-control" name="identitas" id="identitas" placeholder="cth. Superior"/>
                  </div>
                  <div class="form-group">
                    <label for="usrname">Nomor Telepon</label>
                    <input type="text" class="form-control" name="no_telp" id="notelp" placeholder="cth. Superior"/>
                  </div>
                  <div class="form-group">
                    <label for="usrname">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="cth. Superior"/>
                  </div>

                  <br>
                  <input type="submit" name="edit" value="Edit" />
          </div>
          <div class="modal-footer">
              <!-- <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
          </div>
        </form>
      </div>

    </div>
    </div>
<script>
    $(function(){
        $('.edit').click(function(e) {
            
            e.preventDefault();
            $("#myModalEdit").modal();
            $('#id').val($(this).closest('tr').find('.id').text());
            $('#namadepan').val($(this).closest('tr').find('.firstname').text());
            $('#namabelakang').val($(this).closest('tr').find('.lastname').text());
            $('#identitas').val($(this).closest('tr').find('.identitas').text());
            $('#notelp').val($(this).closest('tr').find('.notelp').text());
            $('#alamat').val($(this).closest('tr').find('.alamat').text());
            $('#password').val($(this).closest('tr').find('.password').text());
        });
    });
</script>