<?php
include "adminheader.php";
include "adminsidebar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../style.css"> 
  <title></title>
</head>
<body>

<div class="content">
  <h2>Search student by ID</h2>
<div class="container">
  <form action="" method="post">  
     <div class="row">
      <div class="col-25">
        <label>Student Id</label>
      </div>
      <div class="col-75">
        <input type="text" name="sid" placeholder="student Id">
      </div>
    </div> 

    <div class="row">
      <input type="submit" value="Search student" name="search">

    </div>
  </form>

   <?php

  if(isset($_POST['search']))
{
  //$bid=$_POST['bid'];
  $sid=$_POST['sid'];

   $select="select studid,name,Admission_no,dept from studenttbl where studid='$sid'";
  $sql=mysqli_query($con,$select);
  if(mysqli_num_rows($sql))
  {
    echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=2 style='border-collapse:collapse;'>";
       echo "<tr><th>Student id</th>";
    echo "<th>Student name</th>";
    echo "<th>Admission number</th>";
    echo "<th>Department</th>";
    while($r=mysqli_fetch_assoc($sql))
    {
      echo "<tr>";
      echo "<td>".$r['studid']."</td>";
      echo "<td>".$r['name']."</td>";
      echo "<td>".$r['Admission_no']."</td>";
      echo "<td>".$r['dept']."</td>";

     // echo "<td>".$r['status']."</td>";
    echo "<td><button><a href=\"issue.php?sid=$r[studid]\">Issue Book</a></button></td>";
    }
    echo "</tr></table>";
  }
  else
  {
    echo "Error:".$sql.mysqli_error($con);
    echo "<font color='red'>No data found</font>";
  }
}
     ?>
</div>
</div>
</body>
</html> 

