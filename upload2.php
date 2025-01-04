<?php
// Database connection
include_once("connection.php"); 

if (isset($_POST['submit'])) {
    
    $Doc_ID=$_POST['Doc_ID'];
    $Dname=$_POST['Dname'];
    $Address = $_POST['Address'];
    $Tele_No= $_POST['Tele_No'];
    $Email=$_POST['Email'];
    $Hospital= $_POST['Hospital'];

    

    
    $sql = "INSERT INTO `doctor`(`Doc_ID`, `Dname`,`Address`,`Tele_No`, `Email`,`Hospital`) VALUES ('$Doc_ID','$Dname','$Address', '$Tele_No','$Email','$Hospital')";

    if ($con->query($sql) === TRUE) {
        header("location:pharmacist.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>