<?php


$connect = mysqli_connect("localhost","root","","other");
$output='';
$sql = "SELECT * FROM hsncode where id = '".$_POST["countryId"]."'ORDER BY hsn_name";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result))
{
$output .= '<option value="'.$row["hsn_name"].'">'.$row["hsn_name"].'</option>';
}
 echo $output;

?>
C:\Program Files\Java