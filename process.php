<?php
session_start();

$product = "";
$purchase = "";

$sale = "";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 $link = mysqli_connect("localhost", "root", "", "store");
// Check connection

// Escape user inputs for security
if (isset($_POST['enter'])){

$product = mysqli_real_escape_string($link, $_POST['product']);
$purchase = mysqli_real_escape_string($link, $_POST['purchase']);


$sale = mysqli_real_escape_string($link, $_POST['sale']);



// attempt insert query execution
$sql = "INSERT INTO data (product, purchase, sale) VALUES ('$product', '$purchase', '$sale')";
mysqli_query($link,$sql);
}
?>