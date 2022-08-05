<?php
include("../includes/functions.php"); 

 
if(isset($_POST['submit'])){
	 
	 //getting the text data from the table
	$user_id = mysqli_real_escape_string($con,$_POST['user_id']);
	$m_name = mysqli_real_escape_string($con,$_POST['m_name']);
	 $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
	 $p_add = mysqli_real_escape_string($con,$_POST['p_add']);
	 $pincode = mysqli_real_escape_string($con,$_POST['pincode']);
	$city = mysqli_real_escape_string($con,$_POST['city']);
	 $state = mysqli_real_escape_string($con,$_POST['state']);
	 $country = mysqli_real_escape_string($con,$_POST['country']);
	 $d_add = mysqli_real_escape_string($con,$_POST['d_add']);
	 $pincode1 = mysqli_real_escape_string($con,$_POST['pincode1']);
	$city1 = mysqli_real_escape_string($con,$_POST['city1']);
	 $state1 = mysqli_real_escape_string($con,$_POST['state1']);
	 $country1 = mysqli_real_escape_string($con,$_POST['country1']);
	 $cur_date = mysqli_real_escape_string($con,$_POST['cur_date']);
	
     
     $status="New";
    
     
	 
	  
 

	 $insert = "INSERT INTO loads (user_id,m_name,quantity,p_add,pincode,city,state,country,d_add,pincode1,city1,state1,country1,status,cur_date) VALUES ('$user_id','$m_name','$quantity','$p_add','$pincode','$city','$state','$country','$d_add','$pincode1','$city1','$state1','$country1','$status', NOW())";
	 
	 $query = mysqli_query($con,$insert);
	 if($query){
		 echo "<script>alert(' Your Load is added   ')</script>";
		 //echo "<script>alert('Please Wait Until, Network User Verfication')</script>";
		 echo "<script>window.open('index','_self')</script>";
	 }
	 else{
		 echo "Enquiry Request Failed";
	 }
	 
 }
?>