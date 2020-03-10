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
$connection = mysqli_connect("localhost", "root", "", "test");
  if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM berita WHERE berita_id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
        
        <form action="code.php" method="POST">

        <input type="hidden" name="edit_id" value="<?php echo $row['berita_id']?>">
        <div class="form-group">
            <label> Title </label>
            <input type="text" name="edit_title" value="<?php echo $row['title_berita']?>" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="edit_subtitle" value="<?php echo $row['subtitle_berita']?>" class="form-control" placeholder="Enter Subtitle">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="text" name="edit_image" value="<?php echo $row['image_berita']?>" class="form-control" placeholder="Enter Image">
        </div>
        <div class="form-group">
            <label>Isi</label>
            <input type="text" name="edit_isi" value="<?php echo $row['isi_berita']?>" class="form-control" placeholder="Enter Isi">
        </div>
        <div class="form-group">
            <label>Sumber</label>
            <input type="text" name="edit_sumber" value="<?php echo $row['sumber_berita']?>" class="form-control" placeholder="Enter Isi">
        </div>
            <a href="news.php" class="btn btn-danger"> CANCEL </a>
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