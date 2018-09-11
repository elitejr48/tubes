<!DOCTYPE html>
<html>
  <head>
    <title>Reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
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
  <body>
    <div class="container">
   <!---heading---->
       <header class="heading"> RESERVATION</header><hr></hr>
  	<!---Form starting---->

    <form action="register-process.php" method="post">
  	<div class="row">
  	 <!--- For Name---->
           <div class="col-sm-12">
               <div class="row">
  			     <div class="col-xs-4">
            	         <label class="check_in">Check in:</label> </div>
  		         <div class="col-xs-8">
  		             <input type="date" name="check_in" id="check_in" placeholder="Enter your Check-in Date" class="form-control ">
               </div>
  		      </div>
  		 </div>


           <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
                       <label class="check_out">Check out :</label></div>
  				<div class ="col-xs-8">
  		             <input type="date" name="check_out" id="check_out" placeholder="Enter your Check-out Date" class="form-control last">
                  </div>
  		     </div>
  		 </div>
      <!-----For Username---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="j_kamar" >Jumlah kamar :</label></div>
            <div class="col-xs-8"	>
                 <input type="number" name="j_kamar"  id="j_kamar" placeholder="Enter your room quantity" class="form-control" >
              </div>
          </div>
      </div>
      <!-----For nomor Telepon---->
      <div class="col-sm-12">
          <div class="row">
            <div class="col-xs-4">
                  <label class="dewasa" >Dewasa :</label></div>
            <div class="col-xs-8"	>
                 <input type="number" name="dewasa"  id="dewasa" placeholder="Enter your number"  class="form-control" >
              </div>
          </div>
      </div>
       <!-----For email---->
  		 <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
  		             <label class="anak" >Anak-anak :</label></div>
  			     <div class="col-xs-8"	>
  			          <input type="number" name="anak"  id="anak" placeholder="Enter your number" class="form-control" >
  		         </div>
  		     </div>
  		 </div>
       <!-----For Password and confirm password---->
              <div class="col-sm-12">
                <div class="row">
                <div class="col-xs-4">
                       <label class="kamar">Pilih jenis kamar :</label></div>
             <div class="col-xs-8">
                <select name= "alamat" id="kamar"  class="form-control">
                  <option value="Superior">Superior</option>
                  <option value="Double_Deluxe">Double Deluxe</option>
                  <option value="Executive">Executive</option>
                  <option value="Junior_suite">Junior suite</option>
                </select>
            </div>
              </div>
             </div>
       <!-----For Alamat---->
  		 <div class="col-sm-12">
  		     <div class="row">
  			     <div class="col-xs-4">
  		             <label class="alamat" >Harga :</label></div>
  			     <div class="col-xs-8"	>
  			          <input type="text" name="alamat"  id="alamat"placeholder="" class="form-control" >
  		         </div>
  		     </div>
  		 </div>

            <!-----------For gender-------->
  		     <div>
                <div class="btn btn-warning">Back</div>
                   <input type="submit" name="tambah" value="Tambah">
         </div>
  		 </div>
     </form>
  	 </div>


  </div>

  </body>
</html>
