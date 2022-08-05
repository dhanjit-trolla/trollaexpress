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

<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('t49crx4w72ky');



document.getElementById('button').addEventListener("click", function() {
  document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
  document.querySelector('.bg-modal').style.display = "none";
});
</script>
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include("partials/_navbar.php") ?>
       <div class="main-panel">
          <div class="content-wrapper">

             <!-- ============================================================================= -->

             <div class="row ">
              
              <div class="col-lg-12 grid-margin stretch-card ">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title">Quoted Loads</h4>
                    <!-- <p class="card-description"> Add class <code>.table-hover</code>
                    </p> -->
                    <table class="table table-hover">
                   <thead>
                        <tr>
                         
                          <th>Material</th>
                          <th>Quantity</th>
                          <th>Pick-Up Address</th>
                          <th>Deliver Address</th>
                           <th>Truck Preference</th>
                          <th>Material Description</th>

                          <th>Rate</th>
                           <th>Truck Description</th>
                          
                         
                          
                        </tr>
                      </thead>
                 <tbody>
                   <?php        

   
                      $get_qload = "SELECT * FROM loads  inner join reg on loads.user_id = reg.user_id where loads.status='Quote' and reg.user='Transporter'";
            $run_qload = mysqli_query( $con, $get_qload );
            while ( $row_qload = mysqli_fetch_array( $run_qload ) ) {

              $m_name = $row_qload[ 'm_name' ];
              $quantity = $row_qload[ 'quantity' ];
              $p_add = $row_qload[ 'p_add' ];
             $d_add = $row_qload[ 'd_add' ];
              $t_prefer = $row_qload[ 't_prefer' ];
              $remark = $row_qload[ 'remark' ];
              $rate = $row_qload[ 'rate' ];
              $name = $row_qload[ 'name' ];
              $mobile = $row_qload[ 'mobile' ];
              $t_remark = $row_qload[ 't_remark' ];
              
                            
              
            echo"
            <tr>
              
             
              <td>$m_name</td>
              <td>$quantity</td>
              <td>$p_add</a></td>
              <td>$d_add</td>
              <td>$t_prefer</td>
              <td>$remark</td>
              <td>$rate</td>
              <td>$t_remark</td>
                         
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