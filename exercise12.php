<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aiswariya";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo '<script>alert("connection failed");</script>';
}
$sql="select * from studentdetails";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result))
{
echo '<table border="2" cellpadding="15" cellspacing="15"><tr><th>Rollno</th><th>Name</th><th>Course</th><th>Mark</th></tr>';
while($row=mysqli_fetch_assoc($result))
{
echo'<tr><td>'.$row["Rollno"].'</td><td>'.$row["Name"].'</td><td>'.$row["Course"].'</td><td>'.$row["Mark"].'</td></tr>';
}
echo '</table>';
}
else
{
echo'<script>alert("Table is empty");</script>';
}
?>