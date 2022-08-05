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
    <title>Admin Dashboard</title>
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
    <link rel="stylesheet" href="assets/css/table-resize.css?v=<?= $version ?>">
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
            <div class="row" id="proBanner">
              <!-- <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
                  <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div> -->
            </div>
            <div class="page-header">
              <h3 class="page-title" style="color: #000;">
                <span class="page-title-icon  text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> <?php     

            $reg = $_SESSION['mobile'];
            $get_reg = "SELECT * FROM Admin WHERE mobile='$reg'";
            $run_reg = mysqli_query($con,$get_reg);
            $row=mysqli_fetch_array($run_reg);        
            $admin_id = $row['admin_id'];
            $user = $row['user'];echo " Hi $user, Welcome to TROLLA Admin Dashboard";
            ?>
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i  class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">

              <?php     

            $admin = $_SESSION['mobile'];
            $get_admin = "SELECT * FROM admin WHERE mobile='$admin'";
            $run_admin = mysqli_query($con,$get_admin);
            $row=mysqli_fetch_array($run_admin);        
            $admin_id = $row['admin_id'];
            $admin_name = $row['user'];
    
            $tlt_new = "SELECT * FROM loads where status='New'";
            $run_new = mysqli_query($con,$tlt_new);
            $new = mysqli_num_rows($run_new); 
    
            $tlt_quote = "SELECT * FROM loads  WHERE status='Quote'";
            $run_quote = mysqli_query($con,$tlt_quote);
            $quote = mysqli_num_rows($run_quote); 
    
            $tlt_confirm = "SELECT * FROM loads  WHERE status='Confirm'";
            $run_confirm = mysqli_query($con,$tlt_confirm);
            $confirm = mysqli_num_rows($run_confirm);

            $tlt_complete ="SELECT * FROM loads  WHERE status='Complete'";
            $run_complete = mysqli_query($con,$tlt_complete);
            $complete = mysqli_num_rows($run_complete); 
            
            $tlt_transporter ="SELECT * FROM reg  WHERE user='Transporter' And status='Verified'";
            $run_transporter = mysqli_query($con,$tlt_transporter);
            $transporter = mysqli_num_rows($run_transporter);

            $tlt_shipper ="SELECT * FROM reg  WHERE user='Loader' And status='Verified'";
            $run_shipper = mysqli_query($con,$tlt_shipper);
            $shipper = mysqli_num_rows($run_shipper);

            echo "

              <div class='col-md-4 stretch-card grid-margin'>
                <div class='card bg-gradient-danger card-img-holder text-white'>
                  <div class='card-body'>
                     <br>
                    <h4 class='font-weight-normal mb-3'>New Loads <b class=' mdi-24px float-right'>$new</b>
                    </h4>
                   
                  </div>
                </div>
              </div>
              <div class='col-md-4 stretch-card grid-margin'>
                <div class='card bg-gradient-info card-img-holder text-white'>
                  <div class='card-body'>
                     <br>
                    <h4 class='font-weight-normal mb-3' >Quoted Loads <b class=' mdi-24px float-right'>$quote</b></h4>
                    
                  </div>
                </div>
              </div>
              <div class='col-md-4 stretch-card grid-margin'>
                <div class='card bg-gradient-success card-img-holder text-white'>
                  <div class='card-body'>
                     <br>
                    <h4 class='font-weight-normal mb-3'>Confirmed Loads <b class=' mdi-24px float-right'>$confirm</b>
                    </h4>
                   
                  </div>
                </div>
              </div>
              
              <div class='col-md-4 stretch-card grid-margin'>
                <div class='card bg-gradient-info card-img-holder text-white'>
                  <div class='card-body'>
                     <br>
                    <h4 class='font-weight-normal mb-3'>Completed Loads <b class=' mdi-24px float-right'>$complete</b>
                    </h4>
                   
                  </div>
                </div>
              </div>
              <div class='col-md-4 stretch-card grid-margin'>
                <div class='card bg-gradient-danger card-img-holder text-white'>
                  <div class='card-body'>
                     <br>
                    <h4 class='font-weight-normal mb-3'>Total Transporter <b class=' mdi-24px float-right'>$transporter</b>
                    </h4>
                  
                  </div>
                </div>
              </div>
              <div class='col-md-4 stretch-card grid-margin'>
                <div class='card bg-gradient-success card-img-holder text-white'>
                  <div class='card-body'>
                     <br>
                    <h4 class='font-weight-normal mb-3'>Total Shipper <b class=' mdi-24px float-right'>$shipper</b>
                    </h4>
                  
                  </div>
                </div>
              </div>
              ";
            ?>   
            </div>
          <!--   =================================================================================== -->


              <div class="row">
              
              <div class="col-lg-12 grid-margin ">
                <div class="">
                  <div class="card-body">
                    <h4 class="card-title">LOADS</h4>
                    <!-- <p class="card-description"> Add class <code>.table-hover</code>
                    </p> -->
                    <table id="table-two-axis" class="two-axis badge-outline-light">
                      <thead>
                        <tr>
                          <th>Material</th>
                          <th>Quantity</th>
                          <th>Pick-up</th>
                          <th>Deliver</th>
                          <th>Status</th>
                          
                          
                        </tr>
                      </thead>
                     <tbody>
                   <?php        

   
                      $get_myload = "SELECT * FROM loads";
            $run_myload = mysqli_query( $con, $get_myload );
            while ( $row_myload = mysqli_fetch_array( $run_myload ) ) {

              $load_id = $row_myload[ 'load_id' ];
              $m_name = $row_myload[ 'm_name' ];
              $quantity = $row_myload[ 'quantity' ];
              $p_add = $row_myload[ 'p_add' ];
              $d_add = $row_myload[ 'd_add' ];
              $status = $row_myload['status'];
              
                            
              
            echo"
            <tr>
              
              <td> <a  href='myLoads' style='color:#ff4a37;'>$m_name</a></td>
              <td>$quantity</td>
              <td>$p_add</td>
              <td>$d_add</td>
              <td>$status</td>
           
                           
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

         

          
         </div>
      <!-- page-body-wrapper ends -->
         <!--  =============================================================================================== -->
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © trollaexpress.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="" target="_blank" style="color: #ff4a37;">Stella Express & Logistics Pvt Ltd. </a> from trollaexpress.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
    
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