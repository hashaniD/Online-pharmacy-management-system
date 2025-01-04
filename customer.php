<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            top: 20px;
            justify-content: left;
            align-items: left;
            min-height: 100vh;
        }

        .upload {
            text-align: center;
            padding: 20px;
            background-color: rgba(245, 245, 245, 0.6);
            margin-left: 550px;
            margin-right: 550px;
            border-radius: 5px;
            top: 20px;
        }

        .upload-button {
            cursor: pointer;
            padding: 15px;
            background-color: rgb(13, 59, 158);
            color: white;
            width: 40px;
            height: 20px;
            font-size: 20px;
            border-radius: 5px;
        }

        .upload-button:hover {
            background-color: black;
        }

        #selectedFileName {
            margin-top: 20px;
            font-size: 20px;
        }

        .content {
            text-align: center;
            background-color: rgba(245, 245, 245, 0.6);
            width: 800px;
            height: 350px;
            margin-left: 550px;
            border-radius: 5px;
        }

        #userInfoForm {
            margin-top: 25px;
            font-size: 20px;
        }

        #name, #address, #telephone {
            width: 200px;
            height: 25px;
            font-size: 100%;
        }

        .btn1 {
            background-color: rgba(7, 95, 95, 0.842);
            color: white;
            border-radius: 5px;
            margin-left: -2px;
            margin-right: -450px;
            width: 150px;
            height: 45px;
            cursor: pointer;
            font-size: 100%;
        }

        .btn1:hover {
            transform: scale(1.1);
            color: white;
            background-color: black;
        }

        .btn2 {
            background-color: rgba(7, 95, 95, 0.842);
            color: white;
            position: relative;
            cursor: pointer;
            top: 60px;
            left: 1600px;
            height: 45px;
            width: 200px;
            border-radius: 5px;
            font-size: 120%
        }

        .btn2:hover {
            transform: scale(1.1);
            color: white;
            background-color: black;
        }
        .cart-container {
        position: fixed;
        top: 300px;
        right: 50px;
        size:%50;
    }
    .cart-container img {
        width: 50px; 
        height: 50px; 
    }
    </style>
</head>
<body>
<div class="cart-container">
    <a href="carttable.php">
        <img src="images/cart.png" alt="Cart" width="30" height="30">
    </a>
</div>

<div class="upload">
    <form action="upload1.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="prescriptionInput" accept=".pdf, .jpg, .jpeg, .png" style="display: none">
        <label for="prescriptionInput" class="upload-button"> Upload Prescription</label>
        <br>
        <p id="selectedFileName"> No file selected</p>
</div>

<div class="content">
   
        <br> <br>
        <label for="name"> Name : </label>
        <input type="text" id="name" name="name" required> <br> <br> <br>

        <label for="address"> Address : </label>
        <input type="text" id="address" name="address" required> <br> <br> <br>

        <label for="telephone"> Telephone Number : </label>
        <input type="tel" id="telephone" name="telephone" required> <br> <br> <br>

        <button type="submit" class="btn1" name="submit"> Submit </button>
    </form>
</div>


<?php include_once("footer.php"); ?>

<script src="script2.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const prescriptionInput = document.getElementById('prescriptionInput');
        const selectedFileName = document.getElementById('selectedFileName');
        const userInfoForm = document.getElementById('userInfoForm');
        const displayUserInfo = document.getElementById('displayUserInfo');
        const displayedName = document.getElementById('displayedName');
        const displayedAddress = document.getElementById('displayedAddress');
        const displayedTelephone = document.getElementById('displayedTelephone');

        prescriptionInput.addEventListener('change', function () {
            const fileName = prescriptionInput.files[0].name;
            selectedFileName.textContent = fileName;
        });

        userInfoForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const address = document.getElementById('address').value;
            const telephone = document.getElementById('telephone').value;

            displayedName.textContent = name;
            displayedAddress.textContent = address;
            displayedTelephone.textContent = telephone;

            displayUserInfo.style.display = 'block';
        });
    });
</script>

</body>
</html>
