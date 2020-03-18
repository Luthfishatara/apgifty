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
                    <form action="">
                    <label>Nama Barang :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Barang">
                    <br/>
                    <label>Foto :</label>
                    <input type="file" name="nama" class="form-control" placeholder="">
                    <br/>
                    <label>Kode Barang :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Kode Barang">
                    <br/>
                    <label>Harga Barang :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Harga Barang">
                    <br/>
                    <label>Range Date :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Range Date">
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
<a href="javascript:pilihsemua()">Check All</a>
&nbsp;&nbsp;
<a href="javascript:bersihkan()">Uncheck All</a><br>
</div>


                    <?php
                        while ($rows = mysqli_fetch_assoc($que)) {
                          ?>
                            <input type="checkbox" name="daftarku[]" value="Bike">
                            <span for="vehicle1"><?php echo $rows['sub_category'];?></span><br>
                          <?php
                        }  
                    ?>
                    <input type="submit" name="submit" value="submit">
                    <?php include 'checkbox_value.php';?>
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