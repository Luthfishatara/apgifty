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
        
                  <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Data User</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
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