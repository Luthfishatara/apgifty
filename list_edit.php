<?php   
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT BERITA   </h6>
  </div>

  <div class="card-body">

<?php

include('database/dbconfig.php');
  if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM tbl_barang WHERE id_barang ='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
        
        <form action="codes.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="edit_id" value="<?php echo $row['id_barang']?>">
        <div class="form-group">
            <label> Nama Barang </label>
            <input type="text" name="edit_nama" value="<?php echo $row['nama_barang']?>" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Foto :</label>
            <input type="file" name="photo" id="photo" value="<?php echo $row['photo']?>" class="form-control" placeholder="">
        </div>
        <div class="form-group">
        <label>Kode Barang :</label>
                <div class="from-group">
                <select name="edit_kode"  class="form-control">
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
        </div>
        </div>
        <div class="form-group">
            <label>Harga Barang</label>
            <input type="text" name="edit_harga" value="<?php echo $row['harga']?>" class="form-control" placeholder="Masukkan harga Barang">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="edit_desc" value="<?php echo $row['deskripsi']?>" class="form-control" placeholder="Masukkan Deskripsi">
        </div>
        <div class="form-group">
        <label>Range Date :</label>
                    <div class="from-group">
                    <select name="edit_range"  class="form-control">
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
                </div>
                <div class="form-group">
                    <label>Kado Buat</label>
                    <input type="text" name="edit_buat" value="<?php echo $row['kado_buat']?>" class="form-control" placeholder="Masukkan kado Buat">
                </div>
                <div class="form-group">
                    <label>Untuk Acara</label>
                    <input type="text" name="edit_acara" value="<?php echo $row['acara']?>" class="form-control" placeholder="Masukkan Untuk Acara">
                </div>
            <a href="list.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="edit_btn" class="btn btn-primary"> Update </button>

            </form>            

     <?php       
    }
}
?>
  </div>
  </div>
</div>

</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>