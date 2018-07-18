<?php


$connect = mysqli_connect("localhost","root","","other");
$output='';
$sql = "SELECT * FROM igst where id = '".$_POST["countryId"]."'ORDER BY igst_name";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result))
{
$output .= '<option value="'.$row["igst_name"].'">'.$row["igst_name"].'</option>';
}
 echo $output;

?>
