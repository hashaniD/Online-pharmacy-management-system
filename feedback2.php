<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="styles.css">

<style>

    #feedbackForm
    {
        background-color: rgba(245, 245, 245, 0.6);
        margin: 20px;
        padding: 15px;
        top: 5px;
        
    }
    .div2
    {
        text-align: center;
        height: 600px;
    }

    form 
    {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background-color: rgba(245, 245, 245, 0.6);
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        right: 800px;
    }

    label, input, textarea 
    {
        display: block;
        margin-bottom: 10px;
        margin-right: 100px;
        font-size: 120%;
    }

    input[type="text"]
    {
        height: 40px;
        width: 600px;
        border-radius: 5px;
    }

    input[type="email"]
    {
        height: 40px;
        width: 600px;
        border-radius: 5px;
    }
    
    textarea 
    {
        width: 95%;
        padding: 10px;
        border-radius: 5px;
    }

    .btn1
    {
        background-color: black;
        color: white;
        cursor: pointer;
        border-radius: 5px;
        margin-left: -200px;
        margin-right: -170px;
        width: 150px;
        height: 45px;
        background-color: rgba(7, 95, 95, 0.842);
        font-size: 120%;
    }

    .btn1:hover
    {
        transform: scale(1.1);
        background-color: black;
    }
    
    </style>
</head>

<body>
    <h1 id="feedbackForm"> Feedback Form </h1> <br> 
    <form  action="fed.php" method="post" >

    <div class="div2">
        
        <label for="name"> Name </label>
        <input type="text" name="name" required> <br> <br>

        <label for="email"> Email </label>
        <input type="email" name="email" required> <br> <br>

        <label for="message"> Message </label>
        <textarea name="message" rows="6" required> </textarea> <br> <br>

        <div>
            <button class="btn1"> Back </button>
            <button class="btn1"> Submit </button>
        
        </div>
      
    </div>
    
    <br> <br> <br> <br> <br>
    </form>

    <?php
include_once("connection.php");
$sql="SELECT*FROM `doctor`";
$result=mysqli_query($con,$sql);
?>



    <script>
        function showAlert() {
            alert(" submitted!");
        }
    </script>

    <?php include_once("footer.php"); ?>

    

</body>
    
</html>