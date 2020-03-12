<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>   

        <!-- Begin Page Content -->
        <div class="container-fluid ">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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

<<<<<<< HEAD
                        $query = "SELECT id_barang FROM tbl_barang ORDER by id_barang";
=======
                        $query = "SELECT id FROM tbl_barang ORDER by id";
>>>>>>> g
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

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">55%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Transaksi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        include ('database/dbconfig.php');
                        $query = "SELECT id_pesanan FROM tbl_transaksi ORDER by id_pesanan";
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
  include('includes/scripts.php');
  include('includes/footer.php');
  
?>



