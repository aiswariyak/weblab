<?php
include "../connection.php";
include "student_header.php";
    session_start();
    $user = $_SESSION['username'];
    $sid = $_SESSION['studid'];
  $select="select * from issue_book where studid='$sid'";
  ?><p ><h2 align="center">Your Book Status</h2></p><?php
  echo "$sid";
  $sql=mysqli_query($con,$select);
   if(!$sql || mysqli_num_rows($sql)==0)
   {
   	 echo "Error:".$sql.mysqli_error($con);
    echo "<font color='red'>No data found</font>";
   }
   else
   {
   	 echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=2 style='border-collapse:collapse;'>";
       echo "<tr><th>Issue id</th>";
    echo "<th>Student ID</th>";
    echo "<th>Book ID </th>";
    echo "<th>Date of issue </th>";

    echo "<th>Due date</th>";
    while($r=mysqli_fetch_assoc($sql))
    {
      echo "<tr>";
      echo "<td>".$r['issueid']."</td>";
      echo "<td>".$r['studid']."</td>";
      echo "<td>".$r['bookid']."</td>";
      echo "<td>".$r['issuedate']."</td>"; 
      echo "<td>".$r['duedate']."</td>";

     // echo "<td>".$r['status']."</td>";
    //echo "<td><button><a href=\"issue.php?sid=$r[studid]\">Issue Book</a></button></td>";
    }
    echo "</tr></table>";

   }
 // if(mysqli_num_rows($sql))
 //  {
 //    echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=2 style='border-collapse:collapse;'>";
 //       echo "<tr><th>Student id</th>";
 //    echo "<th>Student name</th>";
 //    echo "<th>Admission number</th>";
 //    echo "<th>Department</th>";
 //    while($r=mysqli_fetch_assoc($sql))
 //    {
 //      echo "<tr>";
 //      echo "<td>".$r['studid']."</td>";
 //      echo "<td>".$r['name']."</td>";
 //      echo "<td>".$r['Admission_no']."</td>";
 //      echo "<td>".$r['dept']."</td>";

 //     // echo "<td>".$r['status']."</td>";
 //    //echo "<td><button><a href=\"issue.php?sid=$r[studid]\">Issue Book</a></button></td>";
 //    }
 //    echo "</tr></table>";
 //  }
 //  else
 //  {
 //    echo "Error:".$sql.mysqli_error($con);
 //    echo "<font color='red'>No data found</font>";
 //  }
?>