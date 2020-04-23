<?php include "includes/header.php";?> 
      <?php include "includes/db.php";
      $sql=mysqli_query($con,"SELECT * FROM about;");
      $s=mysqli_fetch_assoc($sql);
      extract($s);
      ?>      
      <div class="main" style="margin-top:-50px;">

        <section style="padding-top:110px;" class="module module-video bg-dark-30" data-background="assets/images/section-12.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-12" style="margin-bottom:-50px;">
                <h2 class="module-title font-alt align-left" style="padding-top:17px;">Our office</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <p class="font-serif"><?php echo $about1;?></p>
                <p class="font-serif"><?php echo $about2;?></p>
              </div>
              <div class="col-sm-3">
                <p class="font-serif"><?php echo $about3;?></p>
              </div>
            </div>
          </div>
          <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=tOdAD31D69k', containment:'.module-video', startAt:0, stopAt:130,mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
          <div class="video-controls-box">
            <div class="container">
              <!-- <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a> </div>-->
            </div>
          </div>
        </section>

        <hr class="divider-w">
        <section class="module" id="team" style="padding:30px 0px !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Meet Our Team</h2>
                <div class="module-subtitle font-serif"><?php echo $meet;?></div>
              </div>
            </div>
            <div class="row">
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/demo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hi all</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Ramjee Poudel</div>
                    <div class="team-role">Position</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/demo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Good day</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Anusandhan Adhikari</div>
                    <div class="team-role">Business Strategy Analyst</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/demo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hello</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Shree Thapa</div>
                    <div class="team-role">Position</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/demo.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Yes, it's me</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Someone</div>
                    <div class="team-role">Position</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr>
        <section class="module" id="alt-features" style="padding:30px 0px !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Why us?</h2>
                <div class="module-subtitle font-serif"><?php echo $whyus;?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                <div class="alt-services-image align-center"><img src="assets/images/promo.png" alt="Feature Image"></div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="fa fa-plane"></span></div>
                  <h3 class="alt-features-title font-alt">Travel</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-pricetags"></span></div>
                  <h3 class="alt-features-title font-alt">Ticket</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-shield"></span></div>
                  <h3 class="alt-features-title font-alt">Insurance</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-briefcase"></span></div>
                  <h3 class="alt-features-title font-alt">Corporate</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
              <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-camera"></span></div>
                  <h3 class="alt-features-title font-alt">Photography</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                  <h3 class="alt-features-title font-alt">Mobile</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                  <h3 class="alt-features-title font-alt">Music</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-basket"></span></div>
                  <h3 class="alt-features-title font-alt">Shop</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div></div> -->
            </div>
          </div>
        </section>
          
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
  </body>
</html>