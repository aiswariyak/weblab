<?php
session_start(); 
include "connection.php";
include "header1.php";
$error=$error_login=$error_username=$error_password="";
if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
     if(empty($username))
       {
         $error_username="<font color='red'>Username field is mandatory</font>";
       }
     if(empty($password))
       {
          $error_password="<font color='red'>Password field is mandatory</font>";
       }

  
        else
        {
        	    if($username=="admin" && $password=="admin" )
                {
                      header("location:admin/admin.php");
                }
                $sql="select * from login where username='$username' and password='$password' and status='1'";
               // $query = mysqli_query($con, "SELECT * login WHERE username='$username' AND password='$password'");
                //$count = mysqli_num_rows($query);
               // $result=mysqli_query($con,$query);
               $query=mysqli_query($con,$sql);

                if(!$query || mysqli_num_rows($query)==0) 
                {
                	$error_login = "Invalid login data, check username or password";
                	//echo "Error:".mysqli_error($con);
                }

                else
                {
                    $row = mysqli_fetch_assoc($query);
                    $_SESSION['studid'] = $row['studid'];
                    $_SESSION['username'] = $row['username'];
                    header("location:student/student.php");

                }

      }
        }
?> 
<html>
<head>
<titile>

</title>
</head>
<body>

<center>
	<h2>Login</h2>
<table>
<tr><center><h2><?php echo $error_login; ?></h2></center></tr>
<form action="" method="POST">
<tr>
<td><label>Username</label></td>
<td><input type="text" name="username"><span><?php echo $error_username; ?></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password"><span><?php echo $error_password; ?></td>
</tr>
<tr>
<td><label></label></td>
<td><input type="submit" name="login" value="Login"></td>
</tr>
</form>
</table>
</center>
</body>
</html>