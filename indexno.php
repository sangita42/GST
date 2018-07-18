<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: indexno.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>PAY GST</title>
<style>
body{
background-image:url('http://pressroom.today/wp-content/uploads/2017/11/GST-impact-on-indian-economy.png');
background-size:cover;
font-family:Verdana;
font-size:20px;
margin:0;
line-height:20px;

}
.navbar{
text-align:center;
width:100%;
background:royalblue;
opacity:0.5;
}
.navbar ul {
margin:0;
padding:0;
list-style:none;
position:relative;
}
.navbar ul li a{
display:block;
padding:25px;
color:white;
text-decoration:none;
width:270px;
}
.navbar ul:after{
  content: ""; clear:both;
  display:block;
  }
  .navbar ul li {
  float:left;
  listy-style:none;
  }
  .navbar ul ul {
  display:none;
  }
  .navbar ul li:hover > ul{
  display:block;
  }
  .navbar ul li:hover a {
  background:black;
  transition:0.9s;
  
  }
  .navbar ul li:hover a{color:white;
  }
  .navbar ul ul {
  background:black;
  padding:0;
  margin:0;
  position:absolute; top:200%;
  }
  .navbar ul ul li {
  float:none;
  position:relative;
  }
  .navbar ul ul li a{
  padding:45px;
  color:white;
  width:300px;
  text-align:left;
  }
  .navbar ul ul li a:hover{
  background:lightblue;
  color:black;
  transition:0.10s;
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
<div class="navbar">

<ul>
<li><a href ="indexno.php">Home</a></li>
<li><a href ="table.html">Manage Hsn code</a></li>
<li><a href ="help.html">Help</a></li>
<li><a href ="business.html">Pay Gst</a></li>


</ul>

</div></br></br></br></br>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	</div>

</body>
</html>