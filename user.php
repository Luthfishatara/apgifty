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
                    <h6 class="m-0 font-weight-bold text-primary">Data User
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

                      $query = "SELECT * FROM tbl_user";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <!-- <th>Profil</th> -->
                          <th>Nama</th>
                          <th>Nama Belakang</th>
                          <th>Profile</th>
                          <th>TTL</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Nomor Hp</th>
                          <th>Alamat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                    $no = 1;
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        
                    {
                 ?> 
                <tr>
                <td> <?php echo $no++ ?> </td>
                  <td> <?php echo $row['nama']; ?> </td>
                  <td> <?php echo $row['last_name']; ?> </td>
                  <td><?php echo'<img src="img/'.$row['photo'].'" width="80px;"height="80px;" alt="Image">'?></td>
                  <td> <?php echo $row['ttl']; ?> </td>                  
                  <td> <?php echo $row['email']; ?> </td> 
                  <td> <?php echo $row['password']; ?> </td>    
                  <td> <?php echo $row['nohp']; ?> </td>                      
                  <td> <?php echo $row['alamat']; ?> </td>           
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
