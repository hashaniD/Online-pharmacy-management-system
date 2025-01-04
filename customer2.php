<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

</style>
</head>

<body>
<div class="upload-container">
        <!-- Your existing upload container code -->

        <!-- Cart image and link -->
        <div class="cart-container">
            <a href="carttable.php">
                <img src="images/cart3.png" alt="Cart" width="50" height="50">
            </a>
        </div>
    </div>
<div class="upload-container">
        <!-- File input element -->
        <input type="file" id="prescriptionInput" accept=".pdf, .jpg, .jpeg, .png" style="display: none">

        <!-- Label acting as a button to trigger file input -->
        <label for="prescriptionInput" class="upload-button">Upload Prescription</label>

        <!-- Paragraph to display selected file name -->
        <p id="selectedFileName">No file selected</p>

        <!-- Form for additional information -->
        <form id="userInfoForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="telephone">Telephone Number:</label>
            <input type="tel" id="telephone" name="telephone" required>

            <!-- Submit button -->
            <input type="submit" value="Submit">
        </form>

        <!-- Display user information after submission -->
        <div id="displayUserInfo" style="display: none;">
            <h2>User Information:</h2>
            <p><strong>Name:</strong> <span id="displayedName"></span></p>
            <p><strong>Address:</strong> <span id="displayedAddress"></span></p>
            <p><strong>Telephone:</strong> <span id="displayedTelephone"></span></p>
        </div>
    </div>

    <hr>

    <?php include_once("footer.php"); ?>

    <script src="script2.js"></script>
    <script>
        // Your JavaScript code goes here
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

                // Get values from the form
                const name = document.getElementById('name').value;
                const address = document.getElementById('address').value;
                const telephone = document.getElementById('telephone').value;

                // Display user information
                displayedName.textContent = name;
                displayedAddress.textContent = address;
                displayedTelephone.textContent = telephone;

                // Show the user information section
                displayUserInfo.style.display = 'block';
            });
        });
    </script>


