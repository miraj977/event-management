<?php
session_start();
if(isset($_SESSION['username'])){
unset($_SESSION["username"]);
unset($_SESSION["uid"]);
header("Location:../index.php");}
?>