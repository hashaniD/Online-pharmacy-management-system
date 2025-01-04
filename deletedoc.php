<?php
       $id=$_POST['ID'];
      
        include_once("connection.php");
        $query="DELETE FROM `doctor`  WHERE `Doc_ID`='$id'";
        $sql=mysqli_query($con,$query);
        echo $id;
        echo "Deleted Successfully";
        header("location:pharmacist.php");
       
?>