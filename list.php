<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<<<<<<< HEAD
<div class="modal fade" id="addbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codes.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Nama Barang </label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Barang" required>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan Kode Barang" required>
            </div>
            <div class="form-group">
                <label>Harga barang</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Barang" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" required></textarea>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addbarang" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

=======
>>>>>>> g
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <section class="content">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
        
                  <div class="card">
                    <div class="card-header">
<<<<<<< HEAD
                    <h6 class="m-0 font-weight-bold text-primary">List Barang
                  <a class="btn btn-primary" href="add_list.php">
                      Tambah Barang
                  </a>
                </h6>
=======
                      <h3 class="card-title">List Barang</h3>
>>>>>>> g
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php 
<<<<<<< HEAD
                      if(isset($_SESSION['success']) && $_SESSION['success'] !='') 
                        {
                        echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
                        unset($_SESSION['success']);
                          }

                      if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                        {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                          unset($_SESSION['status']);
                      }
                      ?>

                      <table id="example1" class="table table-bordered table-striped">
                      <?php 
                      include ('database/dbconfig.php');

                      $query = " SELECT A.id_barang
                      , A.nama_barang
                      , A.photo
                      , A.harga
                      , B.id
                      , B.kode_barang
                      , C.id_date
                      , C.ttl
                      , C.nama 
                   FROM tbl_barang AS A 
                   JOIN tbl_kode_barang as B 
                     ON A.id_barang = b.id 
                   JOIN tbl_kado_range_date as c 
                     ON C.id_date = B.id";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Kode Barang</th>
                          <th>Harga</th>
<<<<<<< HEAD
                          <th colspan="2">Range Date</th>
=======
                      include ('database/dbconfig.php');

                      $query = "SELECT * FROM santri";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>

                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Umur</th>
                          <th>Alamat</th>
                          <th>Pendidikan</th>
                          <th>Status</th>
>>>>>>> g
=======
                          <th>Deskripsi</th>
                          <th class="text-justifycolspan="2">Aksi</th>
>>>>>>> wsw
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
<<<<<<< HEAD
            <td> <?php echo $row['id_barang']; ?> </td>
            <td> <?php echo $row['nama_barang']; ?> </td>
            <td><?php echo'<img src="'.$row['photo'].'" width="80px;"height="80px;" alt="Image">'?></td>
            <td> <?php echo $row['kode_barang']; ?> </td>
            <td> <?php echo $row['harga']; ?> </td>
<<<<<<< HEAD
            <td> <?php echo $row['ttl']; ?> </td>
            <td> <?php echo $row['nama']; ?> </td>
=======
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['name']; ?> </td>
            <td> <?php echo $row['umur']; ?> </td>
            <td> <?php echo $row['alamat']; ?> </td>
            <td> <?php echo $row['pendidikan']; ?> </td>
            <td> <?php echo $row['status']; ?> </td>
>>>>>>> g
=======
            <td> <?php echo substr_replace($row['deskripsi'], ". . .", 10); ?> </td>
            <td><div class="btn btn-primary btn-sm"><i class="fas fa-copy"></i></div></td>
            <td><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>
>>>>>>> wsw
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
     include('includes/footer.php')
     ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
