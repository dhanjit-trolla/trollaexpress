<?php
include_once("includes/functions.php");

 
if(isset($_POST['submit'])){
	 
	 //getting the text data from the table
	// $user_id = $_POST['user_id']);
	$user = mysqli_real_escape_string($con,$_POST['user']);
	 // $name = mysqli_real_escape_string($con,$_POST['name']);
	 // $email = mysqli_real_escape_string($con,$_POST['email']);
	 $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
	 $password = mysqli_real_escape_string($con,$_POST['password']);
	 // $company_name = mysqli_real_escape_string($con,$_POST['company_name']);
	 // $gst_number = mysqli_real_escape_string($con,$_POST['gst_number']);
     // $status="Waiting";
      // $attach_file = mysqli_real_escape_string($con,$_POST['attach_file']);

   //Image Rendering    
   //   $attch_file = $_FILES['attch_file']['name'];
    
      
   //  //Image Rendering       
   //    $tmp_img = $_FILES['attch_file']['tmp_name'];
    
      
   // //uploading image to it folder
   //   move_uploaded_file($tmp_img, "gst_file/". $attch_file);
     
	 
	  
 

	 $insert = "INSERT INTO reg (user,mobile,password) VALUES ('$user','$mobile','$password')";
	 
	 $query = mysqli_query($con,$insert);
	 if($query){
		 echo "<script>alert(' You are registered as $user!! Please Update Your KYC after Login!!  ')</script>";
		 //echo "<script>alert('Please Wait Until, Network User Verfication')</script>";
		 echo "<script>window.open('login','_self')</script>";
	 }
	 else{
		 echo "Enquiry Request Failed";
	 }
	 
 }
?>