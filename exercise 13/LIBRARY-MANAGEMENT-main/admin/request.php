
<?php
include "adminheader.php";
include "adminsidebar.php";
include "connection.php";

$sql="select studid,name,Admission_no,dob,gender from studenttbl where status='0' order by studid";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result))
{
  ?><div class="content"><p><h2>Student Requests</h2></div></p><br><br><?php
  echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=1 style='border-collapse:collapse;'>";
   echo "<tr><th>Student id</th>";
    echo "<th>Student name</th>";
    echo "<th>Admission number</th>";
    echo "<th>Date of Birth</th>";
    echo "<th>Gender</th>";
    // echo "<th></th>";
    echo "<th>Action</th></tr>";
 while($r=mysqli_fetch_assoc($result))
 {
 	// echo "<tr><td>".$r['studid']."</td><td>".$r['name']."</td><td>".$r['Admission_no']."</td><td>".$r['dob']."</td><td>".$r['gender']."</td><td>"."<input type='submit' name='remove' value='Remove' style='background-color:red;'>"."<input type='submit' name='approve' value='Approve'>"."</td></tr>";
 	        echo "<tr>";
            echo "<td>".$r['studid']."</td>";
            echo "<td>".$r['name']."</td>";
            echo "<td>".$r['Admission_no']."</td>"; 
            echo "<td>".$r['dob']."</td>";  
            echo "<td>".$r['gender']."</td>";   
            echo "<td><a href=\"approvestudent.php?id=$r[studid]\" onClick=\"return alert('User approved!')\">Approve</a> | <a href=\"deletestudent.php?id=$r[studid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
 	
 }
 echo "</table></div>";
}
else
{
	echo "<script>alert('No requests');</script>";
}

?>