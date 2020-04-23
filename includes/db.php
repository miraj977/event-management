<?php

$server = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $server)){
$host = "sql203.epizy.com";
$dbname = "epiz_24655227_ticket";
$udb = "epiz_24655227";
$pdb = "yyf3hbzrxE";


$con = mysqli_connect($host,$udb,$pdb,$dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$selected = mysqli_select_db($con,$dbname)
  or die("Could not connect db");
}
else
{
  $con = new mysqli("localhost","root","root","ticket");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$selected = mysqli_select_db($con,"ticket")
  or die("Could not  connect db");
}
// Check connection
?>
