<?php
require_once('connection.php');
if(logged_in()){
    header('location: chating.php');
    die();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <p></p>
        <h2>Chating fun</h2>
        <?php
            if(isset($ace)){
                echo '<a class="create-database" href="#">Create database first</a>';
            }

            if(!isset($ace)){
                echo '<a class="registration" href="#">Create your account</a>
                <a class="login" href="#">Login</a>';
            }
        ?>
        
    </div>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</html>