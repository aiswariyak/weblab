<?php
 include "header1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css"> 
	<title></title>
</head>
<body>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label>Username</label>
      </div>
      <div class="col-75">
        <input type="text" name="username" placeholder="Username">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label >Password</label>
      </div>
      <div class="col-75">
        <input type="password"  name="password" placeholder="Password">
      </div>
    </div>
    
    <div class="row">
      <input type="submit" value="LOGIN"><label>Not a registered user?</label><a href="register.php">Register</a>
    </div>
  </form>
</div>
</body>
</html>