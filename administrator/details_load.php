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

            if ( isset( $_GET[ 'load_id' ] ) ) {
              $load_id = $_GET[ 'load_id' ];
              $get_load= "SELECT * FROM loads  inner join reg on loads.user_id = reg.user_id where reg.user='Transporter' and loads.load_id='$load_id'";
              $run_load= mysqli_query( $con, $get_load );
              while ( $row_load= mysqli_fetch_array( $run_load) ) {
                $load_id = $row_load[ 'load_id' ];
              $m_name = $row_load[ 'm_name' ];
              $quantity = $row_load[ 'quantity' ];
              $p_add = $row_load[ 'p_add' ];
             $d_add = $row_load[ 'd_add' ];
              $t_prefer = $row_load[ 't_prefer' ];
              $remark = $row_load[ 'remark' ];
              $rate = $row_load[ 'rate' ];
              $name = $row_load[ 'name' ];
              $mobile = $row_load[ 'mobile' ];
              $t_remark = $row_load[ 't_remark' ];
                
              }
            }
            ?>

             <!-- ============================================================================= -->

             <div class="row">

             <div class="col-12 grid-margin stretch-card">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title">LOADS UPDATE</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="#" method="post">
                      

                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Load ID</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $load_id ?></strong>
                        
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Transporter Name</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $name ?></strong>
                        
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Transporter Number</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $mobile ?></strong>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Material Name</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $m_name ?></strong>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Material Quantity</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $quantity ?></strong>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1" style="color: #000;">Pick-up Address</label>
                        <strong id="exampleInputName1" class="form-control"><?php echo $p_add ?></strong>
                      </div>
                       <div class="form-group">
                        <label for="exampleTextarea1" style="color: #000;">Deliver Address</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $d_add ?></strong>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Truck Preference</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $t_prefer ?></strong>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Rate per Ton</label>
                          <strong id="exampleInputName1" class="form-control"><?php echo $rate ?></strong>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1" style="color: #000;">Truck Description</label>
                         <strong id="exampleInputName1" class="form-control"><?php echo $t_remark ?></strong>
                        
                      </div>

                   
                      <div class="form-group">
                        <label for="exampleTextarea1" style="color: #000;">Status</label>
                        <select  name="status" class="form-control" required >
                <option>Please Update Status----------------</option>
                <option value="Confirm">Confirm</option>
                <option value="Reject">Rejected</option>
                <option value="Complete">Complete</option>
              </select>
                        
                      </div>
                      <button type="submit" name="update" class="btn btn-gradient-primary btn-icon-text">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i> UPDATE </button>
                      
                      
                    </form>
                    <?php

          if ( isset( $_POST[ 'update' ] ) ) {
            $status = $_POST[ 'status' ];

            $update = "UPDATE loads SET status='$status' WHERE load_id='$load_id' ";

            $run = mysqli_query( $con, $update );

            if ( $run ) {

              echo "<script>alert(' Load No. $load_id Status Updated!!')</script>";
              echo "<script>window.open('index','_self')</script>";

            }
          }
          ?>
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