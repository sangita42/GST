<?php


$connect = mysqli_connect("localhost","root","","data");
$output='';
$sql = "SELECT * FROM cgst where id = '".$_POST["countryId"]."'ORDER BY cgst_name";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result))
{
$output .= '<option value="'.$row["cgst_name"].'">'.$row["cgst_name"].'</option>';
}
 echo $output;

?>
<?php


$connect = mysqli_connect("localhost","root","","data");
$output='';
$sql = "SELECT * FROM sgst where id = '".$_POST["countryId"]."'ORDER BY sgst_name";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result))
{
$output .= '<option value="'.$row["sgst_name"].'">'.$row["sgst_name"].'</option>';
}
 echo $output;

?>

