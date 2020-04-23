<?php include "includes/header.php";?> 


<div class="main">
  <section class="module bg-dark-30 mtop" data-background="assets/images/section-4.jpg" style="min-height:400px !important;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Forgot Password?</h1>
        </div>
      </div>
    </div>
  </section>

  <?php            if(isset($_GET['wrong']))
  {
    $result= '';
    $result .= '<center><div class="alert alert-danger alert-dismissible" role="alert" style="width:430px;font-weight:bold;">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Please enter your correct login credentials.';
    $result .= '</div></center>';

    echo $result;
  }

  if(isset($_GET['success']))
  {
    $result= '';
    $result .= '<center><div class="alert alert-success alert-dismissible" role="alert" style="width:630px;font-weight:bold;">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Your login credential has been successfully sent to given email address.';
    $result .= '</div></center>';

    echo $result;
  }?>

  <section class="module">

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-sm-offset-1 mb-sm-40">
          <h4 class="font-alt">Forgot password</h4>
          <hr class="divider-w mb-10">
          <form class="form" action="forgot.php?email" method="POST">
            <div class="form-group">
              <input class="form-control" required id="username" type="text" name="username" placeholder="Username" style="width:50%" />
            </div>
            <div class="form-group">
              <input class="form-control" required id="email" type="email" name="email" placeholder="Email" style="width:50%" />
            </div>
            <div class="form-group">
              <button class="btn btn-round btn-b">submit</button>
            </div>
          </form>   
        </div>
      </div>
    </div>
  </section>
  <br>
  <?php 

  if(isset($_GET['email']))
  {
    extract($_POST); 

    $username = strtolower(str_replace("'","`",$username)); 
    $username = mysqli_real_escape_string($con,$username);


    $a = mysqli_query($con,"SELECT * FROM `tblaccount` WHERE `username` = '$username' AND `email`='$email'");
    $aa = mysqli_fetch_array($a);
    $aaa = $aa['uid'];
    if(mysqli_num_rows($a)==0)
    {
      $semi_rand = md5(time()); 
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
      $headers = "From: info@everestviewtravels.com.au\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $to =$email;
      $subject= "Forgot Password";
      $message= "<html><body>Dear $username!!! <p>Your login credentials are:</p>
      <p>Username:<b> $username</b><br>
        Email:<b> $email</b><br>
        Password:<b> $forgot</b></p>

        <p>Regards,<br>
          Team Everest View</p></body></html>";

          mail($to,$subject,$message,$headers);


          echo '<script language="javascript">';
                                    //echo 'alert("Successfully Registered. Please login with your details.")';
          echo '</script>';
          echo '<meta http-equiv="refresh" content="0;url=forgot.php?success" />';



        }else{
          $sql_u="SELECT * FROM tblaccount WHERE `username`='$username' AND `email`='$email'";
      //echo $sql_u;exit;
          $res_u = mysqli_query($con, $sql_u);

          if (mysqli_num_rows($res_u) == 0) {
            echo '<meta http-equiv="refresh" content="0;url=forgot.php?error" />'; 
          }
        }
      }



      ?>

      <?php include "includes/footer.php";?>       
    </div>

    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>

    <!--  
    JavaScripts
    =============================================
  -->

  <script src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="assets/lib/wow/dist/wow.js"></script>
  <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
  <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
  <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
  <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
  <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="assets/lib/smoothscroll.js"></script>
  <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
  <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
 console.log("document is ready");


 jQuery('.btn[href^=#]').click(function(e){
  e.preventDefault();
  var href = jQuery(this).attr('href');
  jQuery(href).modal('toggle');
});
</script>


});  
</body>
</html>