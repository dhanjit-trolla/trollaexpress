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
    

    <style>
.col-container {
  display: table;
  width: 100%;
}
.col {
  display: table-cell;
  padding: 30px;
}
</style>
<script >
  $('.box').matchHeight();
</script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include("partials/_navbar.php") ?>
       <div class="main-panel">
          <div class="content-wrapper">

            <!-- ============================================================================= -->

             <div class="rows">

              <!-- ------------------filter start--------------- -->


                <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <!-- <div class="card-header">
                        <h4><b>FILTER</b></h4>
                    </div> -->
                    <div class="card-body" style="background-color: #f2edf3;">

                        <form action="" method="GET">
                            <div class="row ">
                             
                                <div class="col-md-6" >
                                    <label for="">Start Quantity</label>
                                    <input type="text" name="start_quantity" value="<?php if(isset($_GET['start_quantity'])){echo $_GET['start_quantity']; }else{echo "0";} ?>" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">End Quantity</label>
                                    <input type="text" name="end_quantity" value="<?php if(isset($_GET['end_quantity'])){echo $_GET['end_quantity']; }else{echo "5000";} ?>" class="form-control">
                                </div>
                                
                                
                                
                            </div>
                            <div class="">
                                     <label for=""> </label><br/><br/>

                                    <button type="submit" class="btn badge-outline-light" style="background-color: #ff4a37; color: #fff;">Filter</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4><b>LOAD DETAILS</b></h4>
                    </div> -->
                    <div class="card-body" style="background-color: #f2edf3;">
                        <div class="row" >
                        <?php  
                        include("../includes/functions.php"); 

                        if(isset($_GET['start_quantity']) && isset($_GET['end_quantity']))
                        {
                            
                            $startquantity = $_GET['start_quantity'];
                            $endquantity = $_GET['end_quantity'];


                            $query = "SELECT * FROM loads WHERE quantity BETWEEN $startquantity AND $endquantity ";
                        }
                        else
                        {
                          
                            $query ="SELECT * FROM loads  where status='New' ORDER BY load_id DESC";
                          
                           
                            
                        }
                        
                        $query_run = mysqli_query($con, $query);
                          

                     

                        if(mysqli_num_rows($query_run) > 0)
                        {
                          
                            foreach($query_run as $items)
                            {
                                
                                ?>
                                
                                <div class="col-md-4 mb-3 col-container " >
                                <div class="badge-outline-dark p-2 col" style="background-color: #fff;"><br>
                                  <h6 ><b style="color: #ff4a37; text-transform: uppercase; font-size: 16px;"><?php echo  $items['m_name'] ; ?></b><b style="color:#000; text-transform: uppercase; float: right;" >ID : TROLLA<?php echo  $items['load_id'] ;?> <a href="https://api.whatsapp.com/send?phone=+917099033364" target="_blank" style=" color: green;" class="mdi mdi-whatsapp"></a> </b> </h6><br>
                                    
                                    <h6 ><b style="color:#000; text-transform: uppercase; font-size: 16px;" > <?php echo $items['quantity']; ?>  MT </b><b style="color:#000; text-transform: uppercase; float: right;"><?php echo $items['cur_date']; ?></b></h6><br>
                                    <h6><b style="color:#000; text-transform: uppercase;">Pick-Up Address :</b> <?php echo $items['city'], ' , ' ,$items['state']; ?></h6><br>
                                    
                                     <h6><b style="color:#000; text-transform: uppercase;">Deliver Address :</b>  <?php echo $items['city1'], ' , ' ,$items['state1']; ?></h6>
                                     <hr>
                                     <a href='addquote?load_id=<?php echo $items['load_id'] ?>'  style="color:#ff4a37; float: left;"><button type="submit" class="btn badge-outline-light" style="background-color: #ff4a37; color: #fff; " value="Add Quote">ADD QUOTE</button> </a><!-- < a href='view_details?load_id=<?php echo $items['load_id'] ?>'  ><button type="submit" class="btn badge-outline-darken" style="background-color: transparent; color: #000; float: right;" value="View Details">VIEW DETAILS</button> </a> -->
                                    
                                    <!-- <a href='view_details?load_id=<?php echo $items['load_id'] ?>'  ><button type="submit" class="btn" style="background-color: transparent; color: #000; " value="View Details">VIEW DETAILS</button> </a> -->
                                </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }
                      
                        ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


                <!-- ------------------filter End--------------- -->
              <!-- ---------- new loads list---------------- -->
              <!-- <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My Loads</h4>
                    
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Material</th>
                          <th>Quantity</th>
                          <th>Pick-up Address</th>
                          <th>Deliver Address</th>
                         
                          <th>Action</th>
                        </tr>
                      </thead>
                     <tbody>
                   <?php        

   
                      $get_myload = "SELECT * FROM loads  inner join reg on loads.user_id = reg.user_id where loads.status='New'";
            $run_myload = mysqli_query( $con, $get_myload );
            while ( $row_myload = mysqli_fetch_array( $run_myload ) ) {

              $load_id = $row_myload[ 'load_id' ];
              $m_name = $row_myload[ 'm_name' ];
              $quantity = $row_myload[ 'quantity' ];
              $p_add = $row_myload[ 'p_add' ];
              $d_add = $row_myload[ 'd_add' ];
             
                            
              
            echo"
            <tr>
              
              <td>$m_name</td>
              <td>$quantity</td>
              <td>$p_add</td>
              <td>$d_add</td>
            
              <td> <a  href='addquote?load_id=$load_id' style='color:#ff4a37;'>+ Add Quote </a></td>             
            </tr>
            
            ";
            }
            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> -->
              <!-- ---------------------new load list end-------------- -->
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
     <script src="https://code.jquery.com/jquery-3.5.1.js?v=<?= $version ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js?v=<?= $version ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php 
  } ?>