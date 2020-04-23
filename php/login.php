<?php 
session_start();
    
    include '../includes/db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];  

    $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
    $password = mysqli_real_escape_string($con,strtolower($_POST['password']));
    $pwd = md5($password);

    $query = "SELECT * FROM tblaccount WHERE username = '$username' AND password = '$pwd';";
    $result = mysqli_query($con,$query) or die ("Verification error");
    $array = mysqli_fetch_array($result);
    
    if ($array['username'] == $username){
        $_SESSION['username'] = $username;
        $_SESSION['uid'] = $array['uid'];
         echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
    }
    
    else{
        echo '<meta http-equiv="refresh" content="0;url=../login_register.php?wrong" />';
    }
   
?>