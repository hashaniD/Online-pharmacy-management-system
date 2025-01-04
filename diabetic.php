<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pharmacy System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="addtocart.css">
</head>
<body>
<?php include_once("header.php"); ?>
    
<div class="a">
    <h1 class="heart">Diabetics</h1>
</div>
<div class="row" id="grid">
    <?php
    include_once("connection.php");
    $sql = "SELECT * FROM `product1` WHERE `procate`='Heart'";
    $result = mysqli_query($con, $sql);
    while ($record = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-sm-4 portfolio-item">
        <figure class="gallery-item">
            <div class="img-title-text">
                <img style="width:auto; height:150px;" class="product" src="<?php echo $record['product_image']; ?>" alt="VALSARTAN">
                <h2 id="productName"><?php echo $record['p_name']; ?></h2>
                <p>LKR <?php echo $record['price']; ?>.00</p>
                <p><?php echo $record['description']; ?></p>
                <a href="addcart.php?proid=<?php echo $record['proid']; ?>&userid=<?php echo $_SESSION['userid']; ?>"><button class="add-to-cart-button" onclick="addToCart('', <?php echo $record['price']; ?>)" <?php echo isset($_SESSION['email']) ? '' : 'hidden' ?>>Add to Cart</button></a>
            </div>
        </figure>
    </div>
    <?php 
    } // Closing while loop
    mysqli_close($con);
    ?>
</div>
</body>
</html>
