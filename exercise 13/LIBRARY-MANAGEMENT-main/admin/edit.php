<?php
include "connection.php";
include "adminheader.php";
include "adminsidebar.php";

if(isset($_POST['edit']))
{
  $bid=$_POST['bid'];
  $title=$_POST['title'];
  $author=$_POST['author'];
  $publisher=$_POST['publisher'];
  $lang=$_POST['lang'];
  $dop=$_POST['dop'];
  if(empty($title)  || empty($author) || empty($publisher)  || empty($lang)  || empty($dop) )
  {
    echo "<script>alert('Fill all the fields!!')</script>";
  }
  else
  {
   $result = mysqli_query($con, "UPDATE `book_details` SET title='$title',Author='$author',publisher='$publisher',language='$lang',publish_date='$dop' WHERE Bookid=$bid");
   echo '<script>alert("book updated");</script>';
  //header("Location: bookedit.php");
 // echo "updated";
  }
  // if($result)
  // {
  //   header("Location: bookedit.php");
  //  echo '<script>alert("book updated");</script>';
  // }
}

?>
<?php
$bid=$_GET['bid'];
$result=mysqli_query($con,"SELECT * FROM `book_details` WHERE Bookid=$bid");
while($r=mysqli_fetch_array($result))
{
  $title=$r['title'];
  $author=$r['Author'];
  $publisher=$r['publisher'];
  $lang=$r['language'];
  $dop=$r['publish_date'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css"> 
	<title></title>
</head>
<body>
<div class="content">
  <h3>Edit book</h3>
<div class="container">
  <form action="" method="post"> 
    <div class="row">
      <div class="col-25">
        <label>Book ID</label>
      </div>
      <div class="col-75">
        <input type="hidden" name="bid" value='<?php  echo $_GET['bid'];?>'>
      </div>
    </div> 
   <div class="row">
      <div class="col-25">
        <label>Book title</label>
      </div>
      <div class="col-75">
        <input type="text" name="title" value="<?php echo $title;?>">
      </div>
    </div> 
    <div class="row">
      <div class="col-25">
        <label>Name of Author</label>
      </div>
      <div class="col-75">
        <input type="text" name="author" value="<?php echo $author;?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Publisher</label>
      </div>
      <div class="col-75">
        <input type="text" name="publisher" value="<?php echo $publisher;?>">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Language</label>
      </div>
      <div class="col-75">
        <select  name="lang">
          <option value="<?php echo $lang;?>"><?php echo $lang;?></option>
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
        <input type="date" name="dop" value="<?php echo $dop;?>">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="EDIT" name="edit">
      <input type="reset" value="Clear">
     <br> <a href="bookedit.php">Edit other books</a>
    </div>
  </form>
</div>
</div>
</body>
</html>