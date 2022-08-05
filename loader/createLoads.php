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
<script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 5000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#quantity" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#quantity" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include("partials/_navbar.php") ?>
       <div class="main-panel">
          <div class="content-wrapper">

               <!-- ========================================================================= -->


               <div class="row">
               <div class="col-12">
                <div class="card badge-outline-light">
                  <div class="card-body">
                    <h4 class="card-title" style="text-transform: uppercase;"><b>Create Your Load</b></h4><br>
                    <form class="form-sample" method="post">
                      <!-- <p class="card-description"> Personal info </p> -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Load Created By</label>
                            <div class="col-sm-9">
                         <select id="selector1" name="user_id" class="form-control">
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
                            <label class="col-sm-3 col-form-label" style="color: #000;">Material Name</label>
                            <div class="col-sm-3">
                               
                         <input type="radio" id="exampleInputName1"  name="m_name" value="Coal">
  <label for="exampleInputName1" style="color: #000;"> Coal</label><br>
  <input type="radio"  id="exampleInputName1" name="m_name" value="Carbon">
  <label for="exampleInputName1" style="color: #000;"> Carbon</label> <br>

                            </div>
                            <div class="col-sm-3">
                               
                         <input type="radio" id="exampleInputName1"  name="m_name" value="Rice">
  <label for="exampleInputName1" style="color: #000;"> Rice</label><br>
  <input type="radio"  id="exampleInputName1" name="m_name" value="Cement"/>
  <label for="exampleInputName1" style="color: #000;"> Cement</label> <br>
                            </div>
                            <div class="col-sm-3">
                               
                         <input type="radio" id="exampleInputName1"  name="m_name" value="Ply">
  <label for="exampleInputName1" style="color: #000;"> Ply</label><br>
  <input type="radio"  id="exampleInputName1" name="m_name" value="Steel" >
  <label for="exampleInputName1" style="color: #000;"> Steel</label> <br>

                            </div>
                            
                            
                          
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="quantity" class="col-sm-3 col-form-label" style="color: #000;">Quantity:</label>
                            
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="quantity" id="exampleInputName1"  required="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                             <label class="col-sm-3 col-form-label" style="color: #000;"></label>
                            <div class="col-sm-9">
                              <!-- <input type="text" class="form-control" name="m_name" placeholder="Any Other Material" /> -->
                            </div> 
                          </div>
                        </div>
                      </div><br>
                     
                      <div class="row">
                        <div class="col-md-6">
                           <p style="color: #000; text-transform: uppercase;"><b>Pick-Up Address</b></p>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Address</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="p_add" id="exampleTextarea1" rows="2" required=""></textarea><br>
                              </div><br>
                              <label class="col-sm-3 col-form-label" style="color: #000;">Pincode</label>
                       <div class="col-sm-6"> <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode" required="" autocomplete="new-password" ></div>
                       <div class="col-sm-3 "><input type="button" class="btn btn-gradient-primary mr-2" value="Go" onclick="get_details()"></div><br>
                         <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-3"> 
                        <input type="text" class="form-control" name="city" id="city"  placeholder="City" required="">
                      </div>
                       
                       <div class="col-sm-3">
                        <input type="text" class="form-control" name="state" id="state"  placeholder="State" required="">
                      </div>
                       
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="country" id="exampleInputName1"  value="India" required="">
                      </div>
                            
                          </div>
                        </div>
                          <div class="col-md-6">
                        <p style="color: #000; text-transform: uppercase;"><b>Deliver Address</b></p>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" style="color: #000;">Address</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" name="d_add" id="exampleTextarea1" rows="2" required=""></textarea><br>
                              </div><br>
                              <label class="col-sm-3 col-form-label" style="color: #000;">Pincode</label>
                       <div class="col-sm-6"> <input type="text" class="form-control " name="pincode1" id="pincode1" placeholder="Pincode" required="" autocomplete="new-password" ></div>
                       <div class="col-sm-3 "><input type="button" class="btn btn-gradient-primary mr-2" value="Go" onclick="get_detailss()"></div><br>
                         <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-3"> 
                        <input type="text" class="form-control" name="city1" id="city1"  placeholder="City" required="">
                      </div>
                       
                       <div class="col-sm-3">
                        <input type="text" class="form-control" name="state1" id="state1"  placeholder="State" required="">
                      </div>
                       
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="country1" id="exampleInputName1"  value="India" required="">
                      </div>
                            
                          </div>
                        </div>
                      </div><br>

                      <div class="row">
                       <!--  -->
                             <button type="submit" class="btn btn-gradient-primary mr-2" name="submit" >Submit</button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                          <?php include("insert_loads")?>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
              </div>






 <!-- ===================================================================================================== -->
          


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
    <script>
function get_details(){
  var pincode=jQuery('#pincode').val();
  if(pincode==''){
    jQuery('#city').val('');
    jQuery('#state').val('');
  }else{
    jQuery.ajax({
      url:'get.php',
      type:'post',
      data:'pincode='+pincode,
      success:function(data){
        if(data=='no'){
          alert('Wrong Pincode');
          jQuery('#city').val('');
          jQuery('#state').val('');
        }else{
          var getData=$.parseJSON(data);
          jQuery('#city').val(getData.city);
          jQuery('#state').val(getData.state);
        }
      }
    });
  }
}
</script>
<script>
function get_detailss(){
  var pincode1=jQuery('#pincode1').val();
  if(pincode1==''){
    jQuery('#city1').val('');
    jQuery('#state1').val('');
  }else{
    jQuery.ajax({
      url:'getd.php',
      type:'post',
      data:'pincode1='+pincode1,
      success:function(data){
        if(data=='no'){
          alert('Wrong Pincode');
          jQuery('#city1').val('');
          jQuery('#state1').val('');
        }else{
          var getData=$.parseJSON(data);
          jQuery('#city1').val(getData.city1);
          jQuery('#state1').val(getData.state1);
        }
      }
    });
  }
}
</script>
  </body>
</html>
<?php 
  } ?>