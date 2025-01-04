<?php
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];

    if (!empty($FirstName) && !empty($LastName) && !empty($email) && !empty($_POST['Password']) && !empty($_POST['ConfirmPassword'])) {
        
    
        if ($Password === $ConfirmPassword) {
            $query = "INSERT INTO `users` ( `FirstName`, `LastName`, `email`, `Password`, `ConfirmPassword`,`usertype`) VALUES ('$FirstName', '$LastName', '$email', '$Password', '$ConfirmPassword','customer')";
            mysqli_query($con, $query);

           header("Location: login.php");
            die;
        } else {
            echo "Passwords do not match. Please try again.";
        }
    } else {
        echo "Please enter all valid information!";
    }
}
?>
<head>
    <title>CENTRAL PHARMACY</title><br>
    <link rel="stylesheet" href="style.css">
</head>

<!-- style the form -->
 <style>   body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>

<f>
    <form id="signinForm" action="signin.php" method="post" >
    <h1>CENTRAL PHARMACY</h1>
    <label for="FirstName">First name</label>
    <input type="text" id="FirstName" name="FirstName"><br><br>

    <label for="LastName">Last name</label>
    <input type="text" id="LastName" name="LastName"><br><br>

    <label for="email">Email address</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="Password">Password</label>
    <input type="Password" id="Password" name="Password"><br><br>

    <label for="ConfirmPassword">Confirm Password</label>
    <input type="ConfirmPassword" id="ConfirmPassword" name="ConfirmPassword"><br><br>

    <button type="submit">Submit</button>
  <br>
  <br>
    <div class="member">already a member ?<a href="login.php">
        Login here
    </a>
    </div>
</f>

 <script>
    document.querySelector('button[type="submit"]').onclick = function(event) {
        var Password = document.querySelector('#Password').value;
        var ConfirmPassword = document.querySelector('#ConfirmPassword').value;

        if (Password === "") {
            alert("Field cannot be empty.");
            event.preventDefault();
        } else if (Password !== ConfirmPassword) {
            alert("Passwords didn't match. Please try again.");
            event.preventDefault();
        } else {
            alert("Redirecting to login page.");
            window.location.href = "login.php";
        }
    }
</script> 





