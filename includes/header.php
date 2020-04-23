<?php
ob_start();
session_start();
$username='';
if (isset($_SESSION['username'])&& $_SESSION['username']!=""){
$username=$_SESSION['username'];
$userid = $_SESSION['uid'];}
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php include "includes/db.php";?> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Everest View Event Tickets</title>
    <!--  
    Favicons
    =============================================
    -->

    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Everest View Event Booking</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a  href="index.php" style="font-size:13px;">Home</a>
              </li>
              
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" style="font-size:13px;">Events</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a href="past.php" style="font-size:13px;">Past Events</a>
                  </li>
                  <li class="dropdown"><a href="upcoming.php" style="font-size:13px;">Upcoming</a>
                  </li>
                  <li class="dropdown"><a href="all.php" style="font-size:13px;">All Events</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="contact.php" style="font-size:13px;">Contact</a>
              </li>
              <li class="dropdown"><a href="about.php" style="font-size:13px;">About us</a>
              </li>
              <?php if($username!='')
              {?>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" style="font-size:13px;"><?php echo "<span class='fa fa-user'></span> ".ucfirst($username);?></a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a href="php/logout.php" style="font-size:13px;">Logout</a>
                  </li>
                </ul>
              </li>
              <?php
              }else{?>
               <li class="dropdown"><a href="login_register.php" style="font-size:13px;letter-spacing: 3px;">Login</a>
               </li>
                <?php }?>
              <li class="dropdown"><a href="checkout.php" style="font-size:13px;"><span class="icon-basket"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>