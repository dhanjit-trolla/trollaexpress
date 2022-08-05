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
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css?v=<?= $version?>">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css?v=<?= $version?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
     <link rel="stylesheet" href="assets/css/style.css?v=<?= $version?>">
    <link rel="stylesheet" href="assets/css/table-resize.css?v=<?= $version?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/img/mono.png" />

     <!-- -------table----- -->

      <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>

    <!-- ------------end table------------- -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include("partials/_navbar.php") ?>
       <div class="main-panel">
          <div class="content-wrapper">

             <!-- ============================================================================= -->

              <div class="row">
              
              <div class="col-lg-12 grid-margin ">
                <div class="">
                  <div class="card-body">
                    <h4 class="card-title">MESSAGE</h4>
                    <!-- <p class="card-description"> Add class <code>.table-hover</code>
                    </p> -->
                    <table id="table-two-axis" class="two-axis badge-outline-light">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date</th>
                          <th>Subject</th>
                          <th>Message</th>
                          
                          
                          
                        </tr>
                      </thead>
                     <tbody>
                   <?php        

   
                      $get_myload = "SELECT * FROM contact ORDER BY contact_id DESC";
            $run_myload = mysqli_query( $con, $get_myload );
            while ( $row_myload = mysqli_fetch_array( $run_myload ) ) {

              $contact_id = $row_myload[ 'contact_id' ];
              $name = $row_myload[ 'name' ];
              $email = $row_myload[ 'email' ];
              $cur_date = $row_myload['cur_date'];
              $subject = $row_myload[ 'subject' ];
              $message = $row_myload[ 'message' ];
              
              
                            
              
            echo"
            <tr>
              
              <td> $name</td>
              <td>$email</td>
              <td>$cur_date</td>
              <td>$subject</td>
              <td>$message</td>
              
           
                           
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

            </div><!-- page-body-wrapper ends -->

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
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js?v=<?= $version?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js?v=<?= $version?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js?v=<?= $version?>"></script>
    <script src="assets/js/hoverable-collapse.js?v=<?= $version?>"></script>
    <script src="assets/js/misc.js?v=<?= $version?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js?v=<?= $version?>"></script>
    <script src="assets/js/todolist.js?v=<?= $version?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php 
  } ?>