<?php
include_once("header.php"); 
?>

<?php
include_once("footer.php");
?>

<?php
include("connection.php");
session_start();

$sql = "SELECT productName, productPrice, productImage, description FROM product";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Include your CSS or any other head elements here -->
</head>

<body>

    <div>
        <center>
            <table width="900px" height="50px" border="2px">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>

                <?php
                while ($product_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><img src='" . $product_data['productImage'] . "' height='100px' width='100px'></td>";
                    echo "<td>" . $product_data['productName'] . "</td>";
                    echo "<td>" . $product_data['productPrice'] . "</td>";
                    echo "<td>" . $product_data['description'] . "</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </center>
    </div>

</body>

</html>