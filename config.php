<?php
require_once('connection.php');


//if click on register button
if(isset($_POST['registerace'])){

    $fname      = $_POST['fname'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);

    $error  = array();

    if( $fname == null ){
        $error['fname'] = "Full name is requerd!";
    }
    if( $email == null ){
        $error['email'] = "Email is requerd";
    }
    if( $password == null ){
        $error['password'] = "password is requerd";
    }
    if( count($error) == 0 ){
        $emailexistes = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
        if(mysqli_num_rows($emailexistes) == 0 ){

            $sucss = mysqli_query($connect, "INSERT INTO users(fname,email,cpassword) VALUES('$fname','$email','$password')");
            if(!$sucss){
                echo 'Register faild';
            }else{
                echo '&#x2714; you have been regiter successfully';
            }

        }else{
            echo "email alredy have our server please login";
        }


        
        


    }else{
        echo 'chake your input fild and submit again';
    }
   

}



//if click on login button
if(isset($_POST['loginace'])){

   
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $error  = array();

    if( $email == null ){
        $error['email'] = "Email is requerd";
    }
    if( $password == null ){
        $error['password'] = "password is requerd";
    }
    if( count($error) == 0 ){
        
        $loginquery = mysqli_query($connect, "SELECT cpassword FROM users WHERE email = '$email' ");
        $result = mysqli_fetch_assoc($loginquery);

        if(md5($password) == $result['cpassword']){
            session_start();
            $_SESSION['login'] = 'loggdin';
            $_SESSION['email'] = $email;

            header('location: chating.php');



        }else{
            echo 'your password is incaret';
        }

    }else{
        echo 'chake your input fild and submit again';
    }
   

}


//chating page get and set data
if(isset($_POST['havesendform'])){

    $message = $_POST['message'];
    $email = $_SESSION['email'];

    $error  = array();

    if( $message == null ){
        $error['email'] = "Email is requerd";
    }
    if(count($error) == 0 ){
        $messagequery = mysqli_query($connect, "INSERT INTO info(cmessage,cemail) VALUES('$message','$email')");
    }

}

//uload data into view 
if(isset($_POST['uploadhobe'])){?>

    <ul>
        <?php 
            $get_info = mysqli_query($connect, "SELECT * FROM info ");
            foreach ($get_info as $mess ):?>
                <li><span><?php echo $mess['cemail']?></span> :: <?php echo $mess['cmessage']?></li>
            <?php endforeach;
            
        ?>
    </ul>

<?php }