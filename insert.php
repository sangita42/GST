

<?php
	  $product = filter_input(INPUT_POST, 'product');
 $sale = filter_input(INPUT_POST, 'sale');
 if (!empty($product) || !empty($sale)) {
	 $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "store";
	 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 if (mysqli_connect_error()) {
		 die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	 }
	 else {
		$sql = "INSERT Into compensate (product,sale) values ($product, $sale)";
		if($conn->query($sql)){
			echo "record inserted";
else{		}
echo "error: ".$sql ."<br>".$conn->error;
 }
 $conn->close();
	 else{
		 echo "username and password shouldnt ne empty";
		 die();
	 }
	 
	 }
		 
	 


?>
