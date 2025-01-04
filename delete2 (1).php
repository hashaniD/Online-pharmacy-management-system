<?php
        $Doc_ID=$_POST['Doc_ID'];
        include_once("connection.php");
        $query="DELETE FROM `doctor` WHERE `Doc_ID`='$Doc_ID'";
        $sql=mysqli_query($con,$query);
        echo "Deleted Successfully";
?>