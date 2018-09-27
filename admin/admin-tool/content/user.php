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
                include('D:\xampp\htdocs\tubes\koneksi.php');

                $sql = "SELECT * FROM user where status='2' ORDER BY id ASC";

                if($result=mysqli_query($conn,$sql))
                {
                  if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
                  {
                  $no = 1;
                    while($data = mysqli_fetch_assoc($result))
                    {
                        echo '<tr id="somerow">';
                          echo '<td class="id" style="display:none;">'.$data['id'].'</td>';
                          echo '<td class="name">'.$data['first_name'].' '.$data['last_name'].'</td>';
                          echo '<td style="display:none;" class="username">'.$data['username'].'</td>';
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
                            echo '<td>Sudah Verifikasi</td>';
                          }
                          else {
                            echo '<td>Belum Verifikasi</td>';
                          }
                          echo '<td><button class="btn btn-warning edit">Edit</button> <button id="" class="btn btn-danger">Deactive</button></td>';
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
   
   <div class="modal fade" id="myModalEdit" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content(untuk Tambah)-->
    <div class="modal-content">
      <form action="content/editadmin.php" method="post">
          <div class="modal-header" style="padding:30px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><center>Edit User</center></h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
                  <div class="form-group">
                    <label for="usrname">Nama Lengkap</label>
                    <input type="hidden" name="fname" class="form-control" id="id"/>
                    <input type="text" name="fname" class="form-control" id="namalengkap"/>
                  </div>
                  <div class="form-group">
                    <label for="usrname">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="cth. Superior"/>
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
                    <label for="usrname">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="cth. Superior"/>
                  </div>
                  <div class="form-group">
                    <label for="usrname">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="cth. Superior"/>
                  </div>

                  <br>
                  <input type="submit" name="tambah" value="Edit" />
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
            $('#namalengkap').val($(this).closest('tr').find('.name').text());
            $('#username').val($(this).closest('tr').find('.username').text());
            $('#identitas').val($(this).closest('tr').find('.identitas').text());
            $('#notelp').val($(this).closest('tr').find('.notelp').text());
            $('#email').val($(this).closest('tr').find('.email').text());
            $('#alamat').val($(this).closest('tr').find('.alamat').text());
            $('#password').val($(this).closest('tr').find('.password').text());
        });
    });
</script>