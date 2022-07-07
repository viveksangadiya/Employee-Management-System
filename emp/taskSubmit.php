<?php

require_once ("./../include/db.php");
$pid = $_GET['pid'];
$id = $_GET['id'];
$date = date('Y-m-d');

$sql = "UPDATE `task` SET `status`='1' WHERE tid = '$pid';";
$result = mysqli_query($conn , $sql);

header("Location: ./viewEmployeeTask.php?id=$id");

?>