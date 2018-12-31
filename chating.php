<?php
    require_once('connection.php');
    if(!logged_in()){
        header('location: index.php');
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chating page</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</head>
<body>
    
    <div class="chating-fild">
        <div class="message-fild">
            <ul>
            <?php 
                $get_info = mysqli_query($connect, "SELECT * FROM info ");
                foreach ($get_info as $mess ):?>
                    <li><span><?php echo $mess['cemail']?></span> :: <div class="messeage"><?php echo $mess['cmessage']?></div> </li>
                <?php endforeach;
               
            ?>
            </ul>
        </div>
        <form action="" method="post" class="sendform">
            <input type="text" name="message" class="message registerinput" placeholder="script your message">
            <input type="submit" value="send" class="sendbtn">
        </form>
    </div>
    <div class="logout">
        <h2><a href="logout.php">logout</a></h2>
    </div>
</body>
</html>