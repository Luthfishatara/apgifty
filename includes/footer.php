  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Gify 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    <?php

include 'database/dbconfig.php';

$query = "SELECT * FROM tbl_barang";
$query2 = "SELECT * FROM tbl_user";
$query3 = "SELECT * FROM tbl_transaksi";

$sel_que = mysqli_query($connection, $query);
$sel_que2 = mysqli_query($connection, $query2);
$sel_que3 = mysqli_query($connection, $query3);

while($row = mysqli_fetch_array($sel_que)){

    $pending = $row['id_barang'];

}
while($row = mysqli_fetch_array($sel_que2)){

    $success = $row['id'];

}
while($row = mysqli_fetch_array($sel_que3)){

    $failed = $row['id_pesanan']; 

}

$dataPoints = array(
    array("label"=> "Total Barang ", "y"=> $pending),
    // array("label"=> "Total User ", "y"=> $success),
    // array("label"=> "User Yang Melakukan Transaksi", "y"=> $failed)
);

?>


<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
animationEnabled: true,
exportEnabled: true,
theme: "dark1",
title:{
text: "Diagram Gify App"
},
data: [{
type: "bar",
indexLabelFontColor: "#5A5757",
indexLabelPlacement: "outside",   
dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
}]
});
chart.render();

}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script> 
<script src="checkbox.js"></script>
</body>

</html>