<html>
  <head>
    <title>Pemesanan Kamar</title>

  </head>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".add_to_cart").click(function(){
            $("#myModal").modal();
        });
    });
    </script>

    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="index.php">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">

         <!--Modal-->
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content(untuk Tambah)-->
          <?php
           include('D:\xampp\htdocs\tubes\koneksi.php');
           //$id_kamar = $_GET['id_kamar'];
           //$sql = "SELECT * FROM reservasi WHERE id_kamar='$id_kamar'";
         ?>

        <div class="modal-content">
          <form action="content/input-kamar.php" method="post">
              <div class="modal-header" style="padding:30px 50px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4><center>Tambah Kamar</center></h4>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                      <div class="form-group">
                        <label for="usrname">Input Stok Kamar</label>
                        <input type="number" name="stokkamar" class="form-control" id="namakamar" placeholder="cth. Sriwijaya"/>
                      </div>
                      <br>
                      <input type="submit" name="upload" value="upload" />
              </div>
              <div class="modal-footer">
                  <!-- <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
              </div>
            </form>
          </div>

        </div>
        </div>
        <!--end modal-->

            <table class="table table-bordered">
               <tr>
                 <th class="info">No</th>
                  <th class="info">Nama Kamar</th>
                  <th class="info">Stok Kamar</th>
                  <th class="info" colspan="2">Action</th>
               </tr>

               <?php
                $sql = "SELECT * FROM kamar";
                $sting= "window.location.href=www.hyperlinkcode.com/button-links.php";
                if($result=mysqli_query($conn,$sql))
                {
                  if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0)
                  {
                  $no = 1;
                    while($data = mysqli_fetch_assoc($result)){
                        echo '<tr>';

                            echo '<td width="3%">'.$no.'</td>';
                            echo '<td width="10%">'.$data['nama_kamar'].'</td>';
                            echo '<td width="10%">'.$data['stok_kamar'].'</td>';
                            echo '<td width="5%">';
                            echo '<input type="submit" id="myBt" name="stokkamar" class="btn btn-warning form-control add_to_cart"/>';
                            echo '</td
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
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
   </div>
