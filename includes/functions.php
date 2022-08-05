<?php
$serverName = "localhost";
$database = "u820196892_t2";
$userName = "u820196892_mac";
$password = "B1r]RnhbH";
$con = mysqli_connect($serverName, $userName, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



 //function for getting uploader
// function getEmployee(){
	
// 	global $con;
	
// 	$get_emp = "SELECT * FROM employee";
	
// 	$run_emp = mysqli_query($con,$get_emp);
	
// 	while($row=mysqli_fetch_array($run_emp)){
// 		$emp_id = $row['emp_id'];
// 		$emp_name = $row['emp_name'];
// 		$emp_dept = $row['emp_dept'];
		
// 		echo "<option value='$emp_id'>$emp_name ($emp_dept)</option>";
// 		}
// }
?>