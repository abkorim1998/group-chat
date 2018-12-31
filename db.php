<?php 
    if(isset($_POST['createdb'])){
        //create database and table
        require_once('connection.php');

        if(!$connect){
            die('connent erros'.mysqli_error());
        }
        else{
            
            //creating table 1 "users"
            $cratetble1 = mysqli_query($connect, 'CREATE TABLE users(
                id int(11) AUTO_INCREMENT,
                fname varchar(255) ,
                email varchar(255) ,
                cpassword varchar(255) ,
                PRIMARY KEY(id)
            )');
            if(!$cratetble1){
                echo '&#10006; table not created there is a problem';
            }
            else{
                echo '&#x2714; Users table has been created successrully <br>';
            }

            //creating table 2 "info"
            $cratetble2 = mysqli_query($connect, 'CREATE TABLE info(
                messageid int(11) AUTO_INCREMENT,
                cmessage TEXT,
                cemail TEXT,
                PRIMARY KEY(messageid)
            )');
            if(!$cratetble2){
                echo '&#10006; table not created there is a problem';
            }
            else{
                echo '&#x2714; Info table has been created successrully <hr>please reload the page or waite';
               
            }
            
        }
    }
    

?>

