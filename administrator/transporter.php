<?php
session_start();
include("../includes/config.php");
include("../includes/functions.php"); 

if(!isset($_SESSION['mobile'])){
  header("location:../login");
}
else{
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Loader Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css?v=<?= $version ?>">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css?v=<?= $version ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?= $version ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/img/mono.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include("partials/_navbar.php") ?>
       <div class="main-panel">
          <div class="content-wrapper">

             <!-- ============================================================================= -->

             <div class="row">
              
                  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title">Un-Verified Transporter</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Transporter name </th>
                          <th> Transporter Number </th>
                          <th> Company Name </th>
                          <th> Partners</th>
                          <th> Total Trucks</th>
                          <th>Total Driver</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                       

                        <?php       

 
                      $get_trans = "SELECT * FROM reg where user='Transporter' and status= 'Unverified'";
            $run_trans = mysqli_query( $con, $get_trans );
            while ( $row_trans = mysqli_fetch_array( $run_trans ) ) {

              $user_id = $row_trans[ 'user_id' ];
              $name = $row_trans[ 'name' ];
              $mobile = $row_trans[ 'mobile' ];
              $company_name = $row_trans[ 'company_name' ];
              $partner = $row_trans[ 'partner' ];
              $t_trucks = $row_trans[ 't_trucks' ];
              $t_drivers = $row_trans[ 't_drivers' ];
              $status = $row_trans[ 'status' ];
                         
              
            echo"
            <tr>
              <td><a href='verification?user_id=$user_id' style='color:#ff4a37;'>$name</a></td>
              <td>$mobile</td>
              <td>$company_name</td>
              <td>$partner</td>
              <td>$t_trucks</td>
              <td>$t_drivers</td>
              <td><label class='badge badge-danger'><i>$status</i></label></td>               
            </tr>
          
            ";
            }
            ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title">Verified Transporter</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Transporter name </th>
                          <th> Transporter Number </th>
                          <th> Company Name </th>
                          <th> Partners</th>
                          <th> Total Trucks</th>
                          <th>Total Driver</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                       

                        <?php       

 
                      $get_trans = "SELECT * FROM reg where user='Transporter' and status= 'Verified'";
            $run_trans = mysqli_query( $con, $get_trans );
            while ( $row_trans = mysqli_fetch_array( $run_trans ) ) {

              $user_id = $row_trans[ 'user_id' ];
               $name = $row_trans[ 'name' ];
              $mobile = $row_trans[ 'mobile' ];
              $company_name = $row_trans[ 'company_name' ];
              $partner = $row_trans[ 'partner' ];
              $t_trucks = $row_trans[ 't_trucks' ];
              $t_drivers = $row_trans[ 't_drivers' ];
              $status = $row_trans[ 'status' ];
                         
              
            echo"
            <tr>
              <td><a href='details_user?user_id=$user_id' style='color:#ff4a37;'>$name</a></td>
              <td>$mobile</td>
              <td>$company_name</td>
              <td>$partner</td>
              <td>$t_trucks</td>
              <td>$t_drivers</td>
              <td><label class='badge badge-success'><i>$status</i></label></td>              
            </tr>
          
            ";
            }
            ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div> <!-- page-body-wrapper ends -->


   <!-- =========================================================================== -->   
   <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © trollaexpress.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="" target="_blank" style="color: #ff4a37;">Stella Express & Logistics Pvt Ltd. </a> from trollaexpress.com</span>
            </div>
          </footer>
          <!-- partial -->
        
        <!-- main-panel ends -->
      </div>
     
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js?v=<?= $version ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js?v=<?= $version ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js?v=<?= $version ?>"></script>
    <script src="assets/js/hoverable-collapse.js?v=<?= $version ?>"></script>
    <script src="assets/js/misc.js?v=<?= $version ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js?v=<?= $version ?>"></script>
    <script src="assets/js/todolist.js?v=<?= $version ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php 
  } ?>