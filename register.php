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
   <!---heading---->
       <header class="heading"> Registration-Form</header><hr></hr>
  	<!---Form starting---->

    <form action="register-process.php" method="post">
  	<div class="row">
  	 <!--- For Name---->
           <div class="col-sm-12">
               <div class="row">
  			     <div class="col-xs-4">
            	         <label class="firstname">First Name :</label> </div>
  		         <div class="col-xs-8">
  		             <input type="text" name="fname" id="fname" placeholder="Enter your First Name" class="form-control ">
               </div>
  		      </div>
  		 </div>


           <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
                       <label class="lastname">Last Name :</label></div>
  				<div class ="col-xs-8">
  		             <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" class="form-control last">
                  </div>
  		     </div>
  		 </div>
      <!-----For Username---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="username" >Username :</label></div>
            <div class="col-xs-8"	>
                 <input type="text" name="username"  id="username" placeholder="Enter your username" class="form-control" >
              </div>
          </div>
      </div>
      <!-----For Nomor identitas---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="no_id" >Nomor Identitas :</label></div>
            <div class="col-xs-8"	>
                 <input type="text" name="identitas"  id="identitas" placeholder="Enter your identity number" class="form-control" >
              </div>
          </div>
      </div>
      <!-----For nomor Telepon---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="no_telp" >Nomor Telepon :</label></div>
            <div class="col-xs-8"	>
                 <input type="text" name="no_telp"  id="no_telp"placeholder="Enter your Telephone Number" class="form-control" >
              </div>
          </div>
      </div>
       <!-----For email---->
  		 <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
  		             <label class="email" >Email :</label></div>
  			     <div class="col-xs-8"	>
  			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
  		         </div>
  		     </div>
  		 </div>
       <!-----For Alamat---->
  		 <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
  		             <label class="alamat" >alamat :</label></div>
  			     <div class="col-xs-8"	>
  			          <input type="text" name="alamat"  id="alamat"placeholder="Enter your address" class="form-control" >
  		         </div>
  		     </div>
  		 </div>
  	 <!-----For Password and confirm password---->
            <div class="col-sm-12">
  		         <div class="row">
  				     <div class="col-xs-4">
  		 	              <label class="pass">Password :</label></div>
  				  <div class="col-xs-8">
  			             <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
  				 </div>
            </div>
  		      </div>
            <div class="col-sm-12">
  		         <div class="row">
  				     <div class="col-xs-4">
  		 	              <label class="pass">Confirm Password:</label></div>
  				  <div class="col-xs-8">
  			             <input type="confirm_password" name="confirm_password" id="confirm_password" placeholder="Enter your Password " class="form-control">
  				 </div>
            </div>
  		      </div>
            <!-----------For gender-------->
                <div class="col-sm-12">
                <div class ="row">
                        <div class="col-xs-4 ">
                    <label class="gender">Gender:</label>
                </div>

                  <div class="col-xs-4 male">
                    <input type="radio" name="gender"  id="gender" value="M" checked="checked">Male</input>
                </div>

                <div class="col-xs-4 female">
                    <input type="radio"  name="gender" id="gender" value="F" >Female</input>
                  </div>

                </div>
              </div>
  		     <div>
                <div class="sButton"><Button class="bButton" name="back" value="back">Back</div>
                <input class="sButton" type="submit" name="tambah" value="Tambah">
         </div>
  		 </div>
     </form>
  	 </div>


  </div>

  </body>
</html>
