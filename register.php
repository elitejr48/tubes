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
    <div class="container contentfp">
   <!---heading---->
   <div class="modal-header" style="padding:10px 50px;">
       <header class="heading"> Registration-Form</header>
       <br>
    </div>
  	<!---Form starting---->
    <br>
    <form action="register-process.php" method="post">
  	<div class="row">
  	 <!--- For Name---->
           <div class="col-sm-12">
               <div class="row">
  			     <div class="col-xs-4">
            	       <label class="firstname">First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
  		         <div class="col-xs-8">
  		          <input type="text" name="fname" id="fname" placeholder="Enter your First Name" class="form-control" required>
               </div>
  		      </div>
  		 </div>


           <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
                       <label class="lastname">Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
  				<div class ="col-xs-8">
  		             <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" class="form-control last" required>
                  </div>
  		     </div>
  		 </div>
      <!-----For Username---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="username" >Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
            <div class="col-xs-8"	>
                 <input type="text" name="username"  id="username" placeholder="Enter your username" class="form-control" onBlur="checkAvailability()" required><span id="user-availability-status"></span>
              </div>
          </div>
      </div>
      <!-----For Nomor identitas---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="no_id" >Nomor Identitas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
            <div class="col-xs-8"	>
                 <input type="text" name="identitas"  id="identitas" placeholder="Enter your identity number" class="form-control" required >
              </div>
          </div>
      </div>
      <!-----For nomor Telepon---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="no_telp" >Nomor Telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
            <div class="col-xs-8"	>
                 <input type="text" name="no_telp"  id="no_telp"placeholder="Enter your Telephone Number" class="form-control" required>
              </div>
          </div>
      </div>
       <!-----For email---->
  		 <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
  		             <label class="email" >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
  			     <div class="col-xs-8"	>
  			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" onBlur="checkEmail()" required><span id="email-availability-status"></span>
  		         </div>
  		     </div>
  		 </div>
       <!-----For Alamat---->
  		 <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
  		             <label class="alamat" >Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
  			     <div class="col-xs-8"	>
  			          <input type="text" name="alamat"  id="alamat"placeholder="Enter your address" class="form-control" required>
  		         </div>
  		     </div>
  		 </div>
  	 <!-----For Password and confirm password---->
            <div class="col-sm-12">
  		         <div class="row">
  				     <div class="col-xs-4">
  		 	              <label class="pass">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></div>
  				  <div class="col-xs-8">
  			             <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control" required>
  				 </div>
            </div>
  		      </div>
            <div class="col-sm-12">
  		         <div class="row">
  				     <div class="col-xs-4">
  		 	              <label class="pass">Confirm Password:</label></div>
  				  <div class="col-xs-8">
  			            <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your Password " class="form-control" required>
                        <span id='message'></span>
                </div>
            </div>
  		      </div>
            <!-----------For gender-------->
            <div class="col-sm-12">
            <div class="row">
                <div class="col-xs-4">
  		 	        <label class="pass">Gender:</label>
                </div>
                <div class="col-xs-8">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn active">
                        <input type="radio" name="gender" id="gender"value="M" checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Male</span>
                    </label>
                    <label class="btn">
                        <input type="radio" id="gender" value="F" name="gender"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> Female</span>
                    </label>
                </div>
                </div>
            </div>
            
            <div>
                <button type="submit" class="btn btn-success btn-block" name="tambah"><span class="glyphicon glyphicon-off"></span> Submit</button>
            </div>
              
              <!-- <input type="button" class="bButton" name="back" value="Kembali" onclick="location.href = 'index.php';"> -->

  		     <div>


         </div>
  		 </div>
     </form>
  	 </div>


  </div>

  </body>
</html>
<script>
    function checkAvailability() {
        jQuery.ajax({
        url: "checkavaibility.php",
        data:'username='+$("#username").val(),
        type: "POST",
        success:function(data){
        $("#user-availability-status").html(data);
        },
        error:function (){}
        });
    }
    function checkEmail() {
        jQuery.ajax({
        url: "checkavaibility.php",
        data:'email='+$("#email").val(),
        type: "POST",
        success:function(data){
        $("#email-availability-status").html(data);
        },
        error:function (){}
        });
    }
    $('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
    } else
        $('#message').html('Not Matching').css('color', 'red');
    });
</script>
