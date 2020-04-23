<?php include "includes/header.php";?> 

<div class="main">
   <div class="mapouter"><div class="gmap_canvas"><a href="https://www.pureblack.de/google-maps/"></a><iframe width="100%" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=everest view melbourne&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{overflow:hidden;height:100%;width:100%;min-height: 400px;;}.gmap_canvas {background:none!important;height:100%;width:100%;min-height: 400px;}</style></div>
   
  <?php if(isset($_GET['success']))
  {
    $result= '';
    $result .= '<center><div class="alert alert-success alert-dismissible" role="alert" style="width:260px;font-weight:bold;">';
    $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $result .= 'Thank You! We will be in touch';
    $result .= '</div></center>';

    echo $result;
  }?>
  <section class="module" style="padding-top:10px !important;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h4 class="font-alt">Get in touch</h4><br/>
          <form id="contactForm" role="form" method="post" action="php/contact.php">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
              <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
            </div>
          </form>
          <div class="ajax-response font-alt" id="contactFormResponse"></div>
        </div>
        <div class="col-sm-6">
          <h4 class="font-alt">Additional info</h4>
          <p>Our service is available after office hours as well. We are dedicated to provide exceptional service to our clients. Feel free to contact us by phone or email at any time.</p>
          <hr/>
          <h4 class="font-alt">Business Hours</h4>
          <ul class="list-unstyled">
            <li class="font-alt">Mo-Fr: 9am to 5pm &amp; Sa-Su: On-call</li>
            <li class="font-alt"></li>
          </ul>
        </div>
      </div>
    </div>
  </section><br>
  
      
   
  
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
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    //<script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>