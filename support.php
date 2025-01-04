<?php

        include_once("connection.php");
    ?>
    <?php include_once("header.php"); ?>
<?php 
 $sql = "SELECT * FROM `feedback`";
 $result= mysqli_query($con,$sql);
?>
<html>
    <head>
        <style>
            #userTable {
            border-collapse: collapse;
            width: 80%; 
            margin: 20px auto;
        }

        #userTable th {
            background-color: #4E5180;
        }

        #userTable td, #userTable th {
            border: 1px solid black; 
            padding: 8px; 
        }

            </style>
</head>
<div class="user">
<table id='userTable'>
            <center><caption><h1>Feedback<h1></caption></center>
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>message</th>
                    
                </tr>
            </thead>
            <tbody>
<?php

while ($record = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $record['name']; ?></td>
        <td><?php echo $record['email']; ?></td>
        <td><?php echo $record['message']; ?></td>

</div>
        
    </tr>
    <?php 
        }
        mysqli_close($con);
    ?>