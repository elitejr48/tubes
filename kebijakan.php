<!DOCTYPE html>
<html>

<head>
    <title>Kebijakan Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="about.css">
    <script>
    $(document).ready(function(){
        $("#myBt").click(function(){
            $("#myModal").modal();
        });
    });
    </script>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>

<body class="body_Kebijakan">
  <!-- buat topnav -->
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
        <a class="navbar-brand" href="http://disputebills.com"><img src="logo 1 edit.png" alt="Dispute Bills" style="max-height: 155%" >
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="facilities.php">Facilities</a></li>
          <li><a id="myBt" href="#">Login / Register</a></li>
          <!-- <li><button type="button" class="btn" id="myBtn">Login</button></li> -->
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content(untuk login)-->
        <div class="modal-content">
          <form action="login-process.php" method="post">
          <div class="modal-header" style="padding:30px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" name="username" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="text" class="form-control" name="password" id="psw" placeholder="Enter password">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Not a member? <a href="register.php">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
          </div>
        </form>
        </div>
        </div>
      </div>
<div class="background">
  <div class="transbox">
     <h1 style="text-align: center" class="Kebijakan Hotel"><b>Kebijakan Hotel</b></h1>
    	<p style="text-align: justify">
      	1.	Tarif yang disebutkan berdasarkan masa menginap Anda.
      	<br><br>
      	2.	Tarif dapat berubah karena perubahan tanggal kedatangan atau keberangkatan Anda.
      	<br><br>
      	3.	Jika tamu melakukan pemesanan berdasarkan tarif yang salah dimuat,
      	<br><br>
      		menurut kebijakannya Hotel berhak mengoreksi ke tarif yang benar atau membatalkan reservasi,
      	<br><br>
      		dan takan terlebih dahulu menghubungi tamu tersebut secara langsung.
      	<br><br>
      	4.	Anda harus berusia minimal 18 tahun untuk check-in dan memesan kamar.
      	<br><br>
      	5.	Waktu check-in adalah dari 15.00 dan waktu check-out terahkir adalah 11.00.
      	<br><br>
      	6.	Diperlukan tanda pengenal resmi atau paspor yang berlaku saat check-in.
      	<br><br>
      	7.	Bila Anda tiba di hotel sebelum waktu check-in normal, Anda disarankan mendatangi Meja Layanan Tamu Hotel untuk mendapatkan bantuan menyimpan bawaan Anda hingga waktu check-in.
      	<br><br>
      	8.	Jika datang lebih awal, Anda juga disarankan untuk mempertimbangkan melakukan reservasi pada malam sebelum kedatangan Anda.
      	<br><br>
      	9.	Check-out terlambat diperbolehkan berdasarkan permintaan, tergantung ketersediaan kamar dan tingkat hunian.
      	<br><br>
      	10.	Tanyakan ke Meja Resepsionis Hotel minimal 24 jam sebelum keberangkatan mengenai ketersediaan check-out terlambat.
      	<br><br>
      	11. Biaya kamar separuh hari mungkin dikenakan untuk check-out terlambat antara pukul 12.00 hingga 18.00,
      	 <br>dan biaya kamar penuh mungkin dikenakan untuk check-out terlambat setelah pukul 18.00.
      	<br><br>
      	12. Pembatalan atau perubahan reservasi harus dilakukan 48 jam setelah reservasi.
      	<br><br>
      	13.`Dengan melanjutkan ke reservasi, berarti Anda setuju dan mengetahui bahwa jika reservasi ini diterima oleh Hotel,
      	<br>maka selanjutnya masa tinggal Anda tunduk pada syarat dan ketentuan standar tinggal di Hotel ini.
      	<br><br>
      	14. Hotel ini dapat, berdasarkan kebijakan mutlaknya, membatalkan reservasi ini, jika Hotel berpendapat bahwa informasi yang diberikan
      		<br>dalam pemesanan ini tidak benar atau tidak lengkap.
      	<br><br>
      	15.	Hotel berhak mengubah, mengamandemen, atau menganti syarat dan ketentuan ini kapan saja tanpa pemberitahuan sebelumnya.
      	<br><br>
      	16. Anda harus mengganti rugi dan melepaskan Hotel dari Tanggung jawab sehubungan dengan kewajiban, kerugian, kerusakan, biaya,
      		<br>dan pengeluaran apa pun yang disebabkan oleh, dan/atau sehubungan dengan penerimaan reservasi oleh Hotel.
      	<br><br>
      	17.	Hotel tidak akan bertanggung jawab dari segala kerugian, kerusakan, atau pengeluaran yang muncul dari pembatalan reservasi oleh Hotel.
      </p>
    </div>
  </div>

  <div class="footer">
      <div class="contain">
        <div class="col">
          <ul>
            <br>
            <!-- empty -->
          </ul>
        </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="about.php">About</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="kebijakan.php">Kebijakan</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="facilities.php">Facilities</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="contact_us.php">Contact us</a></li>
        </ul>
      </div>
      <div class="col social">
        <h1>Social</h1>
        <ul>
          <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
          <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
          <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
        </ul>
      </div>
    <div class="clearfix"></div>
    </div>
  </div>

</body>
</html>
