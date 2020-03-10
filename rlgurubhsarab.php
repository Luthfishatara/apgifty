<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?> 


<div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Rules Guru Bahasa Arab</h3>
                    </div>

                    <div class="card-body">
<div class="container-fluid">



  <?php 
  if(isset($_SESSION['success']) && $_SESSION['success'] !='') 
  {
      echo '<h2> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
  }

  if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
  {
      echo '<h2 class="bg-info"> '.$_SESSION['status'].' </h2>';
      unset($_SESSION['status']);
  }
  ?>

    <div class="table-responsive">

    <?php 
    $connection = mysqli_connect("localhost","root","","rules");

    $query = "SELECT * FROM guruarab";
    $query_run = mysqli_query($connection, $query);
    
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> RULES </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                ?>

                 
          <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['rules']; ?> </td>
           
           <td>
         
                <form action="customer_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td> 
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
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
  </div>
  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>



