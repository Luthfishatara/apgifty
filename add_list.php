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
                    <label>Kado Buat :</label>
                    <br/>
                    <div class="from-group">
                    <select name="kado_buat"  class="form-control">
                    <option value="0" disabled selected hidden>Select Kado Buat</option>
                    <?php
                                  include 'database/dbconfig.php';

<<<<<<< HEAD
                        $que = "SELECT * FROM tbl_kado_buat";
                        $que = mysqli_query($connection, $que);

                    ?>
        <div class>
        <a href="javascript:pilihsemua()">Check All</a>
        &nbsp;&nbsp;
        <a href="javascript:bersihkan()">Uncheck All</a><br>
        </div>
=======
                                  $que = "SELECT * FROM tbl_kado_buat";
                                  $que1 = mysqli_query($connection, $que);
>>>>>>> cdf793af01acdf0d1e3e114407bb03db073486db

                                  while ($rows = mysqli_fetch_assoc($que1)) {
                              ?>

                              <option value="<?php echo $rows['sub_category']; ?>"><?php echo $rows['sub_category']; ?></option>
                              </div>
                          <?php
                        }
                    ?>
                    </select>
                    </div>
                    <br/>
                    <label>Range Date :</label>
                    <div class="from-group">
                    <select name="range_date"  class="form-control">
                    <option value="0" disabled selected hidden>Select Range Date</option>
                    <?php
<<<<<<< HEAD
                        while ($rows = mysqli_fetch_assoc($que)) {
                          ?>
                            <input type="checkbox" name="daftarku[]" value="Bike">
                            <span for="vehicle1"><?php echo $rows['sub_category'];?></span><br>
=======
                                  include 'database/dbconfig.php';

                                  $que = "SELECT * FROM tbl_kado_range_date";
                                  $que1 = mysqli_query($connection, $que);

                                  while ($rows = mysqli_fetch_assoc($que1)) {
                              ?>

                              <option value="<?php echo $rows['nama']; ?>"><?php echo $rows['ttl']; ?></option>
                              </div>
>>>>>>> cdf793af01acdf0d1e3e114407bb03db073486db
                          <?php
                        }
                    ?>
<<<<<<< HEAD
                    <input type="submit" name="submit" value="submit">
                    <?php include 'checkbox_value.php';?>
=======
                    </select>
                    </div>
                    <br/>
                      <a type="button" class="btn btn-secondary" href="list.php">Close</a>
                      <button type="submit" name="addbarang" class="btn btn-primary">Save</button>
>>>>>>> cdf793af01acdf0d1e3e114407bb03db073486db
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