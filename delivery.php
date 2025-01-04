<!DOCTYPE html>
<head>


    <style>
         body{
            background-color:#b5e2ff;
         }

        .form-container {
            background-color: #E5E4E2;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid black;
            width: 300px;
        }

        th{
            background-color:purple;
            color:white;
        }

        #delete{
            background-color:#C21E56;
            color:white;
        }

        .confirm{
            background-color:blue;
            color:black;
        }
        .table-container {
            margin-left: 20px; 
            width: 50%;
        }

        .sub {
            background-color:#4E5180;
            color:white;
        }

        #Delivery_Agent_Table {
            border-collapse: collapse;
            width: 50%;
        }


    </style>
</head>
<body>

<div class="admin">
       <center> <h1>Welcome to delivery Page</h1><center>
    </div>

<div class="container">
<div class="form-container">

<form action="upload3.php" method="post" enctype="multipart/form-data">
<h2 style="color:dark-blue;">Delivery Agents Informations</h2>
<br>

<label for="DeID">Delivery Agent Identity</label>
<input type="number" ID="DeID" name="DeID">
<br>
<br>

<label for="dename"> Name</label>
<input type="text" ID="dename" name="dename">
<br>
<br>

<label for="address"> Address</label>
<input type="text" ID="address" name="address">
<br>
<br>

<label for="email">Email</label>
<input type="email" ID="email" name="email">
<br>
<br>

<label for="telno">Telephone Number</label>
<input type="text" ID="telno" name="telno">
<br>
<br>
<button class="sub" type="submit" name="submit" value="upload">Submit</button>
</form>
<?php
  include_once("connection.php");
  $sql="SELECT*FROM `delivery`";
  $result=mysqli_query($con,$sql);
  ?>

  
    </div>
<!-- delivery agent table -->
<table id="Delivery_Agent_Table" border="1">
        <caption><h3 style="color:purple;">Delivery Agent Informations</caption></h3>
        <thead>
            <tr>
            <th>Delivery Agent Name</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Telephone Number</th>
            <th>Status</th>

           
            <th colspan=2>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
while($record=mysqli_fetch_assoc($result)){?>
<tr>
    <td><?php echo $record['DeID'];?></td>
    <td><?php echo $record['dename'];?></td>
    <td><?php echo $record['address'];?></td>
    <td><?php echo $record['email'];?></td>
    <td><?php echo $record['telno'];?></td>
    <td>
        <form method="post" action="deletedelivery.php" onclick="myFunction(this)">
            <input type="hidden" name="ID" value="<?php echo $record['DeID']; ?>">
            <button id="delete" data-id3="<?php echo $record['DeID']; ?>" type="submit" class="btn btn-danger">Delete</button>

        </form>
    </td>
    <td><button id="edit" data-id3="<?php echo $record['DeID']; ?>" class="btn btn-primary" >Edit</button></td>
   
</tr>



    <?php
}


$sql1="SELECT `ID`, `prescriptionInput`, `name`, `address`, `telephone` FROM `cus_order`";
$result1=mysqli_query($con,$sql1);
?>

<div class="table-container">
    <!-- customer order table -->
        <table id="customerOrd" border="1">
        <caption><h3 style="color:purple;">Customer Order</caption></h3>
        <thead>
            <tr>
            <th>Order Identity</th>
            <th>Prescription</th>
            <th>Name</th>
            <th>Address</th>
            <th>Telephone No</th>
            <th>Delivery status</th>
            
            </tr>
        </thead>
        <tbody><?php
while($record1=mysqli_fetch_assoc($result1)){?>
<tr>
    <td><?php echo $record1['ID'];?></td>
    <td><?php echo $record1['prescriptionInput'];?></td>
    <td><?php echo $record1['name'];?></td>
    <td><?php echo $record1['address'];?></td>
    <td><?php echo $record1['telephone'];?></td>
    <td>
    <form method='post' action='update_status.php'>
        <input type='hidden' name='ID' value='<?php echo $record1['ID']; ?>'>
        <select class='status-select' name='status' data-order-id='<?php echo $record1['ID']; ?>'>
            <option value='Pending'>Pending</option>
            <option value='Delivered'>Delivered</option>
        </select>
       
    </form>
    




<?php
}
mysqli_close($con);
?>

</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
       function myFunction(sel) {
    var result = confirm("Do you want to delete?");

    if (result) {
        var DeID = $(sel).find('#delete').data("id3");

        $.ajax({
            type: "POST",
            url: "deletedelivery.php",
            data: {
                DeID: DeID
            },
            success: function(response) {
                alert(response);
            },
            error: function(error) {
                console.error(error);
            }
        });
    } else {
        console.log("Deletion canceled");
    }
}

    </script>

</html>
