<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ID = $_POST['ID'];

    confirmRecord($ID);


    header('Location:pharmasict.php');
    exit;
}


function confirmRecord($ID) {
    
}
?>