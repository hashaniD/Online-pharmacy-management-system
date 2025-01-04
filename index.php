
<?php
include_once("header.php"); 
?>
<style>
    
body::after{
            content: '';
            position: absolute;
            top: 200%; 
            left: 40%; 
            transform: translate(-50%, -50%);
            width: 400px; 
            height: 300px; 
            background-image: url('images/pharmacy1');
            background-size: cover;
            z-index: 1; 
        }

       body::before {
            content: '';
            position: absolute;
            top: 200%;
            left: 60%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 300px;
            background-image: url('images/pharmacy4.jpg'); 
            background-size: cover;
            z-index: 1;
        }
        </style>

 <!-- Main Content Section --> 
<header>
    </header>

<body>
    <footer>
<?php
include_once("footer.php"); 
?> 
</footer>
    
</body>


</html>