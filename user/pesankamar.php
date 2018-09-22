<!DOCTYPE html>
<html>
  <head>
    <title>Reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="reservation.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



  </head>

  <?php
    session_start();
    if (!isset($_SESSION['username']))
    {
      echo "<script type='text/javascript'>alert('Anda Belum Login');location='index.php';</script>";
    }
    ?>
  <body>

    <div class="example3">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href=""><img src="../logo 1 edit.png" alt="Dispute Bills" style="max-height: 155%" >
            </a>
            </div>
            <div id="navbar3" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li class="active"><a href="reservation.php">Reservation</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, <?php echo $_SESSION['username'];?>  <span class="caret"></span></a>
                  <ul class="dropdown-menu" Rerole="menu">
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="historypemesanan.php">History</a></li>
                    <li><a id="myBt" href="logout-process.php">Logout</a></li>
                  </ul>
                </li>
                <!-- <li><button type="button" class="btn" id="myBtn">Login</button></li> -->
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!--/.container-fluid -->
        </nav>
        </div>

    <div class="container">

  	<!---Form starting---->
    <?php
      include "../koneksi.php";
      $idkamar = $_GET['id_kamar'];
      $idpemesan = $_GET['id_pemesan'];

      $sql = "select * from kamar where id_kamar='$idkamar'";

      $sql1 = "select * from user where id='$idpemesan'";

      if($result=mysqli_query($conn,$sql))
      {
          $data = mysqli_fetch_assoc($result);
      }

      if($result1=mysqli_query($conn,$sql1))
      {
          $data1 = mysqli_fetch_assoc($result1);
      }
    ?>

    <div class="modal-content">

      <div class="box">
        <form action="prosespemesanan.php" method="post" enctype="multipart/form-data">
      <div class="border-top"></div>
      <div class="border-right"></div>
      <div class="border-bottom"></div>
      <div class="border-left"></div>

      <div class="row draw">
      <div class="row draw" height="176px">
            <div class="col-sm-6 colmargin1" style="padding-left:100px;padding-right:80px">
              <div class="form-group text-center">
                <img src="../admin/admin-tool/image/<?php echo $data['gambar_kamar']?>" width="300px" height="235px">
              </div>
              <div class="form-group text-center">
                <br>
                <p><?php echo $data['deskripsi']?></p>
              </div>
            </div>
            <div class="col-sm-6 colmargin1 text-left" style="padding-left:80px;padding-right:80px">
              <div class="form-group">
                <label for="usrname">Nama Kamar</label>
                <input type="hidden" name="idpemesan" value="<?php echo $data1['id'];?>">
                <input type="hidden" name="idkamar" value="<?php echo $data['id_kamar'];?>">
                <input type="text" name="namakamar" class="form-control" readonly="readonly" id="namakamar" value="<?php echo $data['nama_kamar'];?>"/>
              </div>
              <div class="form-group">
                <label for="psw">Tipe Kamar</label>
                <input type="text" class="form-control" name="tipekamar" id="tipekamar" readonly="readonly" value="<?php echo $data['tipe_kamar'];?>"/>
              </div>
              <div class="form-group">
                <label for="psw">Harga per hari</label>
                <input type="text" class="form-control" name="harga" readonly="readonly" id="hargaperhari" value="<?php echo $data['harga_kamar'];?>">
              </div>
              <div class="form-group">
                <label for="psw">Tanggal Menginap</label>
                <input type="date" class="form-control" name="tanggalnginap" id="tanggalnginap"/>
              </div>
              <div class="form-group">
                <label for="psw">Jumlah Hari Menginap</label>
                <input type="number" class="form-control" name="haringinap" id="haringinap" value="" placeholder="cth. Superior">
              </div>
              <div class="form-group">
                <label for="psw">Total</label>
                <input type="text" class="form-control" name="totalharga" id="totalharga" value="" readonly="readonly">
              </div>
              <br>
              <div class="w3_main_grid">
                <div class="w3_main_grid_right">
                  <input type="submit" name="upload" value="Book Now">
                </div>
                <div class="clear"> </div>
              </div>
            </div>
          </div>
        </div></div>
          <!-- <div class="modal-body" style="padding-left:150px;padding-right:100px;padding-top:50px;padding-bottom:80px;">
                  <div class="form-group">
                    <label for="usrname">Nama Kamar</label>
                    <input type="hidden" name="idpemesan" value="<?php echo $data1['id'];?>">
                    <input type="hidden" name="idkamar" value="<?php echo $data['id_kamar'];?>">
                    <input type="text" name="namakamar" class="form-control" readonly="readonly" id="namakamar" value="<?php echo $data['nama_kamar'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="psw">Tipe Kamar</label>
                    <input type="text" class="form-control" name="tipekamar" id="tipekamar" readonly="readonly" value="<?php echo $data['tipe_kamar'];?>"/>
                  </div>
                  <div class="form-group">
                    <label for="psw">Harga per hari</label>
                    <input type="text" class="form-control" name="harga" readonly="readonly" id="hargaperhari" value="<?php echo $data['harga_kamar'];?>">
                  </div>
                  <div class="form-group">
                    <label for="psw">Tanggal Menginap</label>
                    <input type="date" class="form-control" name="tanggalnginap" id="tanggalnginap"/>
                  </div>
                  <div class="form-group">
                    <label for="psw">Jumlah Hari Menginap</label>
                    <input type="number" class="form-control" name="haringinap" id="haringinap" value="" placeholder="cth. Superior">
                  </div>
                  <div class="form-group">
                    <label for="psw">Total</label>
                    <input type="text" class="form-control" name="totalharga" id="totalharga" value="" readonly="readonly">
                  </div>
                  <br>
                  <div class="w3_main_grid">
          					<div class="w3_main_grid_right">
          						<input type="submit" name="upload" value="Book Now">
          					</div>
          					<div class="clear"> </div>
          				</div>
          </div>
          <div class="modal-footer">
              <!-- <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
          </div>
        </form>
      </div>
  	 </div>


  </div>

  </body>
</html>


<script>
$("#haringinap").keyup(function () {

  $('#totalharga').val($('#haringinap').val() * $('#hargaperhari').val());
});
</script>
<script>
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#tanggalnginap').attr('min', maxDate);
});
</script>
