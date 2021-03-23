 <?php
 include "connection.php";
 include "adminheader.php";
 include "adminsidebar.php";
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="content"><h2>Issued book details</h2></div><br><br>

</body>
</html>
 <?php
  $select="select * from issue_book";
  $sql=mysqli_query($con,$select);
  if(mysqli_num_rows($sql))
  { 
    echo "issued book details";
    echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=1 style='border-collapse:collapse;'>";
    echo "<tr><th>Student id</th>";
    echo "<th>Book id</th>";
    echo "<th>Date of issue</th>";
    echo "<th>Due date</th></tr>";
    while($r=mysqli_fetch_assoc($sql))
    {
      echo "<tr>";
      echo "<td>".$r['studid']."</td>";
      echo "<td>".$r['bookid']."</td>";
      echo "<td>".$r['issuedate']."</td>";
      echo "<td>".$r['duedate']."</td>";

    }
    echo "</tr></table>";
  }
  ?>