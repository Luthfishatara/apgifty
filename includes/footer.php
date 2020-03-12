      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
<<<<<<< HEAD
            <span>Copyright &copy; Gify 2020</span>
=======
            <span>Copyright &copy; YukBelajar 2019</span>
>>>>>>> g
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    <?php

include 'database/dbconfig.php';

<<<<<<< HEAD
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
=======
$query = "SELECT * FROM kelompok";

$sel_que = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($sel_que)){

    $pending = $row['paket_perbulan'];
    $success = $row['paket_persemester'];
    $failed = $row['paket_pertahun'];
>>>>>>> g

}

$dataPoints = array(
<<<<<<< HEAD
    array("label"=> "Total Barang ", "y"=> $pending),
    // array("label"=> "Total User ", "y"=> $success),
    // array("label"=> "User Yang Melakukan Transaksi", "y"=> $failed)
=======
    array("label"=> "Paket Medium Rp", "y"=> $pending),
    array("label"=> "Paket Oke Rp", "y"=> $success),
    array("label"=> "Paket Super Mamang Rp", "y"=> $failed)
>>>>>>> g
);

?>

<<<<<<< HEAD

=======
>>>>>>> g
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
animationEnabled: true,
exportEnabled: true,
theme: "dark1",
title:{
<<<<<<< HEAD
text: "Diagram Gify App"
},
data: [{
type: "bar",
=======
text: "Diagram Penghasilan Ayok Belajar"
},
data: [{
type: "pie",
>>>>>>> g
indexLabelFontColor: "#5A5757",
indexLabelPlacement: "outside",   
dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
}]
});
chart.render();

}
</script>
<<<<<<< HEAD
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script> 
=======
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>

>>>>>>> g
</body>

</html>