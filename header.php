<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>CENTRAL PHARMACY</title>

    <style>
      header {
    background-color:#045F5F; 
    padding: 10px; 
    color: #fff; 
}</style>

</head>

<!-- Header Section -->
<header>
<h1 style="color: white;" class="central-pharmacy">CENTRAL PHARMACY</h1>


<!-- search bar -->
<form class="search-form" action="search_results.php" method="get">
        <input type="text" name="query" placeholder="Search here...">
        <button type="submit">Search</button>
    </form>

    <!-- add sign in button -->
    <div>
        <button class="signin-button" onclick="window.location.href='signin.php'">Sign In</button>
        <button class="login-button" onclick="window.location.href='login.php'">Login</button>
        
        <div class="profile-image">
            <img src="images/face1.jpg" alt="Profile Image"> 
        </div>
    </div>


    <style>
.cart-icon {
    position: fixed;
    top: 20px;
    right: 150px;
    cursor: pointer;
    width: 20px; 
    height: 20px; 
    object-fit: contain;
}
.cart-popup {
    display: none;
    position: fixed;
    top: 600px; 
    right: 60px;
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
}
</style>


  <nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li class="submenu">

      
        <a href="#">Medicine</a>

        <ul>
          <li><a href="heart.php">Heart</a></li>
          <li><a href="ear.php">Ear Nose Throat</a></li>
          <li><a href="diabetic.php">Diabetic Pressure Cholesterol</a></li>
       
        </ul>
      </li>
      <li class="submenu">
        <a href="#">Personal Care</a>
        <ul>
          <li><a href="mother.php">Mother & Baby</a></li>
          <li><a href="skin.php">Skin Care</a></li>
          <li><a href="beauty.php">Beauty & Supplements</a></li>
          <li><a href="hair.php">Hair Care</a></li>
        </ul>
      </li>
      <li class="submenu">
        <a href="#">Medical Devices</a>
        <ul>
          <li><a href="firstaid.php">First Aid</a></li>
          <li><a href="support1.php">Support Guards</a></li>
          <li><a href="health.php">Health Devices</a></li>
        </ul>
      </li>
      <li class="submenu">
        <a href="#">Customer Services</a>
        <ul>
          <li><a href="terms.php">terms and conditions</a></li>
          <li><a href="support.php">FAQ</a></li>
          
        </ul>
      </li>
    
      <li ><a href="about.php">About Us</a></li>
     
    </ul>
    
  </nav>
  
</body>
<br><br>
<hr>
</header>
    <br>
    <br>

    <?php
include_once("footer.php"); 
?> 





    </html>