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
    <title>Register form</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</head>
<body>

    <?php
        if( isset($_POST['register']) ){
            ?>
                <p></p>
                <h2>Register form</h2>
                <form action="" method="POST" class="submitregister">
                    <input class="registerinput" type="text" name="fname" placeholder="Full Name">
                    <input class="registerinput" type="email" name="email" placeholder="Email">
                    <input class="registerinput" type="password" name="password" placeholder="Password">
                    <input type="submit" name="submitregister" value="Register">
                </form>
                if you have an account please <a class="login" href="login.php">Login</a>
            <?php
            die();
        }
    ?>

    <div class="box">
        <p></p>
        <h2>Register form</h2>
        <form action="" method="POST" class="submitregister">
            <input class="registerinput" type="text" name="fname" placeholder="Full Name">
            <input class="registerinput" type="email" name="email" placeholder="Email">
            <input class="registerinput" type="password" name="password" placeholder="Password">
            <input type="submit" name="submitregister" value="Register">
        </form>
        if you have an account please <a class="login" href="login.php">Login</a>
    </div>

    
</body>
</html>