<?php 
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
        
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Detail Order</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php 
                      include ('database/dbconfig.php');

                      $query = "SELECT * FROM tbl_pesanan";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <!-- <th>Profil</th> -->
                          <th>Nama Barang</th>
                          <th>Gambar Barang</th>
                          <th>Kode Barang</th>
                          <th>Kado Buat </th>
                          <th>Range Date</th>
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
                  <!-- <td></td> -->
                  <td> <?php echo $row['nama_barang']; ?> </td>
                  <td> <?php echo'<img src="'.$row['photo'].'" width="110px;"height="110px;" alt="Image">'?> </td>
                  <td> <?php echo $row['kode_barang']; ?> </td>
                  <td> <?php echo $row['kado_buat']; ?> </td>
                  <td> <?php echo $row['range_date']; ?> </td> 
                  <td> <?php echo $row['status_order']; ?> </td> 

                                             
                  <!-- <td>
                    <input type="checkbox">
                    <label for="" class="onbtn">On</label>
                    
                    <label for="" class="ofbtn">Off</label>
                  </td> -->
            
                </tr>
                
                    <?php
                      }
                  }
                  else {
                    echo "No Record Found";
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