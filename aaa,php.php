<html>
    <head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<?php
session_start();
?>
<?php
include_once("connection.php");
$sql = "SELECT * FROM `cart` AS c 
        INNER JOIN `product1` AS p ON c.`proid` = p.`proid` 
        INNER JOIN `users` AS u ON c.`userid` = u.`id` 
        WHERE c.`userid` = '27'";
$result = mysqli_query($con, $sql);

$userid=$_SESSION['userid']
?> 

<table id="CartTable">
    <caption>Cart Details</caption>
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

    <?php
          
                          
          include('connection.php');
        
          $query="SELECT * FROM `cart` AS c 
          INNER JOIN `product1` AS p ON c.`proid` = p.`proid` 
          INNER JOIN `users` AS u ON c.`userid` = u.`id`";
        
          $do=mysqli_query($con,$query);
          
          $table ='<tbody>';
          
          while($disply=mysqli_fetch_assoc($do)) {
            $eq_id=$disply['userid'];
            $eq_name=$disply['p_name'];
            $Brand=$disply['price'];


            $table .='<tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label"></label>
              </div>
            </td>';
            $table .='<td>'.$eq_id.'</td>
            <td>'.$eq_name.'</td>
            <td>'.$Brand.'</td>
           
            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Remove</a>
                <a class="dropdown-item" href="#">Assign</a>
              </div>
            </td>
          </tr>';
          };
          ?>
          <?php
          print $table;
          ?>



    <tbody>
        <?php
        while ($record = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
            
                <td><?php echo $record['userid']; ?></td>
                <td><img style="width:100px; height:100%;" src="<?php echo $record['product_image']; ?>" ></td>
                <td><?php echo $record['p_name']; ?></td>
                <td><?php echo $record['price']; ?></td>
                <td <?php echo isset($_SESSION['email']) ? '' : 'style="display:none;"'; ?>>
                <?php echo $record['description']; ?>
</td>
<td><button class="edit-btn btn btn-primary" data-id2="<?php echo $record['userid']; ?>">Edit</button></td>
                <td><button class="delete-btn" onclick="myFunction(this)" data-id3="<?php echo $record['userid']; ?>" class="btn btn-danger">Delete</button></td>

            
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
        var userId = $row.find('.delete-btn').data("userid");

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

    </tbody>
</table>
