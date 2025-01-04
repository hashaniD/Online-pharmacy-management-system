<?php
        $Doc_ID=$_POST['ID'];
        print($Doc_ID);
        include_once("connection.php");
        $query="DELETE FROM `cus_order` WHERE `ID`='$Doc_ID'";
        $sql=mysqli_query($con,$query);
        echo "Deleted Successfully";
        header("location:pharmacist.php");
?>