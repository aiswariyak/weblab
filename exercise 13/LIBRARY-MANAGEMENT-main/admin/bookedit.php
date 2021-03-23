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
  <h2>Search the book to update</h2>
<div class="container">
  <form action="" method="post"> 
   <div class="row">
      <div class="col-25">
        <label>Book ID</label>
      </div>
      <div class="col-75">
        <input type="text" name="bid" placeholder="Book ID">
      </div>
    </div> 
    <div class="row">
      <input type="submit" value="Search Book" name="search">

    </div>
  </form>
     <?php

     if(isset($_POST['search']))
{
  $bid=$_POST['bid'];
  $select="select * from book_details where Bookid='$bid'";
  $sql=mysqli_query($con,$select);
  if(mysqli_num_rows($sql))
  {
    echo "<div style='overflow-x:auto;'><table align='center' width='30%' border=1 style='border-collapse:collapse;'>";
       echo "<tr><th>Book id</th>";
    echo "<th>Book title</th>";
    echo "<th>Author</th>";
    echo "<th>Publisher</th>";
     echo "<th>Language</th>";
    echo "<th>Date of publish</th>";
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
      echo "<td><button><a href=\"edit.php?bid=$r[Bookid]\">edit</a></button></td>";
    }
    echo "</tr></table>";
   //echo "<td><a href=\"edit.php?id=$r[Bookid]\")>Edit Book Details</a></td>";
    //echo "<button><a href='edit.php?id=$r[Bookid]')>Edit</a></td>";
     //echo "<td><a href=\"edit.php?id=$r[Bookid]\">edit</a></td>";
  }
  else
  {
    //echo "Error:".$sql.mysqli_error($con);
    echo "<font color='red'>No data found</font>";
  }
}
     ?>
</div>
</div>
</body>
</html> 
