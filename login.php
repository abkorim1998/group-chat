
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
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</head>
<body>

    <?php
        if ( isset($_POST['login']) ){
        ?>
            <p></p>
            <h2>Login form</h2>
            <form action="" class="submitlogin">
                <input class="registerinput" type="email" name="email" placeholder="Email">
                <input class="registerinput" type="password" name="password" placeholder="Password">
                <input type="submit" name="submitlogin" value="Login">
            </form>
            if you have not account please <a class="registration" href="register.php">Create your account</a>

        <?php
        die();
        }
    ?>

    <div class="box">
        <p></p>
        <h2>Login form</h2>
        <form action="" class="submitlogin">
            <input class="registerinput" type="email" name="email" placeholder="Email">
            <input class="registerinput" type="password" name="password" placeholder="Password">
            <input type="submit" name="submitlogin" value="Login">
        </form>
        if you have not account please <a class="registration" href="register.php">Create your account</a>
    </div>

</body>
</html>