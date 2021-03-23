<?php
include "adminheader.php";
include "adminsidebar.php";
include "connection.php";
if (isset($_POST['submit']))
{
  
  $title=$_POST['title'];
  $author=$_POST['author'];
  $publisher=$_POST['publisher'];
  $lang=$_POST['lang'];
  $dop=$_POST['dop'];

 
  
    $sql="insert into book_details(Bookid,title,Author,publisher,language,publish_date,status) values('','$title','$author','$publisher','$lang','$dop','0')";
      if (mysqli_query($con,$sql))
      {
         echo '<script>alert("Book successfully added!");</script>';
         echo "<script>location.href='AddBook.php';</script>";
      } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
         echo "";
     }
    mysqli_close($con);
  } 

 
       
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css"> 
	<title></title>
</head>
<body>
<div class="content">
  <h2>Add book details</h2>
<div class="container">
  <form action="" method="post"> 
   <div class="row">
      <div class="col-25">
        <label>Book title</label>
      </div>
      <div class="col-75">
        <input type="text" name="title" placeholder="Title of Book..">
      </div>
    </div> 
    <div class="row">
      <div class="col-25">
        <label>Name of Author</label>
      </div>
      <div class="col-75">
        <input type="text" name="author" placeholder="Name of Author..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Publisher</label>
      </div>
      <div class="col-75">
        <input type="text" name="publisher" placeholder="Name of Publisher..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Language</label>
      </div>
      <div class="col-75">
        <select  name="lang">
          <option value="">-SELECT-</option>
          <option value="English">English</option>
          <option value="Malayalam">Malayalam</option>
          <option value="Hindi">Hindi</option>
           <option value="French">French</option>
         
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Date of Publish</label>
      </div>
      <div class="col-75">
        <input type="date" name="dop" placeholder="Publishing date..">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Add Book" name="submit">
      <input type="reset" value="Clear">
    </div>
  </form>
</div>
</div>
</body>
</html>