<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration form</title>
<link href="main.css" rel="stylesheet" type="text/css">
<style>
body{

font-family:Verdana;
font-size:20px;
margin:0;
line-height:20px;

}

	.input-group {
  margin: 10px 200px 10px 200px;
  
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 30px;
  margin-left:400px;
  font-size: 25px;
  color: black;
  
  border: none;
  border-radius: 15px;
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
<h2 style="text-align:center; font-size:46px;">Register yourself</h2>
<form method="post" action="registration.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="enter your user name" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="enter your email address" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="enter your password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="enter confirm password">
  	</div>
	<div class="input-group">
  	  <label>Your address</label>
  	  <input type="text" name="address_2" placeholder="enter your address here" value="<?php echo $address_2; ?>">
  	</div>
	<div class="input-group">
  	  <label>Company name</label>
  	  <input type="text" name="company" placeholder="enter your company name" value="<?php echo $company; ?>">
  	</div>
	<div class="input-group">
  	  <label>Company address</label>
  	  <input type="text" name="address" placeholder="enter your company address" value="<?php echo $address; ?>">
  	</div>
	<div class="input-group">
  	  <label>Contact number</label>
  	  <input type="numbers" name="contact" placeholder="enter your contact number" value="<?php echo $contact; ?>">
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>