<?php
session_start();



//localhost canection and database selection
$lhost      = 'localhost';
$lroot      = 'abkorimc_ajax';
$lpassword  = '1998@Gmail';
$database   = 'abkorimc_ajax';
$connect = mysqli_connect($lhost, $lroot, $lpassword, $database);


$tb = mysqli_query($connect, "SHOW TABLES LIKE 'users'");
if(mysqli_num_rows($tb) == 0 ){
    $ace = '';
}


//start function from hear
function logged_in(){
   
    if(isset($_SESSION['login'])){

        return true;
    }
} 