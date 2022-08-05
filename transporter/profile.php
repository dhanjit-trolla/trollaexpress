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


              <?php

            $users = $_SESSION['mobile'];
                $get_user = "SELECT * FROM reg WHERE mobile='$users'";
                $run_user = mysqli_query($con,$get_user);
                $row=mysqli_fetch_array($run_user);        
                $user_id = $row['user_id'];
                $user = $row['user'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile =$row['mobile'];
                $password = $row['password'];
                $company_name = $row['company_name'];
                $gst_number = $row['gst_number'];
                $attch_file = $row['attch_file'];
                $alt_num = $row['alt_num'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $material = $row['material'];
                $partner = $row['partner'];
                $add1 = $row['add1'];
                $add2 = $row['add2'];
                $state = $row['state'];
                $city = $row['city'];
                $postcode = $row['postcode'];
                $country = $row['country'];
                $t_trucks = $row['t_trucks'];
                $t_drivers = $row['t_drivers'];

                

            ?>


             <div class="row">
               <div class="col-12">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title" style="text-transform: uppercase; ">Personal Information</h4>
                    <form class="form-sample" method="post">
                      <!-- <p class="card-description"> Personal info </p> -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Company Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="company_name" value="<?php echo $company_name ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Full Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="<?php echo $name ?>" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" name="email" value="<?php echo $email ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="password" value="<?php echo $password ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Contact Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="mobile" value="<?php echo $mobile ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Alternate Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="alt_num" value="<?php echo $alt_num ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="gender" >
                                <option selected="<?php echo $gender ?>">Male</option>
                                 <option selected="<?php echo $gender ?>">Female</option> 
                                <!-- <?php echo $gender?>; -->
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Date of Birth</label>
                            <div class="col-sm-9">
                              <input type="Date" class="form-control" name="dob" placeholder="dd/mm/yyyy" value="<?php echo $dob ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Total Trucks</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="material" placeholder="Total Trucks you have" value="<?php echo $t_trucks ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Total Drivers</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="partner" placeholder="Partner with" value="<?php echo $t_drivers ?>"/>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                     
                     
                      <!-- <p class="card-description" style="text-transform: uppercase; color: #000;"> Address </p> -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Address </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="add1" value="<?php echo $add1 ?>"/>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="postcode" value="<?php echo $postcode ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="city" value="<?php echo $city ?>"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="state" value="<?php echo $state ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                         
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="country" value="<?php echo $country ?>">
                                <option selected="<?php echo $country=='USA'?true:false ?>">USA</option>
                                <option selected="<?php echo $country=='Italy'?true:false ?>">Italy</option>
                                <option selected="<?php echo $country=='Russia'?true:false ?>">Russia</option>
                                <option selected="<?php echo $country=='UN'?true:false ?>">UN</option>
                                <option selected="<?php echo $country=='India'?true:false ?>">India</option>
                              </select>
                            </div>
                          </div>
                        </div>
                            
                      <!-- <button class="btn btn-light">Cancel</button> -->
                      </div>
                       <button type="submit" class="btn btn-gradient-primary mr-2" name="submit">Update</button>
                    </form>


                         <?php

                                        if (isset($_POST['submit'])) {                      
                                           
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile =$_POST['mobile'];
                $password = $_POST['password'];
                $company_name = $_POST['company_name'];
                 $t_trucks = $_POST['t_trucks'];
                $t_drivers = $_POST['t_drivers'];
                
                $alt_num = $_POST['alt_num'];
                $gender = $_POST['gender'];
                $dob = $_POST['dob'];
                $material = $_POST['material'];
                $partner = $_POST['partner'];
                $add1 = $_POST['add1'];
                $add2 = $_POST['add2'];
                $state = $_POST['state'];
                $city = $_POST['city'];
                $postcode = $_POST['postcode'];
                $country = $_POST['country'];

                                            $update = "UPDATE reg SET name='$name', email='$email', password='$password', mobile='$mobile', company_name='$company_name', alt_num='$alt_num', gender='$gender', dob='$dob', material='$material', t_trucks='$t_trucks', t_drivers='$t_drivers', partner='$partner', add1='$add1', add2='$add2', state='$state', city='$city', postcode='$postcode', country='$country' WHERE user_id='$user_id' ";



                                            $run = mysqli_query($con, $update);

                                            if ($run) {

                                                echo "<script>alert('$name profile is updated successfully !!')</script>";
                                                echo "<script>window.open('index','_self')</script>";
                                               
                                            }
                                        }
                                        ?>


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