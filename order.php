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

                      $query = "SELECT * FROM tbl_transaksi ";

                      $query_run = mysqli_query($connection, $query);
                      $cek_status = "SELECT status FROM tbl_transaksi";

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
                  <td> <?php echo $row['id_pesanan']; ?> </td>
                  <td> <?php echo $row['penerima']; ?> </td>
                  <td> <?php echo $row['ttl']; ?> </td>
                  <td> <?php echo $row['alamat']; ?> </td>
                  <td> <?php echo $row['kelurahan']; ?> </td>
                  <td> <?php echo $row['kecamatan']; ?> </td>
                  <td> <?php echo $row['kota']; ?> </td>  
                  <td> <?php echo $row['provinsi']; ?> </td>
                  <td> <?php echo $row['resi']; ?> </td>                
                 
                  <td> <?php echo $row['jenis']; ?></td>
             
                 <td> <?php echo $row['status']; ?>
                  <form action="set_status.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id_pesanan']; ?>">
                  <button type="submit" name="update_btn" class="btn btn-success btn-sm"> <i class="fas fa-edit" type="submit"></i></button>
                </form>
                </td>
                   
            
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