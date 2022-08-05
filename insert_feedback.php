<?php
include_once("includes/functions.php");

 
if(isset($_POST['submit'])){
   
   //getting the text data from the table
   $name = mysqli_real_escape_string($con,$_POST['name']);
   $email = mysqli_real_escape_string($con,$_POST['email']);
  $feedback = mysqli_real_escape_string($con,$_POST['feedback']);
   $insert = "INSERT INTO feedback (name,email,feedback) VALUES ('$name','$email','$feedback')";
   
   $query = mysqli_query($con,$insert);
   if($query){
     echo "<script>alert('Thank You $name for valuable feedback!! We will get back to you shortly')</script>";
     //echo "<script>alert('Please Wait Until, Network User Verfication')</script>";
     echo "<script>window.open('feedback','_self')</script>";
   }
   else{
     echo "Feedback Request Failed";
   }
   
 }
?>