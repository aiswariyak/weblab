<?php
include "header1.php";
include "connection.php";
if (isset($_POST['submit']))
{
  $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
  $sid=$_POST['sid'];
  $name=$_POST['name'];
  $adno=$_POST['admission'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $phone=$_POST['phone'];
 $email=$_POST['email'];
 $dept=$_POST['dept'];
 $password=$_POST['password'];
 $conpassword=$_POST['conpassword'];
 //$status='0';

 
   if($sid == "")
   {
    echo "<script>alert('Enter ID')</script>";
   }
   else if($name == "")
   {
    echo "<script>alert('Enter name')</script>";
   }
   // else if(!preg_match ("/^[a-zA-z]*$/", $name))
   // {
   //  echo "<script>alert('Only letters and white spaces are allowed')</script>";
   // }
     else if ($adno == "") 
   {
     echo "<script>alert('Enter the admission number')</script>";
   }
   //    else if ($gender == "") 
   // {
   //   echo "<script>alert('Select your gender')</script>";
   // }
      else if ($dob == "") 
   {
     echo "<script>alert('Enter Date of birth')</script>";
   }
   else if ($phone == "") 
   {
     echo "<script>alert('Enter phone number')</script>";
   }
   //else if($_POST['phno'])
   else if (!preg_match ("/^[0-9]*$/", $phone) )
   {
    echo "<script>alert('Only numeric values are allowed')</script>";
   }
   else if ( $email == "") 
   {
     echo "<script>alert('Enter email')</script>";
   }
  else if (!preg_match ($pattern, $email) )
   {  
        echo "<script>alert('Enter a valid email id')</script>"; 
  }
   else if(  $password == "")
   {
    echo "<script>alert('Enter Password !!')</script>";
   }
  else if (strlen($password) < 8) 
  {
     echo "<script>alert('Your Password Must Contain At Least 8 Characters!')</script>";
 }
  else if(!preg_match("#[0-9]+#",$password))
   {
       echo "<script>alert('Your Password Must Contain At Least 1 Number!')</script>";
   }
 else if(!preg_match("#[A-Z]+#",$password))
  {
      echo "<script>alert('Your Password Must Contain At Least 1 Capital Letter!')</script>";
 }
  else if(!preg_match("#[a-z]+#",$password)) 
  {
      echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter!')</script>";
 } 
    else if(  $password != $conpassword)
   {
    echo "<script>alert('The passwords must match')</script>";
   }
   else
   {
       $sql="insert into studenttbl(studid,name,Admission_no,dob,gender,phone,email,dept,password,status) values('$sid','$name','$adno','$dob','$gender','$phone','$email','$dept','$password','0')";
       $sql1="insert into login(loginid,studid,username,password,status) values('','$sid','$email','$password','0')";

      echo "<script>alert('Registration successful')</script>";
      if (mysqli_query($con,$sql) && mysqli_query($con,$sql1))
      {
         echo '<script>alert("You can now log in");</script>';
         echo "<script>location.href='index.php';</script>";
      } 
    else 
    {
        // echo "Error: " . $sql . "<br>" . mysqli_error($con);
      echo "";
     }
      mysqli_close($con);
  } 

 }
       
  //$sql="insert into studenttbl(studid,name,Admission_no,dob,gender,phone,email,password,status) values('$sid','$name','$adno','$dob','$gender','$phone','$email','$password','0')";

// if (mysqli_query($con,$sql))
//  {
//   echo '<script>alert("You can now log in");</script>';
//  } 
// else 
// {
//   echo "Error: " . $sql . "<br>" . mysqli_error($con);
// }
// mysqli_close($con);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css"> 
	<title></title>
</head>
<body>
<div class="container">
  <form action="" method="post"> 
   <div class="row">
      <div class="col-25">
        <label>Student ID</label>
      </div>
      <div class="col-75">
        <input type="text" name="sid" placeholder="Your ID..">
      </div>
    </div> 
    <div class="row">
      <div class="col-25">
        <label>Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Admission number</label>
      </div>
      <div class="col-75">
        <input type="text" name="admission" placeholder="Your Admission no..">
      </div>
    </div>
     <!--    <div class="row">
      <div class="col-25">
        <label>Gender</label>
      </div>
      <div class="col-75">
        Male<input type="radio" name="gender" value="Male">
        Female<input type="radio" name="gender" value="female">
         Others<input type="radio" name="gender" value="others">
      </div>
    </div> -->
     <div class="row">
      <div class="col-25">
        <label>Gender</label>
      </div>
      <div class="col-75">
        <select  name="gender">
          <option value="">-SELECT-</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
         
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Date of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" name="dob" placeholder="Your Date of Birth..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Phone number</label>
      </div>

      <div class="col-75">
        <input type="text" name="phone" placeholder="Your Phone no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Email</label>
      </div>
      
      <div class="col-75">
        <input type="text" name="email" placeholder="Your Email id..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Department</label>
      </div>
      <div class="col-75">
        <select  name="dept">
          <option value="">-SELECT-</option>
          <option value="Btech">Btech</option>
          <option value="Mtech">Mtech</option>
          <option value="MCA">MCA</option>
          <option value="BCA">BCA</option>
        </select>
      </div>
    </div>
 <!--    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div> -->
     <div class="row">
      <div class="col-25">
        <label>Password</label>
      </div>
      <div class="col-75">
        <input type="password" name="password" placeholder="Enter the password">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label>Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" name="conpassword" placeholder="Enter the above password">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
      <input type="reset" value="Clear">
    </div>
  </form>
</div>

</body>
</html>