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
                  <td> <?php echo $row['status']; ?>
                  
                  <form action="set_status.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id_order']; ?>">
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
<<<<<<< HEAD
                  <?php

                      include ('database/dbconfig.php');

                      if(isset($_POST['menunggu'])){

                        $id_guru = $_POST['id_order1'];
                        $update = "UPDATE tbl_order SET status = 1 WHERE id_order = '".$id_guru."' ";
                        mysqli_query($connection, $update);
                      }
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

                      

                      ?>
=======
                  
>>>>>>> a7e64d6a391803f3c1ed227db895db2627891f14

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