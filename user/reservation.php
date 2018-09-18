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
    <script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
    </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            <a class="navbar-brand" href="http://disputebills.com"><img src="../logo 1 edit.png" alt="Dispute Bills" style="max-height: 155%" >
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
   <!---heading---->
       <header class="heading"> RESERVATION</header><hr></hr>
  	<!---Form starting---->

    <table style="color: black;" class="table table-bordered">
       <tr>
         <th class="info">No</th>
          <th class="info">Nama Kamar</th>
          <th class="info">Tipe Kamar</th>
          <th class="info">Gambar</th>
          <th class="info">Deskripsi</th>
          <th class="info">Harga</th>
          <th class="info" colspan="2">Action</th>
       </tr>
      <form method="get">
       <?php
        include('../koneksi.php');

        $sql = "SELECT * FROM kamar";

        if($result=mysqli_query($conn,$sql))
        {
          if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
          {
          $no = 1;
            while($data = mysqli_fetch_assoc($result)){
                echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td width="15%">'.$data['nama_kamar'].'</td>';
                    echo '<td width="15%">'.$data['tipe_kamar'].'</td>';
                    echo '<td width="15%"><center><img src="../admin/admin-tool/image/'.$data['gambar_kamar'].'" width="100%"></center></td>';
                    echo '<td >'.$data['deskripsi'].'</td>';
                    echo '<td width="15%">Rp. '.$data['harga_kamar'].'</td>';
                    echo '<td width="5%"><a href="pesankamar.php?id_kamar='.$data['id_kamar'].'&id_pemesan='.$_SESSION['id'].'">Pesan</a></td>';
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
  	 </div>


  </div>

  </body>
</html>
