<?php include "header.php";?>
<div class="container" style="margin:8% auto;width:900px;">

 <h2> Topics Posted</h2>

 <hr>
 <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Topic Details</h3>

  </div> 
  <div class="panel-body">

<?php 
    if(isset($_GET['post_Id'])){
     $id = $_GET['post_Id'];
     $sql = "SELECT * FROM tblpost WHERE post_Id='$id'";
     $run = mysqli_query($con,$sql);

     while($row=mysqli_fetch_array($run))
     {
      $id = $row['post_Id'];
      
      $title =  mysqli_real_escape_string($con,$row['title']);
      $content = mysqli_real_escape_string($con,$row['content']);
      $category= mysqli_real_escape_string($con,$row['cat_id']);
      $date =mysqli_real_escape_string($con,$row['date']);
      $time =mysqli_real_escape_string($con,$row['time']);
      $featured =mysqli_real_escape_string($con,$row['featured']);
      $organizer =$row['organizer'];
      $email =$row['email'];
      $phone =$row['phone'];
      $website =$row['website']; 
      $price =$row['price']; 
      $venue =$row['venue'];  
      $lon =$row['lon']; 
      $lat =$row['lat']; 
?>
      <form method="POST"  action="edit-topic.php?edit=<?php echo $id;?>" enctype="multipart/form-data">
    <input type="hidden" name="post_Id" value="<?php echo $id;?>">
     <label>Event Title</label>
     <input type="text" readonly class="form-control" name="title"required value="<?php echo $title?>"><br>
     <label>Organizer Name</label>
     <input type="text" readonly name="organizer" value="<?php echo $organizer?>" class="form-control" required><br>
     <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Email</label>&nbsp;&nbsp;&nbsp;
      <input type="email" readonly class="form-control" value="<?php echo $email?>" name="email" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Phone</label>&nbsp;&nbsp;&nbsp;
      <input type="text" readonly class="form-control"  value="<?php echo $phone?>" name="phone" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Website</label>&nbsp;&nbsp;&nbsp;
      <input type="text" readonly class="form-control" value="<?php echo $website?>" name="website" style="width:25%;">
      </div><br><br><br>
     <label>Content</label>
     <textarea readonly name="content"class="form-control" rows="8" required><?php echo $content?></textarea><br>
      <div class="checkbox" style="padding-left:0px;">
      <label style="padding-left:0px;"><b>Featured</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php if($featured=1)
      {?>
      <input type="checkbox" checked name="featured" value="1"><br>
      <?php }else{?>
      <input type="checkbox" name="featured" value="1"><br>
      <?php }?></div>
      <br>
      <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Category</label>&nbsp;
      <input type="text" readonly value="<?php echo $category?>" placeholder="Music, Festival, Meetup,..." class="form-control" name="category" style="width:100%;">&nbsp;&nbsp;&nbsp;

      <label style="padding-top:6px;">Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" readonly value="<?php echo $date?>" placeholder="1 Jan" class="form-control" name="date" style="width:25%;">&nbsp;&nbsp;&nbsp;
      
      <label style="padding-top:6px;">Time</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" readonly value="<?php echo $time?>" placeholder="12:00 am" class="form-control" name="time" style="width:25%;">
      </div><br><br><br>
      <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Venue</label>&nbsp;&nbsp;&nbsp;
      <input type="text" readonly value="<?php echo $venue?>" class="form-control" name="venue" style="width:25%;" required>&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Latitude</label>&nbsp;&nbsp;&nbsp;
      <input type="text" readonly value="<?php echo $lat?>" placeholder="Optional" class="form-control" name="lat" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Longitude</label>&nbsp;&nbsp;&nbsp;
      <input type="text" readonly value="<?php echo $lon?>" placeholder="Optional" class="form-control" name="lon" style="width:25%;">
      </div><br><br>
      <label style="padding-top:6px;">Price</label>&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $price?>" placeholder="AUD" class="form-control" name="price" style="width:15%;" readonly><br>
      
<!--       <a style="cursor:pointer;text-decoration:none;" id='extraUpload'>Add more</a>
 -->      
    </form>
   <?php }
  }?>
     <center><a href="#"  onclick="javascript:history.go(-1);"><button class="btn btn-danger">Back</button></a></center><br>
   </div>
 </div>
</body>
<script type="text/javascript">
  function del(id)
  {
    var c=confirm("Are you sure?");
    if(c==true){
      $.ajax({
        type:"POST",
        url: "../functions/addcomment.php",
        data: 'id=' + id,
        success: function(result){
          location.reload();
          //alert(id);
        }
      });
    }}
  </script>
  </html>