
<?php
$id=$_POST['productId'];
include_once("connection.php");
$query="DELETE FROM `users` WHERE `id`='$id'";
$sql=mysqli_query($con,$query);
echo "Deleted Successfully";
?> 