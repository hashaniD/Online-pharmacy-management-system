<?php
        $DeID=$_POST['DeID'];
        print($DeID);
        include_once("connection.php");
        $query="DELETE FROM `delivery` WHERE `DeID`='$DeID'";
        $sql=mysqli_query($con,$query);
        echo "Deleted Successfully";
        header("location:delivery.php");
?>