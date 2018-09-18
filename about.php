<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
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
</head>

<body>
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
                <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password">
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
     <h1 style="text-align: center" class="AboutUs"><b>About Us</b></h1>
        <hr>
        <br>
        <!--h2 style="text-align: center" font><u>Deskripsi Sun Hotel</u></h2-->
    	<p style="text-align: justify">
    	Di Sun Hotel, semangat kami adalah untuk menghubungkan para tamu dengan pelayanan yang terbaik dari tujuan kami.
    	Dari pantai Parangtritis dan Parangkusumo hingga pusat kota Yogyakarta, kami menawarkan tempat yang luar biasa kepada para tamu kami,
    	yang diciptakan dengan menggabungkan arsitektur dan struktur yang unik, dekorasi dan kesenian yang ekspresif, dan fitur yang luar biasa.
    	Ditambah dengan pelayanan yang hebat, dan nantinya membuat menghasilkan pengalaman tamu yang tak terlupakan.
    	<br>
        <br>
    	Banyak hotel kami berada dianatara bangunan pertama yang didirikan di kota-kota muda seluruh Indoensia,
    	ditempat tempat ini, kita dapat membanggakan bahwa komunitas kita benar-benar tumbuh disekitar kita.
    	Saat ini kami telah menambahkan banyak properti pusat kota modern ke hotel kami,
    	yang memungkinkan Anda untuk bergabung dengan hiruk pikuk kota dan menikmati budaya, rasa dan suara kehidupan lokal.
    	<br>
        <br>
    	Meskipun bertujuan Anda pengalaman lokal yang otentik kapan pun Anda tinggal bersama kami,
    	kami juga menjamin standar tinggi yang konsisten di seluruh koleksi hotel dan resort kami.
    	Fasilitas kotemporer dan keanggunan abadi terinspirasi oleh tujuan unik kami yang tersermin di setiap kamar Sun Hotel kami.
    	<br>
    	<br>
    	<h3 style="text-align: center" font><u>Lokasi Sun Hotel</u></h3>
    	<h4 style="text-align: center" font><u>Desa Parangrejo, RT 13/RW13, Kec,</u></h4>
    	<h5 style="text-align: center" font><u>Purwosari, Girijati, Purwosari,</u</h5>
    	<h6 style="text-align: center" font><u>Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55872</u</h6>
    	<br>
    	<h7  <td align="center"><img src="...."></td> </h7>
    </div>
 	 </div>

   <div class="footer">
       <div class="contain">
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
           <li><a href="room.php">Room</a></li>
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
