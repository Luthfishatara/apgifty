<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?> 

<div class="modal fade" id="addguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codes.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nama </label>
                <input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="Username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="Email" class="form-control" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="Alamat" class="form-control" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="Telepon" class="form-control" placeholder="Masukkan Telepon">
            </div>
            <div class="form-group">
                <label>Sandi</label>
                <input type="password" name="Sandi" class="form-control" placeholder="Masukkan Sandi">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="csandi" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" placeholder="Masukkan Pendidikan">
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addguru">
                      Tambah Guru 
                  </button>
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

                      $query = "SELECT * FROM akun_gurus";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>
                        <thead>
                        <tr>
                          <th>Id</th>
                          <!-- <th>Profil</th> -->
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>Sandi</th>
                          <th>Pendidikan</th>
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
                  <!-- <td></td> -->
                  <td> <?php echo $row['nama']; ?> </td>
                  <td> <?php echo $row['username']; ?> </td>
                  <td> <?php echo $row['email']; ?> </td>
                  <td> <?php echo $row['alamat']; ?> </td>
                  <td> <?php echo $row['telepon']; ?> </td> 
                  <td> <?php echo $row['sandi']; ?> </td> 
                  <td> <?php echo $row['pendidikan']; ?> </td>   
                                               
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
