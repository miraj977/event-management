<?php include "includes/header.php";?>       
      <div class="main">
        <section style="padding-top:110px;" class="module bg-dark-60 shop-page-header" data-background="assets/bg.png">
        <div class="font-alt menu-title container" style="position:absolute;color:white;z-index:999999;margin-top:-78px;"><a style="color:white;" href="index.php">Home</a> › All events
        </div>
          <div class="container">
            <div class="row">

              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">All Events</h2>
              </div>
            </div>
          </div>
        </section>
        
        <section class="module-small">
          <div class="container">
            <div class="row multi-columns-row">
            <?php $sql=mysqli_query($con,"SELECT * FROM tblpost ORDER BY post_Id DESC;");
            while($s=mysqli_fetch_assoc($sql))
              { extract($s);?>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                <?php if(!empty($date)){
                  $curdate=date('Y-m-d');
                      $newDate = date("d-M-Y", strtotime($date));?>
                      <p class="font-alt" style="background-color:aliceblue"><?php echo $newDate;?></p><?php }?>
                  <div class="shop-item-image"><img src="assets/uploads/<?php echo $filename;?>" alt=""  style="min-height:240px;"/>
                  <?php if($curdate<$date){?>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div><?php }?>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="s.php?id=<?php echo $post_Id;?>"><?php echo $title;?></a></h4><span class="fa fa-shopping-cart"></span> <?php if($curdate<$date){echo "AUD ".$price;}else{echo "<strike>AUD ".$price."</strike>";}?>
                </div>               
              </div>
            <?php } 
            if(mysqli_num_rows($sql)==0)
                {?>
                  <div class="col-md-12">
                  <h2 class="module-title font-alt">No Events</h2>
                  </div>
                <?php }?>
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