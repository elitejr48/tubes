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
         <li class="active">Home</li>
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

         <div class="col-md-12" style="padding-left:0;padding-right:0;">
           <h1>Welcome</h1>
           <p style="font-size: 20px;">This is admin tools</p>
         </div>
    </div>
