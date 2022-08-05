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


            <?php

            if ( isset( $_GET[ 'user_id' ] ) ) {
              $user_id = $_GET[ 'user_id' ];
              $get_user = "SELECT * FROM reg WHERE user_id='$user_id'";
              $run_user = mysqli_query( $con, $get_user );
              while ( $row_user = mysqli_fetch_array( $run_user ) ) {
                $user_id = $row_user[ 'user_id' ];
                $name = $row_user[ 'name' ];
                $mobile = $row_user[ 'mobile' ];
                $email = $row_user[ 'email' ];
                $company_name = $row_user[ 'company_name' ];
                $gst_number = $row_user[ 'gst_number' ];
                $attch_file = $row_user[ 'attch_file' ];
                
              }
            }
            ?>

             <!-- ============================================================================= -->

             <div class="row">

             <div class="col-12 grid-margin stretch-card">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title">VERIFIED USER</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="#" method="post">
                      
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Name</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $name ?></strong>
                        <!-- <input type="text" class="form-control" name="name"  id="exampleInputName1" placeholder="" required=""> -->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Contact Number</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $mobile ?></strong>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1" style="color: #000;">Email</label>
                        <strong id="exampleInputName1" class="form-control"><?php echo $email ?></strong>
                      </div>
                       <div class="form-group">
                        <label for="exampleTextarea1" style="color: #000;">Company Name</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $company_name ?></strong>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">GST Number</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $gst_number ?></strong>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Document</label>
                           <a href="../gst_file/<?php echo $attch_file ?>"> <?php echo $attch_file ?> </a>
                      </div>

                   
                     
                      
                      
                    </form>
                 
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
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js?v=<?= $version ?>"></script>
    <script src="assets/js/todolist.js?v=<?= $version ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php 
  } ?>