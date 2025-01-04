<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>      
    body {

background-image: url('images/pharmacy10.jpeg');
background-size: cover; 
background-repeat: no-repeat; 
background-position: cover; 
font size:20px;

}
</style>
</head>

<body>

    <?php
    session_start();
    ?>
    <?php
    include_once("connection.php");

    // Check if the userid is set in the session
    if (isset($_SESSION['userid'])) {
        $userid = $_SESSION['userid'];

        $sql = "SELECT * FROM `cart` AS c 
                INNER JOIN `product1` AS p ON c.`proid` = p.`proid` 
                INNER JOIN `users` AS u ON c.`userid` = u.`id` 
                WHERE c.`userid` = '$userid'";

        $result = mysqli_query($con, $sql);
    }
    ?>

    <table id="CartTable" table border="1">
        <caption><h1>Cart Details</h1></caption>
        <thead>
            <tr>
                <th>Customer id</th>
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

                    <td><?php echo $record['userid']; ?></td>
                    <td><img style="width:100px; height:100%;" src="<?php echo $record['product_image']; ?>"></td>
                    <td><?php echo $record['p_name']; ?></td>
                    <td><?php echo $record['price']; ?></td>
                    <td <?php echo isset($_SESSION['email']) ? '' : 'style="display:none;"'; ?>>
                        <?php echo $record['description']; ?>
                    </td>
                    
                    <td><button class="delete-btn" onclick="myFunction(this)" data-id3="<?php echo $record['userid']; ?>" class="btn btn-danger">Delete</button></td>


                </tr>
            <?php
            }
            mysqli_close($con);
            ?>

        </tbody>
    </table>

    <script>
        function myFunction(sel) {
            var result = confirm("Do you want to delete?");

            if (result) {
                var $row = $(sel).closest('tr');
                var userId = $row.find('.delete-btn').data("id3");

                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {
                        userid: userId
                    },
                    success: function(response) {
                        alert(response);

                        $row.remove(); // Remove the row from the table after successful deletion
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
