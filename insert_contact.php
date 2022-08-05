<?php
include_once("includes/functions.php");

 
if(isset($_POST['submit'])){
   
   //getting the text data from the table
   $name = mysqli_real_escape_string($con,$_POST['name']);
   $email = mysqli_real_escape_string($con,$_POST['email']);
    $subject =mysqli_real_escape_string($con,$_POST['subject']);
    $message = mysqli_real_escape_string($con,$_POST['message']);
    $cur_date = mysqli_real_escape_string($con,$_POST['cur_date']);    
   $insert = "INSERT INTO contact (name,email,subject,message,cur_date) VALUES ('$name','$email','$subject','$message',NOW())";
   
   $query = mysqli_query($con,$insert);
   if($query){
     echo "<script>alert('Thank You $name for your response!! We will get back to you shortly ')</script>";
     //echo "<script>alert('Please Wait Until, Network User Verfication')</script>";
     echo "<script>window.open('contact','_self')</script>";
   }
   else{
     echo "Enquiry Request Failed";
   }
   
 }
?>