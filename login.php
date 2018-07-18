<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body{

font-family:Verdana;
font-size:20px;
margin:0;
line-height:20px;

}
.input-group {
  margin: 30px 300px 0px 500px;
  font-size:30px;
  font-family:bold;
}
.btn {
  padding: 10px;
  margin-left:150px;
  font-size: 25px;
  color: black;
  border: none;
  border-radius: 5px;
}
.header{
	  text-align:left;
width:100%;
background:darkcyan;
padding:18px;
  }
  </style>
</head>
<body>
 <div class="header">
<span style="color:lightcyan; font-size:48px; font-family:fantasy">PAY</span><span style="color:beige; font-size:35px; font-family:monospace;">gst.COM</span>
</div>
  <div class="header1">
  	<h2 style="font-size:39px; color:brown; text-align:center;">Login</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="enter your username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="enter your password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p style="font-size:30px;">
  		Not yet a member? <a href="registration.php">Sign up</a>
  	</p>
  </form>
</body>
</html>