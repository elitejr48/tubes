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
              <a class="navbar-brand" href=""><img src="../logo 1 edit.png" alt="Dispute Bills" style="max-height: 155%" >
            </a>
          </div>
          <div id="navbar3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="reservation.php">Reservation</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, <?php echo $_SESSION['username'];?>  <span class="caret"></span></a>
                <ul class="dropdown-menu" Rerole="menu">
                  <li><a href="edit_profile.php">My Profile</a></li>
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
            <div class="modal-header" style="padding:30px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control" id="psw" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              <p>Not a member? <a href="#">Sign Up</a></p>
              <p>Forgot <a href="#">Password?</a></p>
            </div>
          </div>
          </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="slide1.jpg" alt="slide1" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="slide2.jpg" alt="slide2" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>

      <div class="item">
        <img src="slide3.jpg" alt="slide3" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="text-center"><p class="why"><br>Why Choose Sun Hotel?</p></div>
  <div class="row">
    <div class="col-md-3">
      <div class="home-image">
        <img class="image1" src="../icon1.png" alt="Snow">
      </div>
      <div class="home-introduction">
    	   <h3>Various &amp; Secure Online Transaction</h3>
    	    <p>We guarantee the security and privacy of your online transaction with RapidSSL 256-bit data encryption. With various payment options that you can choose. From credit &amp; debit card with Visa / Mastercard / JCB / AMEX logo, bank transfer via BCA Virtual Account, and pay at the hotel.</p>
    	</div>
    </div>

    <div class="col-md-3">
      <div class="home-image">
        <img class="image1" src="../icon2.png" alt="Forest">
      </div>
      <div class="home-introduction">
    	   <h3>Book direct and get more value</h3>
    	    <p>When you book direct with us you get more than just our basic inclusions. Free breakfast, free WiFi and more inclusions... free airport pickup, laundry, shuttle service, etc*. Inclusions can be varied between hotels.</p>
    	</div>
    </div>

    <div class="col-md-3">
      <div class="home-image">
        <img class="mx-auto d-block" src="../icon4.png" alt="Mountains">
      </div>
      <div class="home-introduction">
    	   <h3>Customer Reviews</h3>
    	    <p>Curious what other travelers think about our hotels ? Read reviews from real guests to make your decision easier.</p>
    	</div>
    </div>

    <div class="col-md-3">
      <div class="home-image">
        <img class="mx-auto d-block" src="../icon3.png" alt="Mountains">
      </div>
      <div class="home-introduction">
    	   <h3>Best Available Rates</h3>
    	    <p>We guarantee you will get the best rates when you book with us. Become our loyalty program members to get our exclusive rates and benefits.</p>
    	</div>
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
          <li><a href="../about.php">About</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="../kebijakan.php">Kebijakan</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="../facilities.php">Facilities</a></li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <br>
          <li><a href="../contact_us.php">Contact us</a></li>
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
