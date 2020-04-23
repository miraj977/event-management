<?php include "includes/header.php";?> 

      
      <div class="main">
        <section class="module bg-dark-30 mtop" data-background="assets/images/section-4.jpg" style="min-height:400px !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Login-Register</h1>
              </div>
            </div>
          </div>
        </section>
       
        <?php 
        
  if(isset($_GET['usererror']))
  {
    $result= '';
    $result .= '<center><div class="alert alert-danger alert-dismissible" role="alert" style="width:414px;font-weight:bold;">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Username already taken. Please try another username.';
    $result .= '</div></center>';

    echo $result;
  } 

  if(isset($_GET['emailerror']))
  {
    $result= '';
    $result .= '<center><div class="alert alert-danger alert-dismissible" role="alert" style="width:430px;font-weight:bold;">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Email already registered. Please try another one.';
    $result .= '</div></center>';

    echo $result;
  }

  if(isset($_GET['wrong']))
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
    $result .= '<center><div class="alert alert-success alert-dismissible" role="alert" style="width:430px;font-weight:bold;">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Thank You!! for registering to our booking system.';
    $result .= '</div></center>';

    echo $result;
  }?>

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt">Login</h4>
                <hr class="divider-w mb-10">
                <form class="form" action="php/login.php" method="POST">
                  <div class="form-group">
                    <input class="form-control" required id="username" type="text" name="username" placeholder="Username"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" required id="password" type="password" name="password" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-round btn-b">Login</button>
                  </div>
                  <div class="form-group"><a href="includes/function.php" >Forgot Password?</a></div>
                </form>   
              </div>

              <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">
                <form class="form" action="php/register.php" method="POST">
                  <div class="form-group">
                    <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email" required name="email"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="re-password" type="password" name="repassword" placeholder="Re-enter Password" required/>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-round btn-b">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <br>
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

});  
  </body>
</html>