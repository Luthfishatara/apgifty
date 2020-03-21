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
                    <form action="codes.php" method="POST" enctype="multipart/form-data">
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
                    <label>Harga Barang :</label>
                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Barang">
                    <br/>
                    <label>Deskripsi :</label>
                    <textarea type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
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
                    </div>
                    <br/>
                    <label>Kado Buat :</label>
                    <br/>
                    <?php

                        include 'database/dbconfig.php';
                        $que = "SELECT * FROM tbl_kado_buat";
                        $que = mysqli_query($connection, $que);
                    ?>

                        <input type="checkbox" name="vehicle1" id="select_all" value="<?php echo $rows['sub_category']; ?>">
	                      <span for="vehicle1" id="all">All Category</span><br>
                        

                    <?php
                        while ($rows = mysqli_fetch_assoc($que)) {
                          ?>
                            <input class="checkbo" type="checkbox" name="kado_buat[]" value="<?php echo $rows['sub_category']; ?>">
                            <span for="kado_buat"><?php echo $rows['sub_category'];?></span><br>
                          <?php
                        }
                    ?>
                    
                        
                    <script>

                      var select_all = document.getElementById("select_all"); //select all checkbox
                      var checkboxes = document.getElementsByClassName("checkbo"); //checkbox items

                      //select all checkboxes
                      select_all.addEventListener("change", function(e){
                        for (i = 0; i < checkboxes.length; i++) { 
                          checkboxes[i].checked = select_all.checked;
                        }
                      });


                      for (var i = 0; i < checkboxes.length; i++) {
                        checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
                          //uncheck "select all", if one of the listed checkbox item is unchecked
                          if(this.checked == false){
                            select_all.checked = false;
                          }
                          //check "select all" if all checkbox items are checked
                          if(document.querySelectorAll('.checkbo:checked').length == checkboxes.length){
                            select_all.checked = true;
                          }
                        });
                      }
                      </script>
                    <br/>
                    <label>Kado Untuk Acara :</label>
                    <br/>
                    <?php

                        include 'database/dbconfig.php';
                        $que = "SELECT * FROM tbl_kado_untuk_acara";
                        $que = mysqli_query($connection, $que);
                    ?>

                        <input type="checkbox" name="vehicle" id="check" value="<?php echo $rows['untuk_acara']; ?>">
	                      <span for="vehicle1" id="all">All Category</span><br>
                        

                    <?php
                        while ($rows = mysqli_fetch_assoc($que)) {
                          ?>
                            <input class="checkbox" type="checkbox" name="acara[]" value="<?php echo $rows['untuk_acara']; ?>">
                            <span for="kado_buat"><?php echo $rows['untuk_acara'];?></span><br>
                          <?php
                        }
                    ?>
                    <br/>
                      <a type="button" class="btn btn-danger" href="list.php">CANCEL</a>
                      <button type="submit" name="addbarang" class="btn btn-primary">ADD Barang</button>
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