<?php
require_once("./../include/db.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];
$department = $_POST['department'];
$state = $_POST['state'];

// echo $fname . ' ' . $lname . ' ' . $email . ' ' . $password . ' ' . $mobile . ' ' . $department . ' ' . $state . ' ' . $password . ' ' . $mobile . ' ' . $department . ' ' . $state ;

$query = "INSERT INTO `employee`(`fname`, `lname`, `email`, `pwd`, `mobile`, `age`, `department`, `state`) VALUES ('$fname', '$lname', '$email','$password', '$mobile', '$age','$department', '$state')";

$result = mysqli_query($conn, $query);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='./adminDashboard.php';
    </SCRIPT>");
    // header("Location: ./adminDashboard.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Registere')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>