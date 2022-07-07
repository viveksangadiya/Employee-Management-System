<?php

require_once("./../include/db.php");

$lid = $_GET['lid'];
$id = $_GET['id'];

$query = "UPDATE `applyLeave` SET `leaveStatus`='1' WHERE `lid` = '$lid' AND `eid` = '$id'";

$result = mysqli_query($conn, $query);

if(($result) == 1){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Leave Approved')
    window.location.href='./viewEmpLeave.php';
    </SCRIPT>");
}

?>