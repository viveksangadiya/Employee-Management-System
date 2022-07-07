<?php
require_once("./../include/db.php");

$empId = $_POST['empId'];
$taskName = $_POST['taskName'];
$dueDate = $_POST['dueDate'];
$status = "0";

// echo $empId . " " . $taskName . " " . $dueDate . " " . $status;

$query = "INSERT INTO `task`( `eid`, `pname`, `dueDate`, `status`) VALUES ('$empId', '$taskName', '$dueDate', '$status')";

$result = mysqli_query($conn, $query);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Assign Task Successfully')
    window.location.href='./viewTaskStatus.php';
    </SCRIPT>");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Insert Task')
    window.location.href='./assignTask.php';
    </SCRIPT>");
}

?>