<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="styles.css">

  <style>
    
    #div
    {
        width: 720px;
        height: 650px;
        border-radius: 5px;
        background-color: rgba(245, 245, 245, 0.6);
        box-shadow: 0px 0px 10px #ccc;
        position: relative;
        left: 600px;
    }

    .cvc
    {
        margin-left: 330px;
        position: relative;
        bottom: 15px;
        top: 3px;
    }

    .input
    {
        border-radius: 8px;
        height: 35px;
        width: 250px;
        margin: 10px 25px;
        font-size: 120%;
    }

    #button
    {
        height: 45px;
        width: 200px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 120%;
        color: white;
        background-color: rgba(7, 95, 95, 0.842);
    }

    #button:hover
    {
        background-color: black; 
        transform: scale(1.02);
    }

    .h2
    {
        position: relative;
        top: 20px;
        margin: 5px 20px; 
        position: relative;
        top: 35px;
    }

    .crd
    {
        margin: 5px 20px; 
    }

    #card
    {
        margin-left: 30px;
        position: relative;
        top: 10px;
    }
    
    .h3
    {
        margin-left: 30px;
        position: relative;
        top: 10px;
    }

    #txt
    {
        margin-left: 30px;
    }

    #pic
    {
        height: 40px;
        width: 250px;
        margin: 10px 15px;
    }
  </style>
</head>

<body>

    <br><br><br>

    <div id="div">
    <center> <h1> Payment Details </h1> </center>

    <h2 class="h2"> Pay With </h2> <br><br>

    <input type="radio" class="crd" name="paymentMethod"> Card
    <input type="radio" class="crd" name="paymentMethod"> Bank Transfer

    <br>
    <img src="images/cards.jpg" alt="" id="pic">

    <br><br>

    <h3 id="card"> Card Holder Name </h3> <br>
    <input type="text" class="input">

    <h3 class="h3"> Card Number </h3> <br>
    <input type="text" class="input">

    <h3 class="h3"> Expiration Date </h3>
    <h3 class="cvc"> CVV </h3>
    <input type="text" class="input">
    <input type="text" class="input">

    <br> 

    <label for="txt"> <input type="checkbox" id="txt"> Save Card Details </label>
    <br>

    <center> <a href="save.php"> <button id="button"> Pay </button> </a> <center>
</div>

<br><br> <br> <br> <br> <br>

<?php include_once("footer.php"); ?>




</body>

</html>