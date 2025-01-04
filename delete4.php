<?php
$proid=$_POST['id'];
include_once("connection.php");
$query="DELETE FROM `product1` WHERE `proid`='$proid'";
$sql=mysqli_query($con,$query);
echo "Deleted Successfully";
?>