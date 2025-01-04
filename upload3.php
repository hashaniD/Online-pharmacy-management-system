<?php
// Database connection
include_once("connection.php");

if (isset($_POST['submit'])) {
    $DeID = $_POST['DeID'];
    $dename = $_POST['dename'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];

    // Using prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO `delivery`(`DeID`, `dename`, `address`, `email`, `telno`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $DeID, $dename, $address, $email, $telno);

    if ($stmt->execute()) {
        header("location:delivery.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
