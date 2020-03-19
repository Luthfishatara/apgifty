<?php 
error_reporting(0);
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?> 

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codex.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nama </label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label>Keahlian</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Keahlian">
            </div>
            <div class="form-group">
                <label>Biografi</label>
                <input type="text" name="password" class="form-control" placeholder="Masukkan Biografi">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <section class="content">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
        
                  <div class="card">
                    <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru
                </h6>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php 
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

                      $query = "SELECT * FROM   ";
                      $query_run = mysqli_query($connection, $query);

                      $cek_status = "SELECT status FROM guru";

                      $result = mysqli_query($connection, $cek_status);

    
                      ?>
                        <thead>
                        <tr>
                          <th>Id</th>
                          <!-- <th>Profil</th> -->
                          <th>Nama</th>
                          <th>Keahlian</th>
                          <th>Biografi</th>
                          <th>Total Santri</th>
                          <th>Total Pertemuan</th>
                          <th>Status</th>
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
                  <td> <?php echo $row['id']; ?> </td>
                  <td> <?php echo $row['nama']; ?> </td>
                  <td> <?php echo $row['keahlian']; ?> </td>
                  <td> <?php echo $row['biografi']; ?> </td>
                  <td> <?php echo $row['total_santri']; ?> </td>
                  <td> <?php echo $row['total_pertemuan']; ?> </td>     
                  <td>
                    <?php 
                      include ('database/dbconfig.php');
                      $id_guru = $_GET['id'];

                      $get_data = "SELECT * FROM guru WHERE id = '".$id_guru."' ";

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
                  
                  <?php

                      include ('database/dbconfig.php');
                       if(isset($_POST['hidupkan'])){

                         $update = "UPDATE guru SET status = 1 WHERE id = '1'";
                         mysqli_query($connection, $update);

                       }

                       if(isset($_POST['matikan'])){

                        $update = "UPDATE guru SET status = 0 WHERE id = '1'";
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
