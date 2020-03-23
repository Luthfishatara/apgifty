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

                      $query = "SELECT A.id_order
                      , A.id_pesanan
                      , A.tgl_order
                      , A.status
                      , A.penerima
                      , A.resi
                      , A.jenis
                      , B.id_barang
                      , B.nama_barang
                      , B.photo
                      , B.kode_barang
                      , B.kado_buat
                       FROM tbl_order AS A 
                       JOIN tbl_barang AS B ON A.id_order = b.id_barang";

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
                  <td> <?php echo'<img src="img/'.$row['photo'].'" width="110px;"height="110px;" alt="Image">'?> </td>
                  <td> <?php echo $row['kode_barang']; ?> </td>
                  <td> <?php echo substr_replace($row['kado_buat'], ". . .", 20); ?> </td>
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
          <?php 
                      include ('database/dbconfig.php');
                      $id_guru = $_GET['id_order'];

                      $get_data = "SELECT * FROM tbl_order WHERE id_order = '".$id_guru."' ";

                      $query = mysqli_query($get_data);
                      
                      
                      ?>
                      <a class="dropdown-item" href="#">

          <form action="" method="post">
          <input type="hidden" name="id_order1" value="<?php echo $row['id_order']?>">
            <input type="submit" class="btn btn-info" name="menunggu" value="Menunggu Pembayaran">
          <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 1){
                            ?>
                            <?php
                          }

                        }
                      ?>
          </form>
          </a>
            
          <form action="" method="post">
          <a class="dropdown-item">
          <input type="hidden" name="id_order2" value="<?php echo $row['id_order']?>">
              <input type="submit" class="btn btn-primary" name="lunas" value="Lunas(Proses)">
          <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 2){
                            ?>
                            <?php
                          }

                        }
                      ?>
                      </a>
          </form>

          <a class="dropdown-item">
          <form action="" method="post">
          <input type="hidden" name="id_order3" value="<?php echo $row['id_order']?>">
              <input type="submit" class="btn btn-success" name="selesai" value="Selesai(dikirim)">
          <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 3){
                            ?>
                            <?php
                          }

                        }
                      ?>
          </form>
          </a>
        
          <a class="dropdown-item">
          <form action="" method="post">
          <input type="hidden" name="id_order4" value="<?php echo $row['id_order']?>">
              <input type="submit" class="btn btn-danger" name="refund" value="Cancel/Refund">
          <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 4){
                            ?>
                            <?php
                          }

                        }
                      ?>
          </form>
          </a>
          <a class="dropdown-item">
          <form action="" method="post">
          <input type="hidden" name="id_order5" value="<?php echo $row['id_order']?>">
              <input type="submit" class="btn btn-warning" name="return" value="Return">
          <?php
                        while($row = mysqli_fetch_array($result)){

                          if($row['status'] == 5){
                            ?>
                            <?php
                          }

                        }
                      ?>
          </form>
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
                  <?php

                      include ('database/dbconfig.php');

                      if(isset($_POST['menunggu'])){

                        $id_guru = $_POST['id_order1'];
                        $update = "UPDATE tbl_order SET status = 1 WHERE id_order = '".$id_guru."' ";
                        mysqli_query($connection, $update);
                        if(isset($_POST['lunas'])){

                          $id_guru = $_POST['id_order2'];
                         $update = "UPDATE tbl_order SET status = 2 WHERE id_order = '".$id_guru."' ";
                         mysqli_query($connection, $update);
  
                       }
                       if(isset($_POST['selesai'])){
  
                         $id_guru = $_POST['id_order3'];
                         $update = "UPDATE tbl_order SET status = 3 WHERE id_order = '$id_guru'";
                         mysqli_query($connection, $update);
  
                       }
                       if(isset($_POST['refund'])){
  
                         $id_guru = $_POST['id_order4'];
                         $update = "UPDATE tbl_order SET status = 4 WHERE id_order = '$id_guru'";
                         mysqli_query($connection, $update);
  
                       }
                       if(isset($_POST['return'])){
  
                         $id_guru = $_POST['id_order5'];
                         $update = "UPDATE tbl_order SET status = 5 WHERE id_order = '$id_guru'";
                         mysqli_query($connection, $update);
  
                       }

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