<?php

$id = (isset($_GET['id']) ? $_GET['id'] : ''); 

require_once("./../include/db.php");

$sqlId = "SELECT `fname` from `employee` WHERE eid = '$id'";

$result = mysqli_query($conn,$sqlId);

$row = mysqli_fetch_array($result);
?>