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
    
    $query = "SELECT * FROM tbl_transaksi WHERE id_pesanan ='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>
        
        <form action="codes.php" method="POST">

        <input type="hidden" name="edit_id" value="<?php echo $row['id_pesanan']?>">
        <div class="form-group">
            <label> Status </label>
            <select name="edit_status"  class="form-control">
            <option value="menunggu pembayaran">Menunggu Pembayaran</option>
            <option value="lunas">Lunas(Proses)</option>
            <option value="selesai">Selesai(Dikirim)</option>
            <option value="cancel" selected>cancel/refund</option>
            <option value="return" selected>Return</option>
          </select>
        </div>
            <a href="order.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="edit_but" class="btn btn-primary"> Update </button>

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