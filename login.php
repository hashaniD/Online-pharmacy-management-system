<?php
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $Password = $_POST['Password'];

    if (!empty($email) && !empty($Password)) {
        // Retrieve the hashed password from the database based on the provided email
        $query = "SELECT `Password`,`usertype`,`id` FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($con, $query);
        
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['Password'];
            $usertype = $row['usertype'];
            $userid = $row['id'];

            // Verify the provided password with the hashed password
            if ($Password== $hashedPassword) {
                // Password is correct, set session and redirect
                $_SESSION['email'] = $email;
                $_SESSION['userid']=$userid ;
           
                if($usertype=='admin'){
                    header("Location: admin.php"); 

                } else if($usertype=='delivery'){
                    header("Location: delivery.php"); 

                }else if($usertype=='customer'){
                    header("Location: customer.php"); 
                    
                }else if($usertype=='supplier'){
                    header("Location:phamacy/EnterStock.php"); 
                }
                else if($usertype=='pharmacist'){
                    header("Location: pharmacist.php"); 
                }
                else if($usertype=='cashier'){
                    header("Location: supplier.php"); 
                }
              
              
                die;
            } else {
                echo "Invalid email or password. Please try again.";
            }
        } else {
            echo "Error in database query.";
        }
    } else {
        echo "Please enter valid email and password.";
    }
}
?>
<head>
    <title>CENTRAL PHARMACY</title><br>
    <link rel="stylesheet" href="style.css">
</head>

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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="loginForm" action="login.php" method="post">
        <h1>CENTRAL PHARMACY</h1>

        <label for="email">Email(username)</label>
        <input type="email" id="email" name="email" ><br>

        <label for="Password">Password</label>
        <input type="password" id="Password" name="Password"><br>

    <br><br>
        <button type="submit">Login</button>

        <div class="member">Not a registerd member  <a href="signin.php">Sign up here</a></div>
    </form>
</body>
</html>
   

    
