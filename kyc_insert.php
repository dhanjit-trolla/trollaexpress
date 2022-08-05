   <?php
   include_once("includes/functions.php");

           if ( isset( $_POST[ 'submit' ] ) ) {
           
        $name = $_POST['name'];
    
    $industry = $_POST['industry'];
    $route = $_POST['route'];
    $company_name = $_POST['company_name'];
    $gst_number = $_POST['gst_number'];
    $pan_number = $_POST['pan_number'];
      $status = "Unverified";

   //Image Rendering    
      $attch_file = $_FILES['attch_file']['name'];
    
      
    //Image Rendering       
        $tmp_img = $_FILES['attch_file']['tmp_name'];
    
      
   //uploading image to it folder
      move_uploaded_file($tmp_img, "gst_file/". $attch_file);

      //Image Rendering    
      $attch_file1 = $_FILES['attch_file1']['name'];
    
      
    //Image Rendering       
        $tmp_img1 = $_FILES['attch_file1']['tmp_name'];
    
      
   //uploading image to it folder
      move_uploaded_file($tmp_img1, "pan_file/". $attch_file1);


        $update = "UPDATE reg SET name='$name',industry='$industry',route='$route', company_name='$company_name', gst_number='$gst_number', pan_number='$pan_number', status='$status', attch_file='$attch_file', attch_file1='$attch_file1' WHERE user_id='$user_id' ";

        $run = mysqli_query( $con, $update );

            if ( $run ) {

              echo "<script>alert(' KYC updated of $name is successfull !! Wait 24 hours for Verification !!  ')</script>";
     //echo "<script>alert('Please Wait Until, Network User Verfication')</script>";
     echo "<script>window.open('logout.php','_self')</script>";

            }
          }
          ?>