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

    $pending = $row['id'];

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
</body>

</html>