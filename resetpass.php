<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="register.css">
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
  <body>
    <div class="container">
  
     <div class="modal-content contentfp">
        <form action="register-process.php" method="post">
        <div class="modal-header" style="padding:30px 50px;">
            <h2><center>Forgot Password</center></h2>
        </div>
        <br>
        <h4 style="text-align:center">Enter your new password</h4>
        <div class="modal-body" style="padding:20px 50px;">
            <div class="form-group">
                
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
                    <input type="hidden" class="form-control" name="email" value="<?php echo $_GET['email'];?>">
                    <input type="hidden" class="form-control" name="unique_id" value="<?php echo $_GET['kode'];?>">
                    <input type="password" name="password" class="form-control" id="usrname" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
                    <input type="password" name="confirmpassword" class="form-control" id="usrname" placeholder="Confirm Password">
                </div>
            </div>
            <br>
                <button type="submit" name="resetpass" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
        </div>
        </form>
    </div>


  </div>

  </body>
</html>
