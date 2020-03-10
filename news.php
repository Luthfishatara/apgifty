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
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Title Berita</label>
                <input type="text" name="Title_Berita" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Subtitle Berita</label>
                <input type="text" name="Subtitle_Berita" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Image Berita</label>
                <input type="text" name="Image_Berita" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <input type="text" name="Isi_Berita" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Sumber Berita</label>
                <input type="text" name="Sumber_Berita" class="form-control" placeholder="">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah_berita" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DATA BERITA
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addberita">
              ADD BERITA 
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
// <<<<<<< HEAD
    // $connection = mysqli_connect("localhost","root","","test");

    // $query = "SELECT * FROM berita";
// =======
    include ('database/dbconfig.php');
    $query = "SELECT * FROM berita";
// >>>>>>> 3dcf17dd217fd392a85fc2185e2e14a92d5fe996
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
       
        ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title Berita</th>
            <th>Subtitle Berita</th>
            <th>Image Berita</th>
            <th>Isi Berita </th>
            <th>Sumber</th>
            <th>DELETE </th>
            <th>EDIT</th>
          </tr>
        </thead>
        <tbody>
        <?php
           while($row = mysqli_fetch_assoc($query_run))
           {
      ?>

<tr>
            <td> <?php echo $row['berita_id']; ?> </td>
            <td> <?php echo $row['title_berita']; ?> </td>

            <td><?php echo substr_replace($row['subtitle_berita'], ". . . .", 100);?> </td>
            <td><?php echo'<img src="'.$row['image_berita'].'" width="110px;"height="110px;" alt="Image">'?></td>            
            <td> <?php echo substr_replace($row['isi_berita'], ". . .", 100); ?> </td>
            <td> <?php echo $row['sumber_berita']; ?> </td>

           <!-- <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>  -->
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['berita_id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
            <td>
                <form action="news_edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['berita_id']; ?>">
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