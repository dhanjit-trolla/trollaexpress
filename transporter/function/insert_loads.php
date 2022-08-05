<?php
$con = mysqli_connect("localhost","root","","trollaexpress");

 
if(isset($_POST['submit'])){
	 
	 //getting the text data from the table
	$user_id = mysqli_real_escape_string($con,$_POST['user_id']);
	$m_name = mysqli_real_escape_string($con,$_POST['m_name']);
	 $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
	 $p_add = mysqli_real_escape_string($con,$_POST['p_add']);
	 $d_add = mysqli_real_escape_string($con,$_POST['d_add']);
	 $t_prefer = mysqli_real_escape_string($con,$_POST['t_prefer']);
	 $p_contact = mysqli_real_escape_string($con,$_POST['p_contact']);
	 $remark = mysqli_real_escape_string($con,$_POST['remark']);
     
     $status="New";
    
     
	 
	  
 

	 $insert = "INSERT INTO loads (user_id,m_name,quantity,p_add,d_add,t_prefer,p_contact,remark,status) VALUES ('$user_id','$m_name','$quantity','$p_add','$d_add','$t_prefer','$p_contact','$remark','$status')";
	 
	 $query = mysqli_query($con,$insert);
	 if($query){
		 echo "<script>alert(' Your Load is added   ')</script>";
		 //echo "<script>alert('Please Wait Until, Network User Verfication')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	 }
	 else{
		 echo "Enquiry Request Failed";
	 }
	 
 }
?>