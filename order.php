<?php 
error_reporting(0);
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?> 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <section class="content">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
        
                  <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data Order</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php 
                      include ('database/dbconfig.php');

                      $query = "SELECT * FROM tbl_order";
                      $query_run = mysqli_query($connection, $query);
                      $cek_status = "SELECT status FROM tbl_order";

                      $result = mysqli_query($connection, $cek_status);
                      ?>
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Penerima</th>
                          <th>Nama Barang</th>
                          <th>Gambar</th>
                          <th>Kode Barang</th>
                          <th>Kado Buat </th>
                          <th>Tanggal Order</th>                          
                          <th>Jenis</th>
                          <th>Resi</th>
                          <th>Status Order</th>
                         
                          
                        </tr>
                        </thead>
                        <tbody>
                  <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                    {
                 ?>     
                <tr>
                  <td> <?php echo $row['id_order']; ?> </td>
                  <td> <?php echo $row['penerima']; ?> </td>
                  <td> <?php echo $row['nama_barang']; ?> </td>
                  <td> <?php echo'<img src="'.$row['photo'].'" width="110px;"height="110px;" alt="Image">'?> </td>
                  <td> <?php echo $row['kode_barang']; ?> </td>
                  <td> <?php echo $row['kado_buat']; ?> </td>
                  <td> <?php echo $row['tgl_order']; ?> </td>    
                  <td> <?php echo $row['jenis']; ?> </td>
                  <td> <?php echo $row['resi']; ?> </td>              
                  <td><?php 
                      include ('database/dbconfig.php');
                      $id = $_GET['id_order'];

                      $get_data = "SELECT * FROM tbl_order WHERE id_order = '".$id."' ";

                      $query = mysqli_query($get_data);
                      
                      
                      ?>
                    <form action="" method="post">
                  
                      <input type="submit" name="hidupkan" value="AKTIF">     

                      <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 1){
                            ?>
                              <p>AKUN INI SUDAH DI AKTIFKAN</p>	
                            <?php
                          }

                        }
                      ?>

                    </form>
                    <form action="" method="post">

                      <input type="submit" name="matikan" value="NONAKTIF">

                      <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 0){
                            ?>
                              <p>AKUN INI SUDAH DI NONAKTIFKAN</p>
                            <?php
                          }

                        }
                      ?>
                      </form></td>
                 
                   
            
                </tr>
                
               
                     
                  <?php

include ('database/dbconfig.php');
 if(isset($_POST['hidupkan'])){

   $update = "UPDATE tbl_order SET status = 1 WHERE id_order = '1'";
   mysqli_query($connection, $update);

 }

 if(isset($_POST['matikan'])){

  $update = "UPDATE tbl_order SET status = 0 WHERE id_order = '1'";
  mysqli_query($connection, $update);

}


?>

                  </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
      include('includes/scripts.php');
      include('includes/footer.php');
      ?>