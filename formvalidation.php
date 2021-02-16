<html>
<head>
<title>exercise_11</title>
<style>
th
{
color:yellow;
}
input
{
width:300px;
}
</style>
</head>
<body bgcolor="orange">
<h1 align="center"><i>REGISTRATION FORM</i></h1>
<form name="myform" action="" method="post">
<table style="background-color:black;" align="center" cellspacing="20" cellpadding="20">
<tr>
<th>enter the name</th>
<td>
<input type="text" name="name"></input>
</td>
</tr>
<tr>
<th>enter the email-id</th>
<td>
<input type="email" name="email"></input>
</td>
</tr>
<tr>
<th>enter mobile no</th>
<td>
<input type="text" name="mob"></input>
</td>
</tr>
<tr>
<th>user-id</th>
<td>
<input type="text" name="uid" ></input>
</td>
</tr>
<tr>
<th>password</th>
<td>
<input type="password" name="password"></input>
</td>
</tr>
<tr>
<th>re-enter-password</th>
<td>
<input type="password" name="repassword"></input>
</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit" name="submit" style="width:50;"></input>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
$password=$_POST['password'];
if(isset($_POST["submit"]))
{
if($_POST["name"]=="")
{
echo '<script>alert("please enter your name");</script>';

}
else if($_POST["email"]=="")
{
echo '<script>alert("please enter your email id");</script>';
}
else if($_POST["mob"]=="" || strlen($_POST["mob"])!=10)
{
echo '<script>alert("please enter a valied 10 digit mobile number");</script>';
}
else if($_POST["uid"]=="" || strlen($_POST["uid"])<6)
{
echo '<script>alert("user id must contain atleast 6 characters");</script>';
}
else if(strlen($_POST["password"])<8 ||!preg_match('@[A-Z]@',$password) ||!preg_match('@[a-z]@',$password) ||!preg_match('@[0-9]@',$password) ||!preg_match('@[^\w]@',$password))
{
echo '<script>alert("password must contain atleast 8 characters including atleast one uppercase and lowercase,atleast one number and atleast one special symbol");
</script>';
}
else if($_POST["repassword"]!=$password)
{
echo '<script>alert("passwords doesnot match");</script>';
}
else
{
echo '<script>alert("registration completed successfully");</script>';
}
}
?>