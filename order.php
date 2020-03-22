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
                  <td> <a class="nav-item dropdown no-arrow">
                
        <a class="nav-link" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="d-lg-inline text-dark">
          <?php echo $row['status']; ?> <i class="fas fa-edit"></i>
          </span>         
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
          <?php 
                      include ('database/dbconfig.php');
                      $id_guru = $_GET['id_order'];

                      $get_data = "SELECT * FROM tbl_order WHERE id_order = '".$id_guru."' ";

                      $query = mysqli_query($get_data);
                      
                      
                      ?>
          <form action="" method="post">
          <i class="text-dark"type="submit" name="packing" value="packing">
          <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 1){
                            ?>
                              <h5>Packing</h5>
                            <?php
                          }

                        }
                      ?>
                      </i>
          </form>
            
            
          <a class="dropdown-item" href="#">
            <i class="text-dark"></i>
            Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="text-dark"></i>
            Activity Log
          </a>
        
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </a> </td>
                   
            
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