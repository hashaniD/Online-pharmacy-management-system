<?php
$sr="localhost";
$un="root";
$pw="";
$db="online";

if(!$con=mysqli_connect($sr,$un,$pw,$db))
{
    die("failed to connect!");
}


?>