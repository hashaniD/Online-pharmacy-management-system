<?php
include_once("header.php"); 
?>

<?php
include_once("footer.php");
?>

<?php
include("connection.php");
session_start();

$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>

<head>
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
                    echo <td><img style="width:100px; height:100%;" src="<?php echo $product_data['prescriptionInput']; ?>" ></td>

                    echo "<td>" . $product_data['p_name'] . "</td>";
                    echo "<td>" . $product_data['Price'] . "</td>";
                    echo "<td>" . $product_data['description'] . "</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </center>
    </div>

</body>

</html>