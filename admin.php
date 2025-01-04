<html>
<head>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script> 
    
       
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#ADD8E6;
            margin: 0;
            padding: 0;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            height: 100vh;
        }

       .admin {
            text-align: center;
            margin-bottom: 20px;  
        }

        form {
    background-color: #fff;
    border-radius: 8px;
    width: 500px; 

}

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #userTable {
            border-collapse: collapse;
            width: 50%;
           
        }
        #productTable {
            border-collapse: collapse;
            width: 50%;
         
            
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: green;
            color: white;
        }

        .edit {
            color: blue;
            text-decoration: none;
        }

        #delete4{
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #delete{
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        #edit {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }  
        caption {
        font-size: 1.5em;
        color:red;
        margin-bottom: 10px;
        
    } 
    .submit{ background-color:blue;
        
    }
   


    </style>
</head>
<body>
    <div class="admin">
        <h1>Welcome to Admin Page</h1>
    </div>
<!-- product add form -->
<table>
    <tr>
        <td>
    <div class="pro">
    <div class="column">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h1>Add Products</h1>
        <br>
        <label for="productImage">Product Image:</label>
        <input type="file" id="productImage" name="image">

        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName">

        <label for="description">Product Category</label>
        <select name="procate">
            <option value="Heart">Heart</option>
            <option value="Ear">ear</option>
            <option value="mother">mother</option>
            <option value="beauty">beauty</option>
            <option value="skin">skin</option>
            <option value="diabetic">diabetic</option>
            <option value="firstaid">firstaid</option>
            <option value="hair">hair</option>
            <option value="hair">health</option>

        </select>

        <label for="productPrice">Price:</label>
        <input type="text" id="productPrice" name="productPrice" >
        

        <label for="description">Add description:</label>
        <input type="text" id="description" name="description">

        <button type="submit" name="submit" value="Upload">Submit</button>
    </form>
</div>
<td>


    <?php
        include_once("connection.php");

        $sql = "SELECT * FROM `product1`";
        $result = mysqli_query($con, $sql);
    ?>

<!-- product table -->
<td>
    <div class="column">
    <table id="productTable">
    <caption>product Details</caption>
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Add Description</th>
                <th colspan=2>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($record = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><img style="width:100px; height:100%;" src="<?php echo $record['product_image']; ?>" ></td>
                <td><?php echo $record['p_name']; ?></td>
                <td><?php echo $record['price']; ?></td>
                <td><?php echo $record['description'];?></td>
                <td><button id="edit" data-id2="<?php echo $record['proid']; ?>" class="btn btn-primary" >Edit</button></td>
                <td>
                <td><button id="delete4" onclick="myFunction4(this)" data-id3="<?php echo $record['proid']; ?>" class="btn btn-danger" >Delete</button></td>

    </td>
            </tr>
            <?php 
                }
            
            ?>
        </tbody>
    </table>
            </div>
            </div>
            </td>
            </tr>
            </table>


   <!-- user table -->

<?php 
 $sql1 = "SELECT * FROM `users`";
 $result1 = mysqli_query($con,$sql1);
?>

<div class="user">
<table id='userTable'>
            <caption>User Details</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>User Type</th>
                    <th colspan="2">status<th>
                </tr>
            </thead>
            <tbody>
<?php

while ($record1 = mysqli_fetch_assoc($result1)) {
    ?>
    <tr>
        <td><?php echo $record1['id']; ?></td>
        <td><?php echo $record1['FirstName']; ?></td>
        <td><?php echo $record1['LastName']; ?></td>
        <td><?php echo $record1['email']; ?></td>
        <td><?php echo $record1['Password']; ?></td>
        <td><?php echo $record1['ConfirmPassword']; ?></td>
        <td><?php echo $record1['usertype']; ?></td>
        <td><button id="edit" data-id3="<?php echo $record1['id']; ?>" class="btn btn-primary" >Edit</button>
        <td><button id="delete" onclick="myFunction(this)" data-id2="<?php echo $record1['id']; ?>" class="btn btn-danger" >Delete</button></td>
</div>
        
    </tr>
    <?php 
        }
        mysqli_close($con);
    ?>


    <script>
        function myFunction(sel) {
            var result = confirm("Do you want to delete?");

            if (result) {
                var $row = $(sel).closest('tr');
                var productId = $row.find('#delete').data("id2");
               
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {
                        productId: productId
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

        function myFunction4(sel) {
            var result = confirm("Do you want to delete?");

            if (result) {
                var $row = $(sel).closest('tr');
                var id = $row.find('#delete4').data("id3");
             
                $.ajax({
                    type: "POST",
                    url: "delete4.php",
                    data: {
                        id: id
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
</body>
</html>