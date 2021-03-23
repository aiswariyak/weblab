<?php
include "connection.php";
	$id = $_REQUEST['id'];
	//$result = mysqli_query($con, "UPDATE `studenttbl` SET status='1' WHERE studid=$id");
	// //$result1 = mysqli_query($con, "UPDATE `login` SET status='1' WHERE studid=$id");
 //    UPDATE `studenttbl` SET `studid`=[value-1],`name`=[value-2],`Admission_no`=[value-3],`dob`=[value-4],`gender`=[value-5],`phone`=[value-6],`email`=[value-7],`dept`=[value-8],`password`=[value-9],`status`=[value-10] WHERE 1
 //    $re1="update studenttbl set status='1' where studid='$id'";
    $mysql=mysqli_query($con," UPDATE `studenttbl` SET `status`=1 WHERE studid=$id");
    $mysql1=mysqli_query($con," UPDATE `login` SET `status`=1 WHERE studid=$id");
    if($mysql)
    {
    	echo "Approved";
    }
    else
    {
    	echo "Error:".$mysql."<br".mysqli_error($con);
    }
	header("Location:request.php");
?>
