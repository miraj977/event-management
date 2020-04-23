<?php

include "../../includes/db.php";

if(isset($_POST['delid']))
{
  $del = $_POST['delid'];

  $sql=mysqli_query($con,"DELETE FROM `tblaccount` WHERE uid=$del");
  }
//print_r($_POST);exit();
  if(isset($_POST['uname']))
  {
    $uname=strtolower($_POST['uname']);
    $email=$_POST['email'];
    $uid=$_POST['uid'];
    $name=mysqli_query($con,"UPDATE `tblaccount` SET `username`='$uname',`email`='$email' WHERE uid=$uid");
    echo ("<script>location.href = '../user.php';</script>");
  }

  ?>