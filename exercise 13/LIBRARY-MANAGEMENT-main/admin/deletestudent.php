 <?php
    include "connection.php";
	$id = $_REQUEST['id'];
	//$del1="delete from studenttbl where studid='$id'";
	$result = mysqli_query($con, "DELETE FROM `studenttbl` WHERE studid=$id");
	$result1 = mysqli_query($con, "DELETE FROM `login` WHERE studid=$id");
	//$result = mysqli_query($con,$del1);
	if($result>0 && $result1>0 )
	{
		echo "<script>alert('deleted!')</script>";
		header("Location:request.php");
	}
	else
	{
      echo "Error: " . $result . "<br>" . mysqli_error($con);

	}
?>
 