<?php
include "adminheader.php";
include "adminsidebar.php";
include "connection.php";
$sid=$_GET['sid'];
if(isset($_POST['issue']))
{
	$sid=$_POST['sid'];
	$bid=$_POST['bid'];
	$issuedate=$_POST['issuedate'];
	$duedate=$_POST['duedate'];
	$sql="insert into issue_book(issueid,studid,bookid,issuedate,duedate) values ('','$sid','$bid','$issuedate','$duedate')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('book issued')</script>";
	}
	else
	{
		echo "Error:".$sql.mysqli_error($con);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css"> 
	<title></title>
</head>
<body>
<div class="container">
	<div class="content">
	<h2>Issue book</h2>
  <form action="" method="post"> 
   <div class="row">
      <div class="col-25">
        <label>Student ID</label>
      </div>
      <div class="col-75">
        <input type="text" name="sid" value='<?php  echo $_GET['sid'];?>'>
      </div>
    </div> 
    <div class="row">
      <div class="col-25">
        <label>Book id</label>
      </div>
      <div class="col-75">
        <input type="text" name="bid" placeholder="Book id">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>date of issue</label>
      </div>
      <div class="col-75">
        <input type="date" name="issuedate" >
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label>due date</label>
      </div>
      <div class="col-75">
        <input type="date" name="duedate" >
      </div>
    </div>
    <a href="admin_issuedbook.php">Issue other books </a>
     
    <div class="row">
      <input type="submit" value="issue" name="issue">
      <input type="reset" value="Clear">
    </div>
  </form>
</div>
</div>
</body>
</html>