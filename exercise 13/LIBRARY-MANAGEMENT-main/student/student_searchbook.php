<?php
include "../connection.php";
include "student_header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css"> 
	<title></title>
</head>
<body>

<div class="content">
  <h2>View/Search Book</h2>
<div class="container">
  <form action="" method="post">  
     <div class="row">
      <div class="col-25">
        <label>Book title</label>
      </div>
      <div class="col-75">
        <input type="text" name="title" placeholder="Book title">
      </div>
    </div> 
     <div class="row">
      <div class="col-25">
        <label>Author</label>
      </div>
      <div class="col-75">
        <input type="text" name="author" placeholder="Author">
      </div>
    </div> 
    <div class="row">
      <input type="submit" value="Search Book" name="search">

    </div>
  </form>
     <?php

  $select1="select * from book_details";
  $sql1=mysqli_query($con,$select1);
  if(mysqli_num_rows($sql1))
  {
    echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=1 style='border-collapse:collapse;'>";
     echo "<th>Book ID</th>";
    echo "<th>Book Title </th>";
    echo "<th>Author </th>";
     echo "<th>Publisher </th>";
      echo "<th>language </th>";
    echo "<th>Publish  date</th></tr>";
    while($r=mysqli_fetch_assoc($sql1))
    {
      echo "<tr>";
      echo "<td>".$r['Bookid']."</td>";
      echo "<td>".$r['title']."</td>";
      echo "<td>".$r['Author']."</td>";
      echo "<td>".$r['publisher']."</td>";
      echo "<td>".$r['language']."</td>";
      echo "<td>".$r['publish_date']."</td>";
    }
    echo "</tr></table>";
  }
  ?>

   <?php

  if(isset($_POST['search']))
{
  //$bid=$_POST['bid'];
  $author=$_POST['author'];
  $title=$_POST['title'];
   $select="select * from book_details where Author='$author' or title='$title'";
  $sql=mysqli_query($con,$select);
  if(mysqli_num_rows($sql))
  {
    echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=2 style='border-collapse:collapse; border-color:green;'>";
    echo "<th>Book ID</th>";
    echo "<th>Book Title </th>";
    echo "<th>Author </th>";
     echo "<th>Publisher </th>";
      echo "<th>language </th>";
    echo "<th>Publish  date</th></tr>";
    while($r=mysqli_fetch_assoc($sql))
    {
      echo "<tr>";
      echo "<td>".$r['Bookid']."</td>";
      echo "<td>".$r['title']."</td>";
      echo "<td>".$r['Author']."</td>";
      echo "<td>".$r['publisher']."</td>";
      echo "<td>".$r['language']."</td>";
      echo "<td>".$r['publish_date']."</td>";
     // echo "<td>".$r['status']."</td>";
      //echo "<td><button><a href=\"edit.php?bid=$r[Bookid]\">edit</a></button></td>";
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
