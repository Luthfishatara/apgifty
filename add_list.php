<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

          <!-- Page Heading -->
          <section class="content">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
        
                  <div class="card">
                    <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add Barang
                </h6>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form action="codes.php" method="POST">
                    <label>Nama Barang :</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                    <br/>
                    <label>Foto :</label>
                    <input type="file" name="photo" class="form-control" placeholder="">
                    <br/>
                    <label>Kode Barang :</label>

                             <div class="from-group">
                              <select name="kode_barang"  class="form-control">
                              <option value="0" disabled selected hidden>Select Kode Barang</option>

                              <?php
                                  include 'database/dbconfig.php';

                                  $que = "SELECT * FROM tbl_kode_barang";
                                  $que1 = mysqli_query($connection, $que);

                                  while ($rows = mysqli_fetch_assoc($que1)) {
                              ?>

                              <option value="<?php echo $rows['kode']; ?>"><?php echo $rows['kode']; ?></option>
                              </div>
                          <?php
                        }
                    ?>
                    </select>

                    <br/>
                    <br/>
                    <label>Harga Barang :</label>
                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Barang">
                    <br/>
                   
                    <div class="from-group">
                  
                   
                    </select>
                    </div>
                    <br/>
                    <label>Range Date :</label>
                    <div class="from-group">
                    <select name="range_date"  class="form-control">
                    <option value="0" disabled selected hidden>Select Range Date</option>
                    <?php
                                  include 'database/dbconfig.php';

                                  $que = "SELECT * FROM tbl_kado_range_date";
                                  $que1 = mysqli_query($connection, $que);

                                  while ($rows = mysqli_fetch_assoc($que1)) {
                              ?>

                              <option value="<?php echo $rows['nama']; ?>"><?php echo $rows['ttl']; ?></option>
                              </div>
                          <?php
                        }
                    ?>
                    </select>
                    <br/>
                    <label>Kado Buat :</label>
                    <br/>
                   
                        <script>
                        function pilihsemua()
                        {
                          var daftarku = document.getElementsByName("daftarku[]");
                          var jml=daftarku.length;
                          var b=0;
                          for (b=0;b<jml;b++)
                          {
                            daftarku[b].checked=true;
                            
                          }
                        }

                        function bersihkan()
                        {
                          var daftarku = document.getElementsByName("daftarku[]");
                          var jml=daftarku.length;
                          var b=0;
                          for (b=0;b<jml;b++)
                          {
                            daftarku[b].checked=false;
                            
                          }
                        }
                        </script>
                    <?php

                        $que = "SELECT * FROM tbl_kado_buat";
                        $que = mysqli_query($connection, $que);

                    ?>
                  <div class>
                  <a href="javascript:pilihsemua()"><strong>Check All</strong></a>
                  &nbsp;&nbsp;
                  <a href="javascript:bersihkan()"><strong>Uncheck All</strong></a><br>
                  </div>
                 
                  <form action="" method="post">
             
             



	  <?php
	  		while ($rows = mysqli_fetch_assoc($que)) {
	  			?>
	  				<input type="checkbox" name="daftarku[]" value="Bike">
  					<label for="vehicle1"><?php echo $rows['sub_category'];?></label><br>
	  			<?php
	  		}
	  ?>

	 
	</form>

                          
                    </div>
                    <br/>
                      <a type="button" class="btn btn-secondary" href="list.php">Close</a>
                      <button type="submit" name="addbarang" class="btn btn-primary">Save</button>
                    </form>
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
     include('includes/footer.php');
     include('includes/scripts.php');
     ?>