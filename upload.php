<?php
// Database connection
include_once("connection.php"); 

if (isset($_POST['submit'])) {
    $filename = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $productName=$_POST['productName'];
    $productPrice=$_POST['productPrice'];
    $description = $_POST['description'];
    $procate=$_POST['procate'];
    $folder = "images/";

    // Move the uploaded image to the specified folder
    move_uploaded_file($temp_name, $folder . $filename);

    // Insert the image information into the database
    $filepath = $folder . $filename;
    $sql = "INSERT INTO `product1`(`product_image`, `p_name`,`procate`, `price`,`description`) VALUES ('$filepath','$productName','$procate','$productPrice','$description')";

    if ($con->query($sql) === TRUE) {
        header("location:admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
