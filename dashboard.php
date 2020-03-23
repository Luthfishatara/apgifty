<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb- 0 font-weight-bold text-gray-700 ">Dashboard</h1>
            <a href="https://www.mediafire.com/file/7xnvj09ky5jpl72/YukBelajarv8.apk/file" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Aplikasi</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                       require 'database/dbconfig.php';

                       $query = "SELECT id FROM tbl_user ORDER by id";
                       $query_run = mysqli_query($connection, $query);

                       $row = mysqli_num_rows($query_run);
                       echo '<h3> '.$row.' </h3>';
                       ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Barang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        include ('database/dbconfig.php');

                        $query = "SELECT id_barang FROM tbl_barang ORDER by id_barang";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);
                         echo '<h3> '.$row.' </h3>';
                      
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-shopping-bag fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Barang Favorit</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        include ('database/dbconfig.php');

                        $query = "SELECT id_barang FROM tbl_barang ORDER by id_barang";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);
                         echo '<h3> '.$row.' </h3>';
                      
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-thumbs-up fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Order</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        include ('database/dbconfig.php');
                        $query = "SELECT id_order FROM tbl_order ORDER by id_order";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);
                         echo '<h3> '.$row.' </h3>';
                      ?>
                    
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Overview Pendapatan</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div id="chartContainer" style="height: 370px; width: 100%;">
      </div>
    </div>
  </div>
</div>
</div>

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
    array("label"=> "User Yang Melakukan Transaksi", "y"=> $failed)
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

  <?php 
  include('includes/scripts.php');
  include('includes/footer.php');
  
?>



