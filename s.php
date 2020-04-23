<?php include "includes/header.php";
      $id=$_GET['id'];
      $sql=mysqli_query($con,"SELECT * FROM tblpost WHERE post_Id=$id;");
      $r=mysqli_fetch_assoc($sql);
      extract($r);
      $curdate=date('Y-m-d');
      ?>
      
      <div class="main">
        <section style="padding-top:85px;" class="module mtop">
          <div class="container">
            <div class="row">
            <div class="font-alt menu-title container" style="position:absolute;z-index:999999;margin-top:-48px;background:aliceblue;"><a style="" href="index.php">Home</a> › <?php if($curdate>$date){echo "<a href='past.php'>Past</a> › ";}else{echo "<a href='upcoming.php'>upcoming</a> › ";}echo $title;?>
            </div>
              <div class="col-sm-6 mb-sm-40"><img src="assets/uploads/<?php echo $filename;?>" alt="Event"/>
               
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="product-title font-alt"><?php echo $title;?></h1>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="price font-alt">PRICE <span class="fa fa-shopping-cart"></span> <span class="amount"><?php if($curdate<$date){echo "AUD ".$price;}else{echo "<strike>AUD ".$price."</strike>";}?></span></div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="description">
                      <p><?php //echo $content;?></p>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                 <?php if($curdate<$date){?>
                  <div class="col-sm-4 mb-sm-20">
                    <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required"/>
                  </div>                 
                  <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">Add To Cart</a></div>
                  <div class="font-alt pull-right"><p style="margin-right:13px;margin-bottom:0px;font-weight:bold;">or <span class="fa fa-phone"></span> call 1300 886 761 </p></div><div class="clearfix" style="clear:both;"></div>
                  <?php }else{
                   echo '<div class="col-sm-4 mb-sm-20">
                    <input disabled class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required"/>
                  </div>    <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">No longer available</a></div>';
                    }?>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                  <?php if($curdate<$date){?>
                    <div class="product_meta" style="margin-top:-30px;"><?php }else{
                      echo '<div class="product_meta">';}?>Categories: <i><a href="#"><?php echo $cat_id;?></a></i>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-70">
              <div class="col-sm-12 des">
                <ul class="nav nav-tabs font-alt" role="tablist">
                  <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Description</a></li>
                  <!-- <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews (number)</a></li> -->
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <p><?php echo $content;?></p>
                    <?php if(!empty($organizer)){?><p class="price font-alt">Organizer: <?php echo $organizer;?></p><?php }?>
                    <?php if(!empty($venue)){?><p class="price font-alt">Venue: <?php echo $venue;?></p><?php }?>
                    <?php if(!empty($date)){
                      $newDate = date("d-M-Y", strtotime($date));
                      ?>
                    <p class="price font-alt">Date: <?php echo $newDate; echo "&nbsp;&nbsp;<b>".$time."</b>";?></p><?php }?>
                    <?php if(!empty($phone)){?><p class="price font-alt">Phone: <?php echo $phone;?></p><?php }?>
                    <?php if(!empty($website)){?><p class="price font-alt">Website: <?php echo $website;?></p><?php }?>
                  </div>
      
                  <div class="tab-pane" id="reviews">
                    <div class="comments reviews">

                      <div class="comment clearfix">
                        <div class="comment-avatar"><img src="" alt="avatar"/></div>
                        <div class="comment-content clearfix">
                          <div class="comment-author font-alt"><a href="#">Name</a></div>
                          <div class="comment-body">
                            <p>Comment.</p>
                          </div>
                          <div class="comment-meta font-alt">Time
                          </div>
                        </div>
                      </div>
                    
                    </div>

                    <div class="comment-form mt-30">
                      <h4 class="comment-form-title font-alt">Add review</h4>
                      <form method="post">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label class="sr-only" for="name">Name</label>
                              <input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label class="sr-only" for="email">Email</label>
                              <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                            </div>
                          </div>
                          <!-- <div class="col-sm-4">
                            <div class="form-group">
                              <select class="form-control">
                                <option selected="true" disabled="">Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div> -->
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control" id="" name="" rows="4" placeholder="Review"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <button class="btn btn-round btn-d" type="submit">Submit Review</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Other Events<hr style="border: 0;width:50%;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));"></h2>
              </div>
            </div>
            <div class="row multi-columns-row">
              
              <?php  $sql=mysqli_query($con,"SELECT * FROM tblpost ORDER BY RAND() LIMIT 4;");
                  while($r=mysqli_fetch_assoc($sql)){
                  extract($r);?>
                  <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/uploads/<?php echo $filename;?>" alt="" style="min-height:184px;"/>
                  <?php if($curdate<$date){?>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div><?php }?>
                  </div>

                  <h4 class="shop-item-title font-alt"><a href="s.php?id=<?php echo $post_Id;?>"><?php echo $title;?></a></h4><b><?php if($curdate<$date){echo "<span class=\"fa fa-shopping-cart\"></span> AUD ".$price;}else{echo "<span class=\"fa fa-shopping-cart\"></span><strike> AUD ".$price."</strike>";}?></b>
                </div>  </div>
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