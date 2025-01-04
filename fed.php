

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
print($name);
include_once("connection.php");
$sql="INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
$result=mysqli_query($con,$sql);
header("location:support.php");
?>