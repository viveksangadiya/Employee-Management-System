<?php
require_once ('./include/db.php');

$email = $_POST['email'];
$password = $_POST['pwd'];

if($email == "admin@gmail.com"){
	$sqlA = "SELECT * from `alogin` WHERE email = '$email' AND pwd = '$password'";
	$resultA = mysqli_query($conn, $sqlA);

	if(mysqli_num_rows($resultA) == 1){
		header("Location: ./admin/adminDashboard.php");
	
	}else{
		header("Location:./index.html");
	}

}else{
	// employee
	$sqlE = "SELECT * FROM `employee` WHERE email = '$email' AND pwd = '$password'";
	$sqlId = "SELECT `eid` from `employee` WHERE email = '$email' AND pwd = '$password'";

	$resultE = mysqli_query($conn, $sqlE);
	$id = mysqli_query($conn , $sqlId);

	echo "\n";
	
	$empid = " ";
	if(mysqli_num_rows($resultE) == 1){
		
		$employee = mysqli_fetch_array($id);
		
		$empid = ($employee['eid']);
		
		header("Location: ./emp/empWel.php?id=$empid");
	}else{
		header("Location:./index.html");
	}
}
?>