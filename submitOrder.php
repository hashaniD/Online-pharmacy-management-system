<?php
include_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user information from the form
    $prescriptionInput= $_POST['prescriptionInput'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];

    // Insert user information into the cus_order table
    $insertQuery = "INSERT INTO `cus_order` (`prescriptionInput`,`name`, `address`, `telephone`) VALUES ('$prescriptionInput','$name', '$address', '$telephone')";

    if (mysqli_query($con, $insertQuery)) {
        echo "User information inserted successfully into cus_order table.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>
