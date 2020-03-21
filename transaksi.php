<?php 
include('database/dbconfig.php');
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addberita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Penerima</label>
                <input type="text" name="penerima" class="form-control" placeholder="Masukkan Nama Penerima">
            </div>
            <div class="form-group">
                <label>Tanggal Transaksi</label>
                <input type="date" name="ttl" class="form-control" placeholder="Masukkan Tanggal">

            </div>
            <div class="form-group">
                <label>Resi</label>
                <input type="text" name="resi" class="form-control" placeholder="Masukkan Nomor Resi">
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis Barang">
            </div>
           
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah_transaksi" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DATA TRANSAKSI
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addberita">
              ADD DATA 
            </button>
    </h6>
  </div>

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

    <div class="table-responsive">

    <?php 

    include ('database/dbconfig.php');
    $query = "SELECT * FROM tbl_transaksi";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
       
        ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Penerima</th>
            <th>Resi</th>
            <th>Jenis</th>
            <th>Waktu</th>
            <th>Status</th>
            <th>DELETE</th>
            <th>EDIT</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
           while($row = mysqli_fetch_assoc($query_run))
           {
      ?>

<tr>
            <td><?php echo $no++ ?></td>
            <td> <?php echo $row['penerima']; ?> </td>
            <td> <?php echo $row['resi']; ?> </td>
            <td><?php echo $row['jenis'];?></td>            
            <td> <?php echo $row['ttl'];?></td>
            <td><?php echo $row['status'];?> </td>
          

           <!-- <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>  -->
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id_pesanan']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
            <td>
                <form action="news_edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id_pesanan']; ?>">
                  <button type="submit" name="update_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
          </tr>

      <?php
           }
                ?>


                 
          
          
        
        </tbody>
      </table>
      <?php
    }
    else
    {
        echo "No Record Found";
    }
    
    ?>

    </div>
  </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>