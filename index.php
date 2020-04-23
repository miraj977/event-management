<?php include "includes/header.php";?>

      <section class="home-section home-parallax home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
          <?php $sql=mysqli_query($con,"SELECT * FROM banner;");
          $run=mysqli_fetch_assoc($sql);
          extract($run);
          ?>
            <li class="bg-dark-30 bg-dark" style="background-image:url(<?php echo $filepath.$filename;?>);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
                  <div class="font-alt mb-40 titan-title-size-4" style="letter-spacing:12px !important;">We are coming soon</div>
                  <!-- <div class="font-alt mb-40 titan-title-size-4"></div><a class="section-scroll btn btn-border-w btn-round" href="#about">View Detail</a> -->
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="main">
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest Events<hr style="border: 0;width:50%;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));"></h2>
              </div>
            </div>

            <div class="row multi-columns-row">
            <form id="shop" method="post" action="cart.php">
            <?php
            $sql=mysqli_query($con,"SELECT * FROM tblpost ORDER BY post_Id DESC LIMIT 8;");
            $curdate=date('Y-m-d');
            while($query=mysqli_fetch_assoc($sql)){
            extract($query);
            ?>
            <input type="hidden" value="<?php echo $post_Id;?>" name="id">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo "assets/uploads/".$filename;?>" alt="" style="min-height: 174.5px;"/>
                  <?php if($date>$curdate){?>
                    <div class="shop-item-detail"><button class="btn btn-round btn-b" form="shop" type="submit"><span class="icon-basket">Add To Cart</span></button></div>
                  <?php }?>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="s.php?id=<?php echo $post_Id;?>"><?php echo $title;?></a></h4><span class="fa fa-shopping-cart"></span>&nbsp; <b><?php if($curdate<$date){echo "AUD ".$price;}else{echo "<strike>AUD ".$price."</strike>";}?></b>
                </div>
              </div><?php }?>
            </form>
            </div>

            <div class="row ">
              <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="all.php">See all Events</a></div>
            </div>
          </div>
        </section><br>
        <section class="module" id="menu" style="background:ghostwhite;padding:45px 0px !important;">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h4 style="padding-bottom:0px;margin-right:-8px;">~</h4><h5 class="font-serif">Most popular events</h5><h4 style="padding-bottom:0px;margin-left:-5px;">~</h4><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Featured Events<hr style="border: 0;width:50%;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));"></h2>
              </div>
            </div>
            <div class="row multi-columns-row">
            <?php
            $sql=mysqli_query($con,"SELECT * FROM tblpost WHERE featured=1 ORDER BY post_Id DESC LIMIT 10;");
            while($feat=mysqli_fetch_assoc($sql)){
            extract($feat);
            ?>
              <div class="col-sm-6">
                <div class="menu" style="background-color: #212122;padding:18px;border-bottom-left-radius:15px;border-top-right-radius: 15px;">
                  <div class="row"><a class="anc" href="s.php?id=<?php echo $post_Id;?>">
                    <div class="col-sm-8">

                      <h4 class="menu-title font-alt" style="color:white;"><?php echo $title;?></h4>
                      <p class="font-alt bty" style="padding-top:0px;padding-bottom:0px;margin-bottom:0px;">Brought to you by<div class="menu-detail font-serif" style="color:white;"> <?php echo $organizer;?></div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-title font-alt" style="color:white;"><span class="fa fa-shopping-cart"> </span><?php if($curdate<$date){echo "AUD ".$price;}else{echo "<strike>AUD ".$price."</strike>";}?></h4>
                    </div></a>
                  </div>
                </div>
              </div>
              <?php }?><br>
              </div>
            </div>
            <!-- <div class="text-center"><a class="btn btn-border-d mt-50" href="upcoming">Check out all our events</a></div> -->
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
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
