<?php 
    require_once("./../include/db.php");
    
    $id = $_POST['empId'];
    $leaveReason = $_POST['leaveReason'];
    $sDate = $_POST['startDate'];
    $eDate = $_POST['endDate'];
    $leaveStatus = "0";

    echo $leaveReason . " " . $sDate . " " . $eDate . " " . $leaveStatus;

    $query = "INSERT INTO `applyLeave`(`eid`, `leaveReason`, `startDate`, `endDate`, `leaveStatus`) VALUES ('$id','$leaveReason','$sDate','$eDate','$leaveStatus')";

    $result = mysqli_query($conn, $query);

    if(($result) == 1){
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Leave Added Successfully')
        </SCRIPT>");

        header("Location: ./empWel.php?id=$id");

    }
    
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Insert Task')
        </SCRIPT>");
        header("Location: ./applyLeave.php?id=$id");
    }
    
?>