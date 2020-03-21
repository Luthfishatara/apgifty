<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="modal fade" id="addbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codes.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nama Barang </label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Barang">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="text" name="photo" class="form-control" placeholder="Masukkan Foto Barang">
            </div>
            <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan Kode Barang">
            </div>
            <div class="form-group">
                <label>Harga barang</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Barang">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi">
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <section class="content">
              <div class="row">
                <div class="col-15">
                  
                  <!-- /.card -->
        
                  <div class="card">
                    <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">List Barang
                  <a class="btn btn-primary" href="add_list.php">
                      Tambah Barang
                  </a>
                  
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

                      $query = " SELECT A.id_barang
                      , A.nama_barang
                      , A.photo
                      , A.harga
                      , A.kado_buat
                      , A.kode_barang
                      , A.range_date
                      , A.acara
                      , A.deskripsi
                   FROM tbl_barang AS A";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>
                        <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Kode Barang</th>
                          <th>Harga</th>
                          <th>Deskripsi</th>
                          <th>Kado Buat</th>
                          <th>Untuk Acara</th>
                          <th >Range Date</th>
                          <th colspan="2">Aksi</th>
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
            <td> <?php echo $row['nama_barang']; ?> </td>
            <td><?php echo'<img src="img/'.$row['photo'].'" width="80px;"height="80px;" alt="Image">'?></td>
            <td> <?php echo $row['kode_barang']; ?> </td>
            <td> <?php echo $row['harga']; ?> </td>
            <td> <?php echo substr_replace($row['deskripsi'], ". . .", 20); ?> </td>
            <td> <?php echo $row['kado_buat']; ?> </td>
            <td> <?php echo $row['range_date']; ?> </td>
            <td> <?php echo $row['acara']; ?> </td>
            <td>
              
              <button type="submit" data-target="#exampleModalCenter1" data-toggle="modal" class="btn btn-danger btn-sm">DELETE</button>
               
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




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      

      <div class="modal-body">
        Apakah Anda Yakin Ingin Menghapus Data Yang Dipilih?
      </div> 

      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
        <form action="codes.php" method="POST">
                  <input type="hidden" name="delet_id" value="<?php echo $row['id_barang']; ?>">
                  <button type="submit" name="delet_btn" class="btn btn-danger"> DELETE</button>
                </form>
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
