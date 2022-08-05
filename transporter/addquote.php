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




<!-- ===================================== -->


 <div class="row">
               <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><B>QUOTE THE LOAD</B></h4>
                    <form class="form-sample" method="post">
                      <!-- <p class="card-description"> Personal info </p> -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                             <?php
  
              if ( isset( $_GET[ 'load_id' ] ) ) {
                $load_id = $_GET[ 'load_id' ];
                $get_load = "SELECT * FROM loads   WHERE load_id='$load_id'";
                $run_load = mysqli_query( $con, $get_load );
                while ( $row = mysqli_fetch_array( $run_load ) ) {
                  $load_id = $row['load_id'];        
                $user_id = $row['user_id'];
                $m_name = $row['m_name'];
                $quantity = $row['quantity'];
                $p_add = $row['p_add'];
                $city = $row['city'];
                $state = $row['state'];
                $country = $row['country'];
                $d_add = $row['d_add'];
               $city1 = $row['city1'];
                $state1 = $row['state1'];
                $country1 = $row['country1'];
                $rate = $row['rate'];
                $status= $row['status'];
                
                  
                }
              }
            ?>


                         <label class="col-sm-3 col-form-label">Quoted By</label>
                          <div class="col-sm-9">
                         <select id="selector1" name="user_id"  class="form-control">
              <?php
                $users = $_SESSION['mobile'];
                $get_user = "SELECT * FROM reg WHERE mobile ='$users'";
                $run_user = mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);        
                $user_id = $row['user_id'];
                $name = $row['name'];

                echo"
                <option value='$user_id'>$name</option>
                ";
                ?>  
             </select>
                            
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Material Name</label>
                            <div class="col-sm-9">
                             <input type="text" class="form-control" name="m_name" disabled="" id="exampleInputName1" placeholder="Material Name" value="<?php echo $m_name ?>" required="">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="quantity" disabled="" id="exampleInputName1" placeholder="Quantity" value="<?php echo $quantity ?>" required="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pick-Up Address</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="p_add" id="exampleInputName1" disabled="" placeholder="Pick-up Address" value="<?php echo $p_add,' ', $city, ' ', $state, ' ', $country ?>" required="">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Delivery Address</label>
                            <div class="col-sm-9">
                          <input type="text" class="form-control" name="d_add" id="exampleInputName1" disabled="" placeholder="Delivery Address" value="<?php echo $d_add, ' ' , $city1, ' ' , $state1, ' ' , $country1 ?>" required="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Rate</label>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" name="rate" id="exampleInputName1"  placeholder="Rate Per Ton" required="">
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      
                     
                      
                     
                      <div class="row">
                        
                        
                        
                             <button type="submit" class="btn btn-gradient-primary mr-2" name="submit">Update</button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                      </div>
                    </form>

                    <?php

                                        if (isset($_POST['submit'])) { 
                // $load_id = $_POST['load_id'];                                             
                $user_id = $_POST['user_id'] ;                          
                $m_name = $_POST['m_name'];
                $quantity = $_POST['quantity'];
                $p_add =$_POST['p_add'];
                $d_add = $_POST['d_add'];
                
                
                $rate = $_POST['rate'];
                $status='Quote';
                

                                            $update = "UPDATE loads SET rate='$rate', status='$status' WHERE load_id='$load_id' ";



                                            $run = mysqli_query($con, $update);

                                            if ($run) {

                                                echo "<script>alert('Quotation of $m_name updated successfully !!')</script>";
                                                echo "<script>window.open('index','_self')</script>";
                                               
                                            }
                                        }
                                        ?>
                        


                  </div>
                </div>
              </div>
              </div>


<!-- ========================================== -->

               <!-- ========================================================================= -->
            
        


           


            </div>
      <!-- page-body-wrapper ends -->

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