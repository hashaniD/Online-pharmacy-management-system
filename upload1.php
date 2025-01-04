<?php
// Database connection
include_once("connection.php");

if (isset($_POST['submit'])) {
    // Process and move the uploaded image to the "images" folder
    $filename = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "images/";

    // Move the uploaded image to the specified folder
    move_uploaded_file($temp_name, $folder . $filename);

    // Get other form values
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];

    // Insert the image information into the database
    $filepath = $folder . $filename;
    $sql = "INSERT INTO `cus_order` (`name`, `address`, `telephone`, `prescriptionInput`) VALUES ('$name', '$address', '$telephone', '$filepath')";

    if ($con->query($sql) === TRUE) {
        header("location:paymentMethods.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
