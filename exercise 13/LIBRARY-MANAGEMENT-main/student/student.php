<?php

include "../connection.php";
include "student_header.php";

    session_start();
    if(!isset($_SESSION['username'])){
        header("location:../login1.php");
    }
    $user = $_SESSION['username'];
    $sid = $_SESSION['studid']


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><h4>Welcome <?php echo $user; ?> <br>Your User id is <?php echo $sid; ?></p></h4>
</body>
</html>