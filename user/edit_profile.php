<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../design.css">
    <script>
    $(document).ready(function(){
        $("#myBt").click(function(){
            $("#myModal").modal();
        });
    });
    </script>
  </head>
  <?php
    session_start();
    if (!isset($_SESSION['username']))
    {
      echo "<script type='text/javascript'>alert('Anda Belum Login');location='../index.php';</script>";
    }
    ?>

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
              <li><a href="home.php">Home</a></li>
              <li><a href="reservation.php">Reservation</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="facilities.php">Facilities</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, <?php echo $_SESSION['username'];?>  <span class="caret"></span></a>
                <ul class="dropdown-menu" Rerole="menu">
                  <li><a href="#">My Profile</a></li>
                  <li><a href="edit_profile.php">Edit Profile</a></li>
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

<div class="background" >
  <div class="transbox" align="center" style="background:gray;opacity:0.9" >
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
							<table>
								<tr>
									<td>Nama Lengkap</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="nama_lengkap" size="50" value="<?php echo $data['nama_lengkap']; ?>">
                    <br>
									</td>
								</tr>
								<tr>
									<td>Nomor identitas</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="nomor_identitas" size="50" value="<?php echo $data['nomor_identitas']; ?>">
                    <br>
									</td>
								</tr>
									<tr>
									<td>Nomor telepon</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="nomor_telepon" size="50" value="<?php echo $data['nomor_telepon']; ?>">
                    <br>
									</td>
								</tr>
								<tr>
									<td>Email</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="email" name="email" size="50" value="<?php echo $data['email']; ?>">
                    <br>
									</td>
								</tr>
									<tr>
									<td>Alamat</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="alamat" size="50" value="<?php echo $data['alamat']; ?>">
                    <br>
									</td>
								</tr>
								<tr>
									<td>Username</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="text" name="username" size="50" value="<?php echo $data['username']; ?>">
                    <br>
									</td>
								</tr>
								<tr>
									<td>old password</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="old_password" name="old_password" size="50">
                    <br>
									</td>
								</tr>
								<tr>
									<td>new Password</td>
								</tr>
								<tr>
									<td>
										<input class="form-control" type="new_password" name="new_password" size="50">
                    <br>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center"><button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button></td>
                  <br>   
								</tr>
							</table>
	</form>
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

        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>

</body>
</html>
