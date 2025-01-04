<!DOCTYPE html>
<html>

<head>
    <style>
         body {

background-image: url('images/pharmacy10.jpeg');
background-size: cover; 
background-repeat: no-repeat; 
background-position: cover; 

}
        .container {
            display: flex;
        }

        .form-container {
            background-color: #56A5EC;
            padding:auto;
            border-radius: 8px;
            border: 1px solid black;
           
            font-size:25px;
        }

        th{
            background-color:#625D5D;
            color:white;
        }


        #delete{
            background-color:#C21E56;
            color:white;
        }

        .confirm{
            background-color:green;
            color:white;
        }
        
        .table-container {
            margin-left: 20px; 
            width: 100%;
            font-size:100%;

        }

        .sub {
            background-color:#4E5180;
            color:white;
        }

        #DoctorTable {
            border-collapse: collapse;
            width: 50%;
            font-size:120%;
        }
        #customerOrd{
            border-collapse: collapse;
            width: 50%;
            font-size:120%;

        }
        h1{
           font-color:blue;
        }
    </style>
</head>

<body>

<div class="admin">
       <center> <h1>Welcome to pharmacist Page</h1></center>
    </div>
    <div class="container">
    <div class="form-container">
 
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <h2 style="color:#0002FF;">Add Doctors</h2>

    <br>

    <label for="Doc_ID">Doctor Identity</label>
    <input type="number" id="Doc_ID" name="Doc_ID">
    <br>
     <br>
        
    <label for="Dname">Doctor Name</label>
    <input type="text" id="Dname" name="Dname">
    <br>
    <br>

    <label for="Address">Address:</label>
    <input type="text" id="Address" name="Address" >
    <br>
    <br>
        

    <label for="Tele_No">Tele Number:</label>
    <input type="text" id="Tele_No" name="Tele_No">
    <br>
    <br>

    <label for="Email">Email:</label>
    <input type="Email" id="Email" name="Email">
    <br>
    <br>

    <label for="Hospital">Hospital:</label>
<input type="text" id="Hospital" name="Hospital">
    <br>
    <br>

    <button class="sub" type="submit" name="submit" value="upload">Submit</button>
</form>

<?php
include_once("connection.php");
$sql="SELECT*FROM `doctor`";
$result=mysqli_query($con,$sql);
?>

</div>
<div class="table-container">
    <!-- doctor table -->
        <table id="DoctorTable" border="1">
        <caption><h3 style="color:purple;">Doctor Details</caption></h3>
        <thead>
            <tr>
            <th>Doctor Identity</th>
            <th>Name</th>
            <th>Address</th>
            <th>Telephone Number</th>
            <th>Email</th>
            <th>Hospital</th>
            <th colspan=2>Status</th>
            </tr>
        </thead>
        <tbody>

<?php
while($record=mysqli_fetch_assoc($result)){?>
<tr>
    <td><?php echo $record['Doc_ID'];?></td>
    <td><?php echo $record['Dname'];?></td>
    <td><?php echo $record['Address'];?></td>
    <td><?php echo $record['Tele_No'];?></td>
    <td><?php echo $record['Email'];?></td>
    <td><?php echo $record['Hospital'];?></td>
   s
    <td>        <form method="post" action="deletedoc.php" onclick="myFunction(this)">
            <input type="hidden" name="ID" value="<?php echo $record['Doc_ID']; ?>">
            <button  id="delete" type="submit" class="btn btn-danger">Delete</button>
        </form></td>
</tr>
    <?php
}

?>
</tbody>
</table>


<?php 
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
            <th></th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>

<?php
while($record1=mysqli_fetch_assoc($result1)){?>
<tr>
    <td><?php echo $record1['ID'];?></td>
    <td><?php echo $record1['prescriptionInput'];?></td>
    <td><?php echo $record1['name'];?></td>
    <td><?php echo $record1['address'];?></td>
    <td><?php echo $record1['telephone'];?></td>
    
    <td>
        <form method="post" action="delete2.php" onclick="myFunction(this)">
            <input type="hidden" name="ID" value="<?php echo $record1['ID']; ?>">
            <button  id="delete" type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    <td>
        <form method="post" action="delivery.php" onsubmit="return confirm('Are you sure you want to confirm this order?')">
            <input type="hidden" name="ID" value="<?php echo $record1['ID']; ?>">
            <button type="submit" class="confirm">Confirm</button>
        </form>
    </td>

            <td><input type="hidden" name="ID" value="<?php echo $record1['ID']; ?>">
            <label for="tickbox_<?php echo $record1['ID']; ?>" class="tickbox-label">
            <input type="checkbox" id="tickbox_<?php echo $record1['ID']; ?>" class="tickbox" name="confirmed">
            <span class="tick-symbol"></span>
        </label>
        
</tr>
    <?php
}
mysqli_close($con);
?>
</div>


<!-- -->



<script>
        function myFunction(sel) {
            var result = confirm("Do you want to delete?");

            if (result) {
                var $row = $(sel).closest('tr');
                var Doc_ID = $row.find('#delete').data("id3");

                $.ajax({
                    type: "POST",
                    url: "delete2.php",
                    data: {
                        Doc_ID: Doc_ID
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