<?php
include "../includes/db.php";

extract($_POST); 

$username = strtolower(str_replace("'","`",$username)); 
$username = mysqli_real_escape_string($con,$username); 

$password = str_replace("'","`",$password); 
$password = mysqli_real_escape_string($con,$password);
$pwd = md5($password);
$forgot = $password = mysqli_real_escape_string($con,$password);


$a = mysqli_query($con,"SELECT * FROM `tblaccount` WHERE `username` = '$username' AND `email`='$email'");
$aa = mysqli_fetch_array($a);
$aaa = $aa['uid'];
if(mysqli_num_rows($a)==0)
{
  $sql = "INSERT INTO `tblaccount`(`username`, `password`, `forgot`, `email`) VALUES('$username','$pwd','$forgot','$email')";
  $res = mysqli_query($con,$sql);
  
  if($res==true)
  {

    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
    $headers = "From: info@everestviewtravels.com.au\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $to =$email;
    $subject= "Successfully Registered to Everest View Travel & Tours Ticket Booking";
    $message= "<html><body>Congratulations!!! <p>You have successfully registed to our ticket booking. Your login credentials are:</p>
    <p>Username:<b> $username</b><br>
      Email:<b> $email</b><br>
      Password:<b> $forgot</b></p>
      
      <p>Regards,<br>
        Team Everest View</p></body></html>";

        mail($to,$subject,$message,$headers);

        
        echo '<script language="javascript">';
                                    //echo 'alert("Successfully Registered. Please login with your details.")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=../login_register.php?success" />';
      }

      
    }else{
      $sql_u="SELECT * FROM tblaccount WHERE `username`='$username'";
      $sql_e="SELECT * FROM tblaccount WHERE `email`='$email'";
      //echo $sql_u;exit;
      $res_u = mysqli_query($con, $sql_u);
      $res_e = mysqli_query($con, $sql_e);

      if (mysqli_num_rows($res_u) > 0) {
        echo '<meta http-equiv="refresh" content="0;url=../login_register.php?usererror" />'; 
      }else if(mysqli_num_rows($res_e) > 0){
        echo '<meta http-equiv="refresh" content="0;url=../login_register.php?emailerror" />'; 
      }
    }
    ?>