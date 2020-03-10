<?php 
session_start();
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary"> Edit Rules Customer</h3>
  </div>

  <div class="card-body">

<?php
$connection = mysqli_connect("localhost", "root", "", "rules");
  if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM customer WHERE id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
        
        <form action="code.php" method="POST">

        <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
        <div class="form-group">
            <label>Input New Rules</label>
            <input type="text" name="rules" value="<?php echo $row['rules']?>" class="form-control" placeholder="Enter Username">
        </div>
       
            <a href="rlcustomer.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="updaterls" class="btn btn-primary"> Update </button>

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