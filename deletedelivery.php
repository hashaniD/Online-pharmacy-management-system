<?php
    include_once("connection.php");

    if (isset($_POST['DeID'])) {
        $DeID = $_POST['DeID'];
  
        $query = "DELETE FROM `delivery` WHERE `DeID`='$DeID'";
        $sql = mysqli_query($con, $query);

        if ($sql) {
            echo "Deleted Successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }

        header("location:delivery.php");
    } else {
        echo "No DeID provided for deletion.";
    }
?>
