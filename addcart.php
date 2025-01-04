<?php
// Database connection
include_once("connection.php"); 


$userid=$_GET['userid'];
$proid=$_GET['proid'];

    $sql = "INSERT INTO `cart`( `proid`, `userid`) VALUES  ('$proid','$userid')";

    if ($con->query($sql) === TRUE) {
        header("location:carttable.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
$con->close();
?>
