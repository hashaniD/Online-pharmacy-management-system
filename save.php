<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="styles.css">

<style>

    #div
    {
        width: 720px;
        height: 400px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: rgba(245, 245, 245, 0.6); 
        margin-top: 50px; 
        box-shadow: 0px 0px 10px #ccc;
        margin-top: 40px;
        position: relative;
        top: 50px;
        left: 650px;
        padding: 30px;
     }

    body 
    {
        background-size: cover; 
        background-repeat: no-repeat; 
        background-attachment: fixed; 
        filter: brightness(0.8);
    }

    #input1
    {
        border-radius: 5px;
        height: 35px;
        width: 250px;
        margin: 10px 25px;
        position: relative;
        margin: 20px 60px;
        font-size: 100%;
    }
    .input
    {
        border-radius: 5px;
        height: 35px;
        width: 250px;
        margin: 10px 25px;
        position: relative;
        margin: 20px 40px;
        font-size: 100%;
    }

    #button
    {
        font-size: 20px;
        height: 38px;
        width: 220px;
        margin: 15px 25px;
        border: none;
        border-radius: 20px;
        color: aliceblue;
        background-color: rgba(7, 95, 95, 0.842);
    }

    #button:hover 
    {
        background-color: #021722; 
        transform: scale(1.02);
    }

    #div
    {
        background-color:  rgba(245, 245, 245, 0.6);
        margin: 20px;
        width: 700px;
        left: 550px;
    }

    #txt
    {
        color: blue;
        width: 650px;;
        height: 50px;
        border-radius: 5px;
        background-color:  rgba(245, 245, 245, 0.6);
        margin: 20px;
        box-shadow: 0px 0px 10px #ccc;
        margin-top: 5px;
        padding: 30px;
        left: 800px;
    }

    #saveButton
    {
        width: 150px;
        height: 45px;
        cursor: pointer;
        border-radius: 5px;
        margin-left: 450px;
        background-color: rgba(7, 95, 95, 0.842);
        color: white;
        font-size: 120%;
    }
    #saveButton:hover
    {
        transform: scale(1.1);
        background-color: black;
    }

    .feedback
    {
        width: 200px;
        height: 45px;
        cursor: pointer;
        font-size: 130%;
        border-radius: 5px;
        background-color:  rgba(7, 95, 95, 0.842);
        margin: 20px;
        color: white;
        position: relative;
        left: 1600px;
        top: 10px;
    }
    .feedback:hover
    {
        transform: scale(1.1);
        background-color: black;
    }

</style>
</head>
<body>

    <br> <center> <h1 id="txt"> <b> Payment Successful </b> </h1> </center>

    <script src="script.js"> </script>

    <div id="div">

   

    <br>

    <button id="saveButton"> Save Bill </button>
    
    </div>

    <a href="feedback2.php"> <button class="feedback"> feedback </button> </a>
    <br> <br> <br> <br> 

    <script>
        document.getElementById("saveButton").addEventListener("click", function() {
    
        alert("Saved");

        document.getElementById("saveButton").innerText = "Saved";  
        });

    document.getElementById("editButton").addEventListener("click", function() {
    });

    </script>
    <br> <br>

    <?php include_once("footer.php"); ?>
 </body>
 

 
 </html>