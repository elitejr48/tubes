<!DOCTYPE html>
<html>
  <head>
    <title>History Pemesanan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="reservation.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("table").hide();
      $("table").show(1000);
    });
    </script>
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
            <a class="navbar-brand" href="home.php"><img src="../logo 1 edit.png" alt="Dispute Bills" style="max-height: 155%" >
            </a>
          </div>
          <div id="navbar3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">Home</a></li>
              <li><a href="reservation.php">Reservation</a></li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, <?php echo $_SESSION['username'];?>  <span class="caret"></span></a>
                <ul class="dropdown-menu" Rerole="menu">
                  <li><a href="edit_profile.php">My Profile</a></li>
                  <li><a href="#">History</a></li>
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
     <!---heading---->
         <header class="heading"> HISTORY</header><hr></hr>
    	<!---Form starting---->

        <form method="get">
         <?php
          include('../koneksi.php');

          function buatrp($angka)
          {
            $hasil_rupiah = "Rp  " . number_format($angka,0,',','.');
            return $hasil_rupiah;
          }

          $sql = "SELECT * FROM pemesanan inner join kamar on pemesanan.id_kamar = kamar.id_kamar  where pemesanan.id_pemesan = '$_SESSION[id]' order by tgl_transaksi ASC";

          if($result=mysqli_query($conn,$sql))
          {
            //echo '<td>'.$no.'</td>';
            if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
            {
            $no = 1;
              while($data = mysqli_fetch_assoc($result)){
                  echo '
                  <div class="box">
                  <div class="border-top"></div>
                  <div class="border-right"></div>
                  <div class="border-bottom"></div>
                  <div class="border-left"></div>

                  <div class="row draw">
                  <div class="row draw" height="176px">';
                      echo
                      '
                      <div class="col-sm-3">
                      <br>
                        <p style="font-size:80px">'.$data['id_pemesanan'].'</p>
                      </div>
                        <div class="col-sm-5 colmargin">
                          <p>Tanggal Transaksi: '.$data['tgl_transaksi'].'</p><br>
                          <p>Nama Kamar: '.$data['nama_kamar'].'</p><br>
                          <p>Tanggal Menginap: '.$data['tgl_menginap'].'</p><br>
                          <p>Hari Menginap: '.$data['hari_menginap'].'</p>
                        </div>
                        <div class="col-sm-4 colmargin1 text-center">
                          <p class="harga" style="font-size:30px;">'.buatrp($data['total_harga']).'</p><br>

                        </div>
                      </div>';
                  echo '</div></div>';
              }
            }
            else
            {

            }
          }
        ?>
       </div>

  </div>

  </body>
</html>
